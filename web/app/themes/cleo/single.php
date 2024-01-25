<?php get_header(); ?>

<div id="main" class="site-main">

	<?php the_post_thumbnail(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
    
</div>

<?php get_footer(); ?>