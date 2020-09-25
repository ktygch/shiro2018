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
    
    <script>
        jQuery(function($) {
            $(function(){
                $.ajax({
                    type: 'GET',
                    url: 'https://graph.facebook.com/v3.0/17841404462086514?fields=name%2Cmedia.limit(10)%7Bcaption%2Clike_count%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cthumbnail_url%2Cmedia_type%2Cusername%7D&access_token=EAAPnl7N3sfkBAHD03NSj3HEkZCL3kxlWxyA1LlhO9R8TNVKBW9uFyL7EWxZAKsq02CVziGCfXBr4V3BlFQNWRDJSYVOrhtjGcmxMJcjemfmBHa6Q5rqeL2VZA2xvIrujAZCWvEJNDXwORajq6JgA63b1tcL6bmi3D4VXoz0c7zULBoRPaVxO',
                    dataType: 'json',
                    success: function(json) {

                        var html = '';
                        var insta = json.media.data;
                        for (var i = 0; i < insta.length; i++) {
                        var media_type = insta[i].media_type;
                            if ( insta[i].media_type == "IMAGE" || insta[i].media_type == "CAROUSEL_ALBUM" ) {
                                html += '<li><a href="' + insta[i].permalink + '" target="_blank" rel="noopener noreferrer"><span class="square-content"  style="background-image: url(' + insta[i].media_url + ');"></span></a></li>';
                            } else if (media_type == "VIDEO" ) {
                                html += '<li><a href="' + insta[i].permalink + '" target="_blank" rel="noopener noreferrer"><span class="square-content"  style="background-image: url(' + insta[i].thumbnail_url + ');"></span></a></li>';
                                var media_type = '';
                            }       
                        }
                        $("#instafeed").append(html);			
                    },
                    error: function() {
                        //エラー時の処理
                    }
                });
            });
        });
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