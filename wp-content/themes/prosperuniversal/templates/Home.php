<?php 
/* Template Name: Home */ 
?>
<?php get_header(); ?>

<style>
    .module-news__items .module-news__item-image:after {
    content: "";
    display: block;
     padding-bottom: 2px !important; 
    }
</style>
<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <?php
             foreach (get_field('slider_image') as $slider_value) {
            ?>
                <div class="swiper-slide" style="background-image: url('<?= $slider_value['images']; ?>');">
                    <div class="content-outer">
                        <div class="content-box"></div>
                    </div>
                </div>
           <?php } ?>
        </div>
        <div class="swiper-pagination-b2"></div>
    </div>
</section>

<section class="offer-section">
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="inner-column">
                    <div class="about_title">
                        <h2 class="title wow fadeInUp" data-wow-delay=".1s">Welcome to <span>Prosper Universal Pvt. Ltd.</span></h2>
                    </div>
                    <p class="leftside wow fadeInUp" data-wow-delay=".2s">
                        Prosper Universal Pvt. Ltd. is a prominent Paper cutlery machine Manufacturer in Rajkot Gujarat India with over 15 years of experience in manufacturing fully automatic pulp moulding machines.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        Prosper Universal Pvt. Ltd. founded in 2007 and based in Gujarat, India, has consistently led the industry by producing innovative fully automatic compostable paper cutlery machines. Our expertise extends to the design and manufacturing of high-speed paper cutlery machines in Rajkot, catering to the growing demand for sustainable solutions.<br>
						With a deep commitment to quality sustainability, and precision, Prosper Universal Pvt. Ltd. has diversified its offerings to include a wide range of paper molding machines. Our team is dedicated to continuous training and professional development, ensuring that we meet the evolving needs of our customers with advanced fully automatic compostable cutlery machines in India.


                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 p-xl-0 appeared" appear="">
                            <div class="feature-flex-square">
                                <div class="clearfix">
                                    <div class="feature-flex-square-icon"><i class="icon-target"></i></div>
                                    <div class="feature-flex-square-content">
                                        <h4>We ensure international manufacturing standards</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 p-xl-0 appeared" appear="">
                            <div class="feature-flex-square">
                                <div class="clearfix">
                                    <div class="feature-flex-square-icon"><i class="icon-diamond"></i></div>
                                    <div class="feature-flex-square-content">
                                        <h4>Leading-edge Infrastructure &amp; Technology</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 p-xl-0 appeared" appear="">
                            <div class="feature-flex-square">
                                <div class="clearfix">
                                    <div class="feature-flex-square-icon"><i class="icon-networking"></i></div>
                                    <div class="feature-flex-square-content">
                                        <h4>A Dedicated team size of more than 200+ employees</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12 p-xl-0 appeared" appear="">
                            <div class="feature-flex-square">
                                <div class="clearfix">
                                    <div class="feature-flex-square-icon"><i class="icon-hourglass"></i></div>
                                    <div class="feature-flex-square-content">
                                        <h4>15+ years of wise experience with young energy</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro_cta">
                        <div class="cs_section_heading_right cs_btn_anim">
                            <a href="<?= site_url();?>/about-prosper/" class="cs_btn cs_style_1 cs_color_1">
                                <span style="font-weight: 600;">Know More About</span>
                                <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                                        fill="#003566"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-column col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        We are proud of our India heritage and have been at the heart of the packaging industry for four decades. We believe that an essential ingredient to our success is our ability to respond quickly to our customer's
                        needs and create true value for them.
                    </p>
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prosper_office.jpg" alt="Biodegradable cutlery mold manufacturer in Rajkot Gujarat India"/></figure>
                        <div class="caption-box wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <div class="inner">
                                <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/save_planet.svg" />
                                <h4 class="title">Towards a better planet on a mission to end plastic</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="vn_experience">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="experience-item">
                    <h2 class="title wow fadeInUp" data-wow-delay=".1s">Manufacturer and exporter of<span>High-quality Fully automatic paper molding machines In India</span></h2>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 offset-lg-1">
                <div class="experience-item wow fadeInUp" data-wow-delay=".3s">
                    <p>Focusing on R&D, manufacturing, and sales of various pulp molding equipment and molds since 2007. ​​</p>
                    <p>
                        
 Prosper Universal Pvt. Ltd. is excited to announce the expansion of our business to include the production of state-of-the-art paper cutlery manufacturing equipment in Gujarat, India. Our commitment to sustainability has led us to develop innovative eco-friendly paper cutlery machines in India, enabling us to provide cutting-edge paper-based cutlery production machines that align with our dedication to offering sustainable solutions to our valued customers.

                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-left">
            <div class="col-12 col-lg-4 col-sm-12 col-md-6 col-xl-4 wow fadeIn" data-wow-delay=".4s">
                <div class="experience_step">
                    <div class="icon_head align-items-center d-flex">
                        <div class="title">Quality and Innovation</div>
                    </div>
                    <p>
                    At Prosper Universal Pvt. Ltd., we are dedicated to delivering the highest quality products and services. Our disposable cutlery making machine in Gujarat India and high-speed biodegradable cutlery machines are engineered with the latest technology and materials to ensure exceptional durability and reliability.

                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".5s">
                <div class="experience_step">
                    <div class="icon_head align-items-center d-flex">
                        <div class="title">Sustainability</div>
                    </div>
                    <p>As an Eco-friendly Paper Cutlery Making Machine Manufacturer in Rajkot, Gujarat, India, we are committed to sustainability and environmental responsibility. Our machines are engineered to minimize waste and energy use, helping our customers significantly reduce their carbon footprint.</p>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".7s">
                <div class="experience_step">
                    <div class="icon_head align-items-center d-flex">
                        <div class="title">After-Sales Support</div>
                    </div>
                    <p>
                   We specialize in Automatic Paper Cutlery Machine Manufacturing in Rajkot, Gujarat, India, Our commitment to customer satisfaction goes beyond purchase, offering remote assistance, scheduled maintenance, genuine spare parts, and upgrades to keep your machinery at the cutting edge of technology.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="solution-area bg_cover" style="background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/products.jpg);">
    <div class="solution-overlay pt-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
                    <div class="solution-box">
                        <div class="solution-content">
                            <h3 class="title skew-up">Manufacturer of High Quality <span>Paper Molding Machines </span> in India</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service-style2-area">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <h3>Better for you, Better for the earth</h3>
                    </div>
                    <p>
                        We are proud to be a leading manufacturer of innovative and high-quality compostable paper cutlery lines in India. Our goal is to provide the best alternative to plastic cutlery while ensuring sustainability. With our advanced high-speed disposable cutlery machines in Rajkot, India, we are committed to delivering comprehensive biodegradable solutions for the paper cutlery industry.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-projects">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeIn" data-wow-delay=".4s">
                <div class="recent-projects-img">
                    <figure>
                        <a href="<?= site_url();?>/paper-cuttlery-machine/"><img alt="Automatic Paper Cuttlery Machine Manufacturing in Rajkot Gujarat India" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_thumb_1.jpg" /></a>
                    </figure>
                    <div class="recent-projects-text">
                        <a href="<?= site_url();?>/paper-cuttlery-machine/">Laminating & Die- Cutting Machine <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 wow fadeIn" data-wow-delay=".6s">
                <div class="recent-projects-img">
                    <figure>
                        <a href="<?= site_url();?>/packing-machine/"><img alt="Automatic paper cutlery packing machine Manufacturer in Rajkot Gujarat India" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_thumb_2.jpg" /></a>
                    </figure>
                    <div class="recent-projects-text">
                        <a href="<?= site_url();?>/paper-cuttlery-machine/">Forming and Sealing Machine<i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service_heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
                <h2>Services we provide</h2>
            </div>
        </div>
    </div>
</section>

<div class="eshop-home">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md wow fadeIn" data-wow-delay=".1s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why_icon_1.png" alt="Eco-friendly Paper Cutlery Making Machine Manufacturer in Rajkot Gujarat India" />
                <p>Project Consultation</p>
            </div>
            <div class="col-6 col-md wow fadeIn" data-wow-delay=".2s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why_icon_2.png" alt="Compostable cutlery machine manufacturer India" />
                <p>The Complete Design</p>
            </div>
            <div class="col-6 col-md wow fadeIn" data-wow-delay=".3s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why_icon_3.png" alt="Fully Automatic compostable cutlery machine India" />
                <p>Better Quality</p>
            </div>
            <div class="col-6 col-md wow fadeIn" data-wow-delay=".4s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why_icon_4.png" alt="Eco-friendly paper cutlery machine India" />
                <p>Installation</p>
            </div>
            <div class="col-6 col-md wow fadeIn" data-wow-delay=".5s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why_icon_5.png" alt=" Paper Cutlery Machine Manufacturer in Rajkot Gujarat India" />
                <p>Training Programs</p>
            </div>
            <div class="col-6 col-md wow fadeIn" data-wow-delay=".6s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why_icon_5.png" alt="India Compostable Cutlery Machine Manufacturer in Rajkot Gujarat India" />
                <p>Satisfactory handover</p>
            </div>
            <div class="col-6 col-lg-2 col-md wow fadeIn" data-wow-delay=".7s">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why_icon_6.png" alt="Paper Cutlery Machine Manufacturer in Rajkot Gujarat India" />
                <p>After Sales Support</p>
            </div>
        </div>
    </div>
</div>

<section id="advantages">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-xl-6 col-lg-8 video-col col-md-9 col-12 p-0">
                <div class="right_side_why">
                    <div class="why_details">
                        <h3>Things That<span> Make us Different</span></h3>
                        <p>
                            Prosper Group's commitment to Quality, customer satisfaction, adoption of the latest technologies, and continuous R&D has yielded magnificent results and led the group from one success to another with humanity,
                            ethics, and principles.
                        </p>
                    </div>
                    <div class="advantages_features mt-50">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="advantages_list mb-30">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why/advantage_1.svg" alt="Paper cutlery mold manufacturer in Rajkot India" title="Top compostable paper cutlery-making machine manufacturers in India" />
                                    <h5 class="advantages_feature_name">15+ Years of Expertise</h5>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="advantages_list mb-30">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why/advantage_2.svg" title="" alt="" />
                                    <h5 class="advantages_feature_name">100+ Skilled Manpower</h5>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="advantages_list mb-30">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why/advantage_3.svg" alt="" title="" />
                                    <h5 class="advantages_feature_name">550+ Machines Installed</h5>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="advantages_list mb-0">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why/advantage_4.svg" alt="" title="" />
                                    <h5 class="advantages_feature_name">50+ Happy Clients</h5>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="advantages_list mb-0">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why/advantage_5.svg" alt="" title="" />
                                    <h5 class="advantages_feature_name">35 Countries We Export</h5>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-4 col-6">
                                <div class="advantages_list mb-0">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why/advantage_6.svg" alt="" title="" />
                                    <h5 class="advantages_feature_name">15 Machine Production Capacity Per Month</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home_about_advek">
    <div class="no-containers">
        <div class="no-rows content">
            <div class="itemFullText">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xxl-12 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="why_icon"><img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/save_environment.png" /></div>
                            <h2>let's Contribute for the Environment <span>Responsibility business together</span></h2>
                            <!-- <h2 class="text-uppercase" style="font-size:45px; vertical-align: middle; text-align: right; color: #000; line-height: 0.9;"> Offering unique decorative potential </h2>-->
                        </div>
                        <div class="col-xxl-12 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                            <p>The company has established itself as a reputable and prominent name in the field of Pulp Molding Machines for various Bagasse Molding Products around the world.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="features_wrap">
                                <div class="features_item wow fadeIn" data-wow-delay=".1s">
                                    <h5>State of art infrastructure</h5>
                                    <p>
                                       Our cutting-edge manufacturing facility in Rajkot is equipped with the latest technology to ensure precision engineering and high-quality output. Our R&D center is outfitted with advanced tools and technology, driving innovation in the design and functionality of our High-Speed Paper Cutlery Machine Gujarat India.
                                    </p>
                                </div>
                                <div class="features_item wow fadeIn" data-wow-delay=".2s">
                                    <h5>Customization</h5>
                                    <p>
                                        We provide extensive customization options for our Sustainable Cutlery Manufacturing Machines. Whether you need specific production capacities, specialized cutlery types, or advanced automation levels, we tailor our Fully Automatic Biodegradable Cutlery Machines to meet your exact needs.

                                    </p>
                                </div>
                                <div class="features_item wow fadeIn" data-wow-delay=".3s">
                                    <h5>Superior Quality</h5>
                                    <p>Fully Automatic Paper Cutlery Machines are engineered to the highest standards. Using durable materials and precision engineering, we ensure that our products are reliable, efficient, and built to last. Prosper Universal is Provide Best Fully Automatic Paper Cutlery Machine Manufacturer in India</p>
                                </div>
                                <div class="features_item wow fadeIn" data-wow-delay=".6s">
                                    <h5>Innovation</h5>
                                    <p>
                                        We are dedicated to innovation, continuously investing in research and development to enhance the efficiency, productivity, and user-friendliness of our Compostable Cutlery Machines. Our innovative solutions keep you competitive in the dynamic market.
                                    </p>
                                </div>
                                <div class="features_item wow fadeIn" data-wow-delay=".5s">
                                    <h5>Quality Control</h5>
                                    <p>
                                       As a high-quality speed paper cutlery machine manufacturer in India. we maintain strict quality control to ensure every machine meets our rigorous standards. Our dedicated team performs thorough testing throughout the manufacturing process to identify and address any issues, ensuring reliable and efficient machines.
                                    </p>
                                </div>
                                <div class="features_item wow fadeIn" data-wow-delay=".4s">
                                    <h5>Continued Support</h5>
                                    <p>Post-purchase, we are committed to offering ongoing support, including maintenance, spare parts supply, and technical assistance, to ensure that your Paper Molding Machines operate at peak performance for years to come.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="module-news" id="HomeSections_News">
    <div class="wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-between module-news__title text-left">
                <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h2 class="headline-2 headline-2--semibold heading-font category-text-image__title"><span class="line line--red">–</span>Our <span>Latest</span> Blogs</h2>
                    <p class="headline-7 headline-6--semibold category-text-image__text">Our pursuit of an everlasting global impact is apparent in our actions and initiatives throughout our history as an organization.</p>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="intro_cta">
                        <div class="cs_section_heading_right cs_btn_anim"></div>
                    </div>
                </div>
            </div>
            <div class="row module-news__items">
                <?php
                $args = array(
                'post_type' => 'blog',
                'posts_per_page' => 3,
                'post_status' => 'publish',
				'order'  => 'ASC',          // Order posts in ascending order
    			'orderby' => 'date',         // Order by post date (you can change this to other fields like 'title', 'ID', etc.
                );

                $news = get_posts($args);
                foreach($news as $n_value){
                    $n_post_id = $n_value->ID;
					$thumbnail_id = get_post_thumbnail_id($n_post_id);
					$alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
					$image_title = get_the_title($thumbnail_id);
                ?>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <a href="<?= get_permalink($n_post_id); ?>" target="_self" class="module-news__item">
                        <div class="module-news__item-image news-img">
<!--                             <div style="background-image: url(<?php //echo get_the_post_thumbnail_url($n_post_id);?>);"></div> -->
							<img src="<?= get_the_post_thumbnail_url($n_post_id, 'thumbnail'); ?>" alt="<?= esc_attr($alt_text) ?>" title="<?= esc_attr($image_title) ?>">
                        </div>
                        <div class="module-news__item-text">
                            <!-- <div class="title--tag red">June 2024</div> -->
                            <div class="title--tag red"><?= get_the_date('F Y'); ?></div>
                            <div class="title--title12"><?= get_the_title($n_post_id); ?></div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
