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
        'scroll-animation', 
        get_template_directory_uri() . '/js/contact.js',
        array(),
        '1.0',
        true 
    );
}
add_action('wp_enqueue_scripts', 'enqueue_scroll_animation_script');


//JS POUR LE FOOTER
function enqueue_footer_scroll_animation() {
    wp_enqueue_script('footer-scroll-animation', get_template_directory_uri() . '/js/footer.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_footer_scroll_animation');


//PAGE 404 
add_action('template_redirect', function () {
    if (is_404()) {
        echo '<h1>WordPress détecte la page 404</h1>';
        exit;
    }
});

//JS POUR SINGLE PROJET
function enqueue_custom_scripts() {
    wp_enqueue_style('theme-styles', get_template_directory_uri() . '/css/single-projet.css');
    wp_enqueue_script('animations-script', get_template_directory_uri() . '/js/single-projet.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
