<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<section>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1 class="post-title"><?php the_title(); ?></h1>

				<div class="post-details">

					 <?php if( get_field('date') ){ ?>
					  <div class="date">
					  	<h4>Date</h4>
		          <p><?php the_field('date') ?></p>
		        </div>
	        <?php } ?>

	        <?php if( get_field('role') ){ ?>
					  <div class="role">
					  	<h4>Role</h4>
		          <p><?php the_field('role') ?></p>
		        </div>
	        <?php } ?>

	         <?php if( get_field('url') ){ ?>
					  <div class="url">
					  	<h4>URL</h4>
		          <p><a href="<?php the_field('url') ?>" target="blank"><?php the_field('url') ?></a></p>
		        </div>
	        <?php } ?>

	        <?php if( get_field('services') ){ ?>
					  <div class="services">
					  	<h4>Role</h4>
		          <p><?php the_field('services') ?></p>
		        </div>
	        <?php } ?>

	        <?php if( get_field('agency') ){ ?>
					  <div class="agency">
					  	<h4>Agency</h4>
		          <p><?php the_field('agency') ?></p>
		        </div>
	        <?php } ?>
	       </div>


	      <?php $image = get_field('image'); $caption = $image['caption'];
	    	if( !empty($image) ):?>
	    		<div class="featuredimage">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php if( $caption ): ?>
							<p class="wp-caption-text"><?php echo $caption; ?></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>


				 <?php $image_of_bark = get_field('image_of_bark');
	    			if( !empty($image_of_bark) ):?>
							<img src="<?php echo $image_of_bark['sizes']['large']; ?>" alt="<?php echo $image_of_bark['alt']; ?>" />
				<?php endif; ?>



				<?php the_content(); ?>



			</article>
		</section>
	<?php endwhile; ?>

<?php get_footer(); ?>