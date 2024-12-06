<?php
get_header();

if (!have_posts()) {
    status_header(404);
    include get_template_directory() . '/404.php';
    exit;
}
?>
<body>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/image-profil.webp');">
  <div class="hero-overlay">
    <h1 class="hero-title">HUGO <span style="color: var(--violet);">COLLIN</span></h1>
    <p class="hero-subtitle">UI / UX DESIGNER</p>
    <div class="type" id="type01">
        <a href="#competences">Scroll</a>
    </div>
    <div class="scrolling-text">
        <div class="scrolling-content">
    <span>UI Designer</span>
    <span>•</span>
    <span>Web Design</span>
    <span>•</span>
    <span>Réseaux Sociaux</span>
    <span>•</span>
    <span>Graphisme</span>
    <span>•</span>
    <span>Wireframe</span>
    <span>•</span>
    <span>Landing Page</span>
    <span>•</span>
    <span>Branding</span>
    <span>•</span>
    <span>Application Mobile</span>
    <span>•</span>

    <span>UI Designer</span>
    <span>•</span>
    <span>Web Design</span>
    <span>•</span>
    <span>Réseaux Sociaux</span>
    <span>•</span>
    <span>Graphisme</span>
    <span>•</span>
    <span>Wireframe</span>
    <span>•</span>
    <span>Landing Page</span>
    <span>•</span>
    <span>Branding</span>
    <span>•</span>
    <span>Application Mobile</span>
    <span>•</span>

    <span>UI Designer</span>
    <span>•</span>
    <span>Web Design</span>
    <span>•</span>
    <span>Réseaux Sociaux</span>
    <span>•</span>
    <span>Graphisme</span>
    <span>•</span>
    <span>Wireframe</span>
    <span>•</span>
    <span>Landing Page</span>
    <span>•</span>
    <span>Branding</span>
    <span>•</span>
    <span>Application Mobile</span>
    <span>•</span>
  </div>
  </div>
</div>
  </div>
</div>





<!-- Cards skills-->
<div class="styled-title-container" id="competences">
    <h2 class="styled-title">Mes Compétences</h2>
</div>
<div class="cards-container">

    <!-- Première card -->
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/design.svg" alt="logo pour représenter le design">
        </div>
        <h3 class="card-title">Design</h3>
        <p class="card-text">Figma / Photoshop / Illustrator / InDesign</p>
    </div>

    <!-- Deuxième card -->
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/code.svg" alt="logo pour représenter le développement web">
        </div>
        <h3 class="card-title">Développement Web</h3>
        <p class="card-text">HTML / CSS / Vue.JS / WordPress</p>
    </div>

    <!-- Troisième card -->
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/Seo.svg" alt="logo pour représenter le SEO">
        </div>
        <h3 class="card-title">SEO</h3>
        <p class="card-text">je sais pas quoi mettre</p>
    </div>

    <!-- Quatrième card -->
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/audiovisuel.svg" alt="logo pour représenter l'audiovisuel">
        </div>
        <h3 class="card-title">Audiovisuel</h3>
        <p class="card-text">Davinci Resolve / Première Prod / Utilisation de caméra / Microphone</p>
    </div>

    <!-- Cinquième card -->
    <div class="card">
        <div class="card-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/profil.svg" alt="logo pour représenter mon profil">
        </div>
        <h3 class="card-title">Profil</h3>
        <p class="card-text">Dynamique / Curieux / Motiver / Sérieux</p>
    </div>
</div>



<!-- Galerie projets-->
<div class="styled-title-container">
    <h2 class="styled-title">Mes derniers projets</h2>
</div>
<div class="scroll-in galeries">
    <?php
    $args = array(
        'post_type'      => 'projet', // Type de contenu personnalisé
        'posts_per_page' => 5,        // Limiter à 5 projets
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        $first = true; 
        while ($query->have_posts()) : $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
            $title = get_the_title(); 
            ?>
            <div class="galerie <?php echo $first ? 'active' : ''; ?>" style="--optionBackground:url(<?php echo esc_url($image_url); ?>);">
                <a href="<?php the_permalink(); ?>" class="galerie-link"></a>
                <div class="shadow"></div>
                <div class="label">
                    <div class="info">
                        <div class="main"><?php echo esc_html($title); ?></div> 
                        <div class="sub"><?php the_excerpt(); ?></div> 
                    </div>
                </div>
            </div>
            <?php
            $first = false; // Après la première carte, désactiver "active"
        endwhile;
        wp_reset_postdata();
    else :
        ?>
        <p>Aucun projet trouvé.</p>
    <?php endif; ?>
</div>


<div class="styled-title-container" id="contact">
    <h2 class="styled-title">Me contacter</h2>
</div>
<?php
echo do_shortcode('[contact-form-7 id="fd97bf5" title="Formulaire de contact 1"]');
?>


</body>
<?php
get_footer();
?>