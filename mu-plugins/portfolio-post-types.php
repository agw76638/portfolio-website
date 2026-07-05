<?php
/* Plugin name: Custom Posts */

// project custom post

function projects()
{
  register_post_type('project', array(
    'public' => true,
    'labels' => array(
      'name' => 'Projects',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-portfolio',
    'show_in_rest' => true,
    'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields'),

  ));

  register_post_meta('project', 'link', array(
    'show_in_rest' => true, // Tells Gutenberg to make this field accessible via the REST API
    'single'        => true, // Saves the field as a single string, not an array
    'type'          => 'string',
    'sanitize_callback' => 'esc_url_raw', // Automatically sanitizes the input as a safe URL
  ));
}

add_action('init', 'projects');
