$(document).ready(function() {

	setInterval(function() {
		var sliders = $(".image-slider");
		for (i = 0; i < sliders.length; i++) {
			nextSlide(sliders.get(i));
		}
	}, 10000);
	
	$(".image-slider .controls i").click(function() {
		toSlide($(this).parent().parent(), $(this).index());
	});
	
	function nextSlide(slider) {
		var controls = $(slider).find(".controls");
		var activeDot = controls.find(".active");
		var index = activeDot.index();
		var total = controls.children().length;
		
		var next = (index + 1) % total;
		toSlide($(slider), next);
	}
	
	function toSlide(slider, index) {
		var controls = $(slider).find(".controls");
		var entries = $(slider).find(".images");
		
		var previousDot = controls.find(".active");
		var nextDot = controls.find(":nth-child(" + (index + 1) + ")");
		var previousImage = entries.find(".active");
		var nextImage = entries.find(":nth-child(" + (index + 1) + ")"); 
		
		if (nextDot.hasClass("active")) {
			return;
		}
		
		nextImage.css("z-index", 3);
		previousImage.css("z-index", 1);
		
		nextDot.removeClass("inactive").addClass("active");
		previousDot.removeClass("active").addClass("inactive");
		
		nextImage.addClass("active").stop(false, true).show();
		previousImage.removeClass("active").stop(false, true).fadeOut(700);
		
		nextImage.css("z-index", 1);
		previousImage.css("z-index", 3);
	}
	
});