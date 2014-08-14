
 
$(document).ready(function(){
	$('.the-names').flexslider({
		controlNav: false,
		directionNav: false,
		slideshowSpeed: 5000
	});
	var now = new Date();
	$('.copy').prepend('&copy; ' +now.getUTCFullYear()+' ');
});