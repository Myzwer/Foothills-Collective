<?php
/**
 * Collective - Functions and Definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Collective
 * @since 1.0.0
 */



//*****************************************************
//***************** CSS / JS Load-in ******************
//*****************************************************

// So here's the deal, if you're new to WP, you can't just load in scripts and styles using a script tag or wp pitches a
// hissy fit and won't work. You have to do what's called enqueuing them.
// https://www.wpbeginner.com/wp-tutorials/how-to-properly-add-javascripts-and-styles-in-wordpress/
// Luckily I have already done that below, and since Webpack only outputs 2 files, we only gotta do it twice.
// BUT, if for some reason you need to add another style or script, do that here.

// JQUERY. If you don't need it delete it.
function include_jQuery() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'include_jQuery');


// Javascript
function scripts_loadin() {
    wp_enqueue_script( 'frontend', get_template_directory_uri() . '/assets/public/js/frontend.js');
}
add_action('wp_enqueue_scripts', 'scripts_loadin');


// Styles
function load_styles() {
    wp_enqueue_style( 'frontend', get_template_directory_uri() . '/assets/public/css/frontend.css');
}
add_action('wp_enqueue_scripts', 'load_styles');

function register_col_1() {
    register_nav_menu('footer-column-1', ('Footer Column 1'));
}
add_action('init', 'register_col_1');

function register_col_2() {
    register_nav_menu('footer-column-2', ('Footer Column 2'));
}
add_action('init', 'register_col_2');

function register_col_3() {
    register_nav_menu('footer-column-3', ('Footer Column 3'));
}
add_action('init', 'register_col_3');

class footer_menu_walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        $output .= "<li class='" .  implode(" ", $item->classes) . "'>";

        if ($item->url && $item->url != '#') {
            $output .= '<a href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
    }
}

