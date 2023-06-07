<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package true_coffee
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
	

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/leadform.js"></script>



	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a name="top"></a>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'true-coffee' ); ?></a>

	<header class="d-flex align-items-center header pt-3 ps-5 pe-5">

				<div class="d-flex flex-row w-100 pt-lg-5 pt-0">

					<div class="col d-flex justify-content-start">
						
						<a href="/" class="d-flex align-items-center text-dark text-decoration-none logo">

							<img src="/wp-content/uploads/2022/11/True-Coffee-Logo.png">
		
						</a>

					</div>

					<div class="col d-flex justify-content-end">

						<button type="button" class="hamburger-btn btn btn-primary bg-transparent border-0 align-self-start offcanvas-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
							
							<img src="/wp-content/uploads/2022/11/Menu.png">
							<!-- <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000" class="bi bi-justify" viewBox="0 0 16 16">
			  					
								<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
							
							</svg> -->

						</button>

		<!-- *** Offcanvas *** -->

						<div class="offcanvas offcanvas-start bg-black" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
							
							<div class="row offcanvas-header mt-5 me-5 ms-5">

								<div class="col">

									<img src="/wp-content/uploads/2022/11/True-Coffee-Logo-weis.png" style="width: 5rem;" class="offcanvas-logo">

								</div>

								<div class="col d-flex justify-content-end align-self-start">

									<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

								</div>
								
							</div>
							
							<div class="row offcanvas-body">
								
								<div class="col-1 d-flex flex-row-reverse justify-content-end align-self-center ps-0">
									
									<ul class="list-group border-top border-end border-bottom rounded-0 pt-5 pb-5 pe-2 ps-lg-5">
										<li class="list-group-item bg-transparent border-0 text-white mb-3 ps-lg-5"><a href="#!"><i class="bi bi-facebook"></i></a></li>
										<li class="list-group-item bg-transparent border-0 text-white mb-3 ps-lg-5"><a href="#!"><i class="bi bi-instagram"></i></a></li>
										<li class="list-group-item bg-transparent border-0 text-white ps-lg-5"><a href="#!"><i class="bi bi-twitter"></i></a></li>
									</ul>

								</div>
								
								<div class="col-10 d-flex justify-content-center align-self-center ps-0">
									<nav class="navbar-header text-white">
											<div class="navbar-nav text-white text-center">
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
									<!--<ul class="list-group pe-5 nav-menu">
										<a href="#" class="text-white menu-item"><li class="list-group-item bg-transparent border-0 text-white text-center ps-5 pe-5">Home</li></a>
										<a href="#" class="text-white menu-item"><li class="list-group-item bg-transparent border-0 text-white text-center ps-5 pe-5">Shop</li></a>
										<a href="#" class="text-white menu-item"><li class="list-group-item bg-transparent border-0 text-white text-center ps-5 pe-5">Verantwortung</li></a>
										<a href="#" class="text-white menu-item"><li class="list-group-item bg-transparent border-0 text-white text-center ps-5 pe-5">Büro</li></a>
										<a href="#" class="text-white menu-item"><li class="list-group-item bg-transparent border-0 text-white text-center ps-5 pe-5">Über uns</li></a>
										<a href="#" class="text-white menu-item"><li class="list-group-item bg-transparent border-0 text-white text-center ps-5 pe-5">Kontakt</li></a>
									
									</ul>-->
								</div>

								<div class="col-1 d-flex flex-row-reverse justify-content-start align-self-center pe-0">
									
									<ul class="list-group border-top border-start border-bottom rounded-0 pt-5 pb-5 pe-lg-5 ps-2">
										
										<li class="list-group-item bg-transparent border-0 text-white mb-3  pe-lg-5"><a href="/warenkorb/"><i class="bi bi-cart"></i></a></li>
										<li class="list-group-item bg-transparent border-0 text-white mb-3  pe-lg-5"><a href="/wunschliste/"><i class="bi bi-cup"></i></a></li>
										<li class="list-group-item bg-transparent border-0 text-white  pe-lg-5"><a href="/mein-konto/"><i class="bi bi-person"></i></a></li>
									
									</ul>
								</div>
						
							</div>

						</div>

		<!-- *** Offcanvas End -->
			
					</div>

				</div>

			</header><!-- #masthead -->
<script>
	const body = document.querySelector('body');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    body.classList.add('scrolled');
  } else {
    body.classList.remove('scrolled');
  }
});
	</script>