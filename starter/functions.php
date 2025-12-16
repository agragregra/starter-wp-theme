<?php

add_filter('show_admin_bar', '__return_false');

function starter_theme_styles() {
  wp_enqueue_style('starter-utils', get_theme_file_uri('utils.css'));
  wp_enqueue_style('starter-style', get_stylesheet_uri());
  wp_enqueue_style('starter-media', get_theme_file_uri('media.css'));
}
add_action('wp_enqueue_scripts', 'starter_theme_styles');

function starter_editor_styles() {
  add_editor_style('utils.css');
  add_editor_style('style.css');
  add_editor_style('media.css');
}
add_action('after_setup_theme', 'starter_editor_styles');

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
