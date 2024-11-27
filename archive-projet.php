<?php
/*
Template Name: Archive Projets
*/
get_header(); ?>

<div class="projects-archive">

    <!-- Formulaire de filtre -->
    <form method="GET" action="">
        <select name="info_2" id="filter" onchange="this.form.submit()">
            <option value="" <?php echo (isset($_GET['info_2']) && $_GET['info_2'] == '') ? 'selected' : ''; ?>>Tous les Projets</option>
            <option value="Design" <?php echo (isset($_GET['info_2']) && $_GET['info_2'] == 'Design') ? 'selected' : ''; ?>>Les Projets Design</option>
            <option value="Design / Dev" <?php echo (isset($_GET['info_2']) && $_GET['info_2'] == 'Design / Dev') ? 'selected' : ''; ?>>Les Projets Design / Dev</option>
        </select>
    </form>

    <div class="projects-grid">
        <?php
        $meta_query = array();
        if (!empty($_GET['info_2'])) { 
            $meta_query[] = array(
                'key' => 'info_2',
                'value' => sanitize_text_field($_GET['info_2']),
                'compare' => '='
            );
        }

        $args = array(
            'post_type' => 'projet',
            'posts_per_page' => -1,
            'meta_query' => $meta_query,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $title = get_field('titre_1'); 
                $date = get_field('info_3'); 
                $formatted_date = ucfirst($date); 
                $image = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
                ?>
                <div class="project-card">
                <a href="<?php the_permalink(); ?>">
                    <!-- Image de la carte -->
                    <div class="project-image" style="background-image: url('<?php echo esc_url($image); ?>');"></div>
                    <!-- Date et titre -->
                    <div class="project-info">
                        <p class="project-date"><?php echo esc_html($formatted_date); ?></p>
                        <h2 class="project-title"><?php echo esc_html($title); ?></h2>
                    </div>
                    <!-- Call to Action -->
                    <div class="project-cta">
                        <span>Voir le projet</span> <!-- Bouton gauche -->
                        <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.svg" alt="Flèche" class="cta-icon"> <!-- Flèche droite -->
                    </div>
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
</div>

<?php get_footer(); ?>
