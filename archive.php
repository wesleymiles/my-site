<?php get_header(); ?>



			<section>

				<?php while ( have_posts() ) : the_post(); ?>
				<article>

					<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read Post', 'nada'); ?></a></p>

				</article>

				<?php endwhile; ?>
					

				<nav id="pagi">
					<?php previous_posts_link('Previous'); ?>
					<?php next_posts_link('Next'); ?>
				</nav>
									
			</section>



<?php get_footer(); ?>