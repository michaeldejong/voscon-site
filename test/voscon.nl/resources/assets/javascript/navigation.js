
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
		var pathName = window.location.pathname;

		name = name.substr(name.indexOf("#") + 1, name.length - name.indexOf("#") + 1);
		if (page.indexOf("/") >= 0) {
			page = page.substr(0, page.lastIndexOf("/"));
		}
		if (pathName.indexOf("/") == 0) {
			pathName = pathName.substr(1, pathName.length - 1);
		}
		if (pathName.lastIndexOf("/") == pathName.length - 1) {
			pathName = pathName.substr(0, pathName.length - 1);
		}

		console.log({ name: name, page: page, pathName: pathName });

		if (page === "" || pathName === page) {
			scrollToAnchor(name);
			history.pushState({}, '', link.attr("href"));
		}
		else {
			window.location.href = link.attr("href")
		}
	}
	else {
		window.location.href = link.attr("href")
	}

	return false;
});

function scrollToAnchor(anchor) {
	console.log("Scrolling to: " + anchor);
	var position = 0;
	if (anchor != null && anchor != "") {
		var destination = $('a[name="' + anchor + '"]');
		position = destination[0].offsetTop - 256;
	}
	$("html,body").animate({ scrollTop: position + "px" }, "fast");
}

function fadeIn() {
	$(".items").hide().fadeIn(400);
}
