<?php 
/* Template Name: Blog */
get_header();
?>

<style>
    .module-news__items .module-news__item-image:after {
    content: "";
    display: block;
     padding-bottom: 2px !important; 
    }
</style>

<div class="module-news" id="HomeSections_News">
    <div class="wrapper">
        <div class="container">
            <div class="row align-items-center justify-content-between module-news__title text-left">
                <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h2 class="headline-2 headline-2--semibold heading-font category-text-image__title"><span class="line line--red">–</span>Our <span>Latest</span> Blog</h2>
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
                'posts_per_page' => -1,
                'post_status' => 'publish',
                );

                $blog = get_posts($args);
                foreach($blog as $b_value){
                    $b_post_id = $b_value->ID;
                    $thumbnail_id = get_post_thumbnail_id($b_value->ID);
					$alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
					$image_title = get_the_title($thumbnail_id);
                ?>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <a href="<?= get_permalink($b_post_id); ?>" target="_self" class="module-news__item">
                        <div class="module-news__item-image">
                            <!--<div style="background-image: url(<?php echo get_the_post_thumbnail_url($b_post_id);?>);"></div>-->
                            <img src="<?= get_the_post_thumbnail_url($b_value->ID, 'medium'); ?>" alt="<?= esc_attr($alt_text) ?>" title="<?= esc_attr($image_title) ?>">
                        </div>
                        <div class="module-news__item-text">
                            <!-- <div class="title--tag red">June 2024</div> -->
                            <div class="title--tag red"><?= get_the_date('F Y'); ?></div>
                            <div class="title--title12"><?= get_the_title($b_post_id); ?></div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>