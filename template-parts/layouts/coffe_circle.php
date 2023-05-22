<?php
    $background_image = get_sub_field('background_image');
    $text_box_eins = get_sub_field('text_box_eins');
    $text_box_zwei = get_sub_field('text_box_zwei');
    $headline = get_sub_field('headline');
    $headline_left = get_sub_field('headline_left');
    $headline_right = get_sub_field('headline_right');
    $headline_left_text = get_sub_field('headline_left_text');
    $headline_right_text_eins = get_sub_field('headline_right_text_eins');
    $headline_right_text_zwei = get_sub_field('headline_right_text_zwei');
    $text_center = get_sub_field('text_center');
    $illu_2 = get_sub_field('illu_2');
    $illu_3 = get_sub_field('illu_3');
    $illu_4 = get_sub_field('illu_4');
    $illu_5 = get_sub_field('illu_5');
?>
<div class="row row-zum-shop pt-5 pb-5">

    <div class="col-6 ps-0">
        <img src="<?= wp_get_attachment_image_url($background_image, 'large');?>">
    </div>

    <div class="col d-flex justify-content-end">

        <div class="row-zum-shop-btn justify-content-end">
            
            <a href="/shop/"><button class="btn border-top border-start border-bottom  bg-transparent border-dark border-2 border-end-0 pt-5 pb-5 ps-5 rounded-0 text-black">
                Zum Shop
            </button></a>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-6">

        <div class="row">
            
            <div class="col-3 offset-3">

                <div class="p text-uppercase border border-dark p-4 bg-white text-in-square">
                    <?= $text_box_eins; ?>
                </div>

            </div>

            <div class="col-6">
                <img src="/wp-content/uploads/2022/11/Pfeil-3-1.png">
            </div>

        </div>

        <div class="row illu-2" style="background-image:url('<?= wp_get_attachment_image_url($illu_2, 'large');?>');">

            <div class="col-3 offset-8 pb-5">

                <div class="p text-uppercase border border-dark p-4 bg-white mb-5 illu-2-p text-in-square">
                    <?= $text_box_zwei; ?>
                </div>

            </div>

        </div>

    </div>

    <div class="col-5 offset-1 align-self-end pb-5 pt-5 ps-5 coffe-circle-headline-col">
        
        <div class="h2 text-uppercase text-end coffe-circle-headline">
            <?= $headline; ?>
        </div>
    
    </div>

</div>

<div class="row pb-5 privat-buero-row">
    
    <div class="col-2 offset-2 mt-5 text-end">
        <img src="/wp-content/uploads/2022/11/Pfeil-2-e1668095203826.png">
    </div>

    <div class="col-1 d-flex justify-content-center align-self-center">
        
        <div class="h3 text-uppercase">
            <?= $headline_left; ?>
        </div>
    
    </div>
    
    <div class="col-1 d-flex justify-content-center offset-1 align-self-center">
        
        <div class="h3 text-uppercase">
            <?= $headline_right; ?>
        </div>

    </div>
    
    <div class="col-2 mt-5 text-start">
        <img src="/wp-content/uploads/2022/11/Pfeil-3-1-e1668095213866.png">
    </div>

</div>

<div class="row">
    
    <div class="col-5 illu-3 d-flex justify-content-center align-items-start" style="background-image:url('<?= wp_get_attachment_image_url($illu_3, 'large');?>');">
        
        <div class="p text-uppercase border border-dark p-4 bg-white text-in-square">
            <?= $headline_left_text; ?>
        </div>

    </div>

    <div class="col-7 illu-4" style="background-image:url('<?= wp_get_attachment_image_url($illu_4, 'large');?>');">
        
        <div class="row">
            
            <div class="col-5 offset-1 d-flex justify-content-center align-items-start">
                
                <div class="p text-uppercase border border-dark p-4 bg-white text-in-square mt-5 ms-5">
                    <?= $headline_right_text_eins; ?>
                </div>

            </div>

            <div class="col-5 pt-5 mt-5 d-flex justify-content-end align-items-start">
                
                <div class="p text-uppercase border border-dark p-4 bg-white text-in-square">
                    <?= $headline_right_text_zwei; ?>
                </div>

            </div>

        </div>

    </div>
    
</div>

<div class="row mb-5">
    
    <div class="col-2 align-self-center">
        <?php if(have_rows('logos')):?>
            <div class="col border-dark border-top border-bottom border-end">
                
                    <?php while(have_rows('logos')): the_row();
                        $logo = get_sub_field('logo');
                    ?>
                        <div class="row">
                            
                            <div class="col d-flex justify-content-end pe-5">
                                <img class="border-bottom border-dark pt-5 pb-5" src="<?= wp_get_attachment_image_url($logo, 'large');?>" style="width: 150px;">
                            </div>

                        </div>
                    <?php endwhile;?>
            
            </div>
        <?php endif;?>

    </div>
    
    <div class="col-2 offset-1">
        <img src="/wp-content/uploads/2022/11/Pfeil-4.png">
    </div>

    <div class="col-3 d-flex align-items-end justify-content-center illu-5" style="background-image:url('<?= wp_get_attachment_image_url($illu_5, 'large');?>');">
        
        <div class="p text-uppercase border border-dark p-4 bg-white text-in-square-small">
            <?= $text_center; ?>
        </div>

    </div>
    
    <div class="col-4 schmuck-text-ueberlagerung pb-5">
        <img src="/wp-content/uploads/2022/11/Pfeil-5.png">
    </div>

</div>