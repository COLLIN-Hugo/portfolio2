<footer>
  <?php wp_footer(); ?>

  <div class="footer-content">
    <!-- Logo et Nom -->
    <div class="footer-logo-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="Mon logo">
      <h2>Hugo <span>Collin</span></h2>
    </div>


    <!-- Menu dans le Footer -->
    <div class="footer-menu-section">
      <h3>Menu</h3>
      <nav>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'container' => 'ul',
            'menu_class' => 'footer-menu'
          ));
        ?>
      </nav>
    </div>

    <!-- Coordonnées -->
    <div class="footer-coordinates">
      <h3>Coordonnées</h3>
      <p>07.68.14.05.53<br>collinhugo093@gmail.com</p>
    </div>
  </div>

  <!-- Ligne de séparation -->
  <hr>

  <!-- Informations légales et icônes de réseaux sociaux -->
  <div class="footer-bottom">
    <div class="footer-left">
      <a href="<?php echo get_permalink(get_page_by_path('politique-de-confidentialite')); ?>">Informations légales</a>
    </div>
    <div class="footer-center">
      <p>&copy; 2024 Tous droits réservés</p>
    </div>
    <div class="footer-right social-icons">
      <a href="https://www.behance.net/hugocolllin" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/behance.png" alt="Logo de behance">
      </a>
      <a href="https://www.linkedin.com/in/hugo-collin-73ab20284/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="Logo de Linkedin">
      </a>
    </div>
  </div>
</footer>
