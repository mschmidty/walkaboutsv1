<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
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

      <img class="single-photo-img" sizes="100vw" 
      srcset="
          <?php echo $xlarge; ?> 1800w,
          <?php echo $large; ?> 1200w,
          <?php echo $medium; ?> 700w,
          <?php echo $small; ?> 500w,
          <?php echo $xsmall; ?> 300w"

      alt="<?php echo $image['alt']; ?>">
    <?php endif ?>

    <h3 class="single-photo-header"><?php the_title(); ?></h3>
    <p class="single-photo-description"><?php the_field('image_description') ?></p>

 <div class="image-links">
  <ul>
    <li><?php next_post_link('%link', '<svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" version="1.1"><use class="center" xlink:href="#next" transform="rotate(180 11 11)" ></use></svg>'); ?> </li>
    <li> <a href="<?php echo get_permalink( 27 ); ?>" class="photo-back-button">Back to Photos</a> </li>
    <li><?php previous_post_link('%link', '<svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg" version="1.1"><use class="center" xlink:href="#next" ></use></svg>'); ?></li>
  </ul>
</div>
<?php 
  endwhile;
 ?>
 <?php get_footer(); ?>