
<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$product = wc_get_product();
$excerpt = $product->get_short_description() ?: get_post_field( 'post_excerpt', $product->get_id() );
$product_id = $product->get_id();
$price = $product->get_price();
$weight = $product->get_weight();
$short_description = $product->get_short_description();
$sku = $product->get_sku();
$prev = get_adjacent_post(false,'',true); 
$next = get_adjacent_post(false,'',false);
$prev_url = get_permalink($prev->ID);
$next_url = get_permalink($next->ID);
// Assuming $product is a valid WooCommerce product object
$attachment_ids = $product->get_gallery_image_ids();

$gallery_image_urls = array(); // Array to store the image URLs

// Get the featured image ID of the product
$featured_image_id = get_post_thumbnail_id($product->get_id());

// Get the featured image URL and add it at index 0
if ($featured_image_id) {
    $featured_image_data = wp_get_attachment_image_src($featured_image_id, 'full');
    if ($featured_image_data) {
        $gallery_image_urls[] = $featured_image_data[0];
    }
}

foreach ($attachment_ids as $attachment_id) {
    // Get the image URL using the attachment ID
    $image_data = wp_get_attachment_image_src($attachment_id, 'full');
    
    // Check if the image data was retrieved successfully
    if ($image_data) {
        // $image_data[0] contains the URL of the image
        $gallery_image_urls[] = $image_data[0];
    }
}

// Now $gallery_image_urls contains the featured image URL at index 0 and all the gallery image URLs


$geschmackprofil = get_field('geschmackprofil');
$ursprung = get_field('ursprung');
$geeignet_fur = get_field('geeignet_fur');



get_header( 'shop' ); 
get_template_part('template-parts/layouts/sticky-socials');
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="row single-hero">
			
		<div class="col-1 col-lg-1">

		</div>

		<div class="col-10 col-lg-5 single-hero-text">
			
			<div class="text-end pt-5 mt-5 mobile-hide">
				<img src="/wp-content/uploads/2023/08/Gruppe-579.png">
			</div>
			
			<div class="row">
				<div class="col offset-1 offset-lg-0 single-hero-col bg-white p-lg-5" style="--bs-bg-opacity:1;">
				<?php

				woocommerce_output_all_notices();	?>
					<div class="h1 text-uppercase mb-3">
					<?php the_title( '<h1 class="product_title entry-title">', '</h1>' );?>
					</div>

					<div class="p text-uppercase mb-3" style="font-size: 16px;
						color:#000;
						letter-spacing: 0.3rem;
						font-family:'Bebas Neue';"
					>
					<?php if ( $product->is_type( 'variable' ) )
						echo 'Inhalt: <div class="var_info"></div> Gramm';
						wc_enqueue_js( "
							$(document).on('found_variation', 'form.cart', function( event, variation ) {   
								$('.var_info').html(variation.weight); 
							});
						" );
						if ( !$product->is_type( 'variable' ) )
							echo "Inhalt: $weight Gramm";
					?> 
					</div>
					<div class="p mb-3">
						<?php do_action( 'woocommerce_single_product_summary' );?>
						
					</div>
					<div class="product_meta custom p text-uppercase mb-3 artikelnummer" style="font-size: 12px;
					color:#000;
					letter-spacing: 0.2rem;
					font-family:'Bebas Neue';>

						<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
				
							<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>
						<?php endif; ?>
				
					</div>
					<div class="p text-uppercase mb-3" style="font-size: 12px;
						color:#000;
						letter-spacing: 0.2rem;
						font-family:'Bebas Neue';"
					>
					</div>
					<script>
						jQuery('.legal-price-info').appendTo('.artikelnummer');
						jQuery('p.wc-gzd-additional-info').prepend('*');
					</script>
				</div>
			</div>
		
		</div>

		<div class="col-12 col-lg-6 d-flex flex-column align-items-lg-center justify-content-end single-hero-col-3" style="background-image:url('');">
    <div class="row">
        <div class="col">
            <div class="product-gallery">
                <?php
                // Check if there are gallery images, if not, use the placeholder image
                if (!empty($gallery_image_urls)) {
                    ?>
                    <img src="<?php echo $gallery_image_urls[0]; ?>" class="current-product-image img-fluid" style="max-height:500px;"/>
                    <?php
                } else {
                    ?>
                    <img src="<?php echo wc_placeholder_img_src(); ?>" class="current-product-image img-fluid" style="max-height:500px;"/>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <div class="row me-lg-5 mb-5">
		<?php if (count($gallery_image_urls) > 1) : ?> <!-- Check if there are more than one image in the gallery -->
			<div class="col-6">
				<a href="#" class="previous-button"><img src="/wp-content/uploads/2022/11/Vorher-Button-mit-Pfeil--e1669375427843.png" class="img-fluid" size="large"></a>
			</div>
			<div class="col-6">
				<a href="#" class="next-button"><img src="/wp-content/uploads/2022/11/Nacher-Button-mit-Pfeil-e1669375406723.png" class="img-fluid" size="large"></a>
			</div>
		<?php endif; ?>
	</div>


</div>



	</div>
	<div class="row ms-lg-5 me-lg-5">
		<div class="col ps-0 pe-0">
			<ul class="nav nav-tabs ms-lg-5" id="myTab" role="tablist">
				<li class="nav-item ms-lg-5 rounded-0" role="presentation">
					<button class="nav-link active bg-black text-white ps-5 pe-5 rounded-0 border-0" id="produkt-details" data-bs-toggle="tab" data-bs-target="#produkt-details-pane" type="button" role="tab" aria-controls="produkt-details-tab-pane" aria-selected="true">Produkt-Details</button>
				</li>
			</ul>
			<div class="tab-content pt-5 pb-5 bg-black text-white" id="myTabContent">
				<div class="tab-pane ms-lg-5 mt-lg-5 ps-4 fade show active" id="produkt-details-tab-pane" role="tabpanel" aria-labelledby="produkt-details" tabindex="0">
					<div class="row mb-5 pe-lg-5">
						<div class="col ps-5 pe-5">
						<?php echo $excerpt;?>
						</div>
					</div>
					<?php if($geschmackprofil || $ursprung || $geeignet_fur):?>
						<div class="row pt-lg-5">
							<?php if($geschmackprofil):?>
								<div class="col-12 col-lg-4 ps-5 pe-5 pb-5 pb-lg-0 border-end border-bottom border-lg-bottom-0 border-light">
									<div class="p h4 text-white mb-4">
										Geschmackprofil
									</div>
									<div class="p">
										<?= $geschmackprofil; ?>
									</div>
								</div>
							<?php endif;?>
							<?php if($ursprung):?>
								<div class="col-12 col-lg-4 ps-5 pe-5 border-end border-bottom border-lg-bottom-0 pt-5 pt-lg-0 pb-5 pb-lg-0 border-light">
									<div class="p h4 text-white mb-4">
										Ursprung
									</div>
									<div class="p">
										<?= $ursprung; ?>
									</div>
								</div>
							<?php endif;?>
							<?php if($geeignet_fur):?>
								<div class="col-12 col-lg-4 ps-5 pe-5 pt-5 pt-lg-0">
									<div class="p h4 text-white mb-4">
										Geeignet für
									</div>
									<div class="p">
										<?= $geeignet_fur; ?>
									</div>
								</div>
							<?php endif;?>
						</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
	<div class="row ms-lg-5 me-lg-5 <?php if($geschmackprofil || $ursprung || $geeignet_fur):?>p-lg-5<?php else:?>ps-lg-5 pb-lg-5 pe-lg-5<?php endif;?> p-2 bg-black">
		<div class="col-12 col-lg-8 <?php if($geschmackprofil || $ursprung || $geeignet_fur):?>p-5<?php else:?>ps-5 pb-5 pe-5<?php endif;?> mb-5">
			<div class="versprechen text-white mb-3">
				Unser Qualitäts- und Nachhaltigkeits&shy;versprechen
			</div>
			<div class="p text-white">
				Angebaut in Mischkulturen inmitten des Regenwaldes, werden unsere Kaffees mit der Hand gepflückt. So garantieren wir die perfekte Bohnenauslese und vermeiden den sonst üblichen Einsatz von schweren Erntemaschinen, für die Jahr für Jahr gewaltige Flächen Regenwald gerodet werden. 
				<br><br>
				Unsere Kaffees werden von unserem Röstmeister schonend mit der Hand geröstet. Nur so entfalten sich in Gänze die feinen Aromen unserer so besonderen Spezialitätenkaffees. 
				<br><br>
				Aus Respekt vor der Natur und den involvierten Menschen sind unsere Kaffees sowohl Bio als auch Fairtrade zertifiziert. 
				<br><br>
				Darüber hinaus spenden wir pro verkauftem Kilo Kaffee 1 Euro für soziale Projekte der Kinernothilfe in Honduras und Indie, den Ursprungsländern unserer Kaffeebohnen. 
				<br><br>
				Unsere Produkte sind der Umwelt und Gesundheit zuliebe aluminiumfrei verpackt.
			</div>
		</div>
		<div class="col-12 col-lg-4 d-flex align-items-center justify-content-end justify-content-lg-center">
			<img src="/wp-content/uploads/2022/11/Produktdetails-Illustration.png" class="product-illustration">
		</div>
	</div>
	<div class="row related-products text-center mt-lg-5 ms-lg-5 me-lg-5 pt-lg-5 pb-5">
		<div class="h3 mt-5 pt-5 mb-5">
			Das könnte dir auch schmecken
		</div>
		<?php if( ! is_a( $product, 'WC_Product' ) ){
			$product = wc_get_product(get_the_id());
			}

			woocommerce_related_products( array(
				'posts_per_page' => 5,
				'columns'        => 5,
				'orderby'        => 'rand'
			) );
		?>

	</div>

	<div class="row ms-lg-5 me-lg-5 mt-lg-5 product-background-image" style="background-image:url('/wp-content/uploads/2022/12/Hintergrundbild-für-Titel.jpg'); background-size:70rem; background-position:top right; background-repeat:no-repeat;">

		<div class="col-10 col-lg-7 abschnitt-hilf-mit">
			
			<div class="row ms-lg-5">
				<div class="col single-hero-col bg-white p-5" style="--bs-bg-opacity:1;">
					<div class="hilf-mit text-uppercase mb-3">
						Du hilfst dabei, die Welt zu einem besseren ort zu machen!
					</div>

					<div class="h4">
						Social - Ecological - Zero Packaging
					</div>
					<a href="/verantwortung/"><div class="btn btn-primary mt-3 mt-lg-5">
                        Mehr erfahren
                    </div></a>
				</div>
			</div>
		
		</div>

		<div class="col-5 d-flex align-items-end justify-content-end">
			<div class="row me-5 mb-5">

			</div>
		</div>

	</div>
</div>

<script>
  var galleryImages = <?php echo json_encode($gallery_image_urls); ?>;
  console.log(galleryImages); // Check the output in the browser console
  // Rest of the JavaScript code...
</script>
<script>
  jQuery(document).ready(function($) {
	var galleryImages = <?php echo json_encode($gallery_image_urls); ?>;
    var currentImageIndex = 0;

    // Function to set the current image as the product gallery image
    function setCurrentImage() {
      var currentImage = galleryImages[currentImageIndex];
      $('.current-product-image').attr('src', currentImage);
    }

    // Show next image on clicking the "Next" button
    $('.next-button').on('click', function(event) {
      event.preventDefault();
      currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
      setCurrentImage();
    });

    // Show previous image on clicking the "Previous" button
    $('.previous-button').on('click', function(event) {
      event.preventDefault();
      currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
      setCurrentImage();
    });

    // Set the initial product gallery image
    setCurrentImage();
  });
</script>


<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */



