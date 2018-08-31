<?php get_header(); ?>
	<div class="container">
       
        <div class="row toppage_info">
           
            <div class="col-xs-12">
                <div class="col-xs-12 col-sm-6 col-sm-push-6">
                    <?php echo do_shortcode('[eo_fullcalendar]'); ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                    <?php get_sidebar(); ?>
                </div>
            </div>
            
        </div>
        
        <div class="row">
           
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 wow fadeIn" data-wow-duration=".6s" data-wow-delay=".5s">
                <h2 class="idx">お知らせ</h2>
                <ul class="toplist">
                    <?php $posts = get_posts(array('posts_pre_page'=>5,'cat'=>5)); ?>
                    <?php foreach($posts as $post): ?>
                        <?php setup_postdata($post); ?>
                            <li>
                                <?php setup_postdata($post); ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php /*
                                    <?php
                                        $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, true);
                                    ?>
                                    <span class="thumbimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                    */ ?>
                                    <div class="list_txt">
                                        <h3><?php the_title(); ?></h3>
                                        <p>
                                            <span class="date"><?php the_date('Y.n.d'); ?></span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
    </div>
    
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-xs-12">
                <h2 class="idx">活動のようす</h2>
                <div id="instafeed">
                    
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="container">
        
        <div class="row recruitment">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

                <h2 class="idx">団員募集中</h2>
                <p class="f12">こどもの城合唱団では、2018年4月からの新団員の募集をしております。</p>
                <ul class="list-inline">
                    <li>
                        <a href="" class="btn btn-success btn-block">
                            小学校1～4年生
                        </a>
                    </li>
                    <li>
                        <a href="" class="btn btn-success btn-md btn-block">３〜５歳児</a>
                    </li>
                    <li>
                        <a href="" class="btn btn-success btn-block">
                            障がいを持つ子どもたち
                        </a>
                    </li>
                </ul>

            </div>          
        </div>
        
    </div>
    
<?php get_sidebar(); ?>

<?php get_footer(); ?>