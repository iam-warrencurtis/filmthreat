jQuery( document ).ready(function() {
jQuery('.carousel-inner div:first').addClass('active');

//load more
jQuery(function () {
    jQuery(".interview-card").slice(0, 6).show();
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery("div.interview-card:hidden").slice(0, 4).slideDown();
        if (jQuery("div:hidden").length == 0) {
            jQuery("#load").fadeOut('slow');
        }
        jQuery('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

jQuery('a[href=#top]').click(function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 600);
    return false;
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 50) {
        jQuery('.totop a').fadeIn();
    } else {
        jQuery('.totop a').fadeOut();
    }
});





});
