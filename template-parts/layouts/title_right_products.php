<?php
    $kategorie = get_sub_field('kategorie');
?>
<div class="row mt-lg-5 mb-3 mb-lg-5 pt-lg-5 pb-lg-5 woocommerce_kategorie_titel_links">
    <div class="col mt-lg-5">
        <div class="h2 text-uppercase text-end">
            <?= $kategorie; ?>
        </div>
    </div>
</div>
<?php if(have_rows('products')):?>
    <div class="row woocommerce_kategorie_titel_links_produkte d-flex justify-content-center mx-3 mx-lg-0 mb-5">
        <?php while(have_rows('products')):the_row();
            $product_image = get_sub_field('product_image');
            $product_title = get_sub_field('product_title');
            $product_desc = get_sub_field('product_desc');?>
            <div class="col-12 col-lg-3 d-flex mb-5 mb-lg-5 ms-5 me-5 p-4 p-lg-5 border-dark border flex-column bg-white">
                <img class="img-fluid mb-3" src="<?= wp_get_attachment_image_url($product_image, 'large');?>" />
                <div class="h3" style="font-size:2rem; line-height: 2.5rem">
                    <?= $product_title;?>
                </div>
                <div class="p">
                    <?= $product_desc;?>
                </div>
            </div>
        <?php endwhile;?>
    </div>
<?php endif;?>

