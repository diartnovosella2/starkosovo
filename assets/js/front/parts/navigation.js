jQuery(document).ready(function ($) {
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.header').outerHeight();
    $(window).scroll(function(event){
        didScroll = true;
    });
  
    
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
  
    function hasScrolled() {
        var st = $(this).scrollTop();
  
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
  
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.header').css('top','-80px');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.header').css('top','0');
            }
        }
  
        lastScrollTop = st;
    }

    $(".header__navigation-toggle").click(function(){
        $(".header__navigation").toggleClass("header__navigation-active");
        $('body').toggleClass("filter-overlay");
        $("header__navigation-active").slideToggle();
        $(".header__navigation-toggle").toggleClass("active");
    });

 
    var home_url = window.location.origin;
    if ($(".404page").length || window.location.href.indexOf("blog") > -1 || window.location.href.indexOf("registration-form") > -1 || window.location.href.indexOf("articles") > -1 || window.location.href.indexOf("find-jobs") > -1  ) { 
        $('.header__navigation-menu li a').css('color', '#1E5C6B');
        $('.logo').attr('src', home_url  + '/wp-content/themes/starkosovo/assets/images/blue-logo.svg');
        $('.header__navigation-toggle--open').attr('src', home_url  + '/wp-content/themes/starkosovo/assets/images/hamburger-blue.png');
        $('.header').css('border-bottom', '1px solid #1E5C6B');
    }
    
    if( $(window).width() < 600) {
        $("#dateOfBirth").attr("type", "text");
        $("#dateOfBirth").on('focusin', function(){
            $(this).attr("type", "date");
        });
        $("#dateOfBirth").on('focusout', function(){
            $(this).attr("type", "text");
        });
    }
});