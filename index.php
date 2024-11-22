<?php
get_header();
?>
<body>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/image-profil.webp');">
  <div class="hero-overlay">
    <h1 class="hero-title">HUGO <span style="color: var(--violet);">COLLIN</span></h1>
    <p class="hero-subtitle">UI / UX DESIGNER</p>
    <div class="type" id="type01">
        <a href="#type02">Scroll</a>
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
<div class="styled-title-container" id="type02">
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
<div class="galeries">
    <?php
    $args = array(
        'post_type'      => 'projet', // Type de contenu personnalisé
        'posts_per_page' => 5,        // Limiter à 5 projets
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        $first = true; // Variable pour marquer la première carte
        while ($query->have_posts()) : $query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // URL de l'image
            $title = get_the_title(); // Titre du projet
            ?>
            <!-- La première carte reçoit la classe "active" -->
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

<!-- Contact-->
<div class="styled-title-container">
    <h2 class="styled-title">Me contacter</h2>
</div>
<div class="contact-card scroll-animate"> <!-- Ajout de la classe scroll-animate -->
    <form action="" method="post" class="contact-form">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Votre message" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="submit-button" name="submit">Envoyer</button>
        </div>
    </form>
</div>



<?php
// Vérification si le formulaire est soumis
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "votre-email@example.com"; // Changez par votre adresse email
    $subject = "Nouveau message de $name depuis le site";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Votre message a été envoyé avec succès !");</script>';
    } else {
        echo '<script>alert("Une erreur est survenue. Veuillez réessayer.");</script>';
    }
}
?>



</body>
<?php
get_footer();
?>