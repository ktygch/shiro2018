<?php /*
	Template Name: page_recruit
*/ ?>
<?php get_header(); ?>

<div id="pageRecruit" class="content wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 offset-sm-3">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <h2 class="idx"><span><?php the_title(); ?></span></h2>
                        <div id="pgCntnt">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>