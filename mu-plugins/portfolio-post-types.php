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
    'menu_icon' => 'dashicons-portfolio'

  ));
}

add_action('init', 'projects');
