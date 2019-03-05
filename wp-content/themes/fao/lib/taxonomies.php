<?php
	
add_action( 'init', 'create_store_taxonomies', 0 );
function create_store_taxonomies() {
  register_taxonomy(
      'store_category',
      'store',
      array(
          'labels' => array(
              'name' => 'Store Category',
              'add_new_item' => 'Add Store Category',
              'new_item_name' => 'New Store Category'
          ),
          'show_ui' => true,
          'show_tagcloud' => false,
          'hierarchical' => true
      )
  );
}

?>