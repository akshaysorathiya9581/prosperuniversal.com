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
<link href="<?php echo $datapath; ?>css/fresco.css" rel="stylesheet" />
</head>
<body>
<?php require("includes/loading.php"); ?>
<?php require("includes/tb_header.php"); ?>
<section class="breadcrumbs-h  ">
  <div class="breadcrumbs-h__dropdown text-3"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="breadcrumbs-h__wrap">
          <ol class="breadcrumbs-h__list txt--p5">
            <li> <a href="<?php echo $sitepath; ?>"> <span>Home</span> </a> </li>
            <li> <a href="<?php echo $sitepath; ?>"> <span>Machines</span> </a> </li>
            <li> <span>Paper Cuttlery Machine</span> </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="machine_details_2024">
  <div class="container">
    <div class="row justify-content-between machine_one">
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-12 col-xxl-5">
        <div class="machine_part_1">
          <div class="row justify-content-between">
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 col-xxl-5">
              <h1 class="headline-1 headline-1--semibold machine_title"> <span class="line line--red">–</span>
                <div class="machine_name">Sealing <span>Machine</span> & Punching Process</div>
                <div class="machine_model_number">Model No. PR7ON - 400 PART - 1</div>
              </h1>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-8 col-xxl-5">
              <div class="machine_right_content">
                <p>This machine has nine stations dedicated to installing paper rollers, converting nine distinct papers into a cohesive layer. It automatically applies glue to hold the papers together securely. The compact and durable device applies heat and pressure to create a strong bond, with heating elements and a pressure mechanism controlled via a control panel. Safety features include emergency stop buttons, safety guards, and sensors. Regular maintenance is necessary for continued operation.</p>
                <p>The next manufacturing process involves feeding the layered raw material into the Punching machine, which utilizes advanced servo motors to transform the raw material into a finished product based on mold specifications, resulting in a high-quality product meeting strict standards for consistency and accuracy.</p>
                <p><strong>Mold Size: 400*500MM Mold Raw Material: D2/OHNS</strong></p>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 col-xxl-5">
              <div class="machine_cycle">
                <div class="pm_title text-start">Machine Cycle</div>
                <img src="<?php echo $datapath; ?>images/machine_process.png"> </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-8 col-xxl-5">
              <div class="machine_image"><img src="<?php echo $datapath; ?>images/sealing_machine.png"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-between">
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-12 col-xxl-5">
        <div class="machine_part_1">
          <div class="row justify-content-end">
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 col-xxl-5">
              <h1 class="headline-1 headline-1--semibold machine_title"> <span class="line line--red">–</span>
                <div class="machine_name">Forming <span>Machine</span></div>
                <div class="machine_model_number">Model No. PR7ON - 400 PART - 2</div>
              </h1>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-8 col-xxl-5">
              <div class="machine_right_content">
                <p>A storage mold facilitates the transfer of products from the punching machine to the forming machine. The forming machine, featuring two forming stations, is primarily responsible for embossing the product. Utilizing electric heating technology, the nozzle retrieves the product from the storage mold and transports it to the hydraulic pressing mold for embossing.</p>
                <p>Following the completion of the embossing process, the product is deposited onto the deep-link chain conveyor belt and automatically introduced into the rotating holding assembly for the coating process. This assembly houses a coating tank containing a mixture of oil and water. The tank is elevated, immersing the products in the solution. Any surplus coating is subsequently eliminated using a vacuum connected to a blower. Subsequently, the product undergoes additional heating in the heating section through a dry air heating system.</p>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-4 col-xxl-5">
              <div class="machine_cycle">
                <div class="pm_title text-start">Machine Cycle</div>
                <img src="<?php echo $datapath; ?>images/machine_process_2.png"> </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-8 col-xxl-5">
              <div class="machine_image"><img src="<?php echo $datapath; ?>images/forming_machine.png"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="machine_prosper">
  <div class="container">
    <div class="row justify-content-between machine_tools">
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-7 col-xxl-5">
        <div class="machine_features">
          <div class="pm_title text-start">Machine Features</div>
          <ul class="ularr">
          <li>Layer Coating the raw paper with environmental protection glue, Hot pressing, and laminating 6 to 9 layers of paper to 1 layer paper.</li>
          <li>Out of shape with die cutting mold (Cutting mold is replaceable) Max Speed 400pcs/Min, Semi-finished products neatly lined up and waiting for collecting</li>
                <li>The current machine is operated through a programmable logic controller (PLC) and runs on a servo motor-based system.</li>
                <li>It features a designated walking path for an operator, separate servo boxes at each station, an in-built toolkit and panel, and a body structure made of mild steel with a bolting system.</li>
                <li>The machine has a total of nine stations, each with three stations, and boasts an adjustable roller and bolting system.</li>
                <li>This high-speed machine has minimal power consumption and maintenance requirements.</li>
                <li>Two forming stations save product cycle time, with a machine that consumes less power and is PLC-based for easy operation.</li>
                <li>It has five heating stations with ceramic heaters, safety sensors, and automatic stacking. If the forming station is off, the heating system will still function to release the products. Less Electricity Consumption, etc. </li>
              </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-5 col-xxl-5">
        <div class="machine_products">
          <div class="pm_title text-start">Applicable Products</div>
          <ul id="productos">
            <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/1.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/cutlery/1.jpg"></a> </li>
            <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/2.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/cutlery/2.jpg"></a>  </li>
            <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/3.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/cutlery/3.jpg"></a>  </li>
            <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/4.jpg" class="fresco" data-fresco-group="Example"><img src="<?php echo $datapath; ?>images/cutlery/4.jpg"></a>  </li>
            <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/5.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/cutlery/5.jpg"></a>  </li>
            <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/6.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/cutlery/6.jpg"></a>  </li>
             <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/7.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/cutlery/7.jpg"></a>  </li>
              <li class="text-center"><a href="<?php echo $datapath; ?>images/cutlery/8.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/cutlery/8.jpg"></a>  </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="machine_details">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-7 col-xxl-8">
        <div class="tabulation">
          <div class="table_heading">
            <h6>Technical <span>Details</span></h6>
          </div>
          <table  class="table_one">
            <?php /*?><tr>
              <td rowspan="4" class="biguar_bg"><strong>Features &amp; Characteristics</strong></td>
              <td colspan="2">Layer Coating the raw paper with environmental protection glue.</td>
            </tr>
            <tr>
              <td colspan="2">Hot pressing and laminating 6 to 9 layers paper to 1 layer papar.</td>
            </tr>
            <tr>
              <td colspan="2">Out of shape with die cutting mold (Cutting mold is replaceable) Max Speed 400pcs/Min</td>
            </tr>
            <tr>
              <td colspan="2">Semi-finished products neatly lined up and waiting for collecting</td>
            </tr><?php */?>
            <tr>
              <td rowspan="5" class="biguar_bg"><strong>Material</strong></td>
              <td>Applicable Products</td>
              <td>All type of paper cutlery</td>
            </tr>
            <tr>
              <td>Raw Material</td>
              <td>Food Grade Paper &amp; Food Grade Glue <br/>
                (Raw paper is similar to paper straw raw material without PE coating)</td>
            </tr>
            <tr>
              <td>Forming Pressure</td>
              <td>70T</td>
            </tr>
            <tr>
              <td>Paper Thickness of Standard Mold</td>
              <td>800-1000gsm</td>
            </tr>
            <tr>
              <td>Max Paper Layers</td>
              <td>9 Layers</td>
            </tr>
            <tr>
              <td rowspan="2" class="biguar_bg"><strong>Speed</strong></td>
              <td>Cutting Speed</td>
              <td>300-400pcs/Min</td>
            </tr>
            <tr>
              <td>Forming Speed</td>
              <td>170-210pcs/Min</td>
            </tr>
            <tr>
              <td class="biguar_bg"><strong>Total Power</strong></td>
              <td colspan="2">70 KW</td>
            </tr>
            <tr>
              <td rowspan="2" class="biguar_bg"><strong>Required Air and Power Supply</strong></td>
              <td>Air</td>
              <td>1.0m3/Min</td>
            </tr>
            <tr>
              <td>Power Supply</td>
              <td>4200V/ 50HZ(220V60HZ) <br/>
                (3 Phase, 4 Wire) 380V, 50HZ, 3 Phase</td>
            </tr>
            <tr>
              <td rowspan="2" class="biguar_bg"><strong>Installation Area Weight</strong></td>
              <td>Overall Size</td>
              <td>150 M2</td>
            </tr>
            <tr>
              <td>Gross Weight </td>
              <td>12 MT</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-5 col-xxl-4">
        <div class="tabulation">
          <div class="table_heading">
            <h6>Product <span>Application</span></h6>
          </div>
          <ul id="productos-ico3">
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/hotel.svg">
              <p>Hotels</p>
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/industry.svg">
              <p>Schools & Collages</p>
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/outlets.svg">
              <p>Food &amp; Beverage Factory</p>
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/hotel.svg">
              <p>Restaurant</p>
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/events.svg">
              <p>Exhibition & Events</p>
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/outlets.svg">
              <p>Railway & Airports</p>
            </li>
          </ul>
          <?php /*?><div class="table_heading mt-4">
            <h6>Feature <span>Characteristics</span></h6>
          </div>
          <ul class="list">
            <li>Layer Coating the raw paper with environmental protection glue.</li>
            <li>Hot pressing and laminating 6 to 9 layers paper to 1 layer papar.</li>
            <li>Out of shape with die cutting mold (Cutting mold is replaceable) Max Speed 400pcs/Min</li>
            <li>Semi-finished products neatly lined up and waiting for collecting</li>
          </ul><?php */?>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="bagasse_life">
  <div class="container">
    <div class="row">
      <div class="sec-title text-center">
        <h2>Bagasse <span>Pulp Paper</span> Life Cycle</h2>
        <p>Prosper products is made from sugarcane bagasse pulp without any plastic or wax coating. It is biodegradable, compostable, and has a strong integrity to hold shape when used with solid and liquid food.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12  col-xxl-12">
        <div class="bagasse_cycle_details">
          <div class="cycle_img"><img src="<?php echo $datapath; ?>images/bagasse_process.png"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sMainSection sProductSpec">
  <div class="container">
  <div class="sProductCard">
    <div class="row">
      <div class="col-lg-12 col-xs-6 col-sm-12 col-md-12">
        <div class="sProductDetails hhh">
          <h2>Product <span>Features</span></h2>
          <p>Products are made from sugarcane bagasse pulp without any plastic or wax coating. It is biodegradable, compostable, and has a strong integrity to hold shape when used with solid and liquid food.</p>
          <ul>
            <li> <img src="<?php echo $datapath; ?>images/icon/oil-resistant.png" alt="">
              <p>Oil Resistant</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/freezer-free.png" alt="">
              <p>Freezer Free</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/biodegradable.png" alt="">
              <p>Biodegradable & Compostable</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/strength.png" alt="">
              <p>100% Strength & Durable</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/waterproof_1.png" alt="">
              <p>Water Resistant</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/microwave-safe.png" alt="">
              <p>Microwave Safe</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/sugarcane-bagasse.png" alt="">
              <p>100% Sugarcane Bagasse</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/quality-products.png" alt="">
              <p>Consistent with Quality Product</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/no-plastic.png" alt="">
              <p>No Plastic</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/eco-friendly.png" alt="">
              <p>Environment Friendly</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/hygenic-healthy.png" alt="">
              <p>Hygienic & Healthy</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/made-in-india.png" alt="">
              <p>Made In India</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /*?><section class="gap">
  <div class="container">
    <div class="request-quote two m-0" style="background-image: url(<?php echo $datapath; ?>images/request-quote.jpg);">
      <div class="row">
        <div class="col-lg-6">
          <div class="heading">
            <p>Request A Quote</p>
            <div class="line"></div>
            <h2>Talk about how we can help you to setup Pulp Molding Machines !</h2>
            <h6>We offer complete solutions to customer in the eco-friendly sugarcane bagasse machine project,including paper cutlery machine, and printing machine etc.</h6>
          </div>
        </div>
        <div class="col-lg-6">
          <form class="request-quote-form">
            <input type="text" name="Complete Name" placeholder="Complete Name">
            <input type="text" name="Email Address" placeholder="Email Address">
            <input type="text" name="Phone No" placeholder="Phone No">
            <textarea placeholder="Message"></textarea>
            <button class="button">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section><?php */?>
<?php require("includes/tb_footer.php"); ?>
<?php require("includes/scrolltotop.php"); ?>
<?php require("includes/tb_js.php"); ?>
<script src="<?php echo $datapath; ?>js/fresco.js" defer></script>
</body>
