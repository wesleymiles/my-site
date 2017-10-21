<?php
/*
Template Name: Bark Gallery
*/
get_header(); ?>


  <section>
    <h1><?php the_title(); ?></h1>

    <?php 
    // Run standard loop to get content from the page
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <?php the_content(); ?>
      <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?> 
  </section>

    <section class="gallery">
      <article>

      <?php 

      // WP_Query arguments
      $args = array (
        'category_name'  => 'bark',
        // 'orderby'        => 'date',
        'posts_per_page' => 100,
      );

      // The Query
      $query = new WP_Query( $args );


      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post(); ?>
         

          <?php 
          // Call the data we want
          $image = get_field('image_of_bark');
          if( !empty($image) ): ?>
            <li>
              <span style="background-image: url('<?php echo $image['sizes']['large']; ?>')">
                <h3><?php the_title(); ?></h3>
              </span>
              <p><?php the_field('latin_name'); ?>  |  <?php the_field('date'); ?>  |  <?php the_field('location'); ?></p>
            </li>
            <?php endif; ?>

        <?php } ?>          
      <?php }

      // Restore original Post Data
      wp_reset_postdata(); ?>
      
    </ul>
    </article>
  </section>
  
<style>




  li { list-style: none; }
  section.gallery { max-width: 100%; }
  .gallery li {
    width: 42%;
    display: inline-block;
    margin: 0 3% 4em;
  }
  .gallery li span {
    min-height: 400px;
    display: block;
    border-radius: 3px;
    background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;    
    margin-bottom: 1em;
  }
  .gallery h3 {
    background: rgba(0,0,0,.6);
    padding: 1em;
    color: #fff;
    float: left;
  }

  @media screen and (max-width: 766px) {
    .gallery li {  width: 89%; }
  } 

</style>

<?php get_footer(); ?>
