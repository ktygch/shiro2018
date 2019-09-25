                <div class="container-fluid">
                    <div class="row">
                        <?php get_template_part('slide/topslide2'); ?>
                    </div>
                </div>
            
            </div><?php /* #main */ ?>
        </div><?php /*#contents*/ ?>
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'foot-menu'
                        )); ?>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <a class="twitter-timeline" data-height="500" href="https://twitter.com/kdmn46?ref_src=twsrc%5Etfw">Tweets by kdmn46</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="fb-page" data-href="https://www.facebook.com/&#x3053;&#x3069;&#x3082;&#x306e;&#x57ce;&#x5150;&#x7ae5;&#x5408;&#x5531;&#x56e3;&#x6df7;&#x58f0;&#x5408;&#x5531;&#x56e3;-557863240896091/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/&#x3053;&#x3069;&#x3082;&#x306e;&#x57ce;&#x5150;&#x7ae5;&#x5408;&#x5531;&#x56e3;&#x6df7;&#x58f0;&#x5408;&#x5531;&#x56e3;-557863240896091/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/&#x3053;&#x3069;&#x3082;&#x306e;&#x57ce;&#x5150;&#x7ae5;&#x5408;&#x5531;&#x56e3;&#x6df7;&#x58f0;&#x5408;&#x5531;&#x56e3;-557863240896091/">こどもの城児童合唱団・混声合唱団</a></blockquote></div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <address>© NPO法人 こどもの城 合唱団　kodomonoshiro-uta.com</address>
            </div>
        </footer>
        
    </div><?php /*#wrapper*/ ?>
    
    <?php $timestamp = time() ?>
	
	<script src="<?php bloginfo('template_directory'); ?>/js/bs/bootstrap.min.js"></script>
   
    <script src="<?php bloginfo('template_directory'); ?>/js/min/default.min.js?<?php echo $timestamp; ?>"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/js/min/wow.min.js?<?php echo $timestamp; ?>"></script>
    <script>
        new WOW().init();
    </script>
    
    <script src="<?php bloginfo('template_directory'); ?>/js/min/instafeed.min.js"></script>
    <script type="text/javascript">
        var feed = new Instafeed({
            clientId: 'e050ccd6ea3b46ea976654336aef026c',
            get: 'user', 
            userId: '4372116736',
            accessToken:'4372116736.1677ed0.dbd93064e75a41d282b8c68aa0ff5c96',
            sortBy:'random', //並び順をランダムに
            links: true,
            limit: 10, // 取得件数 
            resolution:'low_resolution', // thumbnail (default) - 150x150 | low_resolution - 306x306 | standard_resolution - 612x612
            template: '<li><a href="{{link}}" target="_blank"><span style="background-image: url({{image}});"></span></a></li>' // 画像URL：{{image}} リンク：{{link}} キャプションテキスト{{caption}} いいね数：{{likes}} コメント数：{{comments}}
        });
        feed.run();

    </script>
    
	<script src="<?php bloginfo('template_directory'); ?>/js/min/jquery.simplyscroll.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/min/slide.min.js"></script>
    
	<?php if(is_front_page()): ?>
		<?php if(wp_is_mobile()): ?>
		<?php else: ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php wp_footer(); ?>
	
</body>
</html>