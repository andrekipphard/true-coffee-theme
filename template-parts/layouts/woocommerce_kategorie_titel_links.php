<?php
    $kategorie = get_sub_field('kategorie');
    $kategorie_slug = sanitize_title($kategorie);
?>
<div class="row mt-5 mb-5 pt-5 pb-5 woocommerce_kategorie_titel_links">
    <div class="col mt-5">
        <div class="h2 text-uppercase">
            <?= $kategorie; ?>
        </div>
    </div>
</div>
<div class="row woocommerce_kategorie_titel_links_produkte d-flex justify-content-center">
<?php
    $product_term_slugs = array($kategorie_slug);
    
    $product_args = array(
        'post_status' => 'publish',
        'limit' => -1,
        'category' => $product_term_slugs,
        //more options according to wc_get_products() docs
    );
    $products = wc_get_products($product_args);
    foreach ($products as $product) {
    $product_title = $product->get_title();
    $product_permalink = $product->get_permalink();
    $product_desc = $product->get_description();
?>
    <!-- display product html -->
    
        <div class="col-4 d-flex ms-5 me-5 p-5 border-dark border flex-column bg-white">
            <img class="img-fluid" src="<?php echo wp_get_attachment_url( $product->get_image_id(), 'large' ); ?>" />
            <div class="h3">
                <?= $product_title;?>
            </div>
            <div class="p mb-5">
                <?= $product_desc;?>
            </div>
            <div class="row row-btn mt-auto">
                <div class="col-7 align-self-center">
                    <img class="img-fluid" src="/wp-content/uploads/2022/11/Pfeli-nach-links.png">
                </div>
                <div class="col-5">
                    <a href="<?=$product_permalink; ?>"><div class="btn btn-no-border">Mehr erfahren</div></a>
                </div>
            </div>
            
        </div>
    
<?php 
    } 
?>
</div>
