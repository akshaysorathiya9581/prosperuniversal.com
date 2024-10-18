<?php 
/* Template Name: Connect Us */ 
?>
<?php get_header(); ?>
<section id="prosper_page_banner" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container position-relative">
        <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
            <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                <h1>Connect & Engage</h1>
            </div>
            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</section>

<section id="contact_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact_left">
                    <h6>Get In Touch</h6>
                    <h2>Let's get in <span>touch with us.</span></h2>
                    <p class="left_text">If you would like to work with us or just want to get in touch, we’d love to hear from you!</p>
                    <div class="contact_details">
                        <div class="heading_1">Contact Information</div>
                        <div class="heading_2">Plant / Head Office</div>
                        <div class="factory"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-factory.svg" alt="Image" /></div>
                        <hr />
                        <ul class="list-unstyled">
                            <li class="media align-items-top">
                                <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-pin.svg" alt="Pin" />
                                <div class="media-body">
                                    <div class="company_name">Prosper Universal Pvt. Ltd.</div>
                                    <p class="company_address">
                                        <?php echo get_field('address', 'option'); ?>
                                    </p>
                                </div>
                            </li>
                            <li class="media align-items-center">
                                <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-phone.svg" alt="Phone" />
                                <div class="media-body"><a href="tel:<?php echo get_field('mobile_number', 'option'); ?>"><?php echo get_field('mobile_number', 'option'); ?></a></div>
                            </li>
                            <li class="media align-items-center">
                                <img class="mr-2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact-mail.svg" alt="Mail" />
                                <div class="media-body"><a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 valign">
                <div class="contact-form">
                    <div class="contact-heading d-flex justify-content-between">
                        <h2>
                            Need more info? <span class="themecolorsecondry">Contact us.</span>
                            <p>Fill out the form below to receive product support or information of any kind.</p>
                        </h2>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mail-icon.svg" alt="Mail Icon" width="50" />
                    </div>
                    <div class="form">
                        <?= do_shortcode('[contact-form-7 id="236" title="Need more info"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container gap no-top">
    <div class="responsive-map">
        <?php echo get_field('map_link', 'option'); ?>
    </div>
</div>


<?php get_footer(); ?>