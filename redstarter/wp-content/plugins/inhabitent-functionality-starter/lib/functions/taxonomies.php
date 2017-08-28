<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 /**
  * Create custom Taxonomy(ies)
  */

// Add Custom Taxonomy for Custom Post Types

  function init_custom_taxonomies($term){
    $labels = array (
        'name'        => $term,
          'singular_name'   => $term,
          'search_items'    => "Search $term",
          'all_items'       => "All $term",
          'parent_item'     => "Parent $term",
          'parent_item_colon' => "Parent $term:",
          'edit_item'         => "Edit $term",
        'update_item'       => "Update $term",
        'add_new _item'     => "Add New $term",
        'new_item_name'     => "New Type $term",
        'menu_name'         => "$term",
    );
    $args = array (
        'labels'        => $labels,
        'hierarchical'          => true,
        'show_ui'               => true,
        'show_admin_column'   => true,
        'query_var'       => true,
        'rewrite'       => array('slug' => $term)
    );
    return $args;
  }

 ?>