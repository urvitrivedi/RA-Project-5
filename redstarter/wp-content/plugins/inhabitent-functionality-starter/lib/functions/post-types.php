<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 /**
  * Create custom post type(s)
  */

  function init_custom_post_types($key){

    $labels = array(
          'name'          => _x('CPT', 'Post Type General Name', 'text_domain'),
          'singular_name'     => _x('CPT', 'Post Type Singular Name', 'text_domain'),
          'parent_item_colon'   => '',
        'menu_name'             => __( "$key"),
        'name_admin_bar'        => __( "$key"),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( "All Items"),
        'add_new_item'          => __( "Add New Item $key"),
        'add_new'               => __( "Add New $key"),
        'new_item'              => __( 'New Item $key'),
        'edit_item'             => __( "Edit Item $key"),
        'update_item'           => __( "Update Item $key"),
        'view_item'             => __( "View Item $key"),
        'view_items'            => __( "View Items $key"),
        'search_items'          => __( "Search Item $key"),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
 
    $args = array(
          'labels'        => $labels,
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,    
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
    );
    return $args;
  }

  ?>