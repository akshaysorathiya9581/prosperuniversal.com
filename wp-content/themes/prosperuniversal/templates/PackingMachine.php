<?php 
/* Template Name: PackingMachine */ 
?>
<?php get_header(); ?>

<section class="breadcrumbs-h">
    <div class="breadcrumbs-h__dropdown text-3"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs-h__wrap">
                    <ol class="breadcrumbs-h__list txt--p5">
                        <li>
                            <a href="<?= site_url();?>"> <span>Home</span> </a>
                        </li>
                        <li>
                            <a href="<?= site_url();?>"> <span>Machines</span> </a>
                        </li>
                        <li><span><?= the_title(); ?></span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="machine_prosper">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                <h1 class="headline-1 headline-1--semibold machine_title">
                    <div class="machine_name">Spoon, Napkin, Knife, Fork <span>automatic packing Machine</span></div>
                    <div class="machine_model_number">Model No. PR7ON - BN - 8500</div>
                </h1>
                <p>
                    We specialize in designing and manufacturing high-quality automatic packing machines for Spoons, Napkins, knives, and forks. With our cutting-edge technology and innovative solutions, we help businesses streamline their
                    packaging processes, increase efficiency, and reduce labor costs.
                </p>
                <p>
                    Our paper napkin and paper cutlery packing machines are designed for various sizes and varieties, and paper spoons, forks, and knives. With customizable settings, advanced features, from single picks to bulk packaging,
                    quick and precise packaging, and, optimal use of materials. our machines can deliver consistent results.
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7 category-text-image__image">
				<?php $image_data = get_field('packing_machine_image'); ?>
                <img src="<?= $image_data['url']; ?>" alt="<?= esc_attr($image_data['alt']) ?>" title="<?= esc_attr($image_data['title']) ?>" />
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 col-xxl-9">
                        <div class="machine_products" style="margin-top: 10px;">
                            <div class="pm_title text-left">Applicable Products</div>
                            <ul id="productos">
                                <?php foreach (get_field('applicable_products') as $applicable_products) { ?>
                                <li class="text-center">
                                    <a href="<?= $applicable_products['image']; ?>" class="fresco" data-fresco-group="Example"> 
										<img src="<?= $applicable_products['image']['url']; ?>" alt="<?= esc_attr($applicable_products['image']['alt']) ?>" title="<?= esc_attr($applicable_products['image']['title']) ?>" />
									</a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
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
                    <table class="table_one">
                        <?php
                         foreach(get_field('technical_details') as $technical_key => $technical_details){
                        ?>
                        <tr>
                            <?php
                            if($technical_key == 0){
                            ?>
                            <td><strong><?= $technical_details['question']; ?></strong></td>
                        <?php }else{ ?>
                            <td><?= $technical_details['question']; ?></td>
                        <?php } ?>
                            <td><?= $technical_details['answer']; ?></td>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-5 col-xxl-4">
                <div class="tabulation">
                    <div class="table_heading mt-4">
                        <h6>Other <span>Feature</span></h6>
                    </div>
                    <ul class="list">
                        <?= get_field('other_feature_description'); ?>
                    </ul>
                    <div class="table_heading mt-4">
                        <h6>Scope Of <span>Application</span></h6>
                    </div>
                    <ul class="list">
                        <?= get_field('scope_of_application_description'); ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-10 col-xxl-12">
                <div class="tabulation">
                    <div class="table_heading mt-4">
                        <h6>The Main performance <span>and structure featues</span></h6>
                    </div>
                    <ul class="list">
                        <?php
                         foreach (get_field('main_performance_points') as $key => $main_performance_points) {
                        ?>
                        <li><?= $main_performance_points['title']; ?></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
