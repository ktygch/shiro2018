<?php
$defaults = array(
	'default-image' => get_template_directory_uri(). '/image/toppageheader.jpg',
	'flex-height' => true,
	'flex-width' => true,
	'header-text' => true,
	'uploads' => true
);
add_theme_support('custom-header', $defaults);
add_theme_support('post-thumbnails');
register_nav_menu('top-menu', 'Top Menu');

function my_scripts() {
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

register_sidebar(array(
    'name' => 'sidebar1',
    'id' => 'sidebar1',
    'before_widget' => '<div class="top_event_list">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="idx">',
    'after_title' => '</h2>'
));

register_sidebar(array(
    'name' => 'sidebar2',
    'id' => 'sidebar2',
    'before_title' => '<h2 class="idx">',
    'before_title' => '</h2>'
));

//カスタム投稿（コンサート用）
/*
add_action('init', 'my_custom_post');
function my_custom_post(){
    register_post_type('concert', array(
        'label' => 'CONCERT',
        'public' => true,
        'query_car' => true,
        'rewrite' => array('slug' => 'concert'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'author', 'page-attributes'),
        'has_archive' => true
    ));
    
    register_taxonomy('concert_cat', array(
        0 => 'concert',), array(
            'hierarchical' => true,
            'label' => 'Category',
            'public' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'concert_cat'),
        )
    );
}
*/
