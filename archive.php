<?php get_header(); ?>

<?php
    $category = get_the_category();
    $cat_id   = $category[0]->cat_ID;
    $cat_name = $category[0]->cat_name;
    $cat_slug = $category[0]->category_nicename;
?>

<div id="archive" class="content wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 offset-sm-3">
                <h2 class="idx">
                    <span><?php echo $cat_name; ?></span>
                </h2>
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
            <?php get_template_part('pager'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>