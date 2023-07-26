<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<?php
$id = $product->get_id();
$image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail');
$permalink = $product->get_permalink();
$attachment_ids = $product->get_gallery_image_ids();
$firstGalleryImageUrl = '';

if (!empty($attachment_ids)) {
    $firstGalleryImageUrl = wp_get_attachment_image_url($attachment_ids[0], 'single-post-thumbnail');
}

// Check if $image[0] is empty, and if so, assign the placeholder image URL
if (empty($image[0])) {
    $placeholderImage = wc_placeholder_img_src('single-post-thumbnail');
} else {
    $placeholderImage = $image[0];
}

$hoverImage = !empty($firstGalleryImageUrl) ? $firstGalleryImageUrl : $placeholderImage;

// Generate unique CSS class for each product
$product_css_class = 'product-' . $id;
?>

<style>
.hover-product.<?= $product_css_class ?>:hover {
    background-image: url('<?= $hoverImage; ?>') !important;
}
</style>

<div class="mobile-hide">
    <li <?php wc_product_class('mobile-hide d-flex p-5 justify-content-center align-items-center hover-product position-relative flex-column ' . $product_css_class, $product); ?> style="background-image: url('<?= $placeholderImage; ?>'); background-size:cover; background-position:center; background-repeat:no-repeat; height:300px;">

    <div class="row product-btn-wishlist p-5 d-flex justify-content-center align-items-center">
        <div class="col-12 product-title-hover text-white">
            <?php 
                $product_name = $product->get_title();
                $product_price = $product->get_price_html();
            ?>
            <h5><?= $product_name;?></h5>
            <h5><?= $product_price;?></h5>
        </div>
        <div class="col-6 buy-btn-col">
            
            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" data-quantity="1" data-product_id="<?php echo esc_attr( $product->id ) ?>" data-product_sku="<?php echo esc_attr( $product->sku ) ?>" class="add_to_cart_button ajax_add_to_cart <?php echo $class; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </a>
        </div>
        <div class="col-6 wishlist-btn-col">
            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?>
        </div>
    </div>

    <a href="<?= $permalink; ?>" class="stretched-link"></a>

    </li>
</div>
<div class="desktop-hide w-50">
    <li <?php wc_product_class('' . $product_css_class, $product); ?>>
        <?php 
            $product_name = $product->get_title();
            $product_price = $product->get_price_html();
        ?>
        <div class="row mt-3">
            <div class="col-12">
                <a href="<?= $permalink; ?>" style="visibility:visible;"><img src="<?= $placeholderImage; ?>" class="img-fluid"></a>
                <a href="<?= $permalink; ?>" style="visibility:visible;"><h5 style="font-size:16px"><?= $product_name;?></h5></a>
                <h5 style="font-size:16px"><?= $product_price;?></h5>
                
            </div>
        </div>
        
    </li>
</div>





