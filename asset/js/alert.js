function Call_alert(id, message = '', classes = '') {
    document.getElementById(id).innerText = message;
    $("#" + id).fadeIn(500);
    $("#" + id).addClass(classes);
    setTimeout(function() {
        $("#" + id).fadeOut(500);
        $("#" + id).removeClass(classes);
    }, 1500);
}