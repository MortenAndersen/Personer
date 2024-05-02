<?php
// Custom Taxonomy = 'personer-type'

    function custom_taxonomy_personer() {

    $labels = array(
        'name'                       => _x( 'Typer', 'Taxonomy General Name', 'websepeed-personer-domain' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'websepeed-personer-domain' ),
        'menu_name'                  => __( 'Type', 'websepeed-personer-domain' ),
        'all_items'                  => __( 'All Items', 'websepeed-personer-domain' ),
        'parent_item'                => __( 'Parent type', 'websepeed-personer-domain' ),
        'parent_item_colon'          => __( 'Parent type:', 'websepeed-personer-domain' ),
        'new_item_name'              => __( 'New Item Name', 'websepeed-personer-domain' ),
        'add_new_item'               => __( 'Add New type', 'websepeed-personer-domain' ),
        'edit_item'                  => __( 'Edit Item', 'websepeed-personer-domain' ),
        'update_item'                => __( 'Update Item', 'websepeed-personer-domain' ),
        'view_item'                  => __( 'View Item', 'websepeed-personer-domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'websepeed-personer-domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'websepeed-personer-domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'websepeed-personer-domain' ),
        'popular_items'              => __( 'Popular Items', 'websepeed-personer-domain' ),
        'search_items'               => __( 'Search Items', 'websepeed-personer-domain' ),
        'not_found'                  => __( 'Not Found', 'websepeed-personer-domain' ),
        'no_terms'                   => __( 'No items', 'websepeed-personer-domain' ),
        'items_list'                 => __( 'Items list', 'websepeed-personer-domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'websepeed-personer-domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'show_in_nav_menus'          => false

    );
    register_taxonomy( 'person-type', array( 'person' ), $args );
}

add_action( 'init', 'custom_taxonomy_personer', 2 );