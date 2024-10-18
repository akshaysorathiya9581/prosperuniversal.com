<script src="http://localhost/uconceramica-2023/js/plugins/jquery.min.js"></script>
    <script src="http://localhost/uconceramica-2023/js/vendor/jqueryui.js"></script>
    <script src="http://localhost/uconceramica-2023/js/plugins/counter-up.js"></script>
    <script src="http://localhost/uconceramica-2023/js/plugins/swiper.js"></script>
    <script src="http://localhost/uconceramica-2023/js/plugins/metismenu.js"></script>
    <script src="http://localhost/uconceramica-2023/js/vendor/waypoint.js"></script>
    <script src="http://localhost/uconceramica-2023/js/vendor/waw.js"></script>
    <script src="http://localhost/uconceramica-2023/js/plugins/gsap.min.js"></script>
    <script src="http://localhost/uconceramica-2023/js/plugins/scrolltigger.js"></script>
    <script src="http://localhost/uconceramica-2023/js/vendor/split-text.js"></script>
    <script src="http://localhost/uconceramica-2023/js/vendor/contact.form.js"></script>
    <script src="http://localhost/uconceramica-2023/js/vendor/split-type.js"></script>
    <script src="http://localhost/uconceramica-2023/js/plugins/jquery-timepicker.js"></script>
    <script src="http://localhost/uconceramica-2023/js/plugins/bootstrap.min.js"></script>
    <script src="http://localhost/uconceramica-2023/js/main.js"></script>
<script src="<?php echo $datapath; ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo $datapath; ?>js/jquery.contactus.js"></script>
<script type="text/javascript" src="<?php echo $datapath; ?>js/chat.js"></script>

<script>
imageSlideGsap: function () {
          $(document).ready(function(){
            gsap.to(".images", {
              scrollTrigger:{
                // trigger: ".images",
                start: "top bottom", 
                end: "bottom top", 
                scrub: 1,
                // markers: true
              },
              x: -250,
            })
          });
          $(document).ready(function(){
            gsap.to(".images-r", {
              scrollTrigger:{
                // trigger: ".images",
                start: "top bottom", 
                end: "bottom top", 
                scrub: 1,
                // markers: true
              },
              x: 250,
            })
          });
          $(document).ready(function(){
            gsap.to(".images-2", {
              scrollTrigger:{
                // trigger: ".images",
                start: "top bottom", 
                end: "bottom top", 
                scrub: 1,
                // markers: true
              },
              y: -290,
            })
          });
        },

</script>