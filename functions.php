<?php
add_theme_support('post-thumbnails');

register_nav_menus(array(
    'top-menu' => 'Top Menu',
    'foot-menu' => 'Foot Menu'
));

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
$custom_header_defaults = array(
    'default-image' => '',
    'random-default' => false,
    'width' => 0,
    'height' => 0,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true,
    'wp-head-callback' => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
    'video' => true,
    'video-active-callback' => 'is_front_page',
);
add_theme_support( 'custom-header', $custom_header_defaults );

$custom_background_defaults = array(
    'default-image' => '',
    'default-preset' => 'default',
    'default-position-x' => 'left',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-repeat' => 'repeat',
    'default-attachment' => 'scroll',
    'default-color' => '',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-background', $custom_background_defaults );


// 同じ日付でも日付を表示
function my_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'my_the_post' );


//ページング
function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&lt;',
    'next_text'    => '&gt;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}