<?php

add_filter('show_admin_bar', '__return_false');

function starter_theme_scripts() {
  wp_register_script_module('starter-scripts', get_theme_file_uri('main.js'));
  wp_enqueue_script_module('starter-scripts');
}
add_action('wp_enqueue_scripts', 'starter_theme_scripts');

add_action('init', function() {
  $fields = [
    'price',
  ];
  foreach ($fields as $field) {
    register_meta('post', $field, ['show_in_rest' => true, 'single' => true, 'type' => 'string']);
  }
});
