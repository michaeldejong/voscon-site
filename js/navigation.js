
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
		window.location.href = link.attr("href")
	}
});

function fadeIn() {
	$("#items").hide().fadeIn(400);
}
