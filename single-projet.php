<?php
get_header(); ?>

<div class="single-project-container">
    <!-- Titre et Description -->
    <div class="fade-in project-description-custom">
        <h2 class="custom-project-title"><?php the_title(); ?></h2>
        <p><?php the_field('description_1'); ?></p> 
    </div>
    
    <div class="fade-in project-image-custom">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>
        <div class="project-info-custom">
            <p><?php the_field('info_1'); ?></p>
            <p><?php the_field('info_2'); ?></p>
            <p><?php the_field('info_3'); ?></p>
        </div>
    </div>
</div>


<div class="styled-title-container">
    <h2 class="styled-title"><?php the_field('titre_2'); ?></h2>
</div>
    <div class="concept-grid">
        <?php if (get_field('image_1')) : ?>
            <div class="scroll-in concept-item large">
                <img src="<?php echo get_field('image_1')['url']; ?>" alt="Image 1">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_2')) : ?>
            <div class="scroll-in concept-item medium">
                <img src="<?php echo get_field('image_2')['url']; ?>" alt="Image 2">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_3')) : ?>
            <div class="scroll-in concept-item large">
                <img src="<?php echo get_field('image_3')['url']; ?>" alt="Image 3">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_4')) : ?>
            <div class="scroll-in concept-item small">
                <img src="<?php echo get_field('image_4')['url']; ?>" alt="Image 4">
            </div>
        <?php endif; ?>

        <?php if (get_field('image_5')) : ?>
            <div class="scroll-in concept-item medium">
                <img src="<?php echo get_field('image_5')['url']; ?>" alt="Image 5">
            </div>
        <?php endif; ?>
        <div class="scroll-in concept-item medium">
        <p class="project-description description-card"><?php the_field('description_2'); ?></p>

        </div>
    </div>
</div>
    <!-- Conteneur pour les mots-clés -->
    <!-- <div class="project-keywords">
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
    </div> -->

    <!-- Description -->
    <!-- <p class="project-description description-bilan fixed-right"><?php the_field('description_2'); ?></p> -->



<div class="section-container">
    <!-- Titre -->
    <div class="styled-title-container">
        <h2 class="styled-title"><?php the_field('titre_3'); ?></h2>
    </div>

    <!-- Description -->
    <div class="scroll-in section-description description-bilan">
        <p class="project-description-secondary"><?php the_field('description_3'); ?></p>
    </div>

    <!-- Images -->
    <div class="scroll-in images-container images-container-secondary">
        <?php if (get_field('image_6')) : ?>
            <img src="<?php echo get_field('image_6')['url']; ?>" alt="Image 6">
        <?php endif; ?>

        <?php if (get_field('image_7')) : ?>
            <img src="<?php echo get_field('image_7')['url']; ?>" alt="Image 7">
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
