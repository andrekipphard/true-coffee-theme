

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

    <div class="col-11 col-lg-5 single-hero-text">
        
        <div class="text-end pt-5 mt-5 mobile-hide">
            <img src="/wp-content/uploads/2022/11/Herobild-Kommentar-Büro.png">
        </div>
        
        <div class="row">
            <div class="col-12 offset-1 offset-lg-0 single-hero-col bg-white p-5" style="--bs-bg-opacity:1;">
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

    <div class="col-12 col-lg-6 single-hero-col-3" style="background-image:url('/wp-content/uploads/2022/12/Herobild-shop.jpg');">
            
    </div>

</div>
<div class="row desktop-hide text-center" style="margin-top:-30rem; margin-bottom:5rem; z-index:999; position:relative">
	<div class="col">
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sidebarModal">
            Kategorien anzeigen
        </button>
		<div class="modal fade" id="sidebarModal" tabindex="1" aria-labelledby="sidebarModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
					</div>
					<div class="modal-body">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <?php
        // Get all top-level product categories
        $product_categories = get_terms(array(
            'taxonomy' => 'product_cat',
            'parent'   => 0,
        ));

        // Check if any top-level categories were found
        if (!empty($product_categories) && !is_wp_error($product_categories)) {
            foreach ($product_categories as $category) {
                $active = ($category === reset($product_categories)) ? 'active' : ''; // Set the first category as active
                echo '<button class="nav-link ' . $active . ' nav-pill-main-category" id="v-pills-' . $category->slug . '-tab" data-bs-toggle="pill" data-bs-target="#v-pills-' . $category->slug . '" type="button" role="tab" aria-controls="v-pills-' . $category->slug . '" aria-selected="' . ($active ? 'true' : 'false') . '">' . $category->name . '</button>';

                // Get the child categories
                $child_categories = get_terms(array(
                    'taxonomy' => 'product_cat',
                    'parent'   => $category->term_id,
                ));

                if (!empty($child_categories) && !is_wp_error($child_categories)) {
                    foreach ($child_categories as $child_category) {
                        $child_active = (get_queried_object()->term_id === $child_category->term_id) ? 'active' : ''; // Check if the child category is currently active
                        echo '<button class="nav-link ' . $child_active . ' nav-pill-sub-category" id="v-pills-' . $child_category->slug . '-tab" data-bs-toggle="pill" data-bs-target="#v-pills-' . $child_category->slug . '" type="button" role="tab" aria-controls="v-pills-' . $child_category->slug . '" aria-selected="' . ($child_active ? 'true' : 'false') . '">' . $child_category->name . '</button>';
                    }
                }
            }
        }
        ?>
    </div>
</div>

				</div>
			</div>
		</div>
	</div>
</div>


<?php
	// Get all top-level product categories
$product_categories = get_terms( array(
	'taxonomy' => 'product_cat',
	'parent'   => 0,
) );

// Check if any top-level categories were found
if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
	// Output the category tabs
	echo '<div class="row mt-lg-5 mx-lg-5 mx-3 category-tabs-mobile">';
	echo '<div class="col-12">';
	echo '<div class="row d-flex align-items-start">';
	echo '<div class="col-12 col-lg-4 sidebar-categories mobile-hide">';
	echo '<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">';

	foreach ( $product_categories as $category ) {
		$active = ( $category === reset( $product_categories ) ) ? 'active' : ''; // Set the first category as active
		echo '<button class="nav-link ' . $active . ' nav-pill-main-category" id="v-pills-' . $category->slug . '-tab" data-bs-toggle="pill" data-bs-target="#v-pills-' . $category->slug . '" type="button" role="tab" aria-controls="v-pills-' . $category->slug . '" aria-selected="' . ( $active ? 'true' : 'false' ) . '">' . $category->name . '</button>';

		// Get the child categories
$child_categories = get_terms( array(
    'taxonomy' => 'product_cat',
    'parent'   => $category->term_id,
) );

if ( ! empty( $child_categories ) && ! is_wp_error( $child_categories ) ) {
    foreach ( $child_categories as $child_category ) {
        $child_active = ( get_queried_object()->term_id === $child_category->term_id ) ? 'active' : ''; // Check if the child category is currently active
        echo '<button class="nav-link ' . $child_active . ' nav-pill-sub-category" id="v-pills-' . $child_category->slug . '-tab" data-bs-toggle="pill" data-bs-target="#v-pills-' . $child_category->slug . '" type="button" role="tab" aria-controls="v-pills-' . $child_category->slug . '" aria-selected="' . ( $child_active ? 'true' : 'false' ) . '">' . $child_category->name . '</button>';
    }
}

	}

	echo '</div>';
	echo '</div>';
	echo '<div class="col-12 col-lg-7 offset-lg-1" style="margin-bottom:5rem">';

	// Output the category content
	echo '<div class="tab-content" id="v-pills-tabContent">';
	$product_categories = get_terms( array(
		'taxonomy' => 'product_cat',
	) );
	foreach ( $product_categories as $category ) {
		$active = ( $category === reset( $product_categories ) ) ? 'show active' : ''; // Set the first category as active
		echo '<div class="tab-pane fade ' . $active . '" id="v-pills-' . $category->slug . '" role="tabpanel" aria-labelledby="v-pills-' . $category->slug . '-tab">';

	// Get the products for this category and its child categories
	$categories = get_term_children( $category->term_id, 'product_cat' );
	$categories[] = $category->term_id;

	// Get the child categories
	$child_categories = get_terms( array(
		'taxonomy' => 'product_cat',
		'parent'   => $category->term_id,
	) );

	// Get the IDs of child categories
	$child_category_ids = array();
	foreach ( $child_categories as $child_category ) {
		$child_category_ids[] = $child_category->term_id;
	}

	// Include the parent category ID and child category IDs in the tax_query
	$categories = array_merge( array( $category->term_id ), $child_category_ids );

	$products = new WP_Query( array(
		'post_type'      => 'product',
		'tax_query'      => array(
			array(
				'taxonomy' => 'product_cat',
				'field'    => 'terms',
				'terms'    => $categories,
			),
		),
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
		wp_reset_postdata(); // Reset the query
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

<script>
    // Scroll to the top of the pane when a category is clicked
    jQuery('.nav-link').on('click', function() {
        var paneTop = jQuery('.category-tabs-mobile').offset().top;
        var breathingRoom = 200; // Adjust the value to control the breathing room
        
        jQuery('html, body').animate({
            scrollTop: paneTop - breathingRoom
        }, 500);
    });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        var modal = document.querySelector('.modal');
        var bsModal = bootstrap.Modal.getInstance(modal);
        bsModal.hide();
      });
    });
  });
</script>

<?php


get_footer( 'shop' );