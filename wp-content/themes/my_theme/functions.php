<?php


function mytheme_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mytheme_theme_support');

function mytheme_register_style(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('mytheme-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '4.0.0', 'all');
    // wp_enqueue_style('mytheme-fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . "/style.css", array('mytheme-bootstrap'), $version, "all");
    wp_enqueue_style('mytheme-vertical-timeline', get_template_directory_uri() . "/assets/css/vertical-timeline.css", array(), $version);
    wp_enqueue_style('mytheme-swipper-css', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css", array(), $version, 'all');
    wp_enqueue_style('mytheme-font-volkron', 'https://fonts.googleapis.com/css2?family=Vollkorn&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('mytheme-fontawesome5', get_template_directory_uri() . "/assets/css/all.css", array());
    wp_enqueue_style('mytheme-font-varela', "https://fonts.googleapis.com/css2?family=Varela&display=swap", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'mytheme_register_style');


function mytheme_register_script(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('mytheme-bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array('mytheme-jquery-js'), '4.0.0', true);
    wp_enqueue_script('mytheme-jquery-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", array(), '3.2.1', true);
    wp_enqueue_script('mytheme-popper-js', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", array(), '1.12.9', true);
    wp_enqueue_script('mytheme-main-js', get_template_directory_uri() . "/assets/js/main.js", array('mytheme-swipper-js'), '1.0' , true );
    wp_enqueue_script('mytheme-vertical-timeline-js', get_template_directory_uri() . "/assets/js/vertical-timeline.js", array(), $version, true);
    wp_enqueue_script('mytheme-swipper-js', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js", array(), '1.12.9', true);
}

add_action('wp_enqueue_scripts', 'mytheme_register_script');

?>