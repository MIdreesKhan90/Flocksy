<?php
/* Portfolio */

  function flocksy_post_type_portfolio() {
      
       
    $supports = array(
        'title', // post title
        'thumbnail', // featured images
        'revisions', // post revisions 
    );
    
    $labels = array(
        'name' => _x('Portfolios', 'plural'),
        'singular_name' => _x('Portfolio', 'singular'),
        'menu_name' => _x('Portfolios', 'admin menu'),
        'name_admin_bar' => _x('Portfolio', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Portfolio'),
        'new_item' => __('New Portfolio'),
        'edit_item' => __('Edit Portfolio'),
        'view_item' => __('View Portfolio'),
        'all_items' => __('All Portfolios'),
        'search_items' => __('Search Portfolio'),
        'not_found' => __('No Portfolio found.'),
    );
    
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolios'),
        'has_archive' => false,
        'hierarchical' => false,
        'show_in_nav_menus' => true,
        'taxonomies'          => array( 'portfolio_category' )
    );
    
    register_post_type('portfolio', $args);
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Portfolio Categories', 'textdomain' ),
        'all_items'         => __( 'All Portfolio Categories', 'textdomain' ),
        'parent_item'       => __( 'Parent Portfolio Category', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:', 'textdomain' ),
        'edit_item'         => __( 'Edit Portfolio Category', 'textdomain' ),
        'update_item'       => __( 'Update Portfolio Category', 'textdomain' ),
        'add_new_item'      => __( 'Add New Portfolio Category', 'textdomain' ),
        'new_item_name'     => __( 'New Portfolio Category Name', 'textdomain' ),
        'menu_name'         => __( 'Portfolio Category', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio_category' ),
    );
 
    register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
     unset( $args );
    unset( $labels );
    
 // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Portfolio Display', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Portfolio Display', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Portfolio Display', 'textdomain' ),
        'all_items'         => __( 'All Portfolio Display', 'textdomain' ),
        'parent_item'       => __( 'Parent Portfolio Display', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Portfolio Display:', 'textdomain' ),
        'edit_item'         => __( 'Edit Portfolio Display', 'textdomain' ),
        'update_item'       => __( 'Update Portfolio Display', 'textdomain' ),
        'add_new_item'      => __( 'Add New Portfolio Display', 'textdomain' ),
        'new_item_name'     => __( 'New Portfolio Display Name', 'textdomain' ),
        'menu_name'         => __( 'Portfolio Display', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'portfolio_display' ),
    );
 
    register_taxonomy( 'portfolio_display', array( 'portfolio' ), $args );
    unset( $args );
    unset( $labels );
     
}
add_action('init', 'flocksy_post_type_portfolio');

function flocksy_post_type_review() {
    
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Reviews  Categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Reviews Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Reviews Categories', 'textdomain' ),
        'all_items'         => __( 'All Reviews Categories', 'textdomain' ),
        'parent_item'       => __( 'Parent Reviews Category', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Reviews Category:', 'textdomain' ),
        'edit_item'         => __( 'Edit Reviews Category', 'textdomain' ),
        'update_item'       => __( 'Update Reviews Category', 'textdomain' ),
        'add_new_item'      => __( 'Add New Reviews Category', 'textdomain' ),
        'new_item_name'     => __( 'New Reviews Category Name', 'textdomain' ),
        'menu_name'         => __( 'Reviews Category', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'reviews_category' ),
    );
 
    register_taxonomy( 'reviews_category', array( 'reviews' ), $args );
 
    unset( $args );
    unset( $labels );
    
    $supports = array(
        'title', // post title
        'thumbnail', // featured images
        'revisions', // post revisions
    );
    
    $labels = array(
        'name' => _x('Reviews', 'plural'),
        'singular_name' => _x('Review', 'singular'),
        'menu_name' => _x('Reviews', 'admin menu'),
        'name_admin_bar' => _x('Review', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New review'),
        'new_item' => __('New review'),
        'edit_item' => __('Edit review'),
        'view_item' => __('View review'),
        'all_items' => __('All reviews'),
        'search_items' => __('Search review'),
        'not_found' => __('No review found.'),
    );
    
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'review'),
        'has_archive' => true,
        'hierarchical' => false,
        'taxonomies'          => array( 'reviews_category' ),
    );
    register_post_type('review', $args);
}
add_action('init', 'flocksy_post_type_review');

?>