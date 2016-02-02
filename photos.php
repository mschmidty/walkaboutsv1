<?php 
  /* Template Name: Photos */

  get_header();
?>
  <div class="photo-header"><p>Want a print?  Contact kurpaki@gmail.com</p></div>
  
  <div class="photography-thumbnail">
  <?php 
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $photo_query = new WP_Query(array(
        'post_type' => 'photos',
        'posts_per_page' => 100,
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
      <a href="<?php echo get_permalink();?>" class="popmake-1">
        <img src="<?php echo $small ?>"  alt="<?php echo $image['alt']; ?>">
      </a>
    <?php endif ?>

    
  <?php 
    endwhile;
    endif;
   ?>
  </div>
<?php get_footer(); ?>