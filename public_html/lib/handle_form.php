<?php
use \MaxieSystems as MS;
if(!empty($_POST))
 {
	require_once(MSSE_LIB_DIR.'/filesystemstorage.php');
	$conf = new MS\FileSystemStorageReadonly('storage/fs_config.php', ['root' => MSSE_INC_DIR]);
	if(count($conf))
	 {
		$indexes2string = function(array $array, Closure $callback, $prefix = '', $level = 0) use(&$indexes2string){
			foreach($array as $k => $v)
			 {
				$s = $prefix || $level ? $prefix."[$k]" : $k;
				if(is_array($v)) $indexes2string($v, $callback, $s, $level + 1);
				else $callback($s, $v, $level);
			 }
		};
		$is_file = function(array $fld){
			if(isset($fld[2]) && isset($fld[2]['type']) && 'File' === $fld[2]['type'] && isset($_FILES[$fld[0]])) return true;
		};
		$rows = [];
		$hits = [];
		$__post = null;
		foreach($conf as $k => $row)
		 {
			$row->id = $k;
			$row->hits = 0;
			foreach($row->fields as $fld)
			 {
				if($is_file($fld)) ++$row->hits;
				elseif(isset($_POST[$fld[0]])) ++$row->hits;
				elseif(null === $__post)
				 {
					$__post = [];
					$indexes2string($_POST, function($k, $v, $level) use(&$__post, &$fld, $row){
						if($level) $__post[$k] = $v;
						if($k === $fld[0]) ++$row->hits;
					});
				 }
				elseif(isset($__post[$fld[0]])) ++$row->hits;
			 }
			if($row->hits)
			 {
				$rows[$k] = $row;
				if(isset($hits[$row->hits])) ++$hits[$row->hits];
				else $hits[$row->hits] = 1;
			 }
		 }
		$row = false;
		if($n_rows = count($rows))
		 {
			if(1 === $n_rows)
			 {
				foreach($rows as $k => $row);
			 }
			else
			 {
				// if(1 === count($hits)) ;// это означает, что количество совпадений у всех обработчиков равно.
				$row = array_reduce($rows, function($carry, $item){
					if(null === $carry) return $item;
					elseif($carry->hits === $item->hits) return count($carry->fields) === $carry->hits ? $carry : $item;
					else return $carry->hits > $item->hits ? $carry : $item;
				});
			 }
		 }
		if($row)
		 {
			if($__post)
			 {
				$delete_indexes = function(array &$array, Closure $callback, $prefix = '', $level = 0) use(&$delete_indexes){
					foreach($array as $k => $v)
					 {
						$s = $prefix || $level ? $prefix."[$k]" : $k;
						if(is_array($v)) $delete_indexes($array[$k], $callback, $s, $level + 1);
						elseif(false === $callback($s, $v, $level)) unset($array[$k]);
					 }
				};
				$delete_indexes($_POST, function($s, $v, $level) use($__post){
					if($level && isset($__post[$s])) return false;
				});
			 }
			$fs_id = "fs_$row->id";
			foreach($row->fields as $k => $fld)
			 {
				$k0 = $fs_id.'_'.$k;
				if($is_file($fld))
				 {
					$_FILES[$k0] = $_FILES[$fld[0]];
				 }
				elseif(isset($_POST[$fld[0]]))
				 {
					$s = $_POST[$fld[0]];
					unset($_POST[$fld[0]]);
					$_POST[$k0] = $s;
				 }
				elseif(isset($__post[$fld[0]]))
				 {
					$_POST[$k0] = $__post[$fld[0]];
				 }
			 }
			$_REQUEST['__fs_id'] = $_POST['__fs_id'] = $fs_id;
			$_GET['__dolly_action'] = 'handle_form';
			require_once(MSSE_INC_DIR.'/actions.php');
		 }
	 }
 }
MS\HTTP::Redirect('/');
?>