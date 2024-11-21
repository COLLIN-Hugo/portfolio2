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
    <header class="header">
      <div class="menu-header">
        <!-- Logo -->
        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Mon logo">
        </a>
      


        <!-- Menu principal -->
        <nav class="menu_principal">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'header-menu',
              'container' => 'ul',
              'menu_class' => 'nav-menu'
          ));
          ?>
        </nav>

        <!-- Icônes des réseaux sociaux -->
        <div class="social-icons">
          <a href="https://www.behance.net/hugocolllin" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/behance.png" alt="Logo de Behance">
          </a>
          <a href="https://www.linkedin.com/in/hugo-collin-73ab20284/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="Logo de LinkedIn">
          </a>
        </div>
      </div>
    </header>