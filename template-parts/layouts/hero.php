
<?php
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $background_image = get_sub_field('background_image');
?>
<div class="row hero mb-0 mb-lg-5">
			
    <div class="col-1">


    </div>

    <div class="col-11 col-lg-5 align-self-center hero-text">
        
        <div class="h1 text-uppercase text-end mt-5">
            <?= $headline; ?>
        </div>
        
        <div class="p text-uppercase text-end">
            <?= $subline; ?>
        </div>
    
    </div>

    <div class="col-12 col-lg-6 hero-col-3" style="background-image:url('<?= wp_get_attachment_image_url($background_image, 'large');?>');">
    
        <button class="btn btn-hero btn-primary bg-transparent border-0">
            <a href="/shop/"><img src="/wp-content/uploads/2022/11/Pfeil-auf-Hero-bild-e1668435284428.png"></a>
        </button>
            
    </div>

</div>