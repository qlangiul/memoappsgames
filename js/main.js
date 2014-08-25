var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
//captcha options
var RecaptchaOptions = {
	theme : 'white'
 };
 
$(document).ready(function(){
	$('.the-names').flexslider({
		controlNav: false,
		directionNav: false,
		slideshowSpeed: 5000
	});
	var now = new Date();
	$('.copy').prepend('&copy; ' +now.getUTCFullYear()+' ');
	
	var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	var ua = navigator.userAgent;
    function is_touch_device() { 
        try {  
            document.createEvent("TouchEvent");  
            return true;  
        } catch (e) {  
            return false;  
        }  
    }
	var device ={
		type : 'desktop'
	}
	if(isMobile.any() || (is_touch_device() && !is_firefox) ) {
		device.type='mobile';
	}else{
		device.type='desktop';
	}
	//console.log(device.type);
	$('body').on('click','.app-link', function(){
		if(device.type=='desktop'){
			var current_loc=window.location.href;
			var extended_loc=$(this).data('desktop');
			var hash = window.location.hash;
			if(hash!=""){
				window.location.hash=extended_loc;
			}else{
				window.location.href = current_loc+extended_loc;
			}
		}else if(device.type=='mobile'){
			var current_loc=window.location.origin;
			var extended_loc=$(this).data('mobile');
			console.log(current_loc);
			console.log(extended_loc);
			window.location.href= current_loc+extended_loc;
		}
	});

	$(document).keyup(function(e) {
		if (e.keyCode == 27) { // esc keycode
			$('.modalDialog').each(function(){
				if($(this).css("opacity")==1){
					window.location.hash='#close';
				}				
			});	
		}
	});
	
	$(document).on('click', function (e) {
		$('.modalDialog').each(function(){
			if($(this).css("opacity")==1){
				if ($(e.target).closest(".content").length === 0) {
					window.location.hash='#close';
				}
			}				
		});	
	});
});
$(window).load(function() {
  // The slider being synced must be initialized first
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false
  });
});
