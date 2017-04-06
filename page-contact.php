<?php 

/*
	Template Name: Contact Page

*/

?>

<?php get_header('non-front'); ?>
	
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<h1 id="contact-h1"><?php the_title(); ?></h1>
		<div class="contact-content">
			<?php the_content(); ?>
		</div>

	<?php endwhile; endif;?>

<?php get_footer(); ?>