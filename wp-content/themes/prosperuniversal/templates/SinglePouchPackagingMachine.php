<?php 
/* Template Name: SinglePouchPackagingMachine */ 
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
                <h1 class="headline-1 headline-1--semibold machine_title pm_title">
                    <!--<div class="machine_name">Spoon, Napkin, Knife, Fork <span>automatic packing Machine</span></div>-->
                    <p><?= get_field('title'); ?></p>
                    <div class="machine_model_number"><?= get_field('stage_1'); ?></div>
                </h1>
                <p>
                    <?= get_field('stage_1_description'); ?>
                </p>
                <h1 class="headline-1 headline-1--semibold machine_title pm_title">
                    <div class="machine_model_number"><?= get_field('stage_2'); ?></div>
                </h1>
                <p>
                    <?= get_field('stage_2_description'); ?>
                </p>
                <h1 class="headline-1 headline-1--semibold machine_title pm_title">
                    <div class="machine_model_number">Main Features and Structure</div>
                </h1>
                <?php foreach (get_field('main_features_and_structure') as $main_features_and_structure) { ?>
                <p><b><?= $main_features_and_structure['name']; ?> : </b><?= $main_features_and_structure['descrition']; ?></p>
                <?php } ?>
                <h1 class="headline-1 headline-1--semibold machine_title pm_title">
                    <div class="machine_model_number">Applications</div>
                </h1>
                <p>
                    <?= get_field('applications'); ?>
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7 category-text-image__image">
				<?php $main_image = get_field('main_image'); ?>
                <img src="<?= $main_image['url']; ?>" alt="<?= esc_attr($main_image['alt']) ?>" title="<?= esc_attr($main_image['title']) ?>" />
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 col-xxl-9">
                        <div class="machine_products" style="margin-top: 10px;">
                            <div class="pm_title text-left">Applicable Products</div>
                            <ul id="productos">
                                <?php 
                                    // echo "<pre>";
                                    // print_r(get_field('multiple_image'));
                                    // echo "</pre>";
                                    // die();
                                foreach (get_field('multiple_image') as $applicable_products) { ?>
                                <li class="text-center">
                                    <a href="<?= $applicable_products['sizes']['thumbnail']; ?>" class="fresco" data-fresco-group="Example"> 
										<img src="<?= $applicable_products['sizes']['thumbnail']; ?>" alt="<?= esc_attr($applicable_products['alt']) ?>" title="<?= esc_attr($applicable_products['title']) ?>" />
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
            <div class="col-lg-6">
                <div class="tabulation">
                    <div class="table_heading">
                        <h6>Napkin Machine Technical <span>Parameters<span></h6>
                    </div>
                    <table class="table_one">
                        <tbody>
                        <?php
                         foreach(get_field('napkin_machine_technical_parameters') as $napkin_key => $napkin_details){
                        ?>
                            <tr>
                            <?php
                            if($napkin_key == 0){
                            ?>
                            <td><strong><?= $napkin_details['question']; ?></strong></td>
                            <?php }else{ ?>
                                <td><?= $napkin_details['question']; ?></td>
                            <?php } ?>    
                                <td><?= $napkin_details['answer']; ?></td>
                            </tr>
                        <?php } ?>    
                        </tbody>   
                    </table>
                </div>
            </div>
            <div class="col-lg-6">     
                <div class="tabulation">
                    <div class="table_heading">
                        <h6>Follow Wrapping Machine Technical <span>Parameters</span></h6>
                    </div>
                    <table class="table_one">
                        <tbody>
                        <?php
                         foreach(get_field('follow_wrapping_machine_technical_parameters') as $follow_wrapping_key => $follow_wrapping){
                        ?>
                            <tr>
                                <?php
                                if($follow_wrapping_key == 0){
                                ?>
                                <td><strong><?= $follow_wrapping['question']; ?></strong></td>
                                <?php }else{ ?>
                                <td><?= $follow_wrapping['question']; ?></td>
                                <?php } ?>    
                                <td><?= $follow_wrapping['answer']; ?></td>
                            </tr>
                        <?php } ?>   
                        </tbody>   
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>