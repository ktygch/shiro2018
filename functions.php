<?php
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
function pagination($pages = '', $range = 1)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "
            <div class=\"pagination\">
                <div class=\"pagination-box\">
                    <div class=\"page-of\">
                        <span>
                            Page ".$paged." of ".$pages."
                        </span>
                    </div>";

                     if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
                     if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
 
                     for ($i=1; $i <= $pages; $i++)
                     {
                         if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                         {
                             echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
                         }
                     }

                     if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
                     if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "
                </div>
            </div>\n";
     }
}



