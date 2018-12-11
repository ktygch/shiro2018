<?php
/**
 * Template Name: info_all */
?>

<?php get_header(); ?>

<?php
    $paged = (int) get_query_var('paged');
    $args = array(
        'posts_per_page' => 5,
        'paged' => $paged,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
    );
    $the_query = new WP_Query($args);
?>

<div id="archive" class="content wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 offset-sm-3">
                <h2 class="idx">
                    <span>お知らせ一覧</span>
                </h2>

                <?php if ( $the_query->have_posts()): ?>
                    <ul class="postlist">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
        <div class="row">
            <div class="col-12">
                <?php
                    if ($the_query->max_num_pages > 1) {
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'total' => $the_query->max_num_pages
                        ));
                    }
                ?>                
            </div>
        </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>