<?php get_header('non-front'); ?>

   <div class="default-page-content">

	   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<h1 class="default-page-header"><?php the_title(); ?></h1>

		<div class="default-page-inner-content">

	    	<div class="default-page-the_content_wrapper"><?php the_content(); ?></div>

		    <div class="default-page-img-container">
		        <?php 

					if(get_the_post_thumbnail()){

						the_post_thumbnail('medium');
					}

				?>
			</div>
		</div>
	</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>