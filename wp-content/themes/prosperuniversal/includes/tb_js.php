<script src="<?php echo $datapath; ?>js/jquery.min.js"></script
><script src="<?php echo $datapath; ?>js/bootstrap.min.js"></script>
<script src="<?php echo $datapath; ?>js/wow.js"></script>
<script src="<?php echo $datapath; ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo $datapath; ?>js/jquery.contactus.js"></script>
<script type="text/javascript" src="<?php echo $datapath; ?>js/chat.js"></script>
<script src="<?php echo $datapath; ?>js/main.js"></script>
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