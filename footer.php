        </div><?php /* #main */ ?>
        
        <footer>
            <div class="bottom">
                <p class="margin0">こどもの城児童合唱団・混声合唱団</p>
                <address>© 2017 kodomonoshiro-uta.com</address>
            </div>
        </footer>

    </div><?php /*#wrapper*/ ?>

	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/bs/bootstrap.min.js"></script>
	
    <script src="<?php bloginfo('template_directory'); ?>/js/min/default.js?<?php echo $timestamp; ?>"></script>
	
	<?php if(is_front_page()): ?>
		<?php if(wp_is_mobile()): ?>
		<?php else: ?>
		<?php endif; ?>
	<?php endif; ?>
</body>
</html>