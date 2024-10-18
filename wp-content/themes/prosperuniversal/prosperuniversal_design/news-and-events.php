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
<section id="biguar_banner" style="background-image:url(<?php echo $datapath; ?>images/home_lets_talk_default.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="caption">
          <h1 class="fz-55">News & <br>
            Events</h1>
        </div>
      </div>
      <div class="col-lg-5 valign">
        <div class="caption_text">
          <p>We help our clients succeed by creating brand identities, digital experiences, and print materials that communicate clearly, achieve marketing goals, and look fantastic.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="news_events">
  <div class="container">
    <div class="news_title">
      <h2>News & Events</h2>
      <span class="line"></span>  </div>
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="news_biguar wow fadeInUp delay-0-3s">
          <div class="image"> <img src="<?php echo $datapath; ?>images/biguar.jpg" alt="Blog"> </div>
          <div class="content">
            <h5><a href="#">Ban on identified Single Use Plastic Items from 1st July 2022</a></h5>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="news_biguar wow fadeInUp delay-0-5s">
          <div class="image"> <img src="<?php echo $datapath; ?>images/biguar.jpg" alt="Blog"> </div>
          <div class="content">
            <h5><a href="#">Ban on identified Single Use Plastic Items from 1st July 2022</a></h5>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="news_biguar wow fadeInUp delay-0-5s">
          <div class="image"> <img src="<?php echo $datapath; ?>images/biguar.jpg" alt="Blog"> </div>
          <div class="content">
            <h5><a href="#">Ban on identified Single Use Plastic Items from 1st July 2022</a></h5>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="news_biguar wow fadeInUp delay-0-5s">
          <div class="image"> <img src="<?php echo $datapath; ?>images/biguar.jpg" alt="Blog"> </div>
          <div class="content">
            <h5><a href="#">Ban on identified Single Use Plastic Items from 1st July 2022</a></h5>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="news_biguar wow fadeInUp delay-0-5s">
          <div class="image"> <img src="<?php echo $datapath; ?>images/biguar.jpg" alt="Blog"> </div>
          <div class="content">
            <h5><a href="#">Ban on identified Single Use Plastic Items from 1st July 2022</a></h5>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="news_biguar wow fadeInUp delay-0-5s">
          <div class="image"> <img src="<?php echo $datapath; ?>images/biguar.jpg" alt="Blog"> </div>
          <div class="content">
            <h5><a href="#">Ban on identified Single Use Plastic Items from 1st July 2022</a></h5>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require("includes/tb_footer.php"); ?>
<?php require("includes/scrolltotop.php"); ?>
<?php require("includes/tb_js.php"); ?>
</body>
