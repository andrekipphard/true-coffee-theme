
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
$product_id = $product->get_id();
$price = $product->get_price();
$weight = $product->get_weight();
$short_description = $product->get_short_description();
$sku = $product->get_sku();
$prev = get_adjacent_post(false,'',true); 
$next = get_adjacent_post(false,'',false);
$prev_url = get_permalink($prev->ID);
$next_url = get_permalink($next->ID);

$geschmackprofil = get_field('geschmackprofil');
$ursprung = get_field('ursprung');
$geeignet_fur = get_field('geeignet_fur');



get_header( 'shop' ); 
get_template_part('template-parts/layouts/sticky-socials');
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="row single-hero">
			
		<div class="col-1">

		</div>

		<div class="col-5 single-hero-text">
			
			<div class="text-end pt-5 mt-5">
				<img src="/wp-content/uploads/2022/11/Herobild-produkt.png">
			</div>
			
			<div class="row">
				<div class="col single-hero-col bg-white p-5" style="--bs-bg-opacity:1;">
					<div class="h1 text-uppercase mb-3">
					<?php the_title( '<h1 class="product_title entry-title">', '</h1>' );?>
					</div>

					<div class="p text-uppercase mb-3" style="font-size: 16px;
						color:#000;
						letter-spacing: 0.3rem;
						font-family:'Bebas Neue';"
					>
					<?php if ( $product->is_type( 'variable' ) )
						echo 'Inhalt: <div class="var_info"></div> Gamm';
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
					<!-- <div class="p text-uppercase mb-3" style="font-size: 12px;
						color:#000;
						letter-spacing: 0.2rem;
						font-family:'Bebas Neue';"
					>
						*inkl. MwSt. zzgl. Versandkosten NOCH HARDCODE
					</div> -->
					<script>
						jQuery('.legal-price-info').appendTo('.artikelnummer');
						jQuery('.tax-info').prepend('*');
					</script>
				</div>
			</div>
		
		</div>

		<div class="col-6 d-flex align-items-end justify-content-end single-hero-col-3" style="background-image:url('/wp-content/uploads/2022/12/Produktebild-1.jpg');">
			<div class="row me-5 mb-5">
				<?php if(!empty($prev)&&!empty($next)):?>
					<div class="col-6">		
						<a href="<?=$prev_url;?>"><img src="/wp-content/uploads/2022/11/Vorher-Button-mit-Pfeil--e1669375427843.png" class="img-fluid" size="large"></a>
					</div>
					<div class="col-6">
						<a href="<?=$next_url;?>"><img src="/wp-content/uploads/2022/11/Nacher-Button-mit-Pfeil-e1669375406723.png" class="img-fluid" size="large"></a>
					</div>
				<?php else:?>
					<div class="col-12">
						<?php if(!empty($prev)):?>
							<a href="<?=$prev_url;?>"><img src="/wp-content/uploads/2022/11/Vorher-Button-mit-Pfeil--e1669375427843.png" class="img-fluid" size="large"></a>
						<?php endif;
						if(!empty($next)):?>
								<a href="<?=$next_url;?>"><img src="/wp-content/uploads/2022/11/Nacher-Button-mit-Pfeil-e1669375406723.png" class="img-fluid" size="large"></a>
						<?php endif;?>
					</div>
				<?php endif;?>
			</div>
		</div>

	</div>
	<div class="row ms-5 me-5">
		<div class="col ps-0 pe-0">
			<ul class="nav nav-tabs ms-5" id="myTab" role="tablist">
				<li class="nav-item ms-5 rounded-0" role="presentation">
					<button class="nav-link active bg-black text-white ps-5 pe-5 rounded-0 border-0" id="produkt-details" data-bs-toggle="tab" data-bs-target="#produkt-details-pane" type="button" role="tab" aria-controls="produkt-details-tab-pane" aria-selected="true">Produkt-Details</button>
				</li>
			</ul>
			<div class="tab-content pt-5 pb-5 bg-black text-white" id="myTabContent">
				<div class="tab-pane ms-5 mt-5 ps-4 fade show active" id="produkt-details-tab-pane" role="tabpanel" aria-labelledby="produkt-details" tabindex="0">
					<div class="row">
						<div class="col-4 ps-5 pe-5 border-end border-light">
							<div class="p h4 text-white mb-4">
								Geschmackprofil
							</div>
							<div class="p">
								<?= $geschmackprofil; ?>
							</div>
						</div>
						<div class="col-4 ps-5 pe-5 border-end border-light">
							<div class="p h4 text-white mb-4">
								Ursprung
							</div>
							<div class="p">
								<?= $ursprung; ?>
							</div>
						</div>
						<div class="col-4 ps-5 pe-5">
							<div class="p h4 text-white mb-4">
								Geeignet für
							</div>
							<div class="p">
								<?= $geeignet_fur; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row ms-5 me-5 p-5 bg-black">
		<div class="col-8 p-5 mb-5">
			<div class="versprechen text-white mb-3">
				Unser Qualitäts- und Nachhaltigkeitsversprechen
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
		<div class="col-4 d-flex align-items-center justify-content-center">
			<img src="/wp-content/uploads/2022/11/Produktdetails-Illustration.png">
		</div>
	</div>
	<div class="row related-products text-center mt-5 ms-5 me-5 pt-5 pb-5">
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

	<div class="row ms-5 me-5 mt-5" style="background-image:url('/wp-content/uploads/2022/12/Hintergrundbild-fuer-Titel.jpg'); background-size:70rem; background-position:top right; background-repeat:no-repeat;">

		<div class="col-7 abschnitt-hilf-mit">
			
			<div class="row ms-5">
				<div class="col single-hero-col bg-white p-5" style="--bs-bg-opacity:1;">
					<div class="hilf-mit text-uppercase mb-3">
						Du hilfst dabei, die Welt zu einem besseren ort zu machen!
					</div>

					<div class="h4">
						Social - Ecological - Zero Packaging
					</div>
					<a href="/verantwortung/"><div class="btn btn-primary mt-5">
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
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
