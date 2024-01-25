<?php get_header(); ?>

<div id="main" class="site-main container">
    <div class="">
        <div class="block-title">
            <?php do_action('custom_yoast_breadcrumb'); ?>
        </div>

        <?php

        while (have_posts()) : the_post();

            the_content();

        endwhile;

        ?>
    </div>



</div>




<?php get_footer(); ?>