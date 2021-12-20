   $(document).ready(function() {
       let owl = $('.owl-carousel');
       owl.owlCarousel({
           loop: true,
           pagination: false,
           navigation: true,
           margin: 20,
           dotsData: true,
           items: 1,
           center: true,
           dots: true,
           animateIn: "animate__fadeInDown",
           animateOut: "animate__fadeOutDown"
       })

       // make owl carousel to control owl carousel
       $('div.owl-dot').on('click', function(event) {
           event.stopPropagation();
           owl.trigger('to.owl.carousel', [$(this).index(), 300]);
           $('.owl-dot').removeClass('active');
           $(this).addClass('active');
       })

       // initialize form validation
       $('#add_to_cart').parsley();
   });

   // sclick carousel
   $('#related_product').slick({
       slidesToShow: 5,
       slidesToScroll: 1,
       autoplay: true,
       autoplaySpeed: 2000,
       variableWidth: true,
       variableHeight: true,
       arrows: false,
       responsive: [{
               breakpoint: 768,
               settings: {
                   arrows: false,
                   centerMode: true,
                   centerPadding: '40px',
                   slidesToShow: 3
               }
           },
           {
               breakpoint: 480,
               settings: {
                   arrows: false,
                   centerMode: true,
                   centerPadding: '40px',
                   slidesToShow: 1
               }
           }
       ]
   });