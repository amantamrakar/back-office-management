function Call_modal_alert(id, message = "", classes = "") {
	$("#alert_message").html(message);
	$("#" + id).fadeIn(500);
	$("#modal_ka_head").addClass(classes);
	setTimeout(function () {
		$("#" + id).fadeOut(500);
		$("#" + id).removeClass(classes);
	}, 1500);
}
