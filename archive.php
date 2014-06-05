<?php
/**
* A Simple Category Template
*/
get_header(); ?> 

<div class="container">
	<div class="col-md-8">
	<?php 
	// Check if there are any posts to display
		if ( have_posts() ) : ?>
			<header class="archive-header">
			<h1 class="archive-title"><?php wp_get_archives('type=monthly'); ?></h1>
			</header>

			<?php
			// The Loop
			while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

			<div class="entry">
			<?php the_excerpt(); ?>
			</div>
			<?php endwhile; // End Loop
			else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
