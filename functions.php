<?php
/** 
 * functions.php file for wp-hierarchy
 *
 * Detail description: describe here, what does this file do in your code. explain in details. 
 * If possible, attach a link to the actions documentation.
 * Explain in a simple and clear english so that, everyone does understand.
 *
 * @package WordPress
 * @subpackage wp-hierarchy
 * Author: Junaid Jwolt
 * Date: 17/09/2022
 * time: 08:313 AM
 */

// add theme support
add_theme_support('title-tag');
add_theme_support('post-thumbnail');
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
add_theme_support('html5');
add_theme_support('automatic-feed-link');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widget');
add_theme_support('starter-content');


// load in out css
function wphierarchy_enqueue_styles()
{

  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

}

add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');


// Register menu location
register_nav_menus(array(
  'main-menu' => esc_html__('Main Menu', 'wphierarchy'),
));

// Setup widget area
function wphierarchy_widgets_init()
{
  register_sidebar([
    'name'          => esc_html__('Main Sidebar', 'wphierarchy'),
    'id'            => 'main-sidebar',
    'description'   => esc_html__('Add widget for main sidebar here', 'wphierarchy'),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
]);

register_sidebar([
  'name'          => esc_html__('Page Sidebar', 'wphierarchy'),
  'id'            => 'page-sidebar',
  'description'   => esc_html__('Add widget for main page here', 'wphierarchy'),
  'before_widget' => '<section class="widget">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
]);
register_sidebar([
  'name'          => esc_html__('Front Page Widget', 'wphierarchy'),
  'id'            => 'front-page',
  'description'   => esc_html__('Add widget for front page here', 'wphierarchy'),
  'before_widget' => '<section class="widget">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
]);
}
add_action( 'widgets_init', 'wphierarchy_widgets_init');





?>