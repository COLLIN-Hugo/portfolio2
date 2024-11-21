<?php
get_header(); ?>

<div class="single-project-container">
    <div class="project-image-custom">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>
        <div class="project-info-custom">
            <p><?php the_field('info_1'); ?></p>
            <p><?php the_field('info_2'); ?></p>
            <p><?php the_field('info_3'); ?></p>
        </div>
    </div>

    <!-- Titre et Description -->
    <div class="project-description-custom">
        <h2 class="custom-project-title"><?php the_title(); ?></h2>
        <p><?php the_field('description_1'); ?></p> 
    </div>
</div>



<div class="project-concept-container">
    <!-- Titre de la section -->
    <h2 class="custom-project-title"><?php the_field('titre_2'); ?></h2>

    <!-- Grid pour les images et mots-clés -->
    <div class="concept-grid">
        <?php if (get_field('image_1')) : ?>
            <div class="concept-item large">
                <img src="<?php echo get_field('image_1')['url']; ?>" alt="Image 1">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_2')) : ?>
            <div class="concept-item medium">
                <img src="<?php echo get_field('image_2')['url']; ?>" alt="Image 2">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_3')) : ?>
            <div class="concept-item large">
                <img src="<?php echo get_field('image_3')['url']; ?>" alt="Image 3">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_4')) : ?>
            <div class="concept-item small">
                <img src="<?php echo get_field('image_4')['url']; ?>" alt="Image 4">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_5')) : ?>
            <div class="concept-item medium">
                <img src="<?php echo get_field('image_5')['url']; ?>" alt="Image 5">
            </div>
        <?php endif; ?>
    </div>

    <!-- Conteneur pour les mots-clés -->
    <div class="project-keywords">
        <?php if (get_field('mot-cle_1')) : ?>
            <p class="keyword"><?php the_field('mot-cle_1'); ?></p>
        <?php endif; ?>
        <?php if (get_field('mot-cle_2')) : ?>
            <p class="keyword"><?php the_field('mot-cle_2'); ?></p>
        <?php endif; ?>
        <?php if (get_field('mot-cle_3')) : ?>
            <p class="keyword"><?php the_field('mot-cle_3'); ?></p>
        <?php endif; ?>
        <?php if (get_field('mot-cle_4')) : ?>
            <p class="keyword"><?php the_field('mot-cle_4'); ?></p>
        <?php endif; ?>
    </div>

    <!-- Description -->
    <p class="project-description"><?php the_field('description_2'); ?></p>
</div>




<div class="section-container">
    <!-- Titre -->
    <h2 class="section-title"><?php the_field('titre_3'); ?></h2>

    <!-- Description -->
    <div class="section-description">
        <p class="project-description"><?php the_field('description_3'); ?></p>
    </div>

    <!-- Images -->
    <div class="images-container">
        <?php if (get_field('image_6')) : ?>
            <img src="<?php echo get_field('image_6')['url']; ?>" alt="Image 6">
        <?php endif; ?>

        <?php if (get_field('image_7')) : ?>
            <img src="<?php echo get_field('image_7')['url']; ?>" alt="Image 7">
        <?php endif; ?>
    </div>
</div>









<?php get_footer(); ?>
