<?php
require_once('wp_bootstrap_navwalker.php');
register_nav_menu('top-navi', 'Main menu');
//register_nav_menu('top-navi', 'Main menu');
remove_action('wp_head', 'wp_generator');
add_theme_support('post-thumbnails');

add_filter('wp_title', 'filter_wp_title');
function filter_wp_title($title)
{
  global $page, $paged;

  if (is_feed())
    return $title;

  $site_description = get_bloginfo('description');

  $filtered_title = $title . get_bloginfo('name');
  $filtered_title .= (!empty($site_description) && (is_home() || is_front_page())) ? ' | ' . $site_description : '';
  $filtered_title .= (2 <= $paged || 2 <= $page) ? ' | ' . sprintf(__('Page %s'), max($paged, $page)) : '';

  return $filtered_title;
}

add_filter('embed_oembed_html', 'custom_oembed_filter', 10, 4);
function custom_oembed_filter($html, $url, $attr, $post_ID)
{
  $return = '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
  return $return;
}

?>
