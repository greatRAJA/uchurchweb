<?php get_header(); ?>

	<div class="container">
		<div class="col-md-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p><em><?php the_time('1, F jS, Y'); ?></em></p>

				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, there are no posts'); ?></p>
			<?php endif; ?>
		</div> 
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>