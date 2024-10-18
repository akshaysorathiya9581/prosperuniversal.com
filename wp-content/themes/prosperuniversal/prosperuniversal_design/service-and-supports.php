<?php
@session_start();
require("includes/connection.php");
require("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
<?php require("includes/tb_meta.php"); ?>
<title><?php echo $page_title;?></title>
<meta name="keywords" content="<?php echo $metakey;?>" />
<meta name="Keyphrases" content="<?php echo $metakeyphrases;?>" />
<meta name="description" content="<?php echo $metadesc;?>" />
<?php require("includes/tb_css.php"); ?>
</head>
<body>
<?php require("includes/loading.php"); ?>
<?php require("includes/tb_header.php"); ?>
<section id="prosper_page_banner" style="background-image: url(<?php echo $datapath; ?>images/after_sales_banner.jpg)">
  <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
  <div class="container position-relative">
    <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
      <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
        <h1>After Sales Services</h1>
      </div>
      <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
        <p>Over the years, our commitment to excellence and passion for clients has been recognized.</p>
      </div>
    </div>
  </div>
</section>
<section id="about_top">
  <div class="container">
    <div class="row">
      <div class="col-xxl-7 col-xl-9 col-xl-push-1 col-lg-8 col-md-8 col-sm-12 col-12">
        <div class="about_top_content">
          <h2 class="animation-style1 wow fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">WHAT WE OFFER</h2>
          <h3 class="wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">We offer a complete maintenance service on all our machines.</h3>
          <p class="wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">We are pleased to introduce ourselves as one of the <strong>fastest-growing</strong> pulp molding machine manufacturing Company located in Rajkot, Gujarat, India. The company is formed purely to cater to the ever-increasing demand <strong>for fully automatic pulp machines and paper Cutlery-making machine requirements across the globe</strong>. We take pride in our reputation of reliability and live by it every moment.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="prosper_service" class="paragraph">
  <div class="service_content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-9 col-xxl-7">
          <h2 class="title" appear>Well, Qualified and company trained Engineers for <span>perfect installation</span> and <span>prompt solution</span> to any kind of complaints.</h2>
        </div>
        <div class="col-lg-5 col-sm-12 col-md-5 col-xl-5 col-xxl-5 image"> <img class="home_avens_img" src="<?php echo $datapath; ?>images/services.jpg" alt=""> </div>
        <div class="col-lg-1 col-sm-12 col-md-1 col-xl-1 d-none d-md-flex"></div>
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-6 col-xxl-6">
          <div class="right_service_content">
            <h4>Dedicated, Qualified, Responsible & Experienced Engineers in all Divisions of Service</h4>
            <p>At Prosper Universal Private Limited, our commitment to customer satisfaction doesn't end with the sale. We believe in providing comprehensive after-sales service to ensure that your paper cutlery-making machines continue to perform at their best, year after year. Our services are designed to ensure that your machines operate smoothly and efficiently, allowing you to focus on growing your business. With <strong>Prosper Universal Private Limited</strong>, you can trust that you're not just buying a machine - you're investing in a partnership that will help you succeed. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /*?><section id="services_step">
  <div class="container">
    <div class="row"> 
    
      <div class="col-xl-4 col-lg-4 ">
        <div class="steps">
          <div class="shape1"><img src="https://html.favdevs.com/translo/assets/img/shape/working-process-v1-shape1.png" alt=""></div>
          <div class="working-process-one__single-top">
            <div class="icon"> <i class="icon-diamond"></i> </div>
            <div class="text">
              <h2>TRAINED PERSONNEL</h2>
            </div>
          </div>
          <div class="working-process-one__single-content">
            <p>Our engineers and technicians are intensively trained to handle the costly, sophisticated air-conditioning equipment and Accessories.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php */?><div class="tp-feature__area p-relative">
  <div class="container">
    <div class="tp-feature__border">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
          <div class="tp-feature__item feature-col-1 d-flex align-items-center">
            <div class="tp-feature__content">
              <h4 class="tp-feature__title">TRAINED PERSONNEL</h4>
              <p>We are immensely proud of the exceptional training and expertise possessed by our engineers and technicians. Every member of our technical team goes through comprehensive and rigorous training programs specifically tailored to equip them with in-depth knowledge of the machinery and ensure proficiency in plant installation and maintenance, among other skills.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".5s">
          <div class="tp-feature__item feature-col-2  d-flex align-items-center">
            <div class="tp-feature__content">
              <h4 class="tp-feature__title">SYMPATHETIC EAR WHEN NEED</h4>
              <p>All customers who opt for our annual service solutions are offered priority service so that your calls get attended to quicker and the system is up faster.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
          <div class="tp-feature__item feature-col-3 border-none d-flex align-items-center">
				<?php /*?><div class="tp-feature__icon"> <span> <i class="icon-diamond"></i> </span> </div><?php */?>
                <div class="tp-feature__content">
              <h4 class="tp-feature__title">KEEN TO HELP</h4>
              <p>Under all our service solutions, we offer preventive maintenance checks which help in identifying problems early, preventing costly downtimes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="about_irene">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12  col-xxl-12">
        <div class="irene_details">
        
          <div class="about_img"><img src="<?php echo $datapath; ?>images/service_cycle.png"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require("includes/tb_footer.php"); ?>
<?php require("includes/scrolltotop.php"); ?>
<?php require("includes/tb_js.php"); ?>
</body>
