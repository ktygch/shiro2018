<?php /*
	Template Name: page_default
*/ ?>
<?php get_header(); ?>
<p>archive.php</p>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if (have_posts()) : ?>
                <ul class="postlist">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, true);
                                ?>
                                <span class="itemimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                <h2 class="post-title">
                                    <span><?php the_title(); ?></span>
                                </h2>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>