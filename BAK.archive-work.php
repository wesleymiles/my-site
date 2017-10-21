<?php
/*
Template Name: Work Thumbnails
*/
get_header(); ?>


  <section class="gallery">

   <h1><?php bloginfo('description'); ?></h1>

      <?php  // WP_Query arguments
      $args = array (
        'category_name'  => 'web',
        'orderby'        => 'date',
        'posts_per_page' => 6,
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post(); ?><div class="gallery-item">
          <div class="inner">
            <a href='<?php the_permalink(); ?>'>
              <?php if ( has_post_thumbnail() ) {?>
                <?php the_post_thumbnail( 'medium' );
              }?>
              <p><?php the_title(); ?></p>
            </a>
          </div>
        </div><?php } ?>

      <?php }
      // Restore original Post Data
      wp_reset_postdata(); ?>
      
    </ul>
  </section>
  

<?php get_footer(); ?>
