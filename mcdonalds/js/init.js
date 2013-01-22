$(document).ready(function() {
	$('ul#menu > li').click(function() {
		$('ul#menu > li > img').css('-webkit-filter', 'grayscale(100%)');
		$(this).find('img').css('-webkit-filter', 'grayscale(0%)');
		var page = $(this).attr('rel');
		$('#wrapper').load(page+'.html');
		$('#wrapper').scroll();
	});
	

});