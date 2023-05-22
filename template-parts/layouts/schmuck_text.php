<?php
    $background_image = get_sub_field('background_image');
?>
<div class="row row-schmuck-text pb-5 pt-5 mb-5">

    <div class="col-6">

    </div>

    <div class="col-6 col-schmuck-text" style="background-image:url('<?= wp_get_attachment_image_url($background_image, 'large');?>');">

    </div>

</div>