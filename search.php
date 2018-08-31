<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <p>search.php</p>
            <h2 class="idx">
                <?php the_search_query(); ?>の検索結果：<?php echo $wp_query->found_posts; ?>件
            </h2>
            <?php if(have_posts()): ?>
                <div>
                    <ul class="postlist">
                        <?php while(have_posts()): the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php
                                    $image_id = get_post_thumbnail_id();
                                    $image_url = wp_get_attachment_image_src($image_id, true);
                                    ?>
                                    <span class="itemimg" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
                                    <h3 class="post-title">
                                        <span><?php the_title(); ?></span>
                                    </h3>
                                    <?php /*echo mb_substr(get_the_excerpt(),0,150);*/ ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php else: ?>
                <div class="center">
                    <p>
                        申し訳ございません。<br>該当する記事がございません。
                    </p>
                </div>
            <?php endif; ?>
            <!-- #pager -->
            <div id="pager">
                <?php if($wp_query->max_num_pages > 1): ?>
                    <div id="prev">
                        <?php next_posts_link('PREV'); ?>
                    </div>
                    <div id="next">
                        <?php previous_posts_link('NEXT'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- /#pager -->
        </div>
    </div>
</div>

<?php get_footer(); ?>