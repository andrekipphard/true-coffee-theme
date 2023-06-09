<?php
    $video_url = get_sub_field('video_url');
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $headline_text = get_sub_field('headline_text');
    $headline_button_text = get_sub_field('headline_button_text');
    $headline_button_url = get_sub_field('headline_button_url');
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

            <div class="col-11 col-lg-7 col-verantwortung-einzeln bg-white">

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