<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<?php if(is_front_page()): ?>
		<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php else: ?>
		<title><?php wp_title('');?> | <?php bloginfo('name'); ?></title>
	<?php endif; ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/eric-meyer-reset.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bs/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/design.css">
	<?php /*ie8以前へのhtml5対応用スクリプト*/ ?>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<?php /* adobe typekit */ ?>
	<script src="https://use.typekit.net/dfs6xjf.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class(); ?>>
    <div id="hiddenWin">
        隠れてる
        <ul>
            <li><a href="<?php bloginfo('url'); ?>/profile/">プロフィール</a></li>
        </ul>
    </div>
    <div id="wrapper">
        <header class="site_header">
            <div class="sp_btn">
                <a href="#" class="showbtn1">開く</a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="siteTitle">
                            <?php if(is_front_page()): ?>
                                <h1>
                                    <span></span>
                                    <?php bloginfo('name'); ?>
                                </h1>
                            <?php else: ?>
                                <h1>
                                    <span></span>
                                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                                </h1>
                            <?php endif; ?>
                            <p class="catch">
                                <?php /*カスタム案件 コメントアウト
                                <?php bloginfo('description'); ?>
                                */ ?>
                                みなさん、こんにちは！　こどもの城合唱団です。<br class="hidden-xs">
                                ぼくたち・わたしたちの歌を聴いて<br class="hidden-sm hidden-md hidden-lg">下さい！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(is_front_page()): ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="img_sitemain" style="background-image: url('<?php header_image(); ?>');">
                            <div class="toppage_prof col-xs-10 col-xs-offset-2 col-sm-8 col-sm-offset-2">
                                <?php $page = get_page_by_path('header_txt'); ?>
                                <h2><?php echo $page -> post_title; ?></h2>
                                <?php /*
                                <div class="text">
                                    <?php echo $page -> post_content; ?>
                                </div>
                                */ ?>
                            </div>
        
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="container hidden-xs">
                <div class="row">
                    <div class="col-xs-12">
                        <nav id="mainMenu">
                            <?php wp_nav_menu(array('theme_location'=>'top-menu')); ?>
                            <?php /*
                            <ul>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/information/" class="btn btn-success btn-lg">お知らせ</a>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/category/concert/" class="btn btn-success btn-lg">コンサート情報</a>
                                </li>
                                <li>
                                    <a href="" class="btn btn-success btn-lg">プロフィール</a>
                                </li>
                            </ul>
                            */ ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        
        <div id="main">