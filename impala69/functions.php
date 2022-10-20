<?php
    function style(){
        wp_register_style('impala-css', get_template_directory_uri() . '/assets/impala.css', array() , '1.0.0', 'all');
        wp_enqueue_style('impala-css');
    }

    add_action('wp_enqueue_scripts', 'style');

    function skrypty(){
        wp_register_script('impala-js', get_template_directory_uri() . '/assets/impala.js', array(), '1.0.0', true);
        wp_enqueue_script('impala-js');
    }
    
    add_action('wp_enqueue_scripts', 'skrypty');


    function theme_options(){
        add_theme_support('title-tag');
    }


    add_action('after_setup_theme', 'theme_options');

