<?php
function myWordPressPlayground_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'myWordPressPlayground_resources');



//get top ancestor

function get_top_ancestor_id(){

    global $post;

    if($post->post_parent){
      $ancestors = array_reverse(get_post_ancestors($post->ID));
      return $ancestors[0];
    }

  return $post->ID;

}

// custom excerpt_length

function custom_excerpt_length(){
  return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length' );


//theme setup
function playground_setup(){

  // navigation menus
  register_nav_menus(array(
    'primary' =>('Primary Menu'),
    'footer' =>('Footer Menu'),
  ));

  //featured image support
  add_theme_support( 'post-thumbnails' );
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner-image', 960, 480, array('left', 'top'));

  //post format support

  add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}

add_action( 'after_setup_theme', 'playground_setup' );


//add our widget location

function widgetInit(){
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar1',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>'

  ));

  register_sidebar(array(
    'name' => 'Footer Area 1',
    'id' => 'footer1',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Footer Area 2',
    'id' => 'footer2',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Footer Area 3',
    'id' => 'footer3',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>'
  ));
  register_sidebar(array(
    'name' => 'Footer Area 4',
    'id' => 'footer4',
    'before_widget' => '<div class="widget-item">',
    'after_widget' => '</div>'
  ));


}
add_action('widgets_init', 'widgetInit');
