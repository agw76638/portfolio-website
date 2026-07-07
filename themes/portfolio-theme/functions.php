<?php

add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_styles');

function portfolio_theme_enqueue_styles()
{

  wp_enqueue_style(
    'portfolio-theme-style',
    get_stylesheet_uri('style.css'),
    array(),
    filemtime('./style.css')
  );
}
