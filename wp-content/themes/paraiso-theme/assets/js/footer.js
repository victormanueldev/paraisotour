$(document).ready(function () {
    $('.slider').slider();
    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();
});

$("#act1").click(() => {
    $("#tab1").removeClass("hidden");
    $("#tab2").addClass("hidden");
    $("#act1").addClass("active")
    $("#act2").removeClass("active")
});

$("#act2").click(() => {
    $("#tab2").removeClass("hidden");
    $("#tab1").addClass("hidden");
    $("#act2").addClass("active")
    $("#act1").removeClass("active")
});

