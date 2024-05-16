<?php 
// php files 

function customizer_overlay_enqueue_scripts() {
    wp_enqueue_script('customizer-overlay-js', get_template_directory_uri() . '/js/customizer-overlay.js', array('jquery'), null, true);
    wp_enqueue_style('customizer-overlay-css', get_template_directory_uri() . '/css/customizer-overlay.css', array(), null);
}
add_action('customize_controls_enqueue_scripts', 'customizer_overlay_enqueue_scripts');