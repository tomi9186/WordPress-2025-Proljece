<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EFORTIS
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="row">
		<div class="col-md-8 m-auto">
			<h1><?php the_title(); ?></h1>
			<div>
				<span class="date">
					<?php the_date('Y'); ?>
				</span>
				<span class="categories">
					<?php the_category(', '); ?>
				</span>
			</div>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<div class="tags">
				<?php the_tags('', ' ', ''); ?>
			</div>
		</div>
	</div>



</article>
