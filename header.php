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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2&appId=193793414758513&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
      
    <div id="wrapper">
       
        <div id="hiddenWin" class="wow fadeInLeft" data-wow-duration="1.0s" data-wow-delay=".2s">
            <div class="btn_home">
                <h1>
                    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                </h1>
            </div>
            <div class="hidden_left">
                <h2>メニュー</h2>
                <nav id="mainMenu" class="wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s">
                    <?php wp_nav_menu(array('theme_location'=>'top-menu')); ?>
                </nav>
                <h2>次回公演予定</h2>
                <?php get_sidebar(); ?>
            </div>
        </div>
        
        <div class="fixedmenu">
            <a href="#" class="showbtn1">
                <span>MENU</span><br>
                次回公演
            </a>
        </div>
        
        <div id="contents">
            <?php if(is_front_page()): ?>
                <div class="img_top wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".1s" style="background-image: url('<?php header_image(); ?>');">
                    <?php /*
                    <span>
                        KODOMONO<br>
                        SHIRO<br>
                        CHORUS
                    </span>
                    */ ?>
                </div>
            <?php endif; ?>


            <div id="main">
