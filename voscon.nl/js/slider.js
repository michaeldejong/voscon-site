$(document).ready(function() {

	var sliders = $(".image-slider");
	for (i = 0; i < sliders.length; i++) {
		var slider = sliders.get(i);
		startSlider(slider);
	}
	
	$(".image-slider .controls i").click(function() {
		var slider = $(this).parent().parent().parent();
		var slideIndex = $(this).index();
		
		stopSlider(slider);
		toSlide(slider, slideIndex);
		startSlider(slider);
	});
	
	function startSlider(slider) {
		slider = $(slider);
		slider.data("timer", setInterval(function() {
			nextSlide(slider);
		}, 10000));
	}
	
	function stopSlider(slider) {
		slider = $(slider);
		var interval = slider.data("timer");
		if (interval != undefined) {
			clearInterval(interval);
		}
	}
	
	function nextSlide(slider) {
		var slider = $(slider);
		var controls = slider.find(".controls");
		var activeDot = controls.find(".active");
		var index = activeDot.index();
		var total = controls.children().length;
		
		var next = (index + 1) % total;
		toSlide(slider, next);
	}
	
	function toSlide(slider, index) {
		slider = $(slider);
		var controls = slider.find(".controls");
		var entries = slider.find(".images");
		
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