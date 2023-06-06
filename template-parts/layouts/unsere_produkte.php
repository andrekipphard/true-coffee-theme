<?php
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $headline_text = get_sub_field('headline_text');
    $headline_button_text = get_sub_field('headline_button_text');
    $headline_button_url = get_sub_field('headline_button_url');
    $deco_image = get_sub_field('deco_image');
    $deco_image_zwei = get_sub_field('deco_image_zwei');
    $headline_white = get_sub_field('headline_white');
    $subline_white = get_sub_field('subline_white');
    $headline_white_text = get_sub_field('headline_white_text');
    $headline_white_button_text = get_sub_field('headline_white_button_text');
    $headline_white_button_url = get_sub_field('headline_white_button_url');
    $headline_black = get_sub_field('headline_black');
    $subline_black = get_sub_field('subline_black');
    $headline_black_text = get_sub_field('headline_black_text');
    $headline_black_button_text = get_sub_field('headline_black_button_text');
    $headline_black_button_url = get_sub_field('headline_black_button_url');
    $produkte = get_sub_field('produkte');
    $produkte_button_text = get_sub_field('produkte_button_text');
    $produkte_button_url = get_sub_field('produkte_button_url');
    $headline_white_image = get_sub_field('headline_white_image');
    $headline_black_image = get_sub_field('headline_black_image');
?>
<div class="row row-produkte mt-5 mt-lg-0">

    <div class="col-12 col-lg-4 offset-lg-2 pt-5 pb-5">

        <div class="h2 text-uppercase">
            <?= $headline; ?>
        </div>

        <div class="h4 text-uppercase mb-3 mb-lg-5">
            <?= $subline; ?>
        </div>

        <div class="p mb-5">
            <?= $headline_text; ?>
        </div>

        <a href="<?= $headline_button_url; ?>"><div class="btn btn-primary">
            <?= $headline_button_text; ?>
        </div></a>

    </div>

    <div class="col-12 col-lg-5">
        
    </div>

</div>

<div class="row">

    <div class="col-5 offset-2">

    </div>

    <div class="col-5 produkte-img">
        <img src="<?= wp_get_attachment_image_url($deco_image, 'large');?>" class="desktop-hide img-fluid">
        <img src="<?= wp_get_attachment_image_url($deco_image, 'large');?>" class="mobile-hide">
    </div>

</div>

<div class="row pt-5">

    <div class="col-12 col-lg-7 produkte-bild-bg" style="background-image:url('<?= wp_get_attachment_image_url($headline_black_image, 'large');?>');">

    </div>

    <div class="col-11 col-lg-6 produkte-black-bg bg-black">

        <div class="h3 text-uppercase text-white">
            <?= $headline_white; ?>
        </div>

        <div class="h4 text-uppercase text-white mb-3 mb-lg-5">
            <?= $subline_white; ?>
        </div>

        <div class="p mb-5 text-white">
            <?= $headline_white_text; ?>
        </div>

        <a href="<?= $headline_white_button_url; ?>"><div class="btn btn-white">
            <?= $headline_white_button_text; ?>
        </div></a>

    </div>

</div>

<div class="row mt-5 mt-lg-0">

    <div class="col-11 col-lg-7 produkte-white-bg bg-white text-lg-end">

        <div class="h3 text-uppercase">
            <?= $headline_black; ?>
        </div>

        <div class="h4 text-uppercase mb-3 mb-lg-5">
            <?= $subline_black; ?>
        </div>

        <div class="p mb-5">
            <?= $headline_black_text; ?>
        </div>

        <a href="<?= $headline_black_button_url; ?>"><div class="btn btn-primary">
            <?= $headline_black_button_text; ?>
        </div></a>

    </div>

    <div class="col-12 col-lg-6 produkte-bild-bg-2" style="background-image:url('<?= wp_get_attachment_image_url($headline_black_image, 'large');?>');">

    </div>

</div>

<div class="row row-punkte-linie mobile-hide">
    
    <div class="col-5 text-center">
        <img src="<?= wp_get_attachment_image_url($deco_image_zwei, 'large');?>">
    </div>

    <div class="col">

    </div>

</div>
<!-- *** -->
<?php if(have_rows('produkte')):?>
<div class="row row-produkte-3-karten ms-5 me-5 pt-5 pb-5 d-flex justify-content-center">

    <div class="col-10 col-produkte-3-karten pb-5">

        <div class="row">
            <?php while(have_rows('produkte')): the_row();
                $card_image = get_sub_field('card_image');
                $card_headline = get_sub_field('card_headline');
                $card_text = get_sub_field('card_text');
            ?>
            <div class="col-4">

                <div class="card p-5 border-0 bg-transparent" style="">
                    <img src="<?= wp_get_attachment_image_url($card_image, 'large');?>" class="card-img-top" alt="...">

                    <div class="card-body mt-4">
                        <h3 class="card-title mb-5 text-center text-uppercase"><?= $card_headline; ?></h3>
                        <p class="card-text"><?= $card_text; ?></p>
                    </div>

                </div>

            </div>
            <?php endwhile;?>

        </div>

        <div class="row">

            <div class="col-12 text-center">

            <a href="<?= $produkte_button_url; ?>"><div class="btn btn-primary">
                <?= $produkte_button_text; ?>
                </div></a>

            </div>

         </div>

    </div>

</div>
<div class="row desktop-hide mt-3">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php $index=1;?>
        <?php while(have_rows('produkte')): the_row();
                $card_image = get_sub_field('card_image');
                $card_headline = get_sub_field('card_headline');
                $card_text = get_sub_field('card_text');
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed subline border-bottom border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$index;?>" aria-expanded="false" aria-controls="flush-collapse<?=$index;?>">
                    <span class="h4 mt-3 text-uppercase">- <?= $card_headline; ?> -</span>
                </button>
                </h2>
                <div id="flush-collapse<?=$index;?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><?= $card_text; ?></div>
                </div>
            </div>
            <?php $index++;?>
        <?php endwhile;?>
    </div>
</div>
<div class="row desktop-hide mt-4">

    <div class="col-12 text-center">

        <a href="<?= $produkte_button_url; ?>"><div class="btn btn-primary">
            <?= $produkte_button_text; ?>
            </div></a>

    </div>

</div>
<?php endif;?>