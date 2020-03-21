<?php get_header(); ?>

<div id="singlePost" class="content wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <?php $thumbnail_id = get_post_thumbnail_id(); ?>
                        <?php $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' ); ?>
                        <?php list($src) = $eye_img; ?>
                        <?php if($eye_img): ?>
                            <div class="main_pic">
                                <div class="inner_img" style="background-image: url(<?php echo $src; ?>);"></div>
                            </div>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                        <div class="right">
                            <?php the_time('Y/n/j H:i') ; ?>
                        </div>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                    <?php /*comments_template();*/ ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>