<div class="col-md-4 mb-5 content-archive">
	<a href="<?php the_permalink(); ?>">
		<?php if (has_post_thumbnail()) : ?> <div class="featured-image"> <?php the_post_thumbnail('medium'); ?> </div> <?php endif; ?>
	</a>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

	<p><?php the_excerpt(); ?></p>

	<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
</div>