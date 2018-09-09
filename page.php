<?php /*
	Template Name: page_default
*/ ?>
<?php get_header(); ?>

<div id="pagePost" class="content wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-9 offset-sm-1">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <h3 class="idx"><span><?php the_title(); ?></span></h3>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>