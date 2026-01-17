<?php get_header(); ?>

<php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class('single-post'); ?>>
    <h1><?php the_title(); ?></h1>
    <p class="meta"><?php echo get_the_date(); ?></p>
    <?php the_content(); ?>
  </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>?
