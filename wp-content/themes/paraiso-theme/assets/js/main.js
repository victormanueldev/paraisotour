$(document).ready(function(){

	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion = barra * 0.10;

		$('magazine-info').css({
			'background-position-y': posicion + 'px'
		});
	});
});