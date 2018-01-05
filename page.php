<?php /*
	Template Name: page_default
*/ ?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <p>page.php</p>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_content(); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>