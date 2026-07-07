<?php

add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_styles');

function portfolio_theme_enqueue_styles()
{
  $css_file = get_stylesheet_directory() . '/style.css';
  // Get the file modification time as the version number
  $version = fileexists($css_file) ? filemtime($css_file) : '1.0';

  wp_enqueue_style(
    'portfolio-theme-style',
    get_stylesheet_uri('style.css'),
    array(),
    $version
  );
}
