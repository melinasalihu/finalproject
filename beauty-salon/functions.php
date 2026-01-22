<?php
// Theme Setup
function beauty_salon_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => 'Menuja Kryesore',
        'footer' => 'Menuja e Këmbës'
    ));
    
    // Add custom image sizes
    add_image_size('salon-thumbnail', 280, 220, true);
    add_image_size('salon-medium', 400, 300, true);
    add_image_size('salon-large', 800, 600, true);
}
add_action('after_setup_theme', 'beauty_salon_setup');

// Enqueue Styles and Scripts
function beauty_salon_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap');
    
    // Add custom JS
    wp_enqueue_script('beauty-salon-js', get_template_directory_uri() . '/js/main.js', array('jquery'), filemtime(get_template_directory() . '/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'beauty_salon_assets');

// Register CPT and Taxonomy
function register_beauty_features() {
    register_post_type('sherbimet', array(
        'labels' => array(
            'name' => 'Shërbimet',
            'singular_name' => 'Shërbimi',
            'add_new' => 'Shto Shërbim të Ri',
            'add_new_item' => 'Shto Shërbim të Ri',
            'edit_item' => 'Redakto Shërbimin',
            'view_item' => 'Shiko Shërbimin',
            'all_items' => 'Të Gjithë Shërbimet'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-appearance',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'sherbimet'),
        'show_in_rest' => true,
    ));

    register_taxonomy('kategoria_sherbimit', 'sherbimet', array(
        'labels' => array(
            'name' => 'Kategoritë',
            'singular_name' => 'Kategori',
            'add_new_item' => 'Shto Kategori të Re',
            'edit_item' => 'Redakto Kategorinë'
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'lloj-sherbimi'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_beauty_features');

// Custom Pagination
function beauty_salon_pagination() {
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('← Më Parë', 'beauty-salon'),
        'next_text' => __('Më Pas →', 'beauty-salon'),
    ));
}

// Remove admin bar for better frontend display
add_filter('show_admin_bar', '__return_false');

// Customize Login Logo
function beauty_salon_login_logo() { ?>
    <style type="text/css">
        #login h1 a { 
            background-size: contain !important;
            width: 100%;
            height: auto;
        }
    </style>
<?php }
add_action('login_head', 'beauty_salon_login_logo');

// Add custom excerpt length
function beauty_salon_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'beauty_salon_excerpt_length');

// Customize excerpt more text
function beauty_salon_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'beauty_salon_excerpt_more');