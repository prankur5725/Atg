AOS.init(); 


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    autoplayTimeout:8000,
    animateIn: 'zoomIn',
    animateOut: 'zoomOut',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});



$('.quotes').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 800,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: true
  });
  
$( document ).ready(function() {
    $('.no-fouc').removeClass('no-fouc');
    });
    
   $('#flipbook').turn({
    width:800,
    height:500,
    page:1,
    autoCenter:true,
    duration:1000
    })