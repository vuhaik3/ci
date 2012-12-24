$(document).ready(function () {
    $('.info-flight .column:last-child').addClass('last');
    $('#ad-service li:last-child').addClass("last");
    dropdown("#search-con");
    dropdown("#cboAdult");
    dropdown("#cboChild");
    dropdown("#sboInfant");

    var defaultValue = $('.email-search #txtemail').val();
    $('.email-search #txtemail').focus(function () {
        if ($(this).val() == defaultValue) {
            $(this).val(" ");
        }
    });
    $('.email-search #txtemail').blur(function () {
        if ($(this).val() == " ") {
            $(this).val(defaultValue);
        }
    });

    $("#startdate").datepicker();
    $("#enddate").datepicker();
});

function dropdown(id) {
    $(id).find(".first-text").click(function (e) {
        e.preventDefault();
        $('.dropdown ul').hide();
        if ($(id).find("ul").hasClass("active")) {
            $('.dropdown ul').removeClass("active");
            $(id).find("ul").hide();
        } else {
            $(id).find("ul").show();
            $(id).find("ul").addClass("active");
        }
    });

    $(id).find("ul li a").click(function (e) {
        e.preventDefault();
        var text = $(this).html();
        $(id).find(".first-text").html(text);
        $(id).find(" ul").hide();
    });
    $(document).bind('click', function (e) {
        var $clicked = $(e.target);
        if (!$clicked.parents().hasClass("dropdown"))
            $(id).find("ul").hide();
    });
}