<?php 
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
get_header(); ?>
<?php get_sidebar(); ?>
<div class="siteContent" role="main">
<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;
	else :
		get_template_part( 'content', 'none' );
	endif;
?>
<div class="postsNav">
	<?php posts_nav_link(); ?> 
</div>
</div>
<?php get_footer(); ?>
