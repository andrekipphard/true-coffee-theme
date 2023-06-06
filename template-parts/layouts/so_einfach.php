<?php
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $headline_text = get_sub_field('headline_text');
    $headline_button_text = get_sub_field('headline_button_text');
    $headline_button_url = get_sub_field('headline_button_url');
    $illu_eins = get_sub_field('illu_eins');
    $illu_zwei = get_sub_field('illu_zwei');
    $cards = get_sub_field('cards');
    $background_image = get_sub_field('background_image');
?>
<div class="row row-so-einfach mobile-hide">

    <div class="col col-so-einfach bg-black">

        <div class="row mt-5 mb-5 pb-5 pt-5">

            <div class="col-2">
                <img src="<?= wp_get_attachment_image_url($illu_eins, 'large');?>">
            </div>

            <div class="col-8 text-center ps-5 pe-5">

                <div class="h2 text-uppercase text-white">
                    <?= $headline; ?>
                </div>

                <div class="h4 text-uppercase text-white mb-5">
                    <?= $subline; ?>
                </div>

                <div class="p text-white ps-3 text-start mb-5 ps-5 pe-5 me-3 ms-3">
                    <?= $headline_text; ?>
                </div>

                <a href="<?= $headline_button_url; ?>"><div class="btn btn-white mt-3">
                    <?= $headline_button_text; ?>
                </div></a>

            </div>

            <div class="col-2 text-end">
                <img src="<?= wp_get_attachment_image_url($illu_zwei, 'large');?>">
            </div>
        
        </div>
        <?php if(have_rows('cards')):?>
        <div class="row pt-5 mt-5 ms-5">
            <?php while(have_rows('cards')): the_row();
                $card_headline = get_sub_field('card_headline');
            ?>
            <div class="col-4 so-einfach-feature-col">
        
                <div class="h3 text-uppercase text-white border-start border-light p-5">
                    <?= $card_headline;?>
                </div>
        
                <div class="row ms-0">

                    <div class="col-6 border-bottom border-light mb-2">		

                    </div>

                    <div class="col-6">

                    </div>
                </div>
                <?php if(have_rows('card_item')):?>
                <ul class="border-start border-light p-5 me-5">
                    <?php while(have_rows('card_item')): the_row();
                        $card_item = get_sub_field('card_item');
                    ?>
                    <li class="text-white bg-transparent mb-3"><?= $card_item;?></li>
                    <?php endwhile;?>
                </ul>
                <?php endif;?>
            
            </div>
            <?php endwhile; ?>
            

        </div>
        <?php endif;?>

        <div class="row">
            <img src="<?= wp_get_attachment_image_url($background_image, 'large');?>">
        </div>

    </div>

</div>

<div class="row row-so-einfach desktop-hide pt-5">
    <div class="col-12 bg-black pt-5 mt-5">
        <div class="row">
            <div class="h2 text-uppercase text-white text-center mb-3 ps-5 pe-5 me-3 ms-3">
                <?= $headline; ?>
            </div>
            <div class="h4 text-uppercase text-white mb-3 ps-5 pe-5 me-3 ms-3 text-center">
                <?= $subline; ?>
            </div>
            <div class="p text-white text-start mb-5 ps-5 pe-5 me-3 ms-3">
                <?= $headline_text; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="<?= wp_get_attachment_image_url($illu_eins, 'large');?>" class="img-fluid">
            </div>
            <div class="col-6">
                <img src="<?= wp_get_attachment_image_url($illu_zwei, 'large');?>" class="img-fluid">
            </div>
        </div>
        <?php if(have_rows('cards')):?>
        <div class="row pt-5 mt-5 ms-5">
            <?php while(have_rows('cards')): the_row();
                $card_headline = get_sub_field('card_headline');
            ?>
            <div class="col-12 col-lg-4 so-einfach-feature-col mb-5">
        
                <div class="h3 text-uppercase text-white border-start border-light p-3">
                    <?= $card_headline;?>
                </div>
        
                <div class="row ms-0">

                    <div class="col-6 border-bottom border-light mb-2">		

                    </div>

                    <div class="col-6">

                    </div>
                </div>
                <?php if(have_rows('card_item')):?>
                <ul class="border-start border-light ps-3">
                    <?php while(have_rows('card_item')): the_row();
                        $card_item = get_sub_field('card_item');
                    ?>
                    <li class="text-white bg-transparent mb-3"><?= $card_item;?></li>
                    <?php endwhile;?>
                </ul>
                <?php endif;?>
            
            </div>
            <?php endwhile; ?>
            

        </div>
        <?php endif;?>

        <div class="row">
            <img src="<?= wp_get_attachment_image_url($background_image, 'large');?>">
        </div>
    </div>


</div>
