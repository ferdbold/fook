<?php

function fook_enqueue_scripts() {
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('fook', get_template_directory_uri() . '/js/fook.js', array('bootstrap', 'jquery'));
    
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css');
    wp_enqueue_style('fook', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'fook_enqueue_scripts');

function trace($msg) {
    echo '<pre class="col-xs-12 col-lg-8 col-lg-offset-2">';
    var_dump($msg);
    echo '</pre>';
}
