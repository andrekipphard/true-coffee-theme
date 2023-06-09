<?php 
    $bildkommentar = get_sub_field('bildkommentar');
    $titel = get_sub_field('titel');
    $subtitel = get_sub_field('subtitel');
    $beschreibung = get_sub_field('beschreibung');
    $background_bild = get_sub_field('background_bild');
?>
<div class="row single-hero">

    <div class="col-1">
    
    </div>

    <div class="col-10 col-lg-5 single-hero-text">
        
        <div class="text-end pt-5 mt-5 mobile-hide">
            <img src="<?= wp_get_attachment_image_url($bildkommentar, 'large');?>">
        </div>
        
        <div class="row">
            <div class="col single-hero-col bg-white p-5" style="--bs-bg-opacity:1;">
                <div class="h1 text-center text-uppercase mb-3">
                   <?= $titel; ?>
                </div>

                <div class="h4 text-center text-uppercase mb-5">
                    <?= $subtitel; ?>
                </div>

                <div class="p mb-3">
                    <?= $beschreibung ?>
                </div>
            </div>
        </div>
    
    </div>

    <div class="col-12 col-lg-6 single-hero-col-3" style="background-image:url('<?= wp_get_attachment_image_url($background_bild, 'large');?>');">
            
    </div>

</div>