<?php 
/* Template Name: AboutProsper */ 
?>
<?php get_header(); ?>
<section id="prosper_page_banner" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container position-relative">
        <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
            <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                <h1><?= get_the_title(); ?></h1>
            </div>
            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section id="about_prosper_group">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="experience-item">
                    <span><?= get_field('about_sub_title'); ?></span>
                    <h2 class="title wow slideInLeft" data-wow-delay=".1s"><?= get_field('about_title'); ?></h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-lg-1">
                <div class="experience-item">
                    <br />
                    <br />
                    <p class="blockquote wow fadeInUp" data-wow-delay=".1s" style="font-weight: bolder;"><?= get_field('about_description_1'); ?></p>
                    <p class="wow fadeInUp" data-wow-delay=".2s">
                        <?= get_field('about_description_2'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero-wrap style3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-shape-10.jpg" class="hero-shape-one" />
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-shape-11.png" class="hero-shape-three" />
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-md-6">
                <div class="hero-img-wrap">
					<?php 
						$molding_machine_image_1 = get_field('molding_machine_image_1');
						$molding_machine_image_2 = get_field('molding_machine_image_2');
					?>
                    <img src="<?= $molding_machine_image_1['url']; ?>" alt="<?= esc_attr($molding_machine_image_1['alt']) ?>" title="<?= esc_attr($molding_machine_image_1['title']) ?>" class="hero-img-shape waving_left" />
                    <img class="wow slideInLeft" data-wow-delay=".1s" src="<?= $molding_machine_image_2['url']; ?>" alt="<?= esc_attr($molding_machine_image_2['alt']) ?>" title="<?= esc_attr($molding_machine_image_2['title']) ?>" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-content">
                    <h3 class="wow fadeInUp" data-wow-delay=".1s">
                        <?= get_field('molding_machine_title'); ?> <br />
                        <span><?= get_field('molding_machine_sub_title'); ?></span>
                    </h3>
                    <?= get_field('molding_machine_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="expansion_prosper">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8 col-sm-12 col-12">
                <h2 class="heading"><?= get_field('cutlery_machines_title'); ?> <span><?= get_field('cutlery_machines_sub_title'); ?></span></h2>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-xl-push-0 col-lg-7 col-md-8 col-sm-12 col-12 position-relative">
                        <?= get_field('cutlery_machines_description'); ?>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-5 col-md-8 col-sm-12 col-12 text-center position-relative">
						<?php 
						$cutlery_machines_image = get_field('cutlery_machines_image');
					?>
                        <div class="expansion_img">
							<img src="<?= $cutlery_machines_image['url']; ?>" alt="<?= esc_attr($cutlery_machines_image['alt']) ?>" title="<?= esc_attr($cutlery_machines_image['title']) ?>" />
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="statements-section sec-pad bg-color-1">
    <div class="container">
        <div class="tabs-box">
            <div class="tab-btn-box centred">
                <ul class="tab-btns tab-buttons clearfix">
                    <?php
                     foreach (get_field('statement') as $key => $s_value) {
                    ?>
                    <li class="tab-btn <?= $key == 0 ? 'active-btn' : ''; ?>" data-tab="#tab-<?= $key; ?>">
                        <div class="icon-box">
							<img class="icon" src="<?= $s_value['image']['url']; ?>" alt="<?= esc_attr($s_value['image']['alt']) ?>" title="<?= esc_attr($s_value['image']['title']) ?>" />
						</div>
                        <h4><?= $s_value['name']; ?></h4>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="tabs-content">
                <?php
                foreach (get_field('statement') as $key => $s_value) {
                    foreach ($s_value['content'] as $key_2 => $c_value) {
                ?>
                <div class="tab <?= $key == 0 ? 'active-tab' : '';?>" id="tab-<?= $key; ?>">
                    <div class="content-box">
                        <div class="bg-layer" style="background-image: url(<?= $c_value['image']; ?>);"></div>
                        <span class="big-text"><?= $c_value['title']; ?></span>
                        <div class="inner-box">
                            <h2><?= $c_value['sub_title']; ?></h2>
                            <?= $c_value['description']; ?>
                        </div>
                    </div>
                </div>
            <?php }} ?>
                <!-- <div class="tab" id="tab-2">
                    <div class="content-box">
                        <div class="bg-layer" style="background-image: url(https://www.prosperuniversal.com/images/vision_bg.jpg);"></div>
                        <span class="big-text">Vision Statement</span>
                        <div class="inner-box">
                            <p>
                                To be a global leader in providing biodegradable solutions in paper cutlery, tableware products, and packaging solutions, driving the transition towards a plastic-free future. We envision a world where
                                eco-friendly paper cutlery is the norm, and our innovative machines play a pivotal role in shaping a more sustainable and greener planet for future generations."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab" id="tab-3">
                    <div class="content-box">
                        <div class="bg-layer" style="background-image: url(https://www.prosperuniversal.com/images/values_bg.jpg);"></div>
                        <span class="big-text">Value Statement</span>
                        <div class="inner-box">
                            <p>We're committed to sustainability, innovation, quality, customer focus, integrity, environmental responsibility, teamwork, and continuous improvement</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<section id="prosper_infra" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/plant.jpg) no-repeat fixed top center / cover !important;">
    <div class="auto-container">
        <div class="row justify-content-end">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6" style="background: rgba(165, 205, 57, 0.7); padding: 40px;">
                <div class="infra_heading">
                    <h2>World Class State of Art manufacturing unit</h2>
                </div>
                <p class="text">
                    At Prosper Universal Pvt. Ltd. we have invested in a state-of-the-art manufacturing facility that is specifically designed for the production of paper cutlery-making machines. Our facility is equipped with the latest
                    technology and machinery to ensure that we can deliver high-quality machines that meet the needs of our customers. Our well-built and richly equipped factory occupies 90,000 sq.ft. and has the latest CNC - WMC machines
                    and technologies.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="eleone_export">
    <div class="paragraph paragraph-image-text paragraph-item-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-5 title-wrapper">
                    <h2 class="title">We are exporting our machines <span>to more than 15 countries</span></h2>
                    <p>Our goal is to provide our customers with product excellence every time.</p>
                    <p>
                        We are continually investing in development and productivity improvement methods to make goods reach the world's farthest corners, Today, we have an established overseas network supplying superior packaging material
                        for various diverse industries.
                    </p>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-7">
                    <div class="export_network"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/export-map.png" alt="" /></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="prosper_experience">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="heading wow fadeInUp" data-wow-delay=".1s">Delivering value since 2007 <span>Our Core Values</span></h2>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="experience-item wow fadeInUp" data-wow-delay=".3s">
                    <p>
                        Our value statement reflects our core values and commitment to customers, employees, and the environment. We're dedicated to sustainability, reducing plastic waste, and promoting eco-friendly practices. We strive to
                        develop innovative solutions that meet the evolving needs of our customers.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 wow fadeIn" data-wow-delay=".4s">
                <div class="experience_item_content wow fadeInUp" data-wow-delay=".1s">
                    <div class="icon_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_1.png" /></div>
                    <div class="icon_head">
                        <div class="title">Quality Control</div>
                        <p>We take pride in delivering high-quality products and services that exceed our customers' expectations.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".5s">
                <div class="experience_item_content wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/customer_focus.png" /></div>
                    <div class="icon_head">
                        <div class="title">Customer Focus</div>
                        <p>Our customers are at the heart of our business, and we are dedicated to providing them with exceptional service and support.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".6s">
                <div class="experience_item_content wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/integrity.png" /></div>
                    <div class="icon_head">
                        <div class="title">Integrity</div>
                        <p>We conduct our business with honesty, transparency, and respect for all stakeholders.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 wow fadeIn" data-wow-delay=".4s">
                <div class="experience_item_content wow fadeInUp" data-wow-delay=".1s">
                    <div class="icon_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/environmental.png" /></div>
                    <div class="icon_head">
                        <div class="title">Environmental Responsibility</div>
                        <p>We are committed to minimizing our environmental impact and promoting environmental stewardship.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".5s">
                <div class="experience_item_content wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/teamworks.png" /></div>
                    <div class="icon_head">
                        <div class="title">Teamwork</div>
                        <p>We value collaboration and teamwork, both internally and with our partners, to achieve common goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".6s">
                <div class="experience_item_content wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/continuous.png" /></div>
                    <div class="icon_head">
                        <div class="title">Continuous Improvement</div>
                        <p>We are always looking for ways to improve our products, services, and processes to better serve our customers and the environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="made_india">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-6 col-md-6 col-sm-6">
                <div class="made_india_heading wow fadeInUp" data-wow-delay="0.5s">
                    <h2>Made in india</h2>
                    <div class="p_bdr2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-6 col-md-6 col-sm-6">
                <div class="made_india_des wow fadeInUp" data-wow-delay="0.5s">
                    <p>India has led the world in various fields over the time. We are proud to say that this initiative by Prosper will be counted Among it. All our machines and products are made in India for the world !</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-6 col-md-6 col-sm-6">
                <div class="made_india_img wow fadeInUp" data-wow-delay="0.5s">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/makeindiaindia.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
