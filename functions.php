<?php 

add_theme_support('post-thumbnails');
set_post_thumbnail_size(500,9999);
add_image_size('photoxlarge', 500, 500);
add_image_size('photolarge', 500, 500);
add_image_size('photosmall', 250, 250, true);

register_nav_menus(array(
  'sidebar' => 'サイドバー'
));

add_custom_background();

add_filter('body_class', 'my_class');
function my_class($classes) {
  if(in_category('photo')) {
    $classes[] = 'photo';
  }
  return $classes;
}

?>