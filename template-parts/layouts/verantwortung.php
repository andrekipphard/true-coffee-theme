<?php
    $video_url = get_sub_field('video_url');
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $headline_text = get_sub_field('headline_text');
    $headline_button_text = get_sub_field('headline_button_text');
    $headline_button_url = get_sub_field('headline_button_url');
    $box_eins_headline = get_sub_field('box_eins_headline');
    $box_eins_subline = get_sub_field('box_eins_subline');
    $box_eins_button_text = get_sub_field('box_eins_button_text');
    $box_eins_button_url = get_sub_field('box_eins_button_url');
    $box_eins_image = get_sub_field('box_eins_image');
    $box_eins_siegel = get_sub_field('box_eins_siegel');
    $box_zwei_headline = get_sub_field('box_zwei_headline');
    $box_zwei_subline = get_sub_field('box_zwei_subline');
    $box_zwei_button_text = get_sub_field('box_zwei_button_text');
    $box_zwei_button_url = get_sub_field('box_zwei_button_url');
    $box_zwei_image = get_sub_field('box_zwei_image');
    $box_zwei_siegel = get_sub_field('box_zwei_siegel');
    $box_drei_headline = get_sub_field('box_drei_headline');
    $box_drei_subline = get_sub_field('box_drei_subline');
    $box_drei_button_text = get_sub_field('box_drei_button_text');
    $box_drei_button_url = get_sub_field('box_drei_button_url');
    $box_drei_image = get_sub_field('box_drei_image');
    $box_drei_siegel = get_sub_field('box_drei_siegel');
?>
<div class="row row-verantwortung">

    <div class="col offset-lg-2">

        <div class="row">

            <div class="col">
                <video class="mobile-hide" width="1200px" height="auto" autoplay="" preload="" muted="" loop="" playsinline="">
                <source src="<?= $video_url; ?>" type="video/mp4">
                Ihr Browser unterstützt das Video-Tag nicht.
                </video>
                <video class="desktop-hide" width="100%" height="auto" autoplay="" preload="" muted="" loop="" playsinline="">
                <source src="<?= $video_url; ?>" type="video/mp4">
                Ihr Browser unterstützt das Video-Tag nicht.
                </video>
            </div>

        </div>

        <div class="row">

            <div class="col-11 col-lg-7 col-verantwortung bg-white">

                <div class="h2 text-uppercase mb-3">
                    <?= $headline; ?>
                </div>

                <div class="h4 text-uppercase mb-5">
                    <?= $subline; ?>
                </div>

                <div class="p mb-3">
                    <?= $headline_text; ?>
                </div>

                <a href="<?= $headline_button_url; ?>"><div class="btn btn-primary mt-4">
                    <?= $headline_button_text; ?>
                </div></a>

            </div>
            
            <div class="col-5">

            </div>

        </div>

    </div>

</div>

<div class="row row-verantwortung-eins">

    <div class="col-2 col-lg-6">

    </div>

    <div class="col-10 col-lg-6 col-verantwortung-eins">

        <div class="row mb-5 mb-lg-0">

            <div class="col-8 coffee-balance-bild">
                <img src="<?= wp_get_attachment_image_url($box_eins_image, 'large');?>" class="img-fluid desktop-hide">
                <img src="<?= wp_get_attachment_image_url($box_eins_image, 'large');?>" style="width: 500px;" class="mobile-hide">
            </div>

            <div class="col-4 true-coffee-siegel d-flex align-items-end">
                <img src="<?= wp_get_attachment_image_url($box_eins_siegel, 'large');?>" style="margin-left:-90px; width: 200px; height: auto;" class="desktop-hide">
                <img src="<?= wp_get_attachment_image_url($box_eins_siegel, 'large');?>" class="mobile-hide" style="width: 450px; margin-left:-19rem;">
            </div>

        </div>

        <div class="row row-verantwortung-eins-eins">
            
            <div class="col-10 col-lg-12 col-verantwortung-kategorie d-flex flex justify-content-end flex-column">
            
                <div class="row">
                
                    <div class="col-10 col-lg-6 bg-white pb-3 pt-4">
                        <div class="h3 text-uppercase">
                            <?= $box_eins_headline; ?>
                        </div>

                    </div>

                </div>

                <div class="row">
                    
                    <div class="col-10 col-lg-6 bg-white pb-3">
                    
                        <div class="h4 text-uppercase">
                            <?= $box_eins_subline; ?>
                        </div>
                    
                    </div>
                
                </div>
                
                <div class="row row-verantwortung-eins-btn">
                
                    <div class="col-10 col-lg-6 bg-white pb-3 mb-4">
                    
                        <a href="<?= $box_eins_button_url;?>"><div class="btn btn-primary">
                            <?= $box_eins_button_text; ?>
                        </div></a>
                
                    </div>
            
                </div>
                
            </div>

        </div>

    </div>

</div>

<div class="row row-verantwortung-kategorie-text-right mobile-hide">
    
    <div class="col-8 offset-1 col-verantwortung-kategorie-text-right-first">
        
        <div class="row">
            
            <div class="col">
                <img src="<?= wp_get_attachment_image_url($box_zwei_siegel, 'large');?>" style="width: 450px; position:relative; z-index:4">
            </div>
        
        </div>
        
        <div class="row row-verantwortung-kategorie-text-right-zwei">
            
            <div class="col-2 col-verantwortung-kategorie-text-right-img">
                <img src="<?= wp_get_attachment_image_url($box_zwei_image, 'large');?>" style="width: 500px;">
            </div>
            
            <div class="col-8 col-verantwortung-kategorie-text-right d-flex flex justify-content-center flex-column">
                
                <div class="row row-verantwortung-kategorie-text-right-drei justify-content-start">
                    
                    <div class="col-12 col-verantwortung-kategorie-text-right-zwei bg-white pt-4 pb-3">

                        <div class="h3 text-uppercase">
                            <?= $box_zwei_headline; ?>
                        </div>
                    
                    </div>
            
                </div>
                
                <div class="row justify-content-start">
                
                    <div class="col-9 bg-white pb-3">
                    
                        <div class="h4 text-uppercase">
                            <?= $box_zwei_subline; ?>
                        </div>
                    
                    </div>
            
                </div>
            
                <div class="row justify-content-start">
            
                    <div class="col-9 bg-white pb-3 mb-4">
            
                        <a href="<?= $box_zwei_button_url; ?>"><div class="btn btn-primary">
                            <?= $box_zwei_button_text; ?>
                        </div></a>
            
                    </div>
            
                </div>	

            </div>

        </div>

    </div>

    <div class="col-5">

    </div>

</div>

<div class="row row-verantwortung-text-top mt-5 pt-5 mobile-hide">

    <div class="col-7">

    </div>

    <div class="col-5">

        <div class="row">

            <div class="col col-verantwortung-kategorie-text-top d-flex flex justify-content-start flex-column">

                <div class="row">

                    <div class="col-8 bg-white pt-4 pb-3 mt-5">

                        <div class="h3 text-uppercase">
                            <?= $box_drei_headline; ?>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-8 bg-white pb-3">

                        <div class="h4 text-uppercase">
                            <?= $box_drei_subline; ?>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-8 bg-white pb-3">

                        <a href="<?= $box_drei_button_url; ?>"><div class="btn btn-primary">
                            <?= $box_drei_button_text; ?>
                        </div></a>

                    </div>

                </div>							
                
            </div>

        </div>

        <div class="row">

            <div class="col-3">
                <img src="<?= wp_get_attachment_image_url($box_drei_image, 'large');?>" style="width: 500px;">
            </div>

            <div class="col-2 d-flex align-items-end ms-5">
                <img src="<?= wp_get_attachment_image_url($box_drei_siegel, 'large');?>" style="width: 450px;">
            </div>

        </div>
        

    </div>

</div>

