<?php

// include(get_template_directory_uri().'/sections/functions/fhome.php');
// include(get_template_directory_uri().'/sections/functions/fservices.php');

add_action( 'customize_register', 'customizer_bd1' );
function customizer_bd1($wp_customize) {
  $wp_customize->add_section( 'bd_sec_bg', array(
      'priority'       => 10,
      'title'          => __('Sections backgrounds', 'mytheme'),
      'description'    =>  __('Skonfiguruj opcje slajdów motywu', 'mytheme'),
  ) );
  // SEC 1 BG
  $wp_customize->add_setting( 'section_back_img1' , array(
    'default'     => get_template_directory_uri()."/img/material9.jpg",
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_back_img1', array(
    'label'      => __( 'Section 1', 'theme_name' ),
    'default'     => get_template_directory_uri()."/img/material9.jpg",
    'section'    => 'bd_sec_bg',
    'settings'   => 'section_back_img1',
    'context'    => 'your_setting_context'
  ) ) );
  // SEC 2 BG
  $wp_customize->add_setting( 'section_back_img2' , array(
    'default'     => get_template_directory_uri()."/img/material6.jpg",
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_back_img2', array(
    'label'      => __( 'Section 2', 'theme_name' ),
    'default'    => get_template_directory_uri()."/img/material6.jpg",
    'section'    => 'bd_sec_bg',
    'settings'   => 'section_back_img2',
    'context'    => 'your_setting_context'
  ) ) );
  // SEC 3 BG
  $wp_customize->add_setting( 'section_back_img3' , array(
    'default'     => get_template_directory_uri()."/img/material4.jpg",
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_back_img3', array(
    'label'      => __( 'Section 3', 'theme_name' ),
    'default'    => get_template_directory_uri()."/img/material4.jpg",
    'section'    => 'bd_sec_bg',
    'settings'   => 'section_back_img3',
    'context'    => 'your_setting_context'
  ) ) );
  // SEC 4 BG
  $wp_customize->add_setting( 'section_back_img4' , array(
    'default'     => get_template_directory_uri()."/img/material5.jpg",
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_back_img4', array(
    'label'      => __( 'Section 4', 'theme_name' ),
    'default'    => get_template_directory_uri()."/img/material5.jpg",
    'section'    => 'bd_sec_bg',
    'settings'   => 'section_back_img4',
    'context'    => 'your_setting_context'
  ) ) );
  // SEC 5 BG
  $wp_customize->add_setting( 'section_back_img5' , array(
    'default'     => get_template_directory_uri()."/img/material5.jpg",
    'transport'   => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section_back_img5', array(
    'label'      => __( 'Section 5', 'theme_name' ),
    'default'    => get_template_directory_uri()."/img/material5.jpg",
    'section'    => 'bd_sec_bg',
    'settings'   => 'section_back_img5',
    'context'    => 'your_setting_context'
  ) ) );
}

// @@@@@@@@@
// @@@@@ - nawigacja
// @@@@@@@@@

  add_action( 'customize_preview_init', 'cd_customizer' );
  function cd_customizer() {
  	wp_enqueue_script(
  		  'cd_customizer',
  		  get_template_directory_uri() . '/js/customizer.js',
  		  array( 'jquery','customize-preview' ),
  		  '',
  		  true
  	);
  }
  add_action( 'customize_register', 'cd_customizer_settings' );
  function cd_customizer_settings( $wp_customize ) {
    $wp_customize->add_section( 'cd_colors' , array(
      'title'      => 'Kolory',
      'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'nav_bottom_color' , array(
      'default'     => '#ff4500',
      'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_bottom_color', array(
    	'label'      => 'Kolor nawigacji',
      'description' => __( 'Kolor tła nawigacji zostanie zmieniony po zastosowaniu zmian' ),
    	'section'    => 'cd_colors',
    	'settings'   => 'nav_bottom_color',
    ) ) );
  }
  add_action( 'wp_head', 'cd_customizer_css');
  function cd_customizer_css()
  {
      ?>
           <style type="text/css">
               .navlink { border-bottom-color: <?php echo get_theme_mod('nav_bottom_color', '#ff4500'); ?>; }
               .navlink.active { background-color: <?php echo get_theme_mod('nav_bottom_color', '#ff4500'); ?>; }
               .bd-sweep-to-top:before { background-color: <?php echo get_theme_mod('nav_bottom_color', '#ff4500'); ?>; }
               .sectionhome {  background: url('<?php echo get_theme_mod('section_back_img1', get_template_directory_uri()."/img/material9.jpg"); ?>'); }
               .sectionservices {  background: url('<?php echo get_theme_mod('section_back_img2', get_template_directory_uri()."/img/material6.jpg"); ?>'); }
               .sectionprojects {  background: url('<?php echo get_theme_mod('section_back_img3', get_template_directory_uri()."/img/material4.jpg"); ?>'); }
               .sectionteam {  background: url('<?php echo get_theme_mod('section_back_img4', get_template_directory_uri()."/img/material5.png"); ?>'); }
               .sectioncontact {  background: url('<?php echo get_theme_mod('section_back_img5', get_template_directory_uri()."/img/material8.jpg"); ?>'); }
           </style>
      <?php
  }
?>
