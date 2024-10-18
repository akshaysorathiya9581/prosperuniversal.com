<footer class="footer-area"> 
  <!--Start Footer Top--> 
  <!--End Footer Top--> 
  
  <!--Start Footer Top-->
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 single-widget">
          <div class="single-footer-widget">
            <div class="our-company-info">
              <div class="footer-logo-style1"> <a href="https://www.prosperuniversal.com/"> <img src="https://www.prosperuniversal.com/images/footer_logo.png" alt="" width="120" title=""> </a> </div>
              <div class="text">
                <p><?= get_field('footer_description', 'option'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <!--End single footer widget--> 
        
        <!--Start single footer widget-->
        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 single-widget">
          <div class="single-footer-widget single-footer-widget--link-box margin-leftminus1">
            <div class="title">
              <h3 class="skew-up">Site Links</h3>
            </div>
            <div class="footer-widget-links">
              <ul>
                <?php $site_links = wp_get_nav_menu_items('Site Links'); ?>
                <?php
                 foreach($site_links as $value_1){
                ?>
                <li><a href="<?= $value_1->url; ?>"><i class="fa fa-angle-right"></i> <?= $value_1->title; ?></a></li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <!--End single footer widget--> 
        
        <!--Start single footer widget-->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
          <div class="single-footer-widget single-footer-widget--link-box">
            <div class="title">
              <h3>Our Machines</h3>
            </div>
            <div class="footer-widget-links">
              <ul>
                <?php $our_machines = wp_get_nav_menu_items('Our Machines'); ?>
                <?php foreach($our_machines as $value_2) { ?>
                  <li><a href="<?= $value_2->url; ?>"><i class="fa fa-angle-right"></i> <?= $value_2->title; ?></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 single-widget">
          <div class="single-footer-widget single-footer-widget--link-box">
            <div class="title">
              <h3>Get In Touch</h3>
            </div>
            <div class="footer-widget-links">
              <ul class="footer-contact-info">
                <li><i class="fa fa-map"></i><strong>Prosper Universal Pvt. Ltd.</strong> <br>
                  <?= get_field('footer_address', 'option'); ?></li>
              </ul>
            </div>
          </div>
        </div>
        <!--End single footer widget--> 
      </div>
    </div>
  </div>
  <!--End Footer Top-->
  
  <div class="footer-bottom">
    <div class="container">
      <div class="bottom-inner">
        <div class="copyright-text">
          <p>Copyright © <?php echo date('Y'); ?> Prosper Universal Pvt. Ltd., All Rights Reserved.</p>
        </div>
        <div class="footer-bottom-right">
          <p>Designed & Developed By : <a href="<?= site_url();?>" class="txtlink" target="_blank">Prosper Universal Pvt. Ltd</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- <div class="latterbox">-->
<!--  <form class="request-quote-form">-->
<!--    <h3>Request a Quote</h3>-->
<!--    <input type="text" name="Complete Name" placeholder="Complete Name">-->
<!--    <input type="text" name="Email Address" placeholder="Email Address">-->
<!--    <input type="text" name="Phone No" placeholder="Phone No">-->
<!--    <textarea placeholder="Message"></textarea>-->
<!--    <button class="button">Send Message</button>-->
<!--  </form>-->
<!--  <div class="latterbox-cross-btn"> <i class="fa fa-times"></i> </div>-->
<!--</div>-->


<div class="latterbox">
    <?php echo do_shortcode('[contact-form-7 id="728d517" title="Request a Quote"]'); ?>
    <div class="latterbox-cross-btn"> <i class="fa fa-times"></i> </div>
</div>


<div id="contact"></div>
<div id="progress">
    <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper.js"></script> 


<script>
document.addEventListener('wpcf7submit', function(event) {
    // Check if the form ID matches your form
    if (event.detail.contactFormId === 73) {
        $('.latterbox-cross-btn').click();
        // Trigger file download
        var link = document.createElement('a');
        link.href = '<?php echo get_field("brochur", "option"); ?>'; // Adjust file path
        link.download = 'PROSPER-CATALOG.pdf'; // Provide a default filename
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
}, false);

    $(document).ready(function($){
        
      var swiper = new Swiper(".banner-slider", {
        pagination: {
          el: ".swiper-pagination-b2",
          clickable: true
        },
          navigation: {
          nextEl: ".banner-slider-button-next",
          prevEl: ".banner-slider-button-prev",
        },
        effect: 'slide',
        loop: true,
        speed: 1400,
        autoplay: {
          delay: 5000,
        },
      });
      

    $('.newsbox').on("click",function(){
        $('.latterbox').addClass('slide');
        $('body').addClass('openModal');
    })
    $('.latterbox-cross-btn').on("click",function(){
        $('.latterbox').removeClass('slide');
        $('body').removeClass('openModal');
    })
    $(document).on('submit', '.latterbox form.wpcf7-form', function(e) {
        // e.preventDefault(); // Prevent the default form submission

        // var form = $(this);
        // var formData = form.serialize(); // Serialize the form data
        
        // $.ajax({
        //     type: 'POST',
        //     url: "<?php echo admin_url('admin-ajax.php'); ?>", // Use the localized AJAX URL
        //     dataType: "json",
        //     contentType: "application/json",
        //     data: {
        //         action: 'submit_contact_form', // Specify the action to be handled in PHP
        //         form_data: JSON.stringify(formData), // Send the serialized form data
        //         //nonce: ajax_object.nonce // Add the nonce for security
        //     },
        //     success: function(response) {
        //         if (response.status) {
        //             $('.latterbox').removeClass('slide'); // Close the modal
        //             form.trigger('reset'); // Reset the form
                    
        //             // Trigger download of the brochure
        //             var link = document.createElement('a');
        //             link.href = response.file_url; // Brochure file URL from PHP response
        //             link.download = ''; // Optional: set a file name for download
        //             document.body.appendChild(link);
        //             link.click();
        //             document.body.removeChild(link); // Clean up the DOM after download
        //         } else {
        //             console.log('Error: ' + response);
        //         }
        //     },
        //     error: function() {
        //         alert('There was an error sending your message. Please try again later.');
        //     }
        // });
    });
  });
</script>
</body>
