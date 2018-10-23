$(document).ready(function () {
    $('.slider').slider();
    $('.sidenav').sidenav();
    $('.materialboxed').materialbox();
    $('.results').removeClass("res-active")
    $('.slider').slider();
    
    $("#idsearch").keyup(() => {
        if ($("#idsearch").val().length <= 0) {
            $('.results').removeClass("res-active")
        } else {
            $('.results').addClass("res-active")
        }
    });
    $("#close-res").click(() => {
        $('.results').removeClass("res-active")
    })

    $("#idsearch2").keyup(() => {
        if ($("#idsearch2").val().length <= 0) {
            $('.res2').removeClass("res-active")
        } else {
            $('.res2').addClass("res-active")
        }
    });
    $("#close-res2").click(() => {
        $('.res2').removeClass("res-active")
    })
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

$(window).scroll(function() {     
    var scroll = $(window).scrollTop();
    if (scroll > 350) {
        $("#headermb").addClass("navmbactive");
    }
    else {
        $("#headermb").removeClass("navmbactive");
    }
});