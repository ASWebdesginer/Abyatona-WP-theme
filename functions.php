<?php
define("PATHLOCAL", __DIR__);
// acf options pages
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme General Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Company stats'),
            'menu_title'  => __('companystats'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

// logo options in theme customization
// Add a custom section for logo in Theme Customizer
function theme_customizer_logo_section($wp_customize) {
    $wp_customize->add_section('theme_logo_section', array(
        'title' => __('Logo', 'abyatona'),
        'priority' => 30,
    ));

    // Add setting for header logo image
    $wp_customize->add_setting('theme_logo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Add control for header logo image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
        'label' => __('Upload Logo', 'abyatona'),
        'section' => 'theme_logo_section',
        'settings' => 'theme_logo',
    )));

    // Add setting for footer logo image
    $wp_customize->add_setting('footer_theme_logo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Add control for header logo image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_theme_logo', array(
        'label' => __('Upload Footer Logo', 'abyatona'),
        'section' => 'theme_logo_section',
        'settings' => 'footer_theme_logo',
    )));
}
add_action('customize_register', 'theme_customizer_logo_section');

// registering Projects custom post type
add_action('init','register_project_cpt');
function register_project_cpt(){
    $labels = array(
        'name'                  => _x( 'Projects', 'Post type general name', 'project' ),
        'singular_name'         => _x( 'project', 'Post type singular name', 'project' ),
        'menu_name'             => _x( 'Projects', 'Admin Menu text', 'project' ),
        'name_admin_bar'        => _x( 'project', 'Add New on Toolbar', 'project' ),
        'add_new'               => __( 'Add New', 'project' ),
        'add_new_item'          => __( 'Add New project', 'project' ),
        'new_item'              => __( 'New project', 'project' ),
        'edit_item'             => __( 'Edit project', 'project' ),
        'view_item'             => __( 'View project', 'project' ),
        'all_items'             => __( 'All Projects', 'project' ),
        'search_items'          => __( 'Search Projects', 'project' ),
        'parent_item_colon'     => __( 'Parent Projects:', 'project' ),
        'not_found'             => __( 'No Projects found.', 'project' ),
        'not_found_in_trash'    => __( 'No Projects found in Trash.', 'project' ),
        'featured_image'        => _x( 'project Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'project' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'project' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'project' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'project' ),
        'archives'              => _x( 'project archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'project' ),
        'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'project' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'project' ),
        'filter_items_list'     => _x( 'Filter Projects list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'project' ),
        'items_list_navigation' => _x( 'Projects list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'project' ),
        'items_list'            => _x( 'Projects list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'project' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'project custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail','custom fields' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'project', $args );
}
// register custom menu
function register_custom_menu() {
    register_nav_menu('custom_menu', __('Custom Menu', 'your_theme_textdomain'));
}
add_action('init', 'register_custom_menu');

class Custom_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $current_object_id = 0) {
        $output .= '<a class="dropdown-item" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
    } 
}




