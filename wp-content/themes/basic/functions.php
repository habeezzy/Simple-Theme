<?php
function simple_theme_setup() {
  //Featured Image Support
  add_theme_support("post-thumbnails");

  //ALlows Menu functionality
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'simple_theme_setup');

// set length of characters to 25
function set_exerpt_length() {
  return 60;
}

add_filter('exerpt_length', 'set_exerpt_length');

//Widget Locations
function init_widgets($id) {
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="side-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '<h3>',
  ));
}

//Fires after all default WordPress widgets have been registered.
add_action('widgets_init', 'init_widgets' );

?>
