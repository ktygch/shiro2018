        </div><?php /* #main */ ?>
        
        <footer>
            <div class="bottom">
                <p class="margin0">こどもの城児童合唱団・混声合唱団</p>
                <address>© 2017 kodomonoshiro-uta.com</address>
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
            links: true,
            limit: 20, // 取得件数 
            resolution:'thumbnail', // thumbnail (default) - 150x150 | low_resolution - 306x306 | standard_resolution - 612x612
            template: '<a href="{{link}}"><img src={{image}} alt={{caption}}></a>' // 画像URL：{{image}} リンク：{{link}} キャプションテキスト{{caption}} いいね数：{{likes}} コメント数：{{comments}}
        });
        feed.run();
    </script>
    
	<?php if(is_front_page()): ?>
		<?php if(wp_is_mobile()): ?>
		<?php else: ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php wp_footer(); ?>
</body>
</html>