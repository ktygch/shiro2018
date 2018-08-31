<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <p>archive.php</p>
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
                                <h3 class="post-title">
                                    <span><?php the_title(); ?></span>
                                </h3>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <div class="center">
                    <p>
                        申し訳ございません。<br>該当する記事がございません。
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>