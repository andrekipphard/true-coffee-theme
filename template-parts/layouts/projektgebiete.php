

<div class="row projektgebiete p-5 mt-5">
<?php if( have_rows('projektgebiet')):
                while( have_rows('projektgebiet')): the_row();
                $titel = get_sub_field('titel');
                $ort = get_sub_field('ort');
                $beschreibung = get_sub_field('beschreibung');
                $bild = get_sub_field('bild');
            ?>

    <div class="col-12 col-lg-6 d-flex justify-content-center mb-5 mb-lg-0">
        <div class="card" style="width: 35rem; border-radius:0px; border-color:black">
            <img src="<?= wp_get_attachment_image_url($bild, 'large');?>" class="card-img-top" alt="..." style="border-radius:0px;">
            <div class="card-body p-3 p-lg-5">
                <h3 class="mb-4 card-title text-uppercase"><?= $titel; ?></h3>
                <i class="bi bi-geo-alt-fill">Projektgebiet: <?= $ort; ?></i>
                <p class="card-text mt-4"><?= $beschreibung; ?></p>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    
</div>