 <!--**********************************
        Scripts
    ***********************************-->
 <!-- Required vendors -->
 <script src="{{ asset('style/vendor/global/global.min.js') }}"></script>
 <script src="{{ asset('style/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
 <script src="{{ asset('style/vendor/chart.js/Chart.bundle.min.js') }}"></script>
 <script src="{{ asset('style/js/custom.min.js') }}"></script>
 <script src="{{ asset('style/js/deznav-init.js') }}"></script>
 <script src="{{ asset('style/vendor/owl-carousel/owl.carousel.js') }}"></script>

 <!-- Chart piety plugin files -->
 <script src="{{ asset('style/vendor/peity/jquery.peity.min.js') }}"></script>

 <!-- Apex Chart -->
 <script src="{{ asset('style/vendor/apexchart/apexchart.js') }}"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <!-- Dashboard 1 -->
 <script src="{{ asset('style/js/dashboard/dashboard-1.js') }}"></script>
 <script>
     function carouselReview() {
         /*  testimonial one function by = owl.carousel.js */
         jQuery('.testimonial-one').owlCarousel({
             loop: true,
             autoplay: true,
             margin: 30,
             nav: false,
             dots: false,
             left: true,
             navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                 '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
             ],
             responsive: {
                 0: {
                     items: 1
                 },
                 484: {
                     items: 2
                 },
                 882: {
                     items: 3
                 },
                 1200: {
                     items: 2
                 },

                 1540: {
                     items: 3
                 },
                 1740: {
                     items: 4
                 }
             }
         })
     }
     jQuery(window).on('load', function() {
         setTimeout(function() {
             carouselReview();
         }, 1000);
     });
 </script>
