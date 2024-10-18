<?php
get_header();
?>

<?php
$post = get_post();
// $thumbnail_id = get_post_thumbnail_id($post->ID);
// 					   $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
// 					   $image_title = get_the_title($thumbnail_id);
?>

<section id="prosper_page_banner" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
  <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
  <div class="container position-relative">
    <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
      <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
        <h1>Latest Blog</h1>
      </div>
      <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
        <p><?= get_the_title(); ?></p>
      </div>
    </div>
  </div>
</section>

<section id="news_details">
  <div class="container">
      <h2><?= get_the_title(); ?></h2>
      <?= the_content(); ?>
  </div>
</section> 

<?php get_footer(); ?>