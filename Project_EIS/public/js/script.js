
$(document).ready(function () {

    if ($(window).width() < 992) {
        $(".list-item").slideUp();
    }
    else {
        $("#main-menu").slideUp();
    }

    $(window).resize(function() {
        if ($(window).width() < 992) {
            $("#main-menu").slideDown();
            $(".list-item").slideUp();
        }
        else {
            $("#main-menu").slideUp();
            $(".list-item").slideDown();
        }
    });

    $("#main-menu").click(function () {
       $(".list-item").slideToggle();
    });

});