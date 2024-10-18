<?php
get_header();
?>
<section id="prosper_page_banner" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)">
  <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
  <div class="container position-relative">
    <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
      <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
        <h1>Latest News</h1>
      </div>
      <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
        <p><?= get_the_title(); ?></p>
      </div>
    </div>
  </div>
</section>
<section id="news_details">
  <div class="container">
    <div class="row">
      <div class="col-xxl-7 col-xl-9 col-xl-push-1 col-lg-8 col-md-8 col-sm-12 col-12">
        <div class="about_top_content">
          <h2 class="animation-style1 wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"><?= get_the_title(); ?></h2>
          <p class="wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><?= the_content(); ?></p>
         <h3 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">The Environmental Benefits of Paper Cutlery</h3>
         <ul class="ularr wow fadeInUp animated" data-wow-delay="0.3s">
         	<?php
            foreach (get_field('benefits_of_paper_cutlery') as $benefits_of_paper_cutlery) {
         	?>
         <li><strong><?= $benefits_of_paper_cutlery['title']; ?>:</strong> <?= $benefits_of_paper_cutlery['description']; ?></li>
         <?php } ?>
        
         <h3 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Health Advantages of Paper Cutlery</h3>
         <ul class="ularr">
         <?php
         foreach(get_field('advantages_of_paper_cutlery') as $advantages_of_paper_cutlery){
         ?>	
         <li><strong><?= $advantages_of_paper_cutlery['title']; ?>:</strong> <?= $advantages_of_paper_cutlery['description']; ?></li>
         <?php } ?>
        
         </ul>
         <h3 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">The Future of Paper Cutlery</h3>
         <p class="wow fadeInUp animated" data-wow-delay="0.3s"><?= get_field('future_of_paper_cutlery'); ?></p>
        
         <h3 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Conclusion</h3>
         <p class="wow fadeInUp animated" data-wow-delay="0.3s"><?= get_field('conclusion'); ?></p>    
        </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>