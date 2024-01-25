<?php get_header(); ?>

<div id="main" class="site-main">

    <h1><?php the_title(); ?></h1>

    <?php  do_action('custom_yoast_breadcrumb'); ?>

    <?php 
        
        if ( have_posts() ) :

            while ( have_posts() ) : the_post();

                get_template_part( 'content', $format = get_post_format() );
                
            endwhile;

            the_posts_pagination();

        else :

            get_template_part( 'content', 'none' );

        endif; 

    ?>

</div>

<?php get_footer(); ?>