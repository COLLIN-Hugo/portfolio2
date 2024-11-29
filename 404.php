<?php
get_header(); ?>
<div class="page-404">
    <div class="error-container">
        <h1 class="error-code">404</h1>
        <p class="error-message">Oups ! La page que vous cherchez est introuvable.</p>
        <a href="<?php echo home_url(); ?>" class="error-btn">Retour à l'accueil</a>
    </div>
</div>
<?php get_footer(); ?>
