<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.odometer.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/tg-cursor.min.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/svg-inject.min.js"></script>
<script src="assets/js/tween-max.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/main.js"></script>
<!-------about counter------->
<script>
  //aos js
  AOS.init();

  //about counter

  var counter = document.querySelectorAll(".counter")

  window.addEventListener("load", function () {
    counter.forEach(function (k, v) {

      var start = counter[v].getAttribute('data-count-start')
      var end = counter[v].getAttribute('data-count-end')
      var speed = counter[v].getAttribute('data-speed')

      setInterval(function () {
        start++;
        if (start > end) {
          return false;
        }
        counter[v].innerText = start;

      }, speed)
    })

  }, false)
</script>
<script>
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20, // Set margin to 20px
      nav: true,
      dots: true,
      responsive: {
        0: {
          items: 1, // 1 item for screens 0px and up
        },
        600: {
          items: 2, // 2 items for screens 600px and up
        },
        1000: {
          items: 2.5, // 3 items for screens 1000px and up
        },
        1400: {
          items: 3.5,
        },
        1600: {
          items: 4.5,
        }

      }
    });
  });

</script>
<script>
  // $(document).ready(function () {
  //   $(".hero-carousel").owlCarousel({
  //     items: 1,  
  //       loop: true,
  //       margin: 10,
  //       nav: true, 
  //       dots: true, 
  //       autoplay: true, 
  //       autoplayTimeout: 3000,
  //   });
  // });

</script>