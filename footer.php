            </div><?php /* #main */ ?>
        </div><?php /*#contents*/ ?>
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="footerMenu">
                            <ul>
                                <li>
                                    <a href="">ホーム</a>
                                </li>
                                <li>
                                    <a href="">プロフィール</a>
                                </li>
                                <li>
                                    <a href="">今後の予定</a>
                                </li>
                                <li>
                                    <a href="">活動報告</a>
                                </li>
                                <?php /*
                                <li>
                                    <a href="">これまでの歩み</a>
                                </li>
                                */ ?>
                                <li>
                                    <a href="">団員募集</a>
                                </li>
                            </ul>
                        </div>
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