<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>


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
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    loop: true,           
    margin: 10,           
    nav: true,            
    dots: true,           
 
  });
});
</script>




