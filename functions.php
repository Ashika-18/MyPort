<?php

add_filter('show_admin_bar', '__return_false');

add_action('init', function() {
    add_theme_support('post-thumbnails');
  });

  add_action('after_setup_theme', function() {
    add_theme_support( 'title-tag' );
  });

  function getEyecatchUrl() {
    if (has_post_thumbnail()) {
      $id  = get_post_thumbnail_id();
      $img = wp_get_attachment_image_src($id, "large");
    } else {
      $img = array(get_template_directory_uri() . '/images/mac-pro.jpeg');
    }
  
    return $img[0];
  }

  if (!function_exists('custom_excerpt_length')) {
    function custom_excerpt_length($length) {
        return 10;
    }
}
 
add_filter('excerpt_length', 'custom_excerpt_length');