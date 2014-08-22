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
	console.log(device.type);
});

$(window).load(function() {
  // The slider being synced must be initialized first
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false
  });
});