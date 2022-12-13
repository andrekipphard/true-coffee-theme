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

	<footer id="colophon" class="site-footer pt-5 my-5 text-muted">
		<div class="site-info">
			<!-- *** Connect *** -->
			<div class="row connect mt-5 pt-5">

				<div class="col">

					<div class="h2 text-uppercase text-center">
						We'd love to connect
					</div>

				</div>

			</div>

			<div class="row pb-5 mb-5">

				<div class="col-9">
					<img src="/wp-content/uploads/2022/11/Kontaktanfrage-1.png" class="img-fluid">
				</div>

				<div class="col-3">

					<a href="/kontakt/"><div class="btn btn-no-border">
						Kontaktanfrage schicken
					</div></a>

				</div>

			</div>
			<!-- *** Partner *** -->
			<div class="row mt-5 pt-5 pb-5 mb-5">

				<div class="col border-end border-dark text-center">
					<img src="/wp-content/uploads/2022/11/Partner-logos.png" class="img-fluid">
				</div>

				<div class="col border-end border-dark text-center">
					<img src="/wp-content/uploads/2022/11/Partner-logos-4.png" class="img-fluid">
				</div>

				<div class="col border-end border-dark text-center">
					<img src="/wp-content/uploads/2022/11/Partner-logos-3.png" class="img-fluid">
				</div>

				<div class="col border-end border-dark text-center">
					<img src="/wp-content/uploads/2022/11/Partner-logos-2.png" class="img-fluid">
				</div>

				<div class="col text-center">
					<img src="/wp-content/uploads/2022/11/Partner-logos-1.png" class="img-fluid">
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
					<img src="/wp-content/uploads/2022/11/true-coffee-siegel.png" style="width:50rem;" class="image-fluid">
				</div>

			</div>

			<!-- *** Footer *** -->
			<div class="row">

				<div class="col-2 d-flex justify-content-end align-self-center">
				
					<a href="/" class="d-flex align-items-center text-dark text-decoration-none">

						<img src="/wp-content/uploads/2022/11/True-Coffee-Logo.png" style="width: 5rem;">

					
					</a>
				</div>

				<div class="col-4 d-flex justify-content-center align-self-center">
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

				<div class="col-2 d-flex justify-content-start align-self-center">

					<ul class="list-group pt-5 pb-5 pe-2">
						<li class="list-group-item bg-transparent border-0 text-dark mb-3"><a href="#"><i class="bi bi-facebook"></i></a></li>
						<li class="list-group-item bg-transparent border-0 text-dark mb-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
						<li class="list-group-item bg-transparent border-0 text-dark"><a href="#"><i class="bi bi-twitter"></i></a></li>
					</ul>

				</div>

				<div class="col-2 d-flex align-self-center justify-content-end">

					<a href="#top"><div class="btn btn-no-border">
						Nach oben
					</div></a>

				</div>

				<div class="col-2 footer-col-arrow-to-top d-flex justify-content-start align-self-end">
					<a href="#top"><img src="/wp-content/uploads/2022/11/Pfeil-nach-oben-e1668433287503.png">
				</div></a>

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>
