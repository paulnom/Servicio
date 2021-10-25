jQuery('document').ready(function ($) {
	$('.menu-trigger').click(function () {
		if ($('#main-menu').css('display') == 'none') {
			$('#main-menu').addClass('open').removeClass('closed');
		} else {
			$('#main-menu').removeClass('open').addClass('closed');
		}
	});
});

$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
	$('.secciones article').hide();
	$('.secciones article:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones article').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});