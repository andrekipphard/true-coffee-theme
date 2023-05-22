<?php
    $headline = get_sub_field('headline');
    $subline = get_sub_field('subline');
    $text = get_sub_field('text');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
?>
<div class="row row-produkte-einzeln">

    <div class="col-5 offset-2 pt-5 pb-5">

        <div class="h2 text-uppercase">
            <?= $headline; ?>
        </div>

        <div class="h4 text-uppercase mb-5">
            <?= $subline; ?>
        </div>

        <div class="p mb-5">
            <?= $text; ?>
            
        </div>

        <a href="<?= $button_url; ?>"><div class="btn btn-primary">
            <?= $button_text; ?>
        </div></a>

    </div>

    <div class="col-5">
        
    </div>

</div>