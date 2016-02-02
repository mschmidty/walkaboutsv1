<?php 
  /* Template Name: Blog */

  get_header();
?>
<div class="blog-landing">
<?php query_posts('showposts=10') ?>

  <?php while ( have_posts() ) : the_post(); ?>

      <article><a class="blog-landing-thumb" href="<?php echo get_permalink(); ?>">
        <div class="blog-left">
          <?php the_post_thumbnail('thumb-img'); ?>
        </div>
        <div class="blog-right">
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
        <h4>Read More</h4>
        </div>

      </a></article>

  <?php endwhile; ?>
</div>
<?php get_footer(); ?>

