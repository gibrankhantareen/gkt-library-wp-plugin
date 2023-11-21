<?php
/*
Plugin Name: GKT - Library Books
Description: A simple plugin to create and manage posts for a custom post type (in our case its Library).
Version: 1.0
Author: Gibran Khan Tareen
*/

function cptc_create_post_type() {
    register_post_type('cptc_custom_type',
        array(
            'labels' => array(
                'name' => __('GKT - Library'),
                'singular_name' => __('Library')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
			'menu_icon' => 'dashicons-book'
        )
    );
}
add_action('init', 'cptc_create_post_type');
