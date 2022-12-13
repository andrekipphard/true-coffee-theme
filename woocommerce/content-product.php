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
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
$permalink = $product->get_permalink();
$attachment_ids = $product->get_gallery_image_ids();
$firstGalleryImageUrl = wp_get_attachment_image_url($attachment_ids[0], 'single-post-thumbnail')

?>

<style>
    .hover-product:hover {
        background-image: url('<?= $firstGalleryImageUrl;?>') !important;
    }
</style>

<li <?php wc_product_class('d-flex p-5 justify-content-center align-items-center hover-product position-relative', $product);?> style="background-image: url('<?= $image[0];?>'); background-size:cover; background-position:center; background-repeat:no-repeat; height:300px; width:300px;">

    <div class="row product-btn-wishlist p-5 d-flex justify-content-center align-items-center">
        <div class="col-6 buy-btn-col">
            
            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" data-quantity="1" data-product_id="<?php echo esc_attr( $product->id ) ?>" data-product_sku="<?php echo esc_attr( $product->sku ) ?>" class="add_to_cart_button ajax_add_to_cart <?php echo $class; ?>">
            <img src="/wp-content/uploads/2022/11/warenkporb.icon-Shop.png">
            </a>
        </div>
        <div class="col-6 wishlist-btn-col">
            <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]');?>
        </div>
    </div>

    <a href="<?= $permalink; ?>" class="stretched-link"></a>
    
</li>





