<?php
// Our include
define('WP_USE_THEMES', false);
require_once('../../../../wp-load.php');
?>

<?php 
    $numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
    $page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
    $photo_query = new WP_Query(array(
        'post_type' => 'photos',
        'posts_per_page' => $numPosts,
        'paged' => $page
    )); 
  ?>
<?php

if($photo_query->have_posts()) : 
  while($photo_query->have_posts()) : $photo_query->the_post();
?>
<?php $image = get_field('upload_image'); ?>
<?php if( !empty($image) ): ?>
  <img src="<?php echo $image['url'];?>">
<?php endif ?>
<?php 
endwhile;
endif;
?>