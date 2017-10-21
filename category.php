<?php get_header(); ?>

			
	<section>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
			<?php the_excerpt(); ?>

		</article>

		<?php endwhile; else : ?>
		
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		
		<?php endif; ?>	

		<nav id="pagi">
			<?php previous_posts_link('Previous'); ?>
			<?php next_posts_link('Next'); ?>
		</nav>
							
	</section>


<?php get_footer(); ?>