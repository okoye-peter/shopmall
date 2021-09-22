        $(document).ready(function() {
            let owl = $("#carousel");
            owl.owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 5000,
                items: 1,
                loop: true,
                nav: true,
                dots: false,
                animateIn: 'animate__fadeIn',
                animateOut: 'animate__fadeOut',
                responsive: {
                    375: {
                        nav: false,
                    },
                    425: {
                        nav: false,
                    },
                    768: {
                        nav: true,
                    },
                    1024: {
                        nav: true,
                    }
                }
            });

            owl.on("changed.owl.carousel", function(event) {
                let item = event.item.index - 2;
                $('h1').removeClass('animate__fadeInLeft');
                $('p:nth-child(2)').removeClass('animate__flipInX');
                $('p:nth-child(3)').removeClass('animate__fadeInDownBig');
                $('a:last-child').removeClass('animate__fadeInUp');
                $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animate__fadeInLeft');
                $('.owl-item').not('.cloned').eq(item).find('p:nth-child(2)').addClass('animate__flipInX');
                $('.owl-item').not('.cloned').eq(item).find('p:nth-child(3)').addClass('animate__fadeInDownBig');
                $('.owl-item').not('.cloned').eq(item).find('a:last-child').addClass('animate__fadeInUp');
            });

            $("#home").owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 10000,
                items: 5,
                loop: true,
                nav: true,
                dots: false,
                animateIn: "animate__fadeIn",
                animateOut: "animate__zoomOutDown",
                responsive: {
                    425: {
                        items: 1,
                        nav: false,
                    },
                    768: {
                        items: 3,
                        nav: false,
                    },
                    1024: {
                        items: 5,
                    },
                }
            });

            $("#profile").owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 10000,
                items: 5,
                loop: true,
                nav: true,
                dots: false,
                animateIn: "animate__fadeIn",
                animateOut: "animate__zoomOutDown",
                responsive: {
                    425: {
                        items: 1,
                        nav: false,
                    },
                    768: {
                        items: 3,
                        navs: false,
                    },
                    1024: {
                        items: 5,
                    },
                }
            });

            $("#contact").owlCarousel({
                autoplay: true,
                autoplayhoverpause: true,
                autoplaytimeout: 10000,
                items: 5,
                loop: true,
                nav: true,
                dots: false,
                animateIn: "animate__fadeIn",
                animateOut: "animate__zoomOutDown",
                responsive: {
                    425: {
                        items: 1,
                        nav: false,
                    },
                    768: {
                        items: 3,
                    },
                    1024: {
                        items: 5,
                    },
                }
            });

            var tabEl = document.querySelector('button[data-bs-toggle="tab"]');
            tabEl.addEventListener('shown.bs.tab', function(event) {
                event.target.querySelectorAll('.item').forEach(div => {
                    let a = $('item').eq(div);
                    a.removeClass('animate__zoomIn')
                    a.addClass('animate__zoomIn')
                }); // newly activated tab
                event.relatedTarget // previous active tab
            });


            $(document).ready(function() {
                $('.slick_container').slick({
                    centerMode: true,
                    centerPadding: '60px',
                    slidesToShow: 5,
                    infinite: true,
                    speed: 300,
                    variableWidth: true,
                    // adaptiveHeight: true,
                    autoplay: true,
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
            });
        });