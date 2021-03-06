<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title() ?></title>

  <!-- where header scripts are loaded -->
  <?php wp_head(); ?>
  
</head>
<body>

  <header>
    <div id="header-image-name">
      <nav class="menu">
      <?php 

        $defaults = array(
          'container' => false,
          'theme_location' => 'primary-menu',
          'menu_class' => 'active'
          );

        wp_nav_menu($defaults);

      ?>
      
      <a id="toggle-nav" href="#">&#9776;</a>
    </nav>
      <?php //If there is a custom header logo display it. If not use the default

        if( function_exists('the_custom_logo') && has_custom_logo() ) {
              //Change custom logo class to 
              function change_logo_class( $html ) {

                $html = str_replace( 'custom-logo', 'bhn-logo', $html );
                // $html = str_replace( 'custom-logo-link', 'your-custom-class', $html );

                return $html;
              }

              add_filter( 'get_custom_logo', 'change_logo_class' );
              the_custom_logo();

        }
        else{
      ?>

      <a href="<?php bloginfo('url') ?>"><img class="bhn-logo" src="<?php echo get_template_directory_uri() ?>/images/logos/bean_here_now_logo.png" /></a>

      <?php } ?>

      <h1 id="home-header-h1">Bean Here Now Consciousness Cafe</h1>
    </div>
    <!-- <nav class="menu">
      <ul class="active">
        <li><a href="#">Menu</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Capulin</a></li>
        <li><a href="#">Blog</a></li>
      </ul> -->
      
      
          
  </header>