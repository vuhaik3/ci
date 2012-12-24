$(document).ready(function() {
    $(window).scroll(function() {
        if($(window).scrollTop() > 100){
            $('#backtop').fadeIn();
        }
        else{
            $('#backtop').fadeOut();
        }
    });
    $('#backtop').click(function() {
        $('html, body').animate({scrollTop:0},500);
    })
})
