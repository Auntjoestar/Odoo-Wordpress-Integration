<?php declare(strict_types = 1)
/*
 * Plugin Name: Course Taxonomy
 * Description: A short example showing how to add a taxonomy called Course.
 * Version: 1.0
 * Author: auntjoestar
 */

function ajtc_register_taxonomy_course(): void {
    $labels = array(
        'name' => _x('Courses', 'Taxonomy general name'),
        'singular_name'=> _x('Course', 'Taxonomy singular name'),
        'search_items' => __('Search Courses'),
        'all_items' => __('All Courses'),
        'parent_item' => __('Parent Course'),
        'parent_item_colon' => __('Parent Course:'),
        'edit_item' => __('Edit Course'),
        'update_item' => __('Update Course'),
        'add_new_item' => __('Add New Course'),
        'new_item_name' => __('New Course Name'),
        'menu_name' => __('Course'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'course'],
    );

    register_taxonomy( 'course', [ 'post' ], $args );
}

add_action( 'init', 'ajtc_register_taxonomy_course' );

