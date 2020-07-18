$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        // console.log(pos_body);
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) $(".lentop").fadeIn();
                else $(".lentop").fadeOut();
            });
            $(".lentop").click(function() {
                $("body,html").animate({ scrollTop: 0 }, "5000");
            });
        });

        //animation
        //nav
        var pos_nav = $("nav").offset().top;
        if (pos_nav > 800) {
            $("nav").css("background-color", "#656573");
        } else {
            $("nav").css("background", "no-repeat",
                "transition", "1s");
        }
        //logo
        // var pos_navbar_brand = $('.navbar-brand').offset().top;
        // if (pos_body > pos_navbar_brand) {
        //     $('.navbar-brand').addClass('animate__zoomIn animate__animated ');
        // }

        //logo
        var pos_sale_title = $('.sale-title').offset().top;
        var pos_hot_product_title = $('.hot-product-title').offset().top;
        //new even
        var pos_new_even_title = $('.new-even-title').offset().top;
        var pos_card_new_even = $('.card-new-even').offset().top;
        var pos_card_new_even2 = $('.card-new-even2').offset().top;
        var pos_card_new_even3 = $('.card-new-even3').offset().top;
        //feedback
        var pos_feedback_title = $('.feedback-title').offset().top;
        var pos_card_card_feedback = $('.card-feedback').offset().top;
        //footer
        var pos_logofooter = $('.logo-footer').offset().top;
        var pos_icon = $('.icon').offset().top;
        var pos_menu_footer = $('.menu-footer').offset().top;
        var pos_menu_footer2 = $('.menu-footer2').offset().top;
        var pos_menu_footer3 = $('.menu-footer3').offset().top;
        console.log(pos_hot_product_title);
        if (pos_body >= pos_sale_title - 400) {
            $('.sale-title').addClass('animate__fadeInDown animate__animated ');
        }
        if (pos_body >= pos_hot_product_title - 400) {
            $('.hot-product-title').addClass('animate__fadeInDown animate__animated ');
        }
        if (pos_body >= pos_new_even_title - 400) {
            $('.new-even-title').addClass('animate__fadeInDown animate__animated ');
        }
        if (pos_body >= pos_feedback_title - 400) {
            $('.feedback-title').addClass('animate__fadeInDown animate__animated ');
        }
        //new even
        if (pos_body >= pos_card_new_even - 400) {
            $('.card-new-even').addClass('animate__fadeInLeft animate__animated ');
        }
        if (pos_body >= pos_card_new_even2 - 400) {
            $('.card-new-even2').addClass('animate__fadeInUp animate__animated ');
        }
        if (pos_body >= pos_card_new_even3 - 400) {
            $('.card-new-even3').addClass('animate__fadeInRight animate__animated ');
        }
        if (pos_body >= pos_card_card_feedback - 400) {
            $('.card-feedback').addClass('animate__rotateInDownLeft animate__animated ');
        }
        if (pos_body >= pos_logofooter - 400) {
            $('.logo-footer').addClass('animate__zoomIn animate__animated ');
        }
        if (pos_body >= pos_icon - 400) {
            $('.icon').addClass('animate__fadeInLeft animate__animated ');
        }
        if (pos_body >= pos_menu_footer - 400) {
            $('.menu-footer').addClass('animate__fadeInDown animate__animated ');
        }
        if (pos_body >= pos_menu_footer2 - 400) {
            $('.menu-footer2').addClass('animate__fadeInUp animate__animated ');
        }
        if (pos_body >= pos_menu_footer3 - 400) {
            $('.menu-footer3').addClass('animate__fadeInRight animate__animated ');
        }
    });
});