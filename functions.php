<?php
function testtheme_styles(){
    wp_register_style('style', get_template_directory_uri() . '/css/customstyle.css', array(), '1.0.0', 'all');
    // wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');

    wp_enqueue_style('style');
    // wp_enqueue_style('normalize');
    wp_enqueue_script('testjs', get_template_directory_uri() . '/js/toggle.js', array(), '1.0.0',  true);
}

add_action('wp_enqueue_scripts', 'testtheme_styles');