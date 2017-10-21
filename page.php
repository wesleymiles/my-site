<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<section>
			<article>
				<?php the_content(); ?>
			<article>
		</section>
	<?php endwhile; ?>

<?php get_footer(); ?>