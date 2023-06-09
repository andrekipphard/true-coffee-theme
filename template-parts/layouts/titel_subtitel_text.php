<?php
    $titel = get_sub_field('titel');
    $beschreibung = get_sub_field('beschreibung');
    $subtitel = get_sub_field('subtitel');
    $sub_beschreibung = get_sub_field('sub_beschreibung');
    $button_text = get_sub_field('button_text');
    $button_url = get_sub_field('button_url');
?>
<div class="row m-5 pt-5">
    <div class="col-12 col-lg-10 offset-lg-1 px-0">

        <div class="h3 text-uppercase">
            <?= $titel; ?>
        </div>
        <div class="p">
            <?= $beschreibung; ?>
        </div>
        <div class="h4 text-uppercase pt-5 pb-4">
            <?= $subtitel; ?>
        </div>
        <div class="p">
            <?= $sub_beschreibung; ?>
        </div>
        <?php if( !empty($button_text) && !empty($button_url)):?>
            <a href="<?= $button_url; ?>"><div class="btn btn-primary mt-5">
                <?= $button_text; ?>
            </div></a>
        <?php endif; ?>
    </div>
</div>