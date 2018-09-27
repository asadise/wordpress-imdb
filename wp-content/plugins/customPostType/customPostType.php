<?php
/*
Plugin Name:  Customize PostType
Description: Site-Specific Plugin for Create a Custom Post Typ
*/


function custom_post_type() {
    $labels = array(
            'name'                => _x( 'Films', 'Post Type General Name', 'united' ),
            'singular_name'       => _x( 'Film', 'Post Type Singular Name', 'united' ),
            'menu_name'           => __( 'Films', 'united' ),
            'parent_item_colon'   => __( 'Parent Film', 'united' ),
            'all_items'           => __( 'All Films', 'united' ),
            'view_item'           => __( 'View Film', 'united' ),
            'add_new_item'        => __( 'Add New Film', 'united' ),
            'add_new'             => __( 'Add New', 'united' ),
            'edit_item'           => __( 'Edit Film', 'united' ),
            'update_item'         => __( 'Update Film', 'united' ),
            'search_items'        => __( 'Search Film', 'united' ),
            'not_found'           => __( 'Not Found', 'united' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'united' ),
        );         
        $args = array(
            'label'               => __( 'Films', 'united' ),
            'description'         => __( 'Film news and reviews', 'united' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 2,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );   
        register_post_type( 'Films', $args );
    }
    add_action( 'init', 'custom_post_type', 0 );


?>