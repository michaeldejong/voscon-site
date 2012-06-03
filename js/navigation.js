
$(document).ready(function() {
	fadeIn();
});

$("a.nav").click(function(event) {
	event.preventDefault();
	var link = $(this);
	
	if (link.attr("href").match("^#.*$")) {
		var position = 0;
		
		if (link.attr("href").length > 1) {
			var name = link.attr("href").substring(1);
			var destination = $('a[name="' + name + '"]');
			position = destination[0].offsetTop - 17;
		}
		
		$("html,body").animate({ scrollTop: position + "px" }, "slow");
	}
	else {
		scrollToTopIfRequiredAndFadeOut(link);
	}
});

function fadeIn() {
	$("#canvas").hide().fadeIn(600);
}

function scrollToTopIfRequiredAndFadeOut(link) {
	if ($(window).scrollTop() > 0) {
		scrollToTopAndFadeOut(link);
	}
	else {
		fadeOut(link);
	}
}

function scrollToTopAndFadeOut(link) {
	$("html, body").animate({scrollTop:0}, 'slow', function() {
		fadeOut(link);
	});
}

function fadeOut(link) {
	$("#canvas").fadeOut(600, function() {
		window.location.href=link.attr("href");
	});
}
