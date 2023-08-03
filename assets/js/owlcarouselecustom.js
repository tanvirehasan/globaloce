var owl = $('.header_slider');
owl.owlCarousel({
    animateOut: 'fadeOut',
    autoHeight:true,
    center: true,
    items:1,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});

var owl = $('.clients_logo');
owl.owlCarousel({
    items:6,
    loop:true,
    margin:15,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true
});

var owl = $('.clients_review');
owl.owlCarousel({
    center: true,
    items:1,
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
