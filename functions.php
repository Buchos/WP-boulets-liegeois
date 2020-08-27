<?php
// Uncomment the following line to remove the Guthenberg editor
  // // for posts
  // add_filter('use_block_editor_for_post', '__return_false', 10);
  // // for post types
  // add_filter('use_block_editor_for_post_type', '__return_false', 10);
  
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
set_post_thumbnail_size(258, 145, true);

function enregistre_mon_menu()
{
    register_nav_menu('menu_principal', __('Menu principal'));
}
add_action('init', 'enregistre_mon_menu');
