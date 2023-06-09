<?php
    $titel = get_sub_field('titel');
    $subtitel = get_sub_field('subtitel');
    $beschreibung = get_sub_field('beschreibung');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
?>


<div class="row mt-5 pt-5 d-flex justify-content-lg-center">
    <div class="col-10 mt-5 pt-lg-5 px-5 pg-lg-0 ms-3 ms-lg-0">
        <div class="h3 text-lg-center text-uppercase">
            <?=$titel; ?>
        </div>
        <div class="h4 mb-5 text-lg-center text-uppercase">
            <?=$subtitel; ?>
        </div>
        <div class="p">
            <?= $beschreibung; ?>
        </div>
        <div class="text-center">
        <?php if( !empty($button_text) && !empty($button_url)):?>
            <a href="<?= $button_url; ?>"><div class="btn btn-primary mt-5">
                <?= $button_text; ?>
            </div></a>
        <?php endif; ?>
        </div>
        
    </div>
</div>