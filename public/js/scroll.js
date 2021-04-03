//Js scroll

$('.page-scroll').click(function (e) {
    
    var href = $(this).attr('href');
    
    var destinyHref = $(href);

    $('html').animate({
        scrollTop: destinyHref.offset().top - 150
    }, 'easeInOutCubic');

    e.preventDefault();
});