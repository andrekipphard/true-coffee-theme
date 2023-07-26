<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package true_coffee
 */

?>

	<footer id="colophon" class="site-footer pt-lg-5 my-lg-5 text-muted">
		<div class="site-info">
			<!-- *** Connect *** -->
			<div class="row connect mt-lg-5 pt-lg-5">

				<div class="col-12">

					<div class="h2 text-uppercase text-center">
						We'd love to connect
					</div>

				</div>

			</div>

			<div class="row connect-arrow pb-lg-5 mb-lg-5">

				<div class="col-6 col-lg-9 position-relative">
					<img src="/wp-content/uploads/2022/11/Kontaktanfrage-1.png" class="img-fluid mobile-hide">
					<img src="/wp-content/uploads/2022/11/Kontaktanfrage-1.png" class="desktop-hide contact-arrow">
				</div>

				<div class="col-6 col-lg-3">

					<a href="/kontakt/"><div class="btn btn-no-border">
						Kontaktanfrage schicken
					</div></a>

				</div>

			</div>
			<!-- *** Partner *** -->
			<div class="row mt-lg-5 pt-5 pb-5 mb-lg-5">
				<!-- Slider main container -->
				<div class="swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<?php if ( have_rows( 'logo_carousel', 'options' ) ) : ?>
							<?php while ( have_rows( 'logo_carousel', 'options' ) ) :
								the_row(); ?>
								
								<?php $image = get_sub_field( 'image', 'options' );?>
								<div class="swiper-slide">
									<div class="col border-lg-end border-dark text-center" style="padding-right:25px; padding-left:25px;">
										<img src="<?= wp_get_attachment_image_url($image, 'large');?>" style="height: 75px; width: auto;">
									</div>
								</div>	
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

				</div>

			</div>

			<!-- *** Footer Images *** -->
			<div class="row footer-images">

				<div class="col">
					<img src="/wp-content/uploads/2022/12/Footerbilder-1.jpg" style="width:100%" class="image-fluid">
				</div>
			</div>

			<div class="row row-footer-siegel">

				<div class="col-5">

				</div>

				<div class="col-7">
					<img src="/wp-content/uploads/2023/03/siegel-true-coffee-kon-04.png" style="width:50rem;" class="image-fluid footer-siegel">
				</div>

			</div>

			<!-- *** Footer *** -->
			<div class="row">

				<div class="col-3 col-lg-2 d-flex justify-content-center justify-content-lg-end align-self-center">
				
					<a href="/" class="d-flex align-items-center text-dark text-decoration-none">

						<img src="/wp-content/uploads/2022/11/True-Coffee-Logo.png" style="width: 5rem;" class="footer-logo">

					
					</a>
				</div>

				<div class="col-5 col-lg-4 d-flex justify-content-center align-self-center">
					<nav class="navbar-footer">
							<div class="navbar-nav">
								<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											)
										);
									?>
							</div>
					</nav>

				</div>

				<div class="col-12 col-lg-2 footer-socials d-flex justify-content-start align-self-center mobile-hide">

					<ul class="list-group pt-5 pb-5 pe-2">
						<li class="list-group-item bg-transparent border-0 text-dark mb-3"><a href="https://www.facebook.com/truecoffee.de/" target="_blank"><i class="bi bi-facebook"></i></a></li>
						<li class="list-group-item bg-transparent border-0 text-dark mb-3"><a href="https://www.instagram.com/true_coffee_germany/?hl=de" target="_blank"><i class="bi bi-instagram"></i></a></li>
						<li class="list-group-item bg-transparent border-0 text-dark mb-3"><a href="tel:+49 (0)2 15 13 87 46 00" target=""><i class="bi bi-telephone"></i></a></li>
            			<li class="list-group-item bg-transparent border-0 text-dark"><a href="mailto:kontakt@true-coffee.de"><i class="bi bi-envelope"></i></a></li>
					</ul>

				</div>

				<div class="col-2 col-lg-2 d-flex align-self-start align-self-lg-center justify-content-end">

					<a href="#top"><div class="btn btn-no-border btn-to-top">
						Nach oben
					</div></a>

				</div>

				<div class="col-2 col-lg-2 footer-col-arrow-to-top d-flex justify-content-start align-self-end">
					<a href="#top"><img src="/wp-content/uploads/2022/11/Pfeil-nach-oben-e1668433287503.png">
				</div></a>

			</div>
			<div class="row pb-5 pt-lg-5 d-flex flex-row mb-4 mb-lg-0">
				<div class="col-12 d-flex justify-content-center flex-lg-row flex-column ps-lg-3 ps-4">
					<h4 class="h4 text-uppercase mb-lg-0 mb-3 order-mobile-2" style="font-size:14px;">Copyright © 2023 by True Coffee <span class="mobile-hide">-</span></h4>
					<ul class="d-lg-flex mb-0 ps-lg-2 ps-0 order-mobile-1" style="font-family: 'Bebas Neue'; font-size: 14px;
	letter-spacing: 0.2rem; line-height:1.2;">
						<li class="me-3 mb-3 mb-lg-0"><a href="/agb/">AGB</a></li>
						<li class="me-3 mb-3 mb-lg-0"><a href="/datenschutzerklaerung/">Datenschutzerklärung</a></li>
						<li class="me-3 mb-3 mb-lg-0"><a href="/impressum/">Impressum</a></li>
						<li class="me-3 mb-3 mb-lg-0"><a href="/versandarten/">Versandarten</a></li>
						<li class="me-3 mb-3 mb-lg-0"><a href="http://localhost:10018/widerrufsbelehrung/">Widerrufsbelehrung</a></li>
						<li class="mb-3 mb-lg-0"><a href="http://localhost:10018/bezahlmoeglichkeiten/">Zahlungsarten</a></li>
					</ul>
				</div>
				
				
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>




</body>
</html>
