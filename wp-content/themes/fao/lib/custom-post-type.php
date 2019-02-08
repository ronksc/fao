<?php 

// store
add_action('init', 'store_register');
function store_register() {
  $labels = array(
      'name' => _x('Store', 'post type general name'),
      'singular_name' => _x('Store', 'post type singular name'),
      'add_new' => _x('Add Store', 'rep'),
      'add_new_item' => __('Add New Store'),
      'edit_item' => __('Edit Store'),
      'new_item' => __('New Store'),
      'view_item' => __('View Store'),
      'search_items' => __('Search Store'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 8,
      'supports'      => array( 'title'),
  );
  register_post_type( 'store' , $args );
}

?>