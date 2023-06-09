<?php
    $image = get_sub_field('image');
    $siegel = get_sub_field('siegel');
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
?>
<div class="row row-verantwortung-eins mb-5 mb-lg-0">

    <div class="col-2 col-lg-7">

    </div>

    <div class="col-10 col-lg-5 col-verantwortung-eins">

        <div class="row mb-5 mb-lg-0">

            <div class="col-8 col-lg-4 coffee-balance-bild">
                <img src="<?= wp_get_attachment_image_url($image, 'large');?>" class="img-fluid desktop-hide">
                <img src="<?= wp_get_attachment_image_url($image, 'large');?>" style="width: 500px;" class="mobile-hide">
            </div>

            <div class="col-4 col-lg-2 true-coffee-siegel d-flex align-items-end">
                <img src="<?= wp_get_attachment_image_url($siegel, 'large');?>" style="margin-left:-90px; width: 200px; height: auto;" class="desktop-hide">
                <img src="<?= wp_get_attachment_image_url($siegel, 'large');?>" class="mobile-hide" style="width: 450px; margin-left:-19rem;">
            </div>

        </div>

        <div class="row row-verantwortung-eins-eins">
            
            <div class="col-10 col-lg-12 col-verantwortung-kategorie d-flex flex justify-content-end flex-column">
            
                <div class="row">
                
                    <div class="col-10 col-lg-7 pb-3 mobile-hide" style="background: linear-gradient( 90deg, #EDEDED 70%, transparent 50%) no-repeat;">
                        <div class="h3 text-uppercase">
                            <?= $headline;?>
                        </div>

                    </div>
                    <div class="col-10 col-lg-7 pb-3 desktop-hide" style="background-color:white;">
                        <div class="h3 text-uppercase">
                            <?= $headline;?>
                        </div>

                    </div>

                </div>

                <div class="row">
                    
                    <div class="col-10 col-lg-6 pb-3 mobile-hide" style="background: linear-gradient( 90deg, #EDEDED 70%, transparent 50%) no-repeat;">
                    
                        <div class="h4 text-uppercase">
                            <?= $subline; ?>
                        </div>
                    
                    </div>
                    <div class="col-10 col-lg-6 pb-3 desktop-hide" style="background-color:white;">
                    
                        <div class="h4 text-uppercase">
                            <?= $subline; ?>
                        </div>
                    
                    </div>
                
                </div>
                
                <div class="row row-verantwortung-eins-btn">
                
                    <div class="col-10 col-lg-6 pb-3 mb-4 mobile-hide" style="background: linear-gradient( 90deg, #EDEDED 70%, transparent 50%) no-repeat;">
                    
                        <a href="<?= $button_url; ?>"><div class="btn btn-primary">
                            <?= $button_text; ?>
                        </div></a>
                
                    </div>
                    <div class="col-10 col-lg-6 pb-3 mb-4 desktop-hide" style="background-color:white;">
                    
                        <a href="<?= $button_url; ?>"><div class="btn btn-primary">
                            <?= $button_text; ?>
                        </div></a>
                
                    </div>
            
                </div>
                
            </div>

        </div>

    </div>

</div>