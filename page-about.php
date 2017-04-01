<?php
/*

	Template Name: About Page

*/

?>

<?php get_header('non-front'); ?>

   <div class="about-page-content">

	   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<h1 class="about-page-header"><?php the_title(); ?></h1>

		<div class="about-page-inner-content">

	    	<div class="about-page-img-container">
		        <?php 

					if(get_the_post_thumbnail()){

						the_post_thumbnail('medium');
					}

				?>
			</div>
			<div class="about-page-the_content_wrapper"><?php the_content(); ?></div>

		</div>
	</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>