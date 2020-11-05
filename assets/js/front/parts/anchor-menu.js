jQuery(document).ready(function ($) {

    var anchor_swiper = null;

    var anchor_menu = $('.ancors-menu-module .module-container')[0];

    $(anchor_menu).addClass('wrapper');
    $(anchor_menu).find('.swiper-container').addClass('swiper-item');
    $(anchor_menu).find('.swiper-button-prev, .swiper-button-next').addClass('swiper-item');

    anchor_swiper = new Swiper('.ancors-menu-module .wrapper .swiper-container.swiper-item', {
        slidesPerView: 'auto',
        freeMode: true,
        navigation: {
            nextEl: '.ancors-menu-module .wrapper .swiper-button-next.swiper-item',
            prevEl: '.ancors-menu-module .wrapper .swiper-button-prev.swiper-item',
        },
        spaceBetween: 40,
    });

    /* SCOLLSPY */

    var sections = [];
    var scrolled_id = false;
    var id = false;
    var $navbar = $('.ancors-menu-generated');
    var $navbar__links = $navbar.find('a');

    $navbar__links.each(function () {
        sections.push($($(this).attr('href')));
    });


    $navbar__links.click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 60
        });
    });

    $(window).scroll(function (e) {

        e.preventDefault();

        var scrollTop = $(this).scrollTop() + ($(window).height() / 3);
        var scrolled_id = null;
        var scrolled_index = 0;

        for (var i in sections) {

            var section = sections[i];

            if (scrollTop > section.offset().top) {

                scrolled_id = section.attr('id');
                scrolled_index = i;
            }
        }

        if (scrolled_id !== id) {

            id = scrolled_id;

            if (id === null) {

                $navbar__links.parent().removeClass('ancor-selected');
            }
            else {

                $navbar__links.parent().removeClass('ancor-selected');

                $('a[href="#' + id + '"]', $navbar).parent().addClass('ancor-selected');

                anchor_swiper.slideTo(scrolled_index);
            }
        }
    });

    if ($navbar__links.length == 0) {
        $('.ancors-menu-module').hide();
    }

    $(window).trigger('scroll');
});
