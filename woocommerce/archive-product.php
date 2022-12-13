
<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
get_template_part('template-parts/layouts/sticky-socials');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

?>
<div class="row single-hero mb-5">

    <div class="col-1">
        
    </div>

    <div class="col-5 single-hero-text">
        
        <div class="text-end pt-5 mt-5">
            <img src="/wp-content/uploads/2022/11/Herobild-Kommentar-Büro.png">
        </div>
        
        <div class="row">
            <div class="col single-hero-col bg-white p-5" style="--bs-bg-opacity:1;">
                <div class="h1 text-center text-uppercase mb-3">
					<?php woocommerce_page_title(); ?>
                </div>

                <div class="h4 text-center text-uppercase mb-5">
                    Social - Ecological - Zero Packaging
                </div>

                <div class="p mb-3">
				Hinter TRUE Coffee steht die Idee, Menschen mit Genuss, Qualität und Nachhaltigkeit zu begeistern. Unsere Kaffees werden biologisch angebaut und fair gehandelt. Doch wir gehen noch weiter. Lerne unseren Weg kennen und werde Teil unserer Idee, die Welt auf genussvolle Weise zu verbessern.
                </div>
            </div>
        </div>
    
    </div>

    <div class="col-6 single-hero-col-3" style="background-image:url('/wp-content/uploads/2022/12/Herobild-shop.jpg');">
            
    </div>

</div>

<div class="row mt-5">
	<div class="col-4 me-5 pe-5">
		<?php get_sidebar('shop');?>
	</div>

	<div class="col-7 ms-5 ps-5">
	<?php
		if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			

			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end();

			/**
			 * Hook: woocommerce_after_shop_loop.
			 *
			 * @hooked woocommerce_pagination - 10
			 */
			do_action( 'woocommerce_after_shop_loop' );
		} else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		}
	?>
	</div>
</div>


<?php


get_footer( 'shop' );
