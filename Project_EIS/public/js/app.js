$(document).ready(function () {
    setTimeout(function () {
        $('#overlay').animate({
            opacity: 0
        },2200);
        setTimeout(function () {
            $('#overlay').css({
                'display': 'none'
            })
        },2300);
    },2000);
});