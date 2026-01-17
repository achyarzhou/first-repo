<?php getheader(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <p>Konten belum tersedia.</p>
<?php endif; ?>

<?php get_footer(); ?>
_
