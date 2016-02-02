<?php 
  /* Template Name: About */

  get_header();
?>
<div class="about-landing">
<?php 
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $about_query = new WP_Query(array(
      'post_type' => 'about',
      'posts_per_page' => 15,
      'paged' => $paged
  )); 
?>
<?php

  if($about_query->have_posts()) : 
    while($about_query->have_posts()) : $about_query->the_post();
?>
<article class="about-section">
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
</article>
<?php 
  endwhile;
  endif;
?>
</div>
<?php get_footer(); ?>