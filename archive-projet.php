<?php
/*
Template Name: Archive Projets
*/
get_header(); ?>

<div class="projects-archive">

<!-- Formulaire de filtre -->
<form method="GET" action="">
    <label for="filter">Filtrer par Type de Projet :</label>
    <select name="info_2" id="filter" onchange="this.form.submit()">
        <option value="">Tous</option>
        <option value="Design" <?php selected($_GET['info_2'], 'Design'); ?>>Design</option>
        <option value="Design / Dev" <?php selected($_GET['info_2'], 'Design / Dev'); ?>>Design / Dev</option>
    </select>
</form>

<div class="projects-grid">
    <?php
    // Initialisation du filtre pour 'info_2'
    $meta_query = array();
    if (isset($_GET['info_2']) && $_GET['info_2'] != '') {
        $meta_query[] = array(
            'key' => 'info_2',
            'value' => sanitize_text_field($_GET['info_2']),
            'compare' => '='
        );
    }

    // Requête personnalisée pour afficher les projets avec le filtre
    $args = array(
        'post_type' => 'projet',
        'posts_per_page' => -1,
        'meta_query' => $meta_query,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $title = get_field('titre_1');
            $description = get_field('description_1');
            $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="project-card">
                <a href="<?php the_permalink(); ?>">
                    <div class="project-image" style="background-image: url('<?php echo esc_url($image); ?>');"></div>
                    <h2><?php echo esc_html($title); ?></h2>
                    <p><?php echo esc_html(wp_trim_words($description, 20, '...')); ?></p> <!-- Limite à 20 mots -->
                </a>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Aucun projet trouvé</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
