<?php 
/* Template Name: PaperCuttleryMachine */ 
?>
<?php get_header(); ?>
    <section class="breadcrumbs-h  ">
      <div class="breadcrumbs-h__dropdown text-3"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="breadcrumbs-h__wrap">
              <ol class="breadcrumbs-h__list txt--p5">
                <li> <a href="<?= site_url(); ?>"> <span>Home</span> </a> </li>
                <li> <a href="<?= site_url(); ?>"> <span>Machines</span> </a> </li>
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
          <div class="col-12">
            <div class="machine_part_1">
              <div class="row justify-content-between">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 col-xxl-4 order-1 order-md-1">
                  <h1 class="headline-1 headline-1--semibold machine_title machine_right_content">
                    <div class="machine_name"><?= get_field('machine_details_title'); ?></div>
                    <div class="machine_model_number"><?= get_field('machine_details_sub_title'); ?></div>
                  </h1>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 col-xxl-8 order-3 order-md-2">
                  <div class="machine_right_content">
                    <?= get_field('machine_details_description'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 col-xxl-4 order-4 order-md-3">
                  <div class="machine_cycle">
                    <div class="pm_title text-start">Machine Cycle</div>
					  <?php $machine_details_image_1 = get_field('machine_details_image_1'); ?>
                     	<img src="<?= $machine_details_image_1['url']; ?>" alt="<?= esc_attr($machine_details_image_1['alt']) ?>" title="<?= esc_attr($machine_details_image_1['title']) ?>" /> 
					</div>
                </div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 col-xxl-8 order-2 order-md-4">
					<div class="machine_image">
						<?php $machine_details_image_2 = get_field('machine_details_image_2'); ?>
						<img src="<?= $machine_details_image_2['url']; ?>" alt="<?= esc_attr($machine_details_image_2['alt']) ?>" title="<?= esc_attr($machine_details_image_2['title']) ?>" />
					</div>	
				</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-12">
            <div class="machine_part_1">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 col-xxl-4 order-1 order-md-1">
                  <h1 class="headline-1 headline-1--semibold machine_title machine_right_content">
                    <div class="machine_name"><?= get_field('forming_machine_title'); ?></div>
                    <div class="machine_model_number"><?= get_field('forming_machine_sub_title'); ?></div>
                  </h1>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 col-xxl-8 order-3 order-md-2">
                  <div class="machine_right_content">
                    <?= get_field('forming_machine_descrioption'); ?>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 col-xxl-4 order-4 order-md-3">
                  <div class="machine_cycle">
                    <div class="pm_title text-start">Machine Cycle</div>
					<?php $forming_machine_image_1 = get_field('forming_machine_image_1'); ?>
					 <img src="<?= $forming_machine_image_1['url']; ?>" alt="<?= esc_attr($forming_machine_image_1['alt']) ?>" title="<?= esc_attr($forming_machine_image_1['title']) ?>" />
					</div>
                </div>
				  <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 col-xxl-8 order-2 order-md-4">
					<div class="machine_image">
					  <?php $forming_machine_image_2 = get_field('forming_machine_image_2'); ?>
					  <img src="<?= $forming_machine_image_2['url']; ?>" alt="<?= esc_attr($forming_machine_image_2['alt']) ?>" title="<?= esc_attr($forming_machine_image_2['title']) ?>" />
				  	</div>	
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
          <div class="col-xxl-6 col-12 col-lg-6 col-sm-12 col-md-6 col-xl-7 col-xxl-5">
            <div class="machine_features">
              <div class="pm_title text-start">Machine Features</div>
                <ul class="ularr">
                    <?php foreach (get_field('machine_features') as $m_value) { ?>
                      <li><?= $m_value['title']; ?></li>
                    <?php } ?>
                </ul>
            </div>
          </div>
          <div class="col-xxl-6 col-12 col-lg-6 col-sm-12 col-md-6 col-xl-5 col-xxl-5">
            <div class="machine_products">
              <div class="pm_title text-start">Applicable Products</div>
              <ul id="productos">
                 <?php foreach (get_field('applicable_products') as $a_value) { ?>
                	<li class="text-center">
						<a href="<?= $a_value['image']; ?>" class="fresco" data-fresco-group="Example"> 
							<img src="<?= $a_value['image']['url']; ?>" alt="<?= esc_attr($a_value['image']['alt']) ?>" title="<?= esc_attr($a_value['image']['title']) ?>" />
						</a>
				     </li>
              	 <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="machine_details">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-7 col-xxl-7">
            <div class="tabulation">
              <div class="table_heading">
                <h6>Technical <span>Details</span></h6>
              </div>
              <table  class="table_one">
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
                  <td>150-200pcs/min</td>
                </tr>
                <tr>
                  <td class="biguar_bg"><strong>Total Power</strong></td>
                  <td colspan="2">90 KW</td>
                </tr>
                <tr>
                  <td rowspan="2" class="biguar_bg"><strong>Required Air and Power Supply</strong></td>
                  <td>Air</td>
                  <td>1.0m3/Min</td>
                </tr>
                <tr>
                  <td>Power Supply</td>
                  <td>(3 Phase, 4 Wire) 420V, 50HZ, 3 Phase</td>
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
                <?php
                 foreach(get_field('product_application') as $product_value){
                ?>
                <li class="text-center"> <img src="<?= $product_value['icon']; ?>">
                  <p><?= $product_value['title']; ?></p>
                </li>
              <?php } ?>
              </ul>
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
            <?= get_field('pulp_paper_description'); ?>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12  col-xxl-12">
            <div class="bagasse_cycle_details">
              <div class="cycle_img">
					<?php $pulp_paper_image = get_field('pulp_paper_image'); ?>
                     <img src="<?= $pulp_paper_image['url']; ?>" alt="<?= esc_attr($pulp_paper_image['alt']) ?>" title="<?= esc_attr($pulp_paper_image['title']) ?>" /> 
				</div>
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
              <?= get_field('product_features_description'); ?>
              <ul>
                <?php
                 foreach(get_field('product_features_image') as $product_image){
                ?>
                <li> 
					<img src="<?= $product_image['image']['url']; ?>" alt="<?= esc_attr($product_image['image']['alt']) ?>" title="<?= esc_attr($product_image['image']['title']) ?>" />
                    <p><?= $product_image['title']; ?></p>
                </li>
              <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
