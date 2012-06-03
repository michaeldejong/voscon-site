
var checkboxes = $(".item");
var allButton = $("#all");
var editButton = $("#edit");
var removeButton = $("#remove");
var rows = $("tr");

disableRankingButton(".up:first");
disableRankingButton(".down:last");

$(document).ready(function() {
	setInterval(function() {
		updateState();
	}, 100);
});

checkboxes.click(function(e) {
	e.stopPropagation();
});

rows.click(function(e) {
	var checkbox = $(this).find('.item');
	checkbox.attr('checked', !checkbox.is(':checked'));
});

allButton.click(function(e) {
	checked = $(this).is(':checked')
	for (i = 0; i < checkboxes.length; i++) {
		$(checkboxes[i]).attr('checked', checked);
	}
});

editButton.click(function(e) {
	if ($(this).hasClass("disabled")) {
		e.preventDefault();
	}
	else {
		window.location.href = "?action=edit&id=" + getSelectedId();
	}
});

removeButton.click(function(e) {
	if ($(this).hasClass("disabled")) {
		e.preventDefault();
	}
});

function updateState() {
	var count = countCheckedBoxes();
	if (count == 1) {
		editButton.removeClass("disabled");
		removeButton.removeClass("disabled");
	}
	else if (count > 1){
		editButton.addClass("disabled");
		removeButton.removeClass("disabled");
	}
	else {
		editButton.addClass("disabled");
		removeButton.addClass("disabled");
	}
	
	if (checkboxes.length > 0) {
		allButton.attr('checked', countCheckedBoxes() == checkboxes.length);
	}
}

function getSelectedId() {
	for (i = 0; i < checkboxes.length; i++) {
		var checkbox = $(checkboxes[i]);
		if (checkbox.is(':checked')) {
			return checkbox.attr('value');
		}
	}
	return -1;
}

function countCheckedBoxes() {
	var count = 0;
	for (i = 0; i < checkboxes.length; i++) {
		if ($(checkboxes[i]).is(':checked')) {
			count++;
		}
	}
	return count;
}

function disableRankingButton(selector) {
	$(selector).fadeTo(1, 0.2).click(function(e) {
		e.preventDefault();
	});
	
}
