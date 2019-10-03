<!-- wordpress file that adds plug-in like functionality to your wordpress theme -->

<?php 

if ( ! function_exists ('nextnow_setup') ) :

    function nextnow_setup(){
        //let wp handle the title tags
        add_theme_support( 'title-tag' );
    }
endif;
add_action('after_setup_theme', 'nextnow_setup');

// hooks are added to hook into wp itself and use custom functions under specific scenarios
// two kinds of hooks: Actions >> a custom function that gets triggered when a specific WP event occurs
// Filters >> runss the function when specific data gets passed through it, and outputs modified data

/* ---- Register Menus ---- */

function register_nextnow_menus() {
    register_nav_menus(
        array (
                'primary' => __('Primary Menu'),
                'social' => __('Social Menu')
        )
    );
}
add_action('init', 'register_nextnow_menus');

/* ---- Add Style Sheets ---- */

function nextnow_scripts(){
    // enqueue the main style sheet
    wp_enqueue_style( 'nextnow_styles', get_stylesheet_uri() );
    // enqueue the type kit fonts
    wp_enqueue_style( 'nextnow_tkfonts', 'https://use.typekit.net/vvg0gdl.css' );
}
add_action('wp_enqueue_scripts', 'nextnow_scripts');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


