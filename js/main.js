var ie = (function(){

    var undef,
        v = 3,
        div = document.createElement('div'),
        all = div.getElementsByTagName('i');

    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
        all[0]
    );

    return v > 4 ? v : undef;

}());

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
	if(ie <= 8){
		$('.content_wrapper').empty();
		$('.content_wrapper').append('<h1 style="text-align:center;display:block">Please update your Internet Explorer</h1>');
		$('.content_wrapper').append('<h2 style="text-align:center">We no longer support Internet Explorer 8 or older</h2>');
	}
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
	$('body').on('click','.app-link', function(event){
		event.preventDefault();
		if(device.type=='desktop' && ie>8){
			var current_loc=window.location.href;
			var extended_loc=$(this).data('desktop');
			var hash = window.location.hash;
			if(hash!=""){
				window.location.hash=extended_loc;
			}else{
				window.location.href = current_loc+extended_loc;
			}
		}else if(device.type=='mobile' || ie<=8){
			if (!window.location.origin) {
			  window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port: '');
			}
			var current_loc=window.location.origin;
			var extended_loc=$(this).data('mobile');
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
