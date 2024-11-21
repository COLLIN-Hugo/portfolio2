<?php
// Activer les images à la une pour les articles
add_theme_support( 'post-thumbnails' );

// Enregistrer les menus
function register_my_menu() {
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete', 'your-textdomain' ),
        'footer-menu' => __( 'Menu De Pied', 'your-textdomain' ),
    ) );
}

add_action( 'init', 'register_my_menu' );



function add_webp_upload_mimes($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

add_filter('upload_mimes', 'add_webp_upload_mimes');


// Ajouter une taxonomie pour les projets
function create_project_taxonomy() {
    register_taxonomy(
        'type_projet',  // Nom de la taxonomie (slug)
        'projet',       // Le post type associé
        array(
            'label' => __('Type de Projet'),
            'rewrite' => array('slug' => 'type-projet'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_project_taxonomy');

function theme_enqueue_styles() {
    wp_enqueue_style('single-projet', get_template_directory_uri() . '/css/single-projet.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


//contact
function handle_contact_form() {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = get_option('admin_email'); // Envoi vers l'email de l'administrateur
        $subject = "Nouveau message de contact de $name";
        $body = "Nom: $name\nEmail: $email\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        wp_mail($to, $subject, $body, $headers);

        // Redirection après soumission
        wp_redirect(home_url('/merci/')); // Crée une page "merci" si tu veux une confirmation
        exit;
    }
}
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form');
add_action('admin_post_submit_contact_form', 'handle_contact_form');



//js
function enqueue_custom_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/components/skills.css', array(), '1.0.0');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


//JS POUR LES COMPETENCES
function enqueue_skills_assets() {
    wp_enqueue_style('skills-css', get_template_directory_uri() . '/css/components/skills.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_skills_assets');



//JS POUR LA GALERIE DES PROJETS
function enqueue_custom_assets() {
    wp_enqueue_style('projet-styles', get_template_directory_uri() . '/css/components/projet.css');
    wp_enqueue_script('main-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_assets');


//JS POUR LES TITRES
function enqueue_title_assets() {
    // Charger le fichier CSS
    wp_enqueue_style('title-css', get_template_directory_uri() . '/css/layout/title.css', [], false, 'all');

    // Charger le fichier JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_title_assets');


//JS POUR LE HERO
function theme_enqueue_assets() {
    // Autres scripts et styles
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    // Ajout du script pour les animations
    wp_enqueue_script('hero-animations', get_template_directory_uri() . '/js/hero.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');


//JS POUR LE HEADER
// Enqueue le script pour l'animation du header
function enqueue_header_animation_script() {
    wp_enqueue_script(
        'header-animation', // Nom du script
        get_template_directory_uri() . '/js/menu.js', // Chemin du fichier JS
        array(), // Aucune dépendance
        null, // Pas de version spécifique
        true // Charger dans le footer pour de meilleures performances
    );
}
add_action('wp_enqueue_scripts', 'enqueue_header_animation_script');


//ajout de alpine JS
function enqueue_alpine_script() {
    wp_enqueue_script('alpinejs', 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js', array(), '3.x.x', true);
}
add_action('wp_enqueue_scripts', 'enqueue_alpine_script');
