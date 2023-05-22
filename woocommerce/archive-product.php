

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



<?php
	// Get all product categories
	$product_categories = get_terms( 'product_cat' );

	// Check if any categories were found
	if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {

	// Output the category tabs
	echo '<div class="row mt-5 mx-5">';
	echo '<div class="col-12">';
	echo '<div class="d-flex align-items-start">';
	echo '<div class="col-4">';
	echo '<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">';

	foreach ( $product_categories as $category ) {
		$active = ( $category === reset( $product_categories ) ) ? 'active' : ''; // Set the first category as active
		$class = ( $category->parent === 0 ) ? 'nav-pill-main-category' : 'nav-pill-sub-category'; // Add a custom class to main categories
		echo '<button class="nav-link ' . $active . ' ' . $class . '" id="v-pills-' . $category->slug . '-tab" data-bs-toggle="pill" data-bs-target="#v-pills-' . $category->slug . '" type="button" role="tab" aria-controls="v-pills-' . $category->slug . '" aria-selected="' . ( $active ? 'true' : 'false' ) . '">' . $category->name . '</button>';
	  }
	  
	
	echo '</div>';
	
	echo '</div>';
	echo '<div class="col-7 offset-1">';

	// Output the category content
	echo '<div class="tab-content" id="v-pills-tabContent">';

	foreach ( $product_categories as $category ) {
		$active = ( $category === reset( $product_categories ) ) ? 'show active' : ''; // Set the first category as active
		echo '<div class="tab-pane fade ' . $active . '" id="v-pills-' . $category->slug . '" role="tabpanel" aria-labelledby="v-pills-' . $category->slug . '-tab">';

		// Get the products for this category
		$products = new WP_Query( array(
		'post_type' => 'product',
		'tax_query' => array(
			array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => $category->slug
			)
		)
		) );

		// Check if any products were found
		if ( $products->have_posts() ) {


			woocommerce_product_loop_start();
			
			while ( $products->have_posts() ) {
				$products->the_post();
		
				// Hook: woocommerce_shop_loop.
				do_action( 'woocommerce_shop_loop' );
				// Include the product content template.
				wc_get_template_part( 'content', 'product' );
			}
		
			woocommerce_product_loop_end();
		} else {
			echo '<p>No products found for this category.</p>';
		}
		

		echo '</div>';
	}

	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	}
?>

´
<?php


get_footer( 'shop' );