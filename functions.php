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
    wp_enqueue_style('title-css', get_template_directory_uri() . '/css/layout/title.css', [], false, 'all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_title_assets');


//JS POUR LE HERO
function theme_enqueue_assets() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_script('hero-animations', get_template_directory_uri() . '/js/hero.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');


//JS POUR LE HEADER
function enqueue_header_animation_script() {
    wp_enqueue_script(
        'header-animation', 
        get_template_directory_uri() . '/js/menu.js', 
        array(), 
        null, 
        true 
    );
}
add_action('wp_enqueue_scripts', 'enqueue_header_animation_script');


//ajout de alpine JS
function enqueue_alpine_script() {
    wp_enqueue_script('alpinejs', 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js', array(), '3.x.x', true);
}
add_action('wp_enqueue_scripts', 'enqueue_alpine_script');


//JS POUR CONTACT
function enqueue_scroll_animation_script() {
    wp_enqueue_script(
        'scroll-animation', // Nom unique du script
        get_template_directory_uri() . '/js/contact.js', // Chemin vers le fichier JS
        array(), // Pas de dépendances
        '1.0', // Version
        true // Charger dans le footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scroll_animation_script');


//JS POUR LE FOOTER
function custom_footer_assets() {
    // Ajouter le fichier CSS pour le footer
    wp_enqueue_style(
        'footer-style', 
        get_template_directory_uri() . '/css/layout/footer.css', 
        array(), 
        '1.0', 
        'all'
    );

    // Ajouter le fichier JS pour le bouton de retour en haut
    wp_enqueue_script(
        'footer-script', 
        get_template_directory_uri() . 'js/footer.js', 
        array(), 
        '1.0', 
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_footer_assets');

