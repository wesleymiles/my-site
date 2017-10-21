<?php
/*
Template Name: Custom Blog Archive
*/
get_header(); ?>





<section>

  <h1>Things I Wrote</h1>
  <p>Mostly about design and the natural world.</p>

    <?php  // WP_Query arguments
    $args = array (
      'category_name'  => 'blog',
      'orderby'        => 'date',
      'posts_per_page' => 10,
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>

            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_date('F, Y', '<small>', '</small>'); ?>
            <?php the_excerpt(); ?>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>

      </div><?php } ?>

    <?php }
    // Restore original Post Data
    wp_reset_postdata(); ?>



    <?php  // WP_Query arguments
    $args = array (
      'pagename' => 'bark moon challenge'
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>

            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_date('F, Y', '<small>', '</small>'); ?>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
            <p>I photographed and identified trees from their bark everyday from the time it takes the moon to complete a cycle.</p>

      </div><?php } ?>

    <?php }
    // Restore original Post Data
    wp_reset_postdata(); ?>
    
</section>


<?php get_footer(); ?>
