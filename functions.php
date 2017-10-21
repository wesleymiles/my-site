<?php

add_filter( 'use_default_gallery_style', '__return_false' );

if ( ! isset( $content_width ) ) $content_width = 1400;


function nada_theme_slug_setup() {
	register_nav_menu('primary', 'Primary');

   add_theme_support( 'title-tag' );
   add_theme_support('automatic-feed-links');
	 add_theme_support('post-thumbnails'); 
	 
} add_action( 'after_setup_theme', 'nada_theme_slug_setup' ); 



function nada_html5shiv() { ?>
	<!--[if lt IE 9]>
	<script src=" <?php echo get_template_directory_uri(); ?>html5.js"></script>
	<![endif]-->
<?php }
add_action('wp_head', 'nada_html5shiv');



function nada_theme_styles() { 
	wp_register_style( 'fonts-style', '//fonts.googleapis.com/css?family=Work+Sans:600', array(), null, null );
  wp_register_style( 'nada-style', get_stylesheet_uri() );
  wp_enqueue_style( 'fonts-style' );    
  wp_enqueue_style( 'nada-style' );    
}
add_action('wp_enqueue_scripts', 'nada_theme_styles');


function nada_signup_customizer($wp_customize){

	$wp_customize->add_section('ga_settings_section', array(
	  'title'          => 'Google Analytics Code'
	 ));
	 
	$wp_customize->add_setting('ga_setting', array(
	 'default'     => 'UA-2130842-1',
 	 'sanitize_callback' => 'esc_textarea',
	 ));

	$wp_customize->add_control('ga_setting', array(
	 'label'   => 'Google Analytics Code:',
	 'section' => 'ga_settings_section',
	 'type'    => 'text'
	));


	function nada_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input, array( 'strong' => array(), 'a' => array('href') ) ) );
	}
} add_action('customize_register', 'nada_signup_customizer');


?>