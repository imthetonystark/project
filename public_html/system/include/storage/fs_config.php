<?php
return array (
  'meta' => 
  array (
    'title' => 
    array (
      'type' => 'string',
      'length' => 127,
      'value' => '',
    ),
    'email' => 
    array (
      'type' => 'string',
      'length' => 127,
      'value' => '',
    ),
    'subject' => 
    array (
      'type' => 'string',
      'length' => 127,
      'value' => '',
    ),
    'from' => 
    array (
      'type' => 'string',
      'length' => 127,
      'value' => '',
    ),
    'template' => 
    array (
      'type' => 'string',
      'length' => 16383,
      'value' => '',
    ),
    'fields' => 
    array (
      'type' => 'array',
    ),
    'form_fields' => 
    array (
      'type' => 'string',
      'length' => 16383,
      'value' => '',
    ),
    'form_action' => 
    array (
      'type' => 'string',
      'length' => 2047,
      'value' => '',
    ),
    'selector' => 
    array (
      'type' => 'string',
      'length' => 1023,
      'value' => '',
    ),
    'msg_success' => 
    array (
      'type' => 'string',
      'length' => 127,
      'value' => '',
    ),
    'async_headers' => 
    array (
      'type' => 'array',
      'value' => 
      array (
      ),
    ),
    'async_response' => 
    array (
      'type' => 'string',
      'length' => 16383,
      'value' => '',
    ),
  ),
  'data' => 
  array (
    0 => 
    array (
      'title' => 'Новый обработчик',
      'email' => 'romzes2011@gmail.com',
      'subject' => 'Сообщение с сайта',
      'from' => 'romzes2011@gmail.com',
      'template' => 'Информация о заказе:
check: {check}
Введите Ваше имя: {name}
Введите Ваш телефон: {phone}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}

Время отправления: {__dolly_timestamp}
IP-адрес отправителя: {__dolly_ip}',
      'fields' => 
      array (
        0 => 
        array (
          0 => 'check',
          1 => 'check',
          2 => 
          array (
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'Введите Ваше имя',
          2 => 
          array (
          ),
        ),
        2 => 
        array (
          0 => 'phone',
          1 => 'Введите Ваш телефон',
          2 => 
          array (
            'type' => 'Tel',
          ),
        ),
        3 => 
        array (
          0 => 'si_engine',
          1 => 'si_engine',
          2 => 
          array (
          ),
        ),
        4 => 
        array (
          0 => 'si_utm',
          1 => 'si_utm',
          2 => 
          array (
          ),
        ),
      ),
      'form_fields' => '[{"node":"input","name":"check","type":"text"},{"node":"input","name":"name","type":"text"},{"node":"input","name":"phone","type":"tel"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"}]',
      'form_action' => 'feedback.php',
      'selector' => '',
      'msg_success' => 'Ваше сообщение отправлено.',
      'async_headers' => 
      array (
        0 => 'HTTP/1.1 200 OK',
        1 => 'Content-Type: text/html',
        2 => 'Content-Length: 13',
      ),
      'async_response' => '{"success":1}',
    ),
    1 => 
    array (
      'title' => 'Новый обработчик',
      'email' => 'romzes2011@gmail.com',
      'subject' => 'Сообщение с сайта',
      'from' => '',
      'template' => 'Информация о заказе:
check: {check}
Введите Ваше имя: {name}
Введите Ваш телефон: {phone}
Чем занимаетесь?: {message}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}

Время отправления: {__dolly_timestamp}
IP-адрес отправителя: {__dolly_ip}',
      'fields' => 
      array (
        0 => 
        array (
          0 => 'check',
          1 => 'check',
          2 => 
          array (
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'Введите Ваше имя',
          2 => 
          array (
          ),
        ),
        2 => 
        array (
          0 => 'phone',
          1 => 'Введите Ваш телефон',
          2 => 
          array (
            'type' => 'Tel',
          ),
        ),
        3 => 
        array (
          0 => 'message',
          1 => 'Чем занимаетесь?',
          2 => 
          array (
          ),
        ),
        4 => 
        array (
          0 => 'si_engine',
          1 => 'si_engine',
          2 => 
          array (
          ),
        ),
        5 => 
        array (
          0 => 'si_utm',
          1 => 'si_utm',
          2 => 
          array (
          ),
        ),
      ),
      'form_fields' => '[{"node":"input","name":"check","type":"text"},{"node":"input","name":"name","type":"text"},{"node":"input","name":"phone","type":"tel"},{"node":"textarea","name":"message"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"}]',
      'form_action' => 'feedback.php',
      'selector' => '',
      'msg_success' => 'Ваше сообщение отправлено.',
      'async_headers' => 
      array (
      ),
      'async_response' => '',
    ),
    2 => 
    array (
      'title' => 'Новый обработчик',
      'email' => 'romzes2011@gmail.com',
      'subject' => 'Сообщение с сайта',
      'from' => '',
      'template' => 'Информация о заказе:
check: {check}
Введите Ваше имя: {name}
Введите Ваш телефон: {phone}
Ваша сфера бизнеса?: {mail}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}

Время отправления: {__dolly_timestamp}
IP-адрес отправителя: {__dolly_ip}',
      'fields' => 
      array (
        0 => 
        array (
          0 => 'check',
          1 => 'check',
          2 => 
          array (
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'Введите Ваше имя',
          2 => 
          array (
          ),
        ),
        2 => 
        array (
          0 => 'phone',
          1 => 'Введите Ваш телефон',
          2 => 
          array (
            'type' => 'Tel',
          ),
        ),
        3 => 
        array (
          0 => 'mail',
          1 => 'Ваша сфера бизнеса?',
          2 => 
          array (
          ),
        ),
        4 => 
        array (
          0 => 'si_engine',
          1 => 'si_engine',
          2 => 
          array (
          ),
        ),
        5 => 
        array (
          0 => 'si_utm',
          1 => 'si_utm',
          2 => 
          array (
          ),
        ),
      ),
      'form_fields' => '[{"node":"input","name":"check","type":"text"},{"node":"input","name":"name","type":"text"},{"node":"input","name":"phone","type":"tel"},{"node":"input","name":"mail","type":"text"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"}]',
      'form_action' => 'feedback.php',
      'selector' => '',
      'msg_success' => 'Ваше сообщение отправлено.',
      'async_headers' => 
      array (
      ),
      'async_response' => '',
    ),
    3 => 
    array (
      'title' => 'Новый обработчик',
      'email' => 'romzes2011@gmail.com',
      'subject' => 'Сообщение с сайта',
      'from' => '',
      'template' => 'Информация о заказе:
check: {check}
Введите Ваше имя: {name}
Введите Ваш телефон: {phone}
Ваша сфера бизнеса?: {mail}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}

Время отправления: {__dolly_timestamp}
IP-адрес отправителя: {__dolly_ip}',
      'fields' => 
      array (
        0 => 
        array (
          0 => 'check',
          1 => 'check',
          2 => 
          array (
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'Введите Ваше имя',
          2 => 
          array (
          ),
        ),
        2 => 
        array (
          0 => 'phone',
          1 => 'Введите Ваш телефон',
          2 => 
          array (
            'type' => 'Tel',
          ),
        ),
        3 => 
        array (
          0 => 'mail',
          1 => 'Ваша сфера бизнеса?',
          2 => 
          array (
          ),
        ),
        4 => 
        array (
          0 => 'si_engine',
          1 => 'si_engine',
          2 => 
          array (
          ),
        ),
        5 => 
        array (
          0 => 'si_utm',
          1 => 'si_utm',
          2 => 
          array (
          ),
        ),
      ),
      'form_fields' => '[{"node":"input","name":"check","type":"text"},{"node":"input","name":"name","type":"text"},{"node":"input","name":"phone","type":"tel"},{"node":"input","name":"mail","type":"text"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"}]',
      'form_action' => 'feedback.php',
      'selector' => '',
      'msg_success' => 'Ваше сообщение отправлено.',
      'async_headers' => 
      array (
      ),
      'async_response' => '',
    ),
    4 => 
    array (
      'title' => 'Новый обработчик',
      'email' => 'romzes2011@gmail.com',
      'subject' => 'Сообщение с сайта',
      'from' => '',
      'template' => 'Информация о заказе:
check: {check}
Введите Ваше имя: {name}
Введите Ваш телефон: {phone}
Чем занимаетесь?: {message}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}

Время отправления: {__dolly_timestamp}
IP-адрес отправителя: {__dolly_ip}',
      'fields' => 
      array (
        0 => 
        array (
          0 => 'check',
          1 => 'check',
          2 => 
          array (
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'Введите Ваше имя',
          2 => 
          array (
          ),
        ),
        2 => 
        array (
          0 => 'phone',
          1 => 'Введите Ваш телефон',
          2 => 
          array (
            'type' => 'Tel',
          ),
        ),
        3 => 
        array (
          0 => 'message',
          1 => 'Чем занимаетесь?',
          2 => 
          array (
          ),
        ),
        4 => 
        array (
          0 => 'si_engine',
          1 => 'si_engine',
          2 => 
          array (
          ),
        ),
        5 => 
        array (
          0 => 'si_utm',
          1 => 'si_utm',
          2 => 
          array (
          ),
        ),
      ),
      'form_fields' => '[{"node":"input","name":"check","type":"text"},{"node":"input","name":"name","type":"text"},{"node":"input","name":"phone","type":"tel"},{"node":"textarea","name":"message"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"}]',
      'form_action' => 'feedback.php',
      'selector' => '',
      'msg_success' => 'Ваше сообщение отправлено.',
      'async_headers' => 
      array (
        0 => 'HTTP/1.1 200 OK',
        1 => 'Content-Type: text/html',
        2 => 'Content-Length: 13',
      ),
      'async_response' => '{"success":1}',
    ),
    5 => 
    array (
      'title' => 'Новый обработчик',
      'email' => 'romzes2011@gmail.com',
      'subject' => 'Сообщение с сайта 5media',
      'from' => '',
      'template' => 'Информация о заказе:
check: {check}
Введите Ваше имя: {name}
Введите Ваш телефон: {phone}
si_engine: {si_engine}
si_utm: {si_utm}
si_engine: {si_engine}
si_utm: {si_utm}

Время отправления: {__dolly_timestamp}
IP-адрес отправителя: {__dolly_ip}',
      'fields' => 
      array (
        0 => 
        array (
          0 => 'check',
          1 => 'check',
          2 => 
          array (
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 'Введите Ваше имя',
          2 => 
          array (
          ),
        ),
        2 => 
        array (
          0 => 'phone',
          1 => 'Введите Ваш телефон',
          2 => 
          array (
            'type' => 'Tel',
          ),
        ),
        3 => 
        array (
          0 => 'si_engine',
          1 => 'si_engine',
          2 => 
          array (
          ),
        ),
        4 => 
        array (
          0 => 'si_utm',
          1 => 'si_utm',
          2 => 
          array (
          ),
        ),
      ),
      'form_fields' => '[{"node":"input","name":"check","type":"text"},{"node":"input","name":"name","type":"text"},{"node":"input","name":"phone","type":"tel"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"},{"node":"textarea","name":"si_engine"},{"node":"textarea","name":"si_utm"}]',
      'form_action' => 'feedback.php',
      'selector' => '',
      'msg_success' => 'Ваше сообщение отправлено.',
      'async_headers' => 
      array (
        0 => 'HTTP/1.1 200 OK',
        1 => 'Content-Type: text/html',
        2 => 'Content-Length: 13',
      ),
      'async_response' => '{"success":1}',
    ),
  ),
  'keys' => 
  array (
  ),
);
?>