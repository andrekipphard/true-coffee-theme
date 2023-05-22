<?php
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
?>

<div class="row ms-5 me-5 pt-5 pb-5 d-flex justify-content-center">

    <div class="col-12 col-produkte-3-karten pb-5 ">

        <div class="row d-flex justify-content-between">

        <?php if( have_rows('angebote')):
                while( have_rows('angebote')): the_row();
                $bild = get_sub_field('bild');
                $titel = get_sub_field('titel');
                $beschreibung = get_sub_field('beschreibung');
        ?>
            <div class="col-4 d-flex justify-content-center">

                <div class="card p-4 border-0 bg-transparent " style="width: 25rem;">

                    <img src="<?= wp_get_attachment_image_url($bild, 'large');?>" class="card-img-top" alt="...">

                    <div class="card-body mt-4">
                        <h3 class="card-title mb-5 text-center text-uppercase"><?= $titel; ?></h3>
                        <p class="card-text"><?= $beschreibung ?></p>
                    </div>

                </div>

            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>

     

        <div class="row">

            <div class="col-12 text-center">

                <?php if( !empty($button_text) && !empty($button_url)):?>
                    <a href="<?= $button_url; ?>"><div class="btn btn-primary mt-5">
                        <?= $button_text; ?>
                    </div></a>
                <?php endif; ?>

            </div>

         </div>

    </div>

</div>