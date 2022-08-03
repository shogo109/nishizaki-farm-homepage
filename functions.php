<?php 

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function load_script() {
    if(!is_admin()) {
        

        // スタイルの読み込み
        wp_enqueue_style(
            'reset-css',
            get_template_directory_uri() . '/scss/reset.css',
        );
        wp_enqueue_style('slick-style', get_template_directory_uri() . '/scss/slick.css', array());
        wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/scss/slick-theme.css', array('slick-style'));
        wp_enqueue_style(
            'main-style',
            get_template_directory_uri() . '/scss/style.css',
        );
        wp_enqueue_style(
            'prologue-style',
            get_template_directory_uri() . '/scss/prologue.css',
        );
        wp_enqueue_style(
            'gallery-style',
            get_template_directory_uri() . '/scss/gallery.css',
        );
        wp_enqueue_style(
            'news-style',
            get_template_directory_uri() . '/scss/news.css',
        );
        wp_enqueue_style(
            'post-style',
            get_template_directory_uri() . '/scss/post.css',
        );

        // slick script
        wp_enqueue_script('slick-script', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true);
        
        wp_enqueue_script('progressbar', get_template_directory_uri() . '/js/progressbar.js', array());
        /* main.js */
        wp_enqueue_script(
            'main-script',
            get_template_directory_uri() . '/js/main.js',
            array('jquery'),
            false, 
            true
        );
        wp_enqueue_script(
            'prologue-script',
            get_template_directory_uri() . '/js/prologue.js',
            array('jquery'),
            false, 
            true
        );
    }
}

add_action('init', 'load_script');



function create_post_type() {
    register_post_type('gallery', array(
        'labels' => array(
            'name' => 'ギャラリー一覧',
            'singular_name' => 'ギャラリー',
        ),
        'public' => true,
        'has_archive' => true,
    ));
}

add_action('init', 'create_post_type');




?>