<?php
function testtheme_styles(){
    wp_register_style('style', get_template_directory_uri() . '/css/customstyle.css', array(), '1.0.0', 'all');
    wp_register_style('lato', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');

    wp_enqueue_style('style');
    wp_enqueue_style('lato');
    wp_enqueue_style('fontawesome');
    wp_enqueue_script('testjs', get_template_directory_uri() . '/js/toggle.js', array(), '1.0.0',  true);
}

add_action('wp_enqueue_scripts', 'testtheme_styles');




/*
<?php
function testtheme_styles(){
    wp_register_style('style', get_template_directory_uri() . '/css/customstyle.css', array(), '1.0.0', 'all');
    wp_register_style('iconfont',  get_template_directory_uri() . '/css/icon-font.css');
    wp_register_style('lato', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');

    wp_enqueue_style('style');
    wp_enqueue_style('lato');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('iconfont');
    wp_enqueue_script('testjs', get_template_directory_uri() . '/js/toggle.js', array(), '1.0.0',  true);
}

*/