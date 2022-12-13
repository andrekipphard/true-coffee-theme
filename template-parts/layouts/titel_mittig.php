<?php
    $titel = get_sub_field('titel');
    $subtitel = get_sub_field('subtitel');
    $beschreibung = get_sub_field('beschreibung');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
?>


<div class="row mt-5 pt-5 d-flex justify-content-center">
    <div class="col-10 mt-5 pt-5">
        <div class="h3 text-center text-uppercase">
            <?=$titel; ?>
        </div>
        <div class="h4 mb-5 text-center text-uppercase">
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