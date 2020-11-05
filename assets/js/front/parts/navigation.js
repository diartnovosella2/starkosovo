jQuery(document).ready(function ($) {

    var closable = false;

    $('#wsn-nav [data-toggle="dropdown"]').on({
        "click": function () {
            closable = true;
        }
    });
    $('#wsn-nav').on({
        "shown.bs.dropdown": function () {
            closable = false;
        },
        "hide.bs.dropdown": function () {
            return closable;
        }
    });

    $('#wsn-nav .dropdown-menu li.active').parent().siblings('.dropdown-toggle').click();

    // Mobile: keep active nav items open
    $('.navbar-toggle').on('click', function () {
        //console.log($('.dropdown.active'));
        //$( this ).parent().find( '.dropdown.active' ).find( '.dropdown-toggle' ).dropdown( 'toggle' ); // Not working!
    });

    // Click behaviour before reload
    $('.navbar-nav li, .dropdown-menu li').not('.menu-item-has-children').click(function () {
        $(this).parents('.navbar-nav').find('.active').removeClass('active'); // Find any currently active items and remove them
        $(this).addClass('active'); // Make the clicked item active
    });

    // Stop dropdown from collapsing on click
    $('.dropdown-menu li').click(function (e) {
        e.stopPropagation();
    });

    // Slide animation when expanding dropdown
    $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').slideDown(300);
    });

    // Slide animation when collapsing dropdown
    $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').slideUp(0);
    });
});