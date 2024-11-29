<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header" id="scroll">
      <div class="menu-header">
        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/icons/logo-portfolio.svg" alt="Mon logo">
        </a>
      
        <nav class="menu_principal">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container' => 'ul',
              'menu_class' => 'nav-menu'
          ));
          ?>
        </nav>

        <div class="social-icons">
          <a href="https://www.behance.net/hugocolllin" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/behance.svg" alt="Logo de Behance">
          </a>
          <a href="https://www.linkedin.com/in/hugo-collin-73ab20284/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/linkedin.svg" alt="Logo de LinkedIn">
          </a>
        </div>

        <div class="wrapper-burger">
          <div class="burger" /> 
        </div>
      </div>
    </header>
