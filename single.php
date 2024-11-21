<?php get_header(); ?>

<div class="main single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">

        <!-- Titre de l'article -->
        <h1 class="post-title"><?php the_title(); ?></h1>

        <!-- Contenu de l'article -->
        <div class="post-content">
          <?php the_content(); ?>
        </div>

        <!-- Vignette de l'article -->
        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail('medium'); // 'medium', 'large', ou 'thumbnail' selon tes besoins ?>
          </div>
        <?php endif; ?>
        <?php echo wp_kses_post ( get_field('texte') ); ?>

        <?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>


