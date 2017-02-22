          // Slider 1 
             $(document).ready(function() {
              var owl = $('.costuma');
              owl.owlCarousel({
                margin: 20,
                nav: false,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 3
                  }
                }
              })
            });


// Testimonial Slider

           jQuery(document).ready(function($) {
              $('.fadeOut').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000
              });
              $('.custom1').owlCarousel({
                animateOut: 'fadeOutUp',
                animateIn: 'fadeInUp',
                items: 1,
                margin: 30,
                stagePadding: 30,
                autoplay: true,
                autoplayTimeout: 4000,
                nav: false,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
              });
            });

// Passport slider Only on mobile

             $(document).ready(function() {
              var owl = $('.costumb');
              owl.owlCarousel({
                margin: 20,
                nav: false,
                loop: false,
                autoplay: false,
                autoplayTimeout: 7000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 3
                  }
                }
              })
            });

