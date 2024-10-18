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
            <li> <span>Packing Machine</span> </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="machine_prosper">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-5 col-xxl-5">
        <h1 class="headline-1 headline-1--semibold machine_title"> <span class="line line--red">–</span>
          <div class="machine_name">Spoon, Napkin, Knife, Fork <span>automatic packing Machine</span></div>
          <div class="machine_model_number">Model No. PR7ON - BN - 8500</div>
        </h1>
        <p>We specialize in designing and manufacturing high-quality automatic packing machines for Spoons, Napkins, knives, and forks. With our cutting-edge technology and innovative solutions, we help businesses streamline their packaging processes, increase efficiency, and reduce labor costs.</p>
        <p>Our paper napkin and paper cutlery packing machines are designed for various sizes and varieties, and paper spoons, forks, and knives. With customizable settings, advanced features, from single picks to bulk packaging, quick and precise packaging, and, optimal use of materials. our machines can deliver consistent results.</p>
      </div>
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-7 col-xxl-6 category-text-image__image"><img src="<?php echo $datapath; ?>images/packing-machine.jpg"> 
      <div class="row">
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-9 col-xxl-5">
        <div class="machine_products" style="margin-top:10px;">
          <div class="pm_title text-left">Applicable Products</div>
          <ul id="productos">
            <li class="text-center"><a href="<?php echo $datapath; ?>images/machine/packing_p_1.jpg" class="fresco" data-fresco-group="Example"> <img src="<?php echo $datapath; ?>images/machine/packing_p_1.jpg"></a>
            </li>
            <li class="text-center"> <a href="<?php echo $datapath; ?>images/machine/packing_p_2.jpg" class="fresco" data-fresco-group="Example"><img src="<?php echo $datapath; ?>images/machine/packing_p_2.jpg"></a>
            </li>
            <li class="text-center"> <a href="<?php echo $datapath; ?>images/machine/packing_p_3.jpg" class="fresco" data-fresco-group="Example"><img src="<?php echo $datapath; ?>images/machine/packing_p_3.jpg"></a>
            </li>
            <li class="text-center"> <a href="<?php echo $datapath; ?>images/machine/packing_p_4.jpg" class="fresco" data-fresco-group="Example"><img src="<?php echo $datapath; ?>images/machine/packing_p_4.jpg"></a>
            </li>
           <?php /*?> <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_5.jpg">
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_6.jpg">
            </li><?php */?>
          </ul>
        </div>
      </div>
      </div>
      </div>
    </div>
    <?php /*?><div class="row justify-content-between machine_tools">
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-12 col-xxl-5">
        <div class="machine_products">
          <div class="pm_title text-center">Applicable Products</div>
          <ul id="productos">
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_1.jpg">
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_2.jpg">
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_3.jpg">
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_4.jpg">
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_5.jpg">
            </li>
            <li class="text-center"> <img src="<?php echo $datapath; ?>images/machine/packing_p_6.jpg">
            </li>
          </ul>
        </div>
      </div>
    </div><?php */?>
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
          <table class="table_one">
            <tr>
              <td><strong>MACHINE MODEL</strong></td>
              <td>BN - 8500</td>
            </tr>
            <tr>
              <td>Packing Type</td>
              <td>Trilateral closure H</td>
            </tr>
            <tr>
              <td>Tissue Length</td>
              <td>160-330mm</td>
            </tr>
            <tr>
              <td>Tissue Width</td>
              <td>120-400mm</td>
            </tr>
            <tr>
              <td>Packing Film Thickness</td>
              <td>0.018-0.06mm</td>
            </tr>
            <tr>
              <td>Max. Film Width</td>
              <td>230mm</td>
            </tr>
            <tr>
              <td>Bag Length</td>
              <td>90-330mm</td>
            </tr>
            <tr>
              <td>Packing Width</td>
              <td>30-100mm</td>
            </tr>
            <tr>
              <td>Packing Height</td>
              <td>&lt; 40mm</td>
            </tr>
            <tr>
              <td>Maximum Packing Capacity</td>
              <td>40-200bag/Min</td>
            </tr>
            <tr>
              <td>Voltage</td>
              <td>220V</td>
            </tr>
            <tr>
              <td>Total Power</td>
              <td>6.8KW</td>
            </tr>
            <tr>
              <td>Dimension (L x W x H)</td>
              <td>5200x2080x2200mm</td>
            </tr>
            <tr>
              <td>Overall Weight</td>
              <td>950 KG</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-5 col-xxl-4">
        <div class="tabulation">
          <div class="table_heading mt-4">
            <h6>Other <span>Feature</span></h6>
          </div>
          <ul class="list">
            <li>High Efficiency Packing, Steady performance, Convinient operation and maintenance, Low-rate fault.</li>
            <li>It can work continuously for a long time.</li>
            <li>Sealing well, good looking appearance.</li>
            <li>Printing production date synchronize with hanging hole. (According to the customer's requirement) Tissue folding mahine use servo motor, accurately and adjustable.</li>

          </ul>
          <div class="table_heading mt-4">
            <h6>Scope Of <span>Application</span></h6>
          </div>
          <ul class="list">
            <li>Be Applied to single wet tissue, chopsticks, toothpick and all kings of regularly products.</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-10 col-xxl-4">
        <div class="tabulation">
          <div class="table_heading mt-4">
            <h6>The Main performance <span>and structure featues</span></h6>
          </div>
          <ul class="list">
            <li>Control circuit uses a PLC smart chip and with a touch-screen display,meaurement precision, electrical fault auto-detection, simple operation, easy adjustment.</li>
            <li>Mechanical formula function (memory function: store has been debugged program),to avoid repeated several times during debugging packaging material waste products of similar specifications, saving more ime costs, improve packaging efficiency.</li>
            <li>Wet tissue folding part and packaging part is the two independent parts,can be operated alone.(both of ne is closing, another one also can running any time)</li>
            <li>Touch screen control tissue feeding, not adjust by machine.</li>
            <li>Using high-quality dual-frequency simple mechanical structure, easy maintemance,long life,less wear and tear.</li>
            <li>High-precision photoelectric detection tracking,bi-directional automatic compensation,accurate and reliable.</li>
            <li>Bag length without manual configuration,auto-detection equipment operation,automatically set.</li>
            <li>Packing speed and bag length of the dual inverter control,stepless variablespeed,arbitrary adjustment ange,with ghe former working procedure of production line a perfect match.</li>
            <li>Stainless steel conveyor table, and the host part of the spary paint can also be handle according to the ustomer's demand with stainless steel.s</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php /*?><section class="sMainSection sProductSpec">
  <div class="container">
  <div class="sProductCard">
    <div class="row">
      <div class="col-lg-12 col-xs-6 col-sm-12 col-md-12">
        <div class="sProductDetails hhh">
          <h2>Product <span>Features</span></h2>
          <p>Puero Verde is made completely from sugarcane bagasse pulp without any plastic or wax coating. It certified biodegradable and compostable and has a strong structural integrity to be able to hold shape when being used with solid and liquid food.</p>
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
              <p>Hygenic & Healthy</p>
            </li>
            <li> <img src="<?php echo $datapath; ?>images/icon/made-in-india.png" alt="">
              <p>Made In India</p>
            </li>
          </ul>
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
