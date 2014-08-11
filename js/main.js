
 
$(document).ready(function(){
	var now = new Date();
	$('.copy').prepend('&copy; ' +now.getUTCFullYear()+' ');
});	