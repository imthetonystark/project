
$(document).mouseleave(function(e){
    if (e.clientY < 10) {
        $(".exitblock").fadeIn("fast");
    }    
});
$(document).click(function(e) {
    if (($(".exitblock").is(':visible')) && (!$(e.target).closest(".exitblock .modaltext").length)) {
        $(".exitblock").remove();
    }
});





// Check mobiles
function is_mobile() {return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));}

jQuery(function($) {
	$('#checkbt').hide();
	// VK Target
	$('a.vk').click(function(){
		yaCounter47615365.reachGoal('vk');
	});
	
	// AJAX load
	// $('.privacy-modal').load('/privacy.php');
	// $('#portfolio').load('/portfolio.php');
	
	// Preload images
	$.fn.preload = function() {this.each(function(){$('<img/>')[0].src = this;});}
	$(['images/modal-bg.png','images/success-bg.png']).preload();
	
	
	// Mobile full-width && disable animation
	if(is_mobile()) {
		
		$('html').css('width', window.innerWidth + 'px');
		
		$('.cre-animate').css({'visibility' : 'visible', 'top' : 0, 'left' : 0, 'transform': 'none', '-webkit-transform': 'none', '-moz-transform': 'none', '-ms-transform': 'none', '-o-transform': 'none', 'scale' : 1, 'opacity' : 1}).removeClass('.cre-animate');
		
	}
	
	
	// Line feature
	$('.line-feature').bind('mouseover touchstart', function() {
	
		var state = $(this).data('state') || 0;
		
		switch (state) {
		
			case 0:
				$(this).addClass('state-1');$(this).data('state', 1);
				break;
			case 1:
				$(this).removeClass('state-1'); $(this).addClass('state-2');$(this).data('state', 2);
				break;
			case 2:
				$(this).removeClass('state-2');$(this).addClass('state-3');$(this).data('state', 3);
				break;
			case 3:
				$(this).removeClass('state-3');$(this).addClass('state-4');$(this).data('state', 4);
				break;
			case 4:
				$(this).removeClass('state-4');$(this).addClass('state-5');$(this).data('state', 5);
				break;
			case 5:
			
				if ($(this).hasClass('f-404')) {
				
					$(this).removeClass('state-5');
					$(this).data('state', 1);
					break;
					
				}
			
				$(this).removeClass('state-5');$(this).addClass('state-6');$(this).html('<span class="eyes"></span>');
				
				if ($(this).parents('.page-form').size() == 0 && $(this).parents('.si-modal').size() == 0) 
					$(this).addClass('pulse-grow active');
				
				$(this).data('state', 6);
				break;
			case 6:
				return false;
				break;
		
		}
	
	});
	
	
	// Portfolio extra count + slidedown extra
		
		// Count
		$(window).load(function() {
			extra_counter = $('.extra-portfolio').find('.portfolio-item').size();
			$('.see-more-works a span').text(extra_counter);
		})
			
		// Show extra
			$(document).on('click', '.see-more-works a', function() {
				$(this).parent().remove();
				$('.extra-portfolio').slideDown(500);
				return false;
			});
		
		
	// Reviews glasses + slidedown extra + reviews counter
	
		// Glasses
		$('.reviews-glasses').bind('mouseover touchstart', function(){
			if ($('.reviews-eyes').is(':hidden')) {
				$('.reviews-eyes').show().addClass('pulse-grow active');
			}
		})
	
		// Count
			extra_counter = $('.extra-reviews').find('.review-item').size();
			$('.see-more-reviews a span').text(extra_counter);
			
		// Show extra
			$('.see-more-reviews a').click(function() {
				$(this).parent().remove();
				$('.extra-reviews').slideDown(500);
				return false;
			});


	// Modal photos
	$('a[data-rel]').each(function() {$(this).attr('rel', $(this).data('rel'));});
	
	if (!is_mobile()) {
		$('a[rel^=fancybox]').fancybox({width: '90%',height: '90%',autoSize: false, arrows : false});
	}else{
		$('a[rel^=fancybox]').attr('target', '_blank');
	}
		
		
	// Mask phone
	$('.client-phone').mask('8 (999) 999-99-99');
	
	
	// IE placeholders
	$('input[placeholder], textarea[placeholder]').placeholder();
	
	
	
	// Modals
	
		// Phone modal
		$('.open-phone-modal').click(function() {
			$('html').addClass('si-lock');
			$('.si-overlay').css({width : $(document).width(), height : $(document).height()});
			$('.si-overlay, .si-modals-wrapper, .phone-modal').fadeIn(700);
			$('.phone-modal .send-extra').val($(this).data('extra'));
			return false;
		});
			
		// Offer modal
		$(document).on('click', '.open-offer-modal', function() {
			$('html').addClass('si-lock');
			$('.si-overlay').css({width : $(document).width(), height : $(document).height()});
			$('.si-overlay, .si-modals-wrapper, .offer-modal').fadeIn(700);
			$('.offer-modal .send-extra').val($(this).data('extra'));
			return false;
		});
					
		// Order modal
		$('.open-order-modal').click(function() {
			$('html').addClass('si-lock');
			$('.si-overlay').css({width : $(document).width(), height : $(document).height()});
			$('.si-overlay, .si-modals-wrapper, .order-modal').fadeIn(700);
			$('.order-modal .send-extra').val($(this).data('extra'));
			return false;
		});
							
		// Order modal
		$('.open-privacy-modal').click(function() {
			$('html').addClass('si-lock');
			$('.si-overlay').css({width : $(document).width(), height : $(document).height()});
			$('.si-overlay, .si-modals-wrapper, .privacy-modal').fadeIn(700);
			return false;
		});
		
			
			// Modal controls
			
			$('.si-close').click(function() {
				
				$('.si-overlay').fadeOut(700);
				$('.si-modals-wrapper').fadeOut(700);
				$('.si-modal').fadeOut(700);
				$('.si-success-modal').fadeOut(700);
				$('html').removeClass('si-lock');

				return false;
				
			})
				
			$('.si-modals-wrapper').click(function(e) {
				
				if (e.target == this) {
					
					$('.si-overlay').fadeOut(700);
					$('.si-modals-wrapper').fadeOut(700);
					$('.si-modal').fadeOut(700);
					$('.si-success-modal').fadeOut(700);
					$('html').removeClass('si-lock');
				
					return false;
				
				}

			})
		
	$('.send-form').submit(function() {
		
		var name = $(this).find('.client-name');
		var mail = $(this).find('.client-mail');
		var phone = $(this).find('.client-phone');
		var mess = $(this).find('.client-message');
		
		send = 1;
		
		if (name.val() == '') {
			name.si_show_message('Укажите Ваше имя');
			send = 0;
		}
				
		if (phone.size() > 0 && phone.val() == '') {
			phone.si_show_message('Укажите Ваш телефон');
			send = 0;
		}
						
		if (mail.size() > 0 && mail.val() == '') {
			mail.si_show_message('Укажите Ваш E-mail');
			send = 0;
		}
								
		if (mess.size() > 0 && mess.val() == '') {
			mess.si_show_message('Укажите Ваше сообщение');
			send = 0;
		}
		
		if (send == 0) 
			return false;

		$.post($(this).prop('action'), $(this).serialize(), function(res) {
		
			if (res.success == 1) {
	
				$('.si-modal').fadeOut(500);
				
				setTimeout(function() {
				
					$('.si-modals-wrapper, .si-success-modal').fadeIn(500);
					$('.si-overlay').css({'height': $(document).height(), 'width' : $(document).width()}).fadeIn(500);
				
				},510)

				
				name.val('');
				if (phone.size() > 0) phone.val('');
				if (mail.size() > 0) mail.val('');
				if (mess.size() > 0) mess.val('');
				
				yaCounter47615365.reachGoal('target' + res.id);
				
				/*
				
					switch (res.id) {
					
						case 1: ga('send', 'event', '', ''); break;
					
					}
					
				*/
				
			}else{
				alert(res.text);
			}

		}, 'json');
		
		return false;
	
	})	
	
})

function hide() {
    $(".popup").fadeOut(300);
    $(".iframe").fadeOut(300);
    $(".overlay").fadeOut(300);
    $(".overlay2").fadeOut(300);
    $(".iframecon").empty();
    $(".otpr").fadeOut(300);
    $(".resultpop").fadeOut(300);
    $(".warning").hide();
    $(".popnew").hide();
    $(".overnew").hide();
    $(".goodform").hide();
    $(this).hide();
    $(".popdone").parent().parent().parent().removeClass('loadprepreview');
};

function item1() {
    $("#item1").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item1_iframe").html("<iframe src=http://dev.5-media.ru/motoblokus.by/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item2() {
    $("#item2").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item2_iframe").html("<iframe src=http://dev.5-media.ru/rosting.by/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item3() {
    $("#item3").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item3_iframe").html("<iframe src=http://dev.5-media.ru/pkby width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item4() {
    $("#item4").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item4_iframe").html("<iframe src=http://dev.5-media.ru/belkuxni.by width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item5() {
    $("#item5").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item5_iframe").html("<iframe src=http://avtovirag.by/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item6() {
    $("#item6").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item6_iframe").html("<iframe src=http://dev.5-media.ru/geotravel/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item7() {
    $("#item7").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item7_iframe").html("<iframe src=http://dev.5-media.ru/remontnoutbyk/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item8() {
    $("#item8").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item8_iframe").html("<iframe src=http://dev.5-media.ru/corpinnakameneva/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item9() {
    $("#item9").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item9_iframe").html("<iframe src=http://xn--80aakbdtukr9a.xn--p1ai/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item10() {
    $("#item10").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item10_iframe").html("<iframe src=http://dev.5-media.ru/capacity/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item11() {
    $("#item11").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item11_iframe").html("<iframe src=http://m-textil.ru/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item12() {
    $("#item12").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item12_iframe").html("<iframe src=http://www.fides.su/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item13() {
    $("#item13").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item13_iframe").html("<iframe src=http://dev.5-media.ru/stroy24/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item14() {
    $("#item14").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item14_iframe").html("<iframe src=http://termoderevo.by/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item15() {
    $("#item15").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item15_iframe").html("<iframe src=http://dev.5-media.ru/mleco.org/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};
function item16() {
    $("#item16").fadeIn(300);
    $(".overlay").fadeIn(300);
    $("#item16_iframe").html("<iframe src=http://dev.5-media.ru/banya/ width=100% height=100% bottom=50 frameborder=0></iframe>");
};




const scene = $('#scene').get(0);
const parallaxInstance = new Parallax(scene);

const eye = document.getElementsByClassName("line-feature")
  if (eye){
	  addEventListener(onclick())
  }