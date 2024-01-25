<?php get_header(); ?>

<div id="main" class="site-main">

	<h1><?php the_archive_title(); ?></h1>
	
	<?php 
	    
	    if ( have_posts() ) :

	        while ( have_posts() ) : the_post();

	            get_template_part( 'templates/content', get_post_format() );

	        endwhile;

	        the_posts_pagination();

	    else :

	        get_template_part( 'content', 'none' );

	    endif; 

	?>

</div>

<?php get_footer(); ?>