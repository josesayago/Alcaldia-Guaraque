<?php
/**
 * Template Name: Inicio
 */
 get_header(); 
?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<section class="entry-content cf">
									<img class="alignright" src="<?php echo get_template_directory_uri(); ?>/library/images/mapa_315x362.png" />
									<?php the_content(); ?>
								</section>

							</article>

							<?php endwhile; ?>

							<?php endif; ?>

						</main>

						<div id="sidebar" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">
							<dl>
								<dt>Alcalde en Ejercicio</dt>
								<dd>Félix Rosales</dd>
								<dt>Superficie</dt>
								<dd>546 km<sup>2</sup></dd>
								<dt>Población (2013)</dt>
								<dd>11.145 hab.</dd>
								<dt>Huso Horario</dt>
								<dd>UTC -4:30</dd>
							</dl>
						</div>

				</div>

			</div>


<?php get_footer(); ?>
