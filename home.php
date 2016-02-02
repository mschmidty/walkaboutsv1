<?php 
  /* Template Name: Custom Home */

  get_header();
?>



<div class="home-blog">
  <h2 class="home-header">Latest From My Wonderings</h2>

  <div class="home-blog-thumbs">
  
  <?php query_posts('showposts=10') ?>

  <?php while ( have_posts() ) : the_post(); ?>

      <article>

        <?php the_post_thumbnail('thumb-img'); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <h3><a href=" <?php echo get_permalink(); ?>">Read More</a></h3>

      </article>

  <?php endwhile; ?>

   </div>
</div>


<?php rewind_posts(); ?>


<div class="home-photo">
  <a href="/photography/" class="home-photo-link"><h2 class="home-header">Photography</h2></a>
  <p>My view on things.</p>
  <a href="/photography/" class="home-photo-link"><div id="photography" class="home-photograghy">
    <?php 
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $photo_query = new WP_Query(array(
        'post_type' => 'photos',
        'posts_per_page' => 1,
        'paged' => $paged
    )); 
  ?>
  <?php

    if($photo_query->have_posts()) : 
      while($photo_query->have_posts()) : $photo_query->the_post();
  ?>
    <?php 

      $image = get_field('upload_image');
      $sizeXlarge = 'xlarge-img';
      $sizeLarge = 'large-img';
      $sizeMedium = 'medium-img';
      $sizeSmall = 'small-img';
      $sizeXsmall = 'xsmall-img';
      $xlarge = $image['sizes'][$sizeXlarge];
      $large = $image['sizes'][$sizeLarge];
      $medium = $image['sizes'][$sizeMedium];
      $small = $image['sizes'][$sizeSmall];
      $xsmall = $image['sizes'][$sizeXsmall];

     ?>
     <?php if( !empty($image) ): ?>

      <img sizes="100vw" 
      srcset="
          <?php echo $xlarge; ?> 1800w,
          <?php echo $large; ?> 1200w,
          <?php echo $medium; ?> 700w,
          <?php echo $small; ?> 500w,
          <?php echo $xsmall; ?> 300w"

      alt="<?php echo $image['alt']; ?>">
    <?php endif ?>

    
  <?php 
    endwhile;
    endif;
   ?>
  </div></a>
  <div class="home-link-button">
    <a href="/photography/" class="button">More Photos</a>
  </div>
</div>
  

<?php get_footer(); ?>

 