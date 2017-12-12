<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="single_post">
                        <div class="col-sm-12 col-md-6">
                            <?php $thumbnail_id = get_post_thumbnail_id(); ?>
                            <?php $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' ); ?>
                            <?php list($src) = $eye_img; ?>
                            <div class="main_pic">
                                <div class="inner_img" style="background-image: url(<?php echo $src; ?>);"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h3><?php the_title(); ?></h3>
                            <div class="right">
                                <?php the_time('Y/n/j H:i') ; ?>
                            </div>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php /*comments_template();*/ ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>