$(document).ready(function() {

	// submenur
	$('.submenu').hide();

	$('#nav li').hover(function(){
		$(this).find("ul:first").stop(true, true).slideToggle(500).addClass("ativo");
		if ($('.submenu').hasClass("ativo")) {
			$(this).find("a:first").toggleClass("menuAtivo");
		};
	});
	//link externo
	$('.external').click(function(e) {
		e.preventDefault();
		var url = $(this).attr('href');
		window.open(url);
	});
});