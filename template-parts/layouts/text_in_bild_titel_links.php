<?php 
    $titel = get_sub_field('titel');
    $background_bild = get_sub_field('background_bild');
    
?>
<div class="row mt-5 pt-5">
    <div class="col mt-5">
        <div class="h2 verantwortung-h2 text-uppercase mt-5">
            <?= $titel; ?>
        </div>
    </div>
</div>

<div class="row text-in-bild-titel-links-bg-image ms-5 me-5" style="background-image: url('<?= wp_get_attachment_image_url($background_bild, 'large');?>')">
    <div class="col-8 offset-1 bg-white px-5 pt-5 align-self-end">
    <?php if( have_rows('bild_mit_beschreibung')):
                while( have_rows('bild_mit_beschreibung')): the_row();
                $beschreibung = get_sub_field('beschreibung');
                $bild = get_sub_field('bild');
            ?>
        <div class="row mb-5">
            <div class="col-2 align-self-center">
                <img src="<?= wp_get_attachment_image_url($bild, 'large');?>">
            </div>
            <div class="col-10">
                <div class="p">
                    <?= $beschreibung; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>