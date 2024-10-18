<?php 
/* Template Name: MoldDevelopment */ 
?>
<?php get_header(); ?>

<section id="prosper_page_banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/mold_banner.jpg);">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container position-relative">
        <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
            <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                <h1><?= the_title(); ?></h1>
            </div>
            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
                <?= the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section id="about_top">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-xl-push-1 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="about_top_content">
                    <h2 class="animation-style1 wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><?= get_field('molding_service_title'); ?></h2>
                    <h3 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><?= get_field('molding_service_sub_title'); ?>.</h3>
                    <div class="row">
                        <!--<div class="col-xxl-12 col-xl-6 col-xl-push-1 col-lg-8 col-md-8 col-sm-12 col-12">-->
                        <!--    <?= get_field('molding_service_description_1'); ?>-->
                        <!--</div>-->
                        <!--<div class="col-xxl-12 col-xl-6 col-xl-push-1 col-lg-8 col-md-8 col-sm-12 col-12">-->
                        <!--    <?= get_field('molding_service_description_2'); ?>-->
                        <!--</div>-->
                        <div class="col-lg-6">
                            <?= get_field('molding_service_description_1'); ?>
                        </div>
                        <div class="col-lg-6">
                            <?= get_field('molding_service_description_2'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero-wrap style3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-shape-10.jpg" alt="" class="hero-shape-one" /> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hero-shape-11.png" alt="" class="hero-shape-three" />
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="hero-img-wrap">
					<?php $mold_development_image_1 = get_field('mold_development_image_1'); ?>
                    <img class="hero-img-shape waving_left" src="<?= $mold_development_image_1['url']; ?>" alt="<?= esc_attr($mold_development_image_1['alt']) ?>" title="<?= esc_attr($mold_development_image_1['title']) ?>" />
                    <h3 class="mold_heading wow fadeInUp" data-wow-delay=".1s">Our mold development services</h3>
					<?php $mold_development_image_2 = get_field('mold_development_image_2'); ?>
                    <img class="wow slideInLeft" data-wow-delay=".1s" src="<?= $mold_development_image_2['url']; ?>" alt="<?= esc_attr($mold_development_image_2['alt']) ?>" title="<?= esc_attr($mold_development_image_2['title']) ?>" />
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="hero-content">
                    <p class="wow fadeInUp" data-wow-delay=".2s">
                        <?= get_field('mold_development_description'); ?>
                    </p>
                    <ul class="ularr">
                        <?php
                         foreach (get_field('mold_development_points') as $points) {
                        ?>
                        <li class="wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="page_inner_title textleft">
                                <div class="title_sub_sub"><?= $points['title']; ?></div>
                            </div>
                            <?= $points['description']; ?>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mold_process_steps">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-xl-12 col-lg-6 col-md-6 col-sm-6">
                <h2 style="">
                    Certainly! Here's a detailed description of <br />
                    <span>each stage in the manufacturing process</span><br />
                    of molds for paper cutlery:
                </h2>
            </div>
            <?php foreach(get_field('paper_cutlery_points') as $cutlery_points){ ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="process_step">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="process_icon">
								<img src="<?= $cutlery_points['image']['url']; ?>" alt="<?= esc_attr($cutlery_points['image']['alt']) ?>" title="<?= esc_attr($cutlery_points['image']['title']) ?>" />
							</div>
                        </div>
                        <div class="col-xxl-6 col-xl-9 col-lg-6 col-md-6 col-sm-6">
                            <div class="process_name"><?= $cutlery_points['title']; ?></div>
                            <div class="process_desc">
                                <?= $cutlery_points['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
