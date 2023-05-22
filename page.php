<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kipphard
 */

get_header();
get_template_part('template-parts/layouts/sticky-socials');
?>

		<main id="primary" class="site-main">
			<div class="container">
					<?php if (have_rows('content')):
						while( have_rows('content')): the_row(); 

							if( get_row_layout() == 'hero' ):
								
								get_template_part( 'template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'coffe_circle' ): 

								get_template_part( 'template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'schmuck_text'):
							
								get_template_part('template-parts/layouts/'. get_row_layout() );
							
							elseif( get_row_layout() == 'verantwortung'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'unsere_produkte'):
									
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'zitat'):
								
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'so_einfach'):
							
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'testimonials'):
							
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'single_hero'):
						
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'text_in_bild_titel_rechts'):
					
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'titel_subtitel_text'):
				
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'projektgebiete'):
			
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'text_in_bild_titel_links'):
				
								get_template_part('template-parts/layouts/'. get_row_layout() );
						
							elseif( get_row_layout() == 'unsere_produkte_einzeln'):
			
								get_template_part('template-parts/layouts/'. get_row_layout() );
							
							elseif( get_row_layout() == 'verantwortung_einzeln'):
		
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'coffee_balance_bio_fairtrade'):
	
								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'titel_mittig'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'alleinstellungsmerkmale'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'angebote'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'woocommerce_kategorie_titel_links'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'woocommerce_kategorie_titel_rechts'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'testimonial_slider'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'kontakt'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							elseif( get_row_layout() == 'leadform'):

								get_template_part('template-parts/layouts/'. get_row_layout() );

							endif; 

						endwhile;

					endif;
					
					?>
							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>

				</div>	


		</main>
		
<?php
get_footer();
