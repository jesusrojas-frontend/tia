var ser = $('.servicio'), tr= $('.trabajamos'), qu= $('.quienes'), serv = $('.servicios'), numero = 1, tamano;
$(window).scroll(function() {
	//Servicios
	tr.each(function(){
	    var imagePos = $(this).offset().top;
	    var topOfWindow = $(window).scrollTop();
		if (imagePos <= topOfWindow+200) {
			$('.trabajamos .como .numerob').css({
				"visibility": "none",
				"animation-delay": ".3s"
			})
			$('.trabajamos .como li').addClass("stretchLeft");
		}
	});
});