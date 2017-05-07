$(function () {
    var jumboHeight = $('.jumbotron').outerHeight();

    function parallax() {
        var scrolled = $(window).scrollTop();
        $('.bg').css('height', (jumboHeight - scrolled) + 'px');
    };
    $(window).scroll(function (e) {
        parallax();
    });
    $(".overlay").click(function () {
        $(".overlay iframe").css("pointer-events", "auto");
    });
    $(".overlay").mouseleave(function () {
        $(".overlay iframe").css("pointer-events", "none");
    });
    
    var navbarHeight = $('.navbar').height();
    $(window).scroll(function () {
        var navbarColor = "76,71,71"; //color attr for rgba
        var smallLogoHeight = $('.small-logo').height();
        var bigLogoHeight = $('.big-logo').height();
        var navbarHeight = $('.navbar').height();
        var smallLogoEndPos = 0;
        var smallSpeed = (smallLogoHeight / bigLogoHeight);
        var ySmall = ($(window).scrollTop() * smallSpeed);
        var smallPadding = navbarHeight - ySmall;
        if (smallPadding > navbarHeight) {
            smallPadding = navbarHeight;
        }
        if (smallPadding < smallLogoEndPos) {
            smallPadding = smallLogoEndPos;
        }
        if (smallPadding < 0) {
            smallPadding = 0;
        }
        $('.small-logo-container ').css({
                    "padding-top": smallPadding
        });
        var navOpacity = ySmall / smallLogoHeight;
        if (navOpacity > 1) {
            navOpacity = 1;
        }
        if (navOpacity < 0) {
            navOpacity = 0;
        }
        var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
        $('.navbar').css({
            "background-color": navBackColor
        });
        var shadowOpacity = navOpacity * 0.4;
        if (ySmall > 1) {
            $('.navbar').css({
                "box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"
            });
        }
        else {
            $('.navbar').css({
                "box-shadow": "none"
            });
        }
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#menu-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#menu-img").change(function () {
        readURL(this);
    });
    Dropzone.options.imageUpload = {
        maxFilesize: 1
        , acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
    $(document).ready(function () {
        $('.pgwSlider').pgwSlider();
    });
})