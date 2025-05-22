<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EFORTIS
 */

get_header();
?>

	<header class="page-header text-white py-5 mb-5 bg-archive">
		<div class="container">
			<?php
					the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</div>
	</header>

	<main id="primary" class="site-main container">
		<div class="row">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-archive' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
