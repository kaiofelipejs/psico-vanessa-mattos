<?php

function add_scripts() {
   wp_register_script(
      'script',
      get_template_directory_uri() .
      '/js/script.js',
	   array(),
	   null,
	   true
   );

   wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'add_scripts');

function add_css() {
   wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, false);
   wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'add_css');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
function register_my_menu(){
   register_nav_menu('menu-principal',__('Menu Principal'));
}
add_action('init', 'register_my_menu');

//Habilitar imagens em destaque
add_theme_support('post-thumbnails');

// Diminuir tamanho do excerpt
function wpdocs_custom_excerpt_length( $length ) {
   return 20;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

?>
