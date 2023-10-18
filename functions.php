<?php
function enqueue_styles() {
    wp_enqueue_style('style', get_template_directory_uri() .'/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

/*function enqueue_script() {
    wp_enqueue_script('js_index', get_template_directory_uri() . '/js_index.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_script');*/
?>