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