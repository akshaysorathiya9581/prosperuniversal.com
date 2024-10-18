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
<section id="prosper_page_banner" style="background-image: url(<?php echo $datapath; ?>images/about-banner.jpg)">
  <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
  <div class="container position-relative">
    <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
      <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
        <h1>About Prosper</h1>
      </div>
      <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
        <p>Over the years, our commitment to excellence and passion for clients has been recognized.</p>
      </div>
    </div>
  </div>
</section>
<?php /*?><section id="biguar_banner" style="background-image:url(<?php echo $datapath; ?>images/about-banner.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="caption">
          <h6 class="sub-title">About Us <span>
            <div class="brd"></div>
            </span></h6>
          <h1 class="fz-55">Prosper Group</h1>
        </div>
      </div>
      <div class="col-lg-5 valign">
        <div class="caption_text">
          <p>Over the years, our commitment to excellence and passion for clients has been recognized.</p>
        </div>
      </div>
    </div>
  </div>
</section><?php */?>
<section id="about_prosper_group">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
        <div class="experience-item"> <span>Innovative mindset</span>
          <h2 class="title wow slideInLeft" data-wow-delay=".1s">World-Class Quality Driven By Vertically-Integrated Manufacturing</h2>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-lg-1">
        <div class="experience-item"><br/>
          <br/>
          <p class="blockquote wow fadeInUp" data-wow-delay=".1s" style="font-weight:bolder">We are thus considered as top pulp Molding Machine Manufacturing Company</p>
          <p class="wow fadeInUp" data-wow-delay=".2s">A leading manufacturer of state-of-the-art pulp molding machinery and molds. With over 15 years of experience in the industry, the company has perfected the art of manufacturing top-quality machinery that ensures efficient and high-quality production of pulp-based products. Now the company is expanding the production department to manufacture paper cutlery-making machines.</p>
        </div>
      </div>
    </div>
  </div>
</section>
 <section class="hero-wrap style3">
                <img src="<?php echo $datapath; ?>images/hero-shape-10.jpg" alt="" class="hero-shape-one">
                <img src="<?php echo $datapath; ?>images/hero-shape-11.png" alt="" class="hero-shape-three">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-6">
                            <div class="hero-img-wrap">
                                <img src="<?php echo $datapath; ?>images/hero-shape-5.png" alt="" class="hero-img-shape waving_left">
                                <img class="wow slideInLeft" data-wow-delay=".1s" src="<?php echo $datapath; ?>images/pulp-molding-machine.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hero-content">
                                <h3 class="wow fadeInUp" data-wow-delay=".1s">Prosper has brought a revolution to the <br/><span>Pulp Molding Machine Industry.</span></h3>
            <p class="wow fadeInUp" data-wow-delay=".2s">PROSPER GROUP has been started in 2007. Firstly, we started with an export of agro-products & also, used to import and manufacture the forming machinery. We have numerous years of experience in the machinery line. We are the first to start working in a Fully Automatic Biodegradable Technology Machinery in India. Nowadays, the plastic pollution problem is increasing day by day. That is why we have brainstormed about the problem and started working on it. We thought and researched how to resolve this problem and found the Biodegradable Tableware Making Machinery. We professionally work with the expertise of World Pulp Molding Technology.</p>
            <p class="wow fadeInUp" data-wow-delay=".3s">Our commitment to innovation, quality, and sustainability has been the cornerstone of our success. As the global movement against single-use plastics gained momentum, Prosper Universal Private Limited recognized the need to diversify its product offerings. With a deep commitment to environmental sustainability, the company decided to expand its portfolio to include paper cutlery machines.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php /*?><section class="sfluence-about__area">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="sfluence-about__content">
          <div class="sfluence-about__inner"> <span class="sec-sub-title-3 has_char_anim">Our History</span>
            <h3 class="sec-title-7 skew-up">Prosper has brought a revolution in the <br/><span>Pulp Molding Machine industry.</span></h3>
            <p>PROSPER GROUP has been started in 2007. Firstly, we started with an export of agro-products & also, used to import and manufacture the forming machinery. We have numerous years of experience in the machinery line. We are the first to start working in a Fully Automatic Biodegradable Technology Machinery in India. Nowadays, the plastic pollution problem is increasing day by day. That is why we have brainstormed about the problem and started working on it. We thought and researched how to resolve this problem and found the Biodegradable Tableware Making Machinery. We professionally work with the expertise of World Pulp Molding Technology.</p>
            <p>Our commitment to innovation, quality, and sustainability has been the cornerstone of our success. As the global movement against single-use plastics gained momentum, Prosper Universal Private Limited recognized the need to diversify its product offerings. With a deep commitment to environmental sustainability, the company decided to expand its portfolio to include paper cutlery machines.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cf_image"> <img src="<?php echo $datapath; ?>images/services.jpg" alt="" class="img"> </div>
</section><?php */?>
<section id="expansion_prosper">
  <div class="container">
    <div class="row">
      <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-8 col-sm-12 col-12">
        <h2 class="heading">Expansion into Manufacturing <span>Paper Cutlery Machines</span></h2>
      </div>
      <div class="col-xxl-7 col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
        <div class="row">
          <div class="col-xxl-7 col-xl-6  col-xl-push-0 col-lg-7 col-md-8 col-sm-12 col-12 position-relative">
            <p>We are thrilled to announce that we have expanded our business to include the manufacturing of state-of-the-art paper cutlery-making machines. Our passion for sustainability has driven us to take this step forward in providing eco-friendly solutions to our customers. We are committed to promoting sustainability and reducing plastic waste by offering biodegradable paper cutlery as a sustainable alternative to plastic cutlery. </p>
            <p>Our EPDD can assist customers in Raw Material Research, Product Design, Quick Sample Development, and Limited Production of Samples for Market tests. </p>
            <p>As plastic cutlery is being banned, there is an increasing demand for biodegradable paper cutlery. To meet this demand, we have established a new facility that manufactures paper cutlery-making machines.</p>
            <p>We invite you to join us in our mission to promote a greener future by reducing plastic waste and its harmful impact on the environment. By switching to biodegradable paper cutlery, you can play your part in creating a sustainable future for generations to come.</p>
          </div>
          <div class="col-xxl-7 col-xl-6 col-lg-5 col-md-8 col-sm-12 col-12 text-center position-relative">
          <div class="expansion_img"><img src="<?php echo $datapath; ?>images/machine_1.jpg"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /*?><section id="green">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="green_img">
          <div class="green_heading">
            <h4>The Strategy of <span>Our History</span>We believe in Quality & Innovation</h4>
          </div>
          <img src="<?php echo $datapath; ?>images/quality_innovation_global.jpg"> </div>
      </div>
    </div>
    <div class="green_main">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-4">
          <div class="green_icon wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"> </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-8">
          <div class="green_des wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
            <p>Founded in 2007 Prosper Group started with a vision to revolutionize the food packaging industry by providing eco-friendly alternatives to plastic. Our sugarcane bagasse tableware-making machines quickly gained recognition for their efficiency, reliability, and environmental benefits, setting new standards in the industry.</p>
            <p>Prosper Universal Pvt. Ltd. is a Professional Machine Manufacturing Company, with High-Quality Equipment and expert Measuring Methods, and is dedicated to Extensive Training and Professional Development of Employees.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php */?>
<?php /*?><section id="about_irene">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="irene_details">
          <h2>Our History<!--<span>-</span>--></h2>
          <h5>working together to develop innovative solutions</h5>
          <p>Founded in 2007 Prosper Group started with a vision to revolutionize the food packaging industry by providing eco-friendly alternatives to plastic. Our sugarcane bagasse tableware-making machines quickly gained recognition for their efficiency, reliability, and environmental benefits, setting new standards in the industry.</p>
          <p>Prosper Universal Pvt. Ltd. is a Professional Machine Manufacturing Company, with High-Quality Equipment and expert Measuring Methods, and is dedicated to Extensive Training and Professional Development of Employees.</p>
        
        </div>
      </div>
      <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
        <div class="irene_details">
          <p>Firstly, we started with an export of agro-products & also, used to import and manufacture the forming machinery. We are having numerous years of experience in machinery line. Now, we are the first to start working in Fully Automatic Biodegradable Technology Machinery in India. Nowadays, plastic pollution problem is getting increased day by day. That is why we have brainstormed about the problem and started working on it. We thought and researched how we can resolve this problem and we have found the Biodegradable Tableware Making Machinery. We professionally work in the expertise of World Pulp Molding Technology.</p>
          <p>Today, Prosper Group offers a range of Pulp Forming Equipment (Pulp Molding Tableware Production Line) to meet customers’ specific needs and requirements with Innovative Design, Processing Techniques and Sophisticated Control
            Due to huge biodegradable products requirements, bagasse pulp molding market is growing rapidly in the market demand. We setup this new facility to develop new pulp molding process technology, manufacturing high efficient stock preparation equipment and high throughput forming machine. </p>
          <p>Prosper Group began its journey as a manufacturer of sugarcane bagasse tableware making machines, pioneering sustainable solutions for the food packaging industry. Our commitment to innovation, quality, and sustainability has been the cornerstone of our success.</p>
        </div>
      </div>
    </div>
  </div>
</section><?php */?>
<?php /*?><section class="fact-counter-two">
  <div class="container">
    <div class="row"> 
      <!--Start Fact Counter Two Single-->
      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
        <div class="fact-counter-two__single">
          <div class="icon-box"> <span class="icon-special-shipments"><i class="icon-diamond"></i></span> </div>
          <div class="fact-counter-two__single-inner">
            <h2 class="count"><span class="odometer">15</span><span class="plus">+</span></h2>
            <div class="text">
              <p>Years of Experience</p>
            </div>
          </div>
        </div>
      </div>
      <!--End Fact Counter Two Single--> 
      
      <!--Start Fact Counter Two Single-->
      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
        <div class="fact-counter-two__single">
          <div class="icon-box"> <span class="icon-global-network"><i class="icon-diamond"></i></span> </div>
          <div class="fact-counter-two__single-inner">
            <h2 class="count"><span class="odometer">200</span><span class="plus">+</span></h2>
            <div class="text">
              <p>Employees</p>
            </div>
          </div>
        </div>
      </div>
      <!--End Fact Counter Two Single--> 
      
      <!--Start Fact Counter Two Single-->
      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
        <div class="fact-counter-two__single">
          <div class="icon-box"> <span class="icon-satisfied3"><i class="icon-diamond"></i></span> </div>
          <div class="fact-counter-two__single-inner">
            <h2 class="count"><span class="odometer">1700</span><span class="plus">+</span></h2>
            <div class="text">
              <p>Satisfied Clients</p>
            </div>
          </div>
        </div>
      </div>
      <!--End Fact Counter Two Single--> 
      
      <!--Start Fact Counter Two Single-->
      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
        <div class="fact-counter-two__single">
          <div class="icon-box"> <span class="icon-support"><i class="icon-diamond"></i></span> </div>
          <div class="fact-counter-two__single-inner">
            <h2 class="count"><span class="odometer">25</span><span class="plus">+</span></h2>
            <div class="text">
              <p>Countires We Export</p>
            </div>
          </div>
        </div>
      </div>
      <!--End Fact Counter Two Single--> 
    </div>
  </div>
</section><?php */?>
<section class="statements-section sec-pad bg-color-1">
  <div class="container">
    <div class="tabs-box">
      <div class="tab-btn-box centred">
        <ul class="tab-btns tab-buttons clearfix">
          <li class="tab-btn active-btn" data-tab="#tab-1">
            <div class="icon-box"><img class="icon" src="<?php echo $datapath; ?>images/mission.png"></div>
            <h4>Mission Statement</h4>
          </li>
          <li class="tab-btn" data-tab="#tab-2">
            <div class="icon-box"><img class="icon" src="<?php echo $datapath; ?>images/vission.png"></div>
            <h4>Vision Statement</h4>
          </li>
          <li class="tab-btn" data-tab="#tab-3">
            <div class="icon-box"><img class="icon" src="<?php echo $datapath; ?>images/value.png"></div>
            <h4>Value Statement</h4>
          </li>
        </ul>
      </div>
      <div class="tabs-content">
        <div class="tab active-tab" id="tab-1">
          <div class="content-box">
            <div class="bg-layer" style="background-image: url(<?php echo $datapath; ?>images/mission_bg.jpg);"></div>
            <span class="big-text">Mission Statement</span>
            <div class="inner-box">
              <h2>To Exceed Customer's Expectations in Quality Delivery & Cost.</h2>
              <p>To empower businesses worldwide with biodegradable product solutions by providing innovative and efficient paper cutlery-making machines. We are dedicated to reducing plastic waste, promoting environmental stewardship, and exceeding customer expectations through quality, reliability, and continuous innovation.</p>
            </div>
          </div>
        </div>
        <div class="tab" id="tab-2">
          <div class="content-box">
            <div class="bg-layer" style="background-image: url(<?php echo $datapath; ?>images/vision_bg.jpg);"></div>
            <span class="big-text">Vision Statement</span>
            <div class="inner-box">
              <p>To be a global leader in providing biodegradable solutions in paper cutlery, tableware products, and packaging solutions, driving the transition towards a plastic-free future. We envision a world where eco-friendly paper cutlery is the norm, and our innovative machines play a pivotal role in shaping a more sustainable and greener planet for future generations."</p>
            </div>
          </div>
        </div>
        <div class="tab" id="tab-3">
          <div class="content-box">
            <div class="bg-layer" style="background-image: url(<?php echo $datapath; ?>images/values_bg.jpg);"></div>
            <span class="big-text">Value Statement</span>
            <div class="inner-box">
              <p>We're committed to sustainability, innovation, quality, customer focus, integrity, environmental responsibility, teamwork, and continuous improvement</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="prosper_infra" style="background: url(<?php echo $datapath; ?>images/plant.jpg) no-repeat fixed top center / cover !important;">
    <div class="auto-container">
      <div class="row justify-content-end">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6" style="background: rgba(165,205,57,0.7);
padding: 40px;">
            <div class="infra_heading">
              <h2>World Class State of Art manufacturing unit</h2>
            </div>
            <p class="text">At Prosper Universal Pvt. Ltd. we have invested in a state-of-the-art manufacturing facility that is specifically designed for the production of paper cutlery-making machines. Our facility is equipped with the latest technology and machinery to ensure that we can deliver high-quality machines that meet the needs of our customers. Our well-built and richly equipped factory occupies 90,000 sq.ft. and has the latest CNC - WMC machines and technologies.</p>
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
          <p>We are continually investing in development and productivity
            improvement methods to make goods reach the world's farthest
            corners, Today, we have an established overseas network supplying
            superior packaging material for various diverse industries.</p>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-7">
        <div class="export_network"><img src="<?php echo $datapath; ?>images/export-map.png" alt=""></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="prosper_experience">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
        <h2 class="heading wow fadeInUp" data-wow-delay=".1s"> Delivering value since 2007  <span>Our Core Values</span></h2>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <div class="experience-item wow fadeInUp" data-wow-delay=".3s">
            <p>Our value statement reflects our core values and commitment to customers, employees, and the environment. We're dedicated to sustainability, reducing plastic waste, and promoting eco-friendly practices. We strive to develop innovative solutions that meet the evolving needs of our customers.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 wow fadeIn" data-wow-delay=".4s">
          <div class="experience_item_content wow fadeInUp" data-wow-delay=".1s">
            <div class="icon_img"> <img src="<?php echo $datapath; ?>images/icon_1.png"> </div>
            <div class="icon_head">
              <div class="title">Quality Control</div>
              <p>We take pride in delivering high-quality products and services that exceed our customers' expectations.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".5s">
          <div class="experience_item_content wow fadeInUp" data-wow-delay=".2s">
            <div class="icon_img"> <img src="<?php echo $datapath; ?>images/customer_focus.png"> </div>
            <div class="icon_head">
              <div class="title">Customer Focus</div>
              <p>Our customers are at the heart of our business, and we are dedicated to providing them with exceptional service and support.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".6s">
          <div class="experience_item_content wow fadeInUp" data-wow-delay=".3s">
            <div class="icon_img"> <img src="<?php echo $datapath; ?>images/integrity.png"></div>
            <div class="icon_head">
              <div class="title">Integrity</div>
              <p>We conduct our business with honesty, transparency, and respect for all stakeholders.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 wow fadeIn" data-wow-delay=".4s">
          <div class="experience_item_content wow fadeInUp" data-wow-delay=".1s">
            <div class="icon_img"> <img src="<?php echo $datapath; ?>images/environmental.png"> </div>
            <div class="icon_head">
              <div class="title">Environmental Responsibility</div>
              <p>We are committed to minimizing our environmental impact and promoting environmental stewardship.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".5s">
          <div class="experience_item_content wow fadeInUp" data-wow-delay=".2s">
            <div class="icon_img"> <img src="<?php echo $datapath; ?>images/teamworks.png"> </div>
            <div class="icon_head">
              <div class="title">Teamwork</div>
              <p>We value collaboration and teamwork, both internally and with our partners, to achieve common goals.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 iconchoose wow fadeIn" data-wow-delay=".6s">
          <div class="experience_item_content wow fadeInUp" data-wow-delay=".3s">
            <div class="icon_img"> <img src="<?php echo $datapath; ?>images/continuous.png"></div>
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
					<div class="col-xxl-6 col-xl-12 col-lg-6 col-md-6 col-sm-6">
						<div class="made_india_heading wow fadeInUp" data-wow-delay="0.5s">
							<h2>Made in india</h2>
							<div class="p_bdr2"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-6 col-xl-12 col-lg-6 col-md-6 col-sm-6">
						<div class="made_india_des wow fadeInUp" data-wow-delay="0.5s">
							<p>India has led the world in various fields over the time. We are proud to say that this initiative by Prosper will be counted Among it. All our machines and products are made in India for the world !</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-6 col-xl-12 col-lg-6 col-md-6 col-sm-6">
						<div class="made_india_img wow fadeInUp" data-wow-delay="0.5s">
							<img src="<?php echo $datapath; ?>images/makeindiaindia.png" />
						</div>
					</div>
				</div>
			</div>
		</section>

<?php require("includes/tb_footer.php"); ?>
<?php require("includes/scrolltotop.php"); ?>
<?php require("includes/tb_js.php"); ?>
</body>
