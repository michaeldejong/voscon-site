
$(document).ready(function() {
	$("html,body").animate({ scrollTop: "0px" }, 0);
	fadeIn();

	var name = window.location.href;
	if (name.match("^.*#.*$")) {
		var anchor = name.substring(name.indexOf("#") + 1);
		scrollToAnchor(anchor);
	}
});

$("a.nav").click(function(event) {
	event.preventDefault();
	var link = $(this);
	
	if (link.attr("href").match("^.*#.*$")) {
		var name = link.attr("href").substring(1);
		var page = name.substring(0, name.indexOf("#"));
		
		if (page == "" || window.location.href.indexOf(page) >= 0) {
			var anchor = name.substring(name.indexOf("#") + 1);
			scrollToAnchor(anchor);
		}
		else {
			window.location.href = link.attr("href")
		}
	}
	else {
		window.location.href = link.attr("href")
	}
});

function scrollToAnchor(anchor) {
	var position = 0;
	if (anchor != null && anchor != "") {
		var destination = $('a[name="' + anchor + '"]');
		var position = destination[0].offsetTop - 72;
	}
	$("html,body").animate({ scrollTop: position + "px" }, "slow");
}

function fadeIn() {
	$(".items").hide().fadeIn(400);
}
