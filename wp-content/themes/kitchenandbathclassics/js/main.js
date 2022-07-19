jQuery(function ($) {
    // class on load
    jQuery('body').addClass('animation');
    // sticky-header
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 43) {
            $("body").addClass("sticky-header");
        } else {
            $("body").removeClass("sticky-header");
        }
    });
    // menu-togggle
    $(".menu-toggle").click(function () {
        $("body").toggleClass("open-menu");
    });
    /*SVG Generate*/
    $('img.svg').each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
        var imgwidth = $img.attr('width');
        var imgheight = $img.attr('height');
        $.get(imgURL, function (data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');
            // Add replaced image's ID to the new SVG
            if (typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }

            // Add replaced image's classes to the new SVG
            if (typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass + ' replaced-svg');
                $svg = $svg.attr({
                    width: imgwidth,
                    height: imgheight
                });
            }
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            // Replace image with new SVG
            $img.replaceWith($svg);
        }, 'xml');
    });

    // submenu open and close
    mobile_menu();

    function mobile_menu() {
        if ($(window).width() < 991) {
            $('li.menu-item-has-children > a').on('click', function (e) {
                var _parent_menu = $(this).parent();
                $(_parent_menu).addClass('opened');
                if ($(this).siblings('ul').is('.opened-sub-menu')) {
                    $(_parent_menu).find('ul').first().removeClass('opened-sub-menu');
                } else {
                    e.preventDefault();
                    $(_parent_menu).find('ul').first().addClass('opened-sub-menu');
                }
                $('#primary-menu li.menu-item-has-children').not($(_parent_menu)).removeClass('opened');
                $('#primary-menu li.menu-item-has-children ul').not($(_parent_menu).find('ul')).removeClass('opened-sub-menu');

            });
        }
    }

    $('.menu-toggle').on('click', function () {
        if ($('body').hasClass('open-menu')) {
            $('#primary-menu > li').removeClass('opened');
            $('#primary-menu > li > ul').removeClass('opened-sub-menu');
        }
    });

    $(window).resize(function () {
        mobile_menu();
    });
});