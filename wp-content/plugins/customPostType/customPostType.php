<?php
/*
Plugin Name:  Customize PostType & Taxonomy
Description: Site-Specific Plugin for Create a Custom Post Type & Taxonomies
*/

function create_genre_nonhierarchical_taxonomy() {
  $labels = array(
    'name' => _x( 'Genre', 'taxonomy general name' ),
    'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Genre' ),
    'popular_items' => __( 'Popular Genre' ),
    'all_items' => __( 'All Genre' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Genre' ),
    'update_item' => __( 'Update Genre' ),
    'add_new_item' => __( 'Add New Genre' ),
    'new_item_name' => __( 'New Genre Name' ),
    'separate_items_with_commas' => __( 'Separate Genre with commas' ),
    'add_or_remove_items' => __( 'Add or remove Genre' ),
    'choose_from_most_used' => __( 'Choose from the most used Genre' ),
    'menu_name' => __( 'Genre' ),
  );
  register_taxonomy('Genre','Films',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'genre' ),
  ));
}
function create_Country_nonhierarchical_taxonomy() {
    $labels = array(
      'name' => _x( 'Country', 'taxonomy general name' ),
      'singular_name' => _x( 'Country', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Country' ),
      'popular_items' => __( 'Popular Country' ),
      'all_items' => __( 'All Country' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit Country' ),
      'update_item' => __( 'Update Country' ),
      'add_new_item' => __( 'Add New Country' ),
      'new_item_name' => __( 'New Country Name' ),
      'separate_items_with_commas' => __( 'Separate Countries with commas' ),
      'add_or_remove_items' => __( 'Add or remove Country' ),
      'choose_from_most_used' => __( 'Choose from the most used Country' ),
      'menu_name' => __( 'Country' ),
    );
    register_taxonomy('Country','Films',array(
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var' => true,
      'rewrite' => array( 'slug' => 'country' ),
    ));
  }
  function create_Year_nonhierarchical_taxonomy() {
    $labels = array(
      'name' => _x( 'Year', 'taxonomy general name' ),
      'singular_name' => _x( 'Year', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Year' ),
      'popular_items' => __( 'Popular Year' ),
      'all_items' => __( 'All Year' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit Year' ),
      'update_item' => __( 'Update Year' ),
      'add_new_item' => __( 'Add New Year' ),
      'new_item_name' => __( 'New Year Name' ),
      'separate_items_with_commas' => __( 'Separate Countries with commas' ),
      'add_or_remove_items' => __( 'Add or remove Year' ),
      'choose_from_most_used' => __( 'Choose from the most used Year' ),
      'menu_name' => __( 'Year' ),
    );


    register_taxonomy('Year','Films',array(
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var' => true,
      'rewrite' => array( 'slug' => 'year' ),
    ));
  }
  function create_Actor_nonhierarchical_taxonomy() {
    $labels = array(
      'name' => _x( 'Actor', 'taxonomy general name' ),
      'singular_name' => _x( 'Actor', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Actor' ),
      'popular_items' => __( 'Popular Actor' ),
      'all_items' => __( 'All Actor' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit Actor' ),
      'update_item' => __( 'Update Actor' ),
      'add_new_item' => __( 'Add New Actor' ),
      'new_item_name' => __( 'New Actor Name' ),
      'separate_items_with_commas' => __( 'Separate Countries with commas' ),
      'add_or_remove_items' => __( 'Add or remove Actor' ),
      'choose_from_most_used' => __( 'Choose from the most used Actor' ),
      'menu_name' => __( 'Actor' ),
    );


    register_taxonomy('Actor','Films',array(
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var' => true,
      'rewrite' => array( 'slug' => 'actor' ),
    ));
  }

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
            'taxonomies'          => array( 'Genre', 'Country', 'Year', 'Actor' ),
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
    add_action( 'init', 'create_genre_nonhierarchical_taxonomy', 0 );
    add_action( 'init', 'create_Country_nonhierarchical_taxonomy', 0 );
    add_action( 'init', 'create_Year_nonhierarchical_taxonomy', 0 );
    add_action( 'init', 'create_Actor_nonhierarchical_taxonomy', 0 );
    add_action( 'init', 'custom_post_type', 0 );

    function taxonomy_after_content($content) {
        if(is_archive()) {
            $content.= "<b>Country:</b> " . get_the_term_list(get_the_ID(), 'Country', '', ', ', '' );
            $content.= " | <b>Genre:</b> " . get_the_term_list(get_the_ID(), 'Genre', '', ', ', '' );
            $content.= " | <b>Release Date:</b> " . get_post_meta(get_the_ID(), 'Release Date', TRUE);
            $content.= " | <b>Ticket Price:</b> " . get_post_meta(get_the_ID(), 'Ticket Price', TRUE);
            }
        return $content;
       }
    add_filter ('the_content', 'taxonomy_after_content');

    add_filter('widget_posts_args', 'widget_posts_args_add_custom_type');
function widget_posts_args_add_custom_type($params) {
   $params['post_type'] = array('Films');
   return $params;
}
?>