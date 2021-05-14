<?php

// add theme support
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');

// this is our custom function which loads our stylesheet from the root directory
function custom_theme_assets() {
    wp_enqueue_style('tim-custom-style', get_stylesheet_uri());
    wp_enqueue_script('alex-js-file', get_template_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');
 
// register our custom navigation menu in the backend
register_nav_menus( [ 'primary' => __( 'Primary Menu' )]);

// this function will set the excerpt length
function customize_the_excerpt_length() {
    // return 10 characters
    return 10;
}

// a filter hook to modify the default Wordpress excerpt length
add_filter('excerpt_length', 'customize_the_excerpt_length');

// let's set up a custom post type - Staff members

function create_staff_posttype() {
    $args = array (
        'labels' => array(
            // Name of the post type which shows in the CMS backend
            'name' => __('Staff'),
            'singular_name' => __('Staff')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array ('title', 'editor', 'thumbnail')
    );
    register_post_type('staff', $args ); 
}

add_action('init', 'create_staff_posttype');

// custom function to change the placeholder
function change_staff_title_placeholder($title) {
    $current_screen = get_current_screen();
        if ($current_screen->post_type == 'staff') {
            $title = 'Full name of staff member';
        }
        return $title;
}

add_filter('enter_title_here', 'change_staff_title_placeholder');

/* Register and display metabox */
add_action( 'add_meta_boxes', 'staff_position_add_metabox');

function staff_position_add_metabox()
{
    add_meta_box('my-meta-box-id', //metabox ID
                 'Job Title', //title seen by the user
                 'staff_position_meta_box_callback', //here's the callback function which runs during this function
                 'staff', //our custom post type which the meta box attaches too
                 'normal' //position of the metabox 
                );
}

function staff_position_meta_box_callback($post)  
{  
    $job_title = get_post_meta( $post->ID, '_job_title', true );
    echo "";
    echo "<input type='text' name='jobtitle' value='" . esc_attr($job_title) . "'>";     
}

/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'save_staff_meta_box_data' );

function save_staff_meta_box_data($post_id) {

    // If it's autosaving, bail.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Make sure that the right post data is set.
    if ( ! isset( $_POST['jobtitle'] ) ) {
        return;
    }

    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['jobtitle'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, '_job_title', $my_data );
}












// let's set up a custom post type - Books

function create_members_posttype() {
    $args = array (
        'labels' => array(
            // Name of the post type which shows in the CMS backend
            'name' => __('Members'),
            'singular_name' => __('Members')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'supports' => array ('title', 'editor', 'thumbnail')
    );
    register_post_type('members', $args ); 
}

add_action('init', 'create_members_posttype');

// custom function to change the placeholder
function change_members_title_placeholder($title) {
    $current_screen = get_current_screen();
        if ($current_screen->post_type == 'members') {
            $title = 'Name of Member';
        }
        return $title;
}

add_filter('enter_title_here', 'change_members_title_placeholder');



/* Register and display metabox */
add_action( 'add_meta_boxes', 'website_add_metabox');

function website_add_metabox()
{
    add_meta_box('my-meta-box-id', //metabox ID
                 'Website', //title seen by the user
                 'website_meta_box_callback', //here's the callback function which runs during this function
                 'members', //our custom post type which the meta box attaches too
                 'normal' //position of the metabox 
                );
}

function website_meta_box_callback($post)  
{  
    $website = get_post_meta( $post->ID, '_website', true );
    echo "<input type='text' name='website' value='" . esc_attr($website) . "'>";     
}

/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'save_member_meta_box_data' );

function save_member_meta_box_data($post_id) {

    // If it's autosaving, bail.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Make sure that the right post data is set.
    if ( ! isset( $_POST['website'] ) ) {
        return;
    }

    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['website'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, '_website', $my_data );
} 


add_action('init', 'create_location_members_taxomony', 0);

// let's create a custom taxonomy

function create_location_members_taxomony() {
    $labels = array(
        'name' => _x('Locations', 'general name'),
        'singular_name' => _x('Location', 'singular name'),
        'search_items' => __('Search Locations'),
        'all_items' => __('All Locations'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit Location'),
        'update_item' => __('Update Location'),
        'add_new_item' => __('Add New Location'),
        'new_item_name' => __('New Location Name'),
        'menu_name' => __('Location')
    );
    // register the taxonomy in wordpress and plug in the data from our labels array
    register_taxonomy('Locations', array('members', 'staff'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true
        )
    );
}

// Removing fields and customising the Woocommerce cart

add_filter('woocommerce_checkout_fields','custom_override_checkout_fields');
function custom_override_checkout_fields($fields) {
    unset($fields['order']['order_comments']);
    return $fields; 
}

// make the phone number optional
add_filter( 'woocommerce_billing_fields', 'change_phonenumber_field' );
function change_phonenumber_field($address_fields){
    $address_fields['billing_phone']['required'] = false;
    $address_fields['billing_email']['required'] = false;
    unset($address_fields['billing_postcode']);
    return $address_fields;
    
}

function custom_empty_cart_message() {
    $html  = '<h1 class="cart-empty">';
    $html .= wp_kses_post( apply_filters( 'wc_empty_cart_message', __( 'Your cart dull, go buy something btich.', 'woocommerce' ) ) );
    echo $html . '</h1>';
}

add_action( 'woocommerce_cart_is_empty', 'custom_empty_cart_message', 10 );







// let's set up a custom post type - Newsletters

function create_newsletters_posttype() {
    $args = array (
        'labels' => array(
            // Name of the post type which shows in the CMS backend
            'name' => __('Newsletters'),
            'singular_name' => __('Newsletters')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array ('title', 'editor', 'thumbnail')
    );
    register_post_type('newsletters', $args ); 
}

add_action('init', 'create_newsletters_posttype');

// custom function to change the placeholder
function change_newsletters_title_placeholder($title) {
    $current_screen = get_current_screen();
        if ($current_screen->post_type == 'newsletters') {
            $title = 'Heading';
        }
        return $title;
}

add_filter('enter_title_here', 'change_newsletters_title_placeholder');



/* Register and display metabox */
add_action( 'add_meta_boxes', 'author_add_metabox');

function author_add_metabox()
{
    add_meta_box('my-meta-box-id', //metabox ID
                 'Author', //title seen by the user
                 'author_meta_box_callback', //here's the callback function which runs during this function
                 'books', //our custom post type which the meta box attaches too
                 'normal' //position of the metabox 
                );
}

function author_meta_box_callback($post)  
{  
    $author = get_post_meta( $post->ID, '_author', true );
    echo "<input type='text' name='author' value='" . esc_attr($author) . "'>";     
}

/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'save_book_meta_box_data' );

function save_book_meta_box_data($post_id) {

    // If it's autosaving, bail.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Make sure that the right post data is set.
    if ( ! isset( $_POST['author'] ) ) {
        return;
    }

    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['author'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, '_author', $my_data );
}

?>
