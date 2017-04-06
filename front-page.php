<?php get_header(); ?>

<div id="wrapper">

    <?php if( have_posts() ) : while( have_posts() ): the_post(); ?>

    	<div id="slogan"><?php the_content(); ?></div>

    	<!-- Code Block echos featured images to page -->
    	<?php

    		// returns an array of arrays containing image urls if the Dynamic Featured images
    		// plugin is on
	    	if( class_exists('Dynamic_Featured_Image') ) {
				$postid = get_the_ID();
				global $dynamic_featured_image;
				$featured_images = $dynamic_featured_image->get_featured_images($postid);


				//Loop through featured_images and echo the images wrapped in divs
				//out on the page, inside of a div container
				echo '<div class="front-page-featured-images-container">';
	    		foreach ($featured_images as $urlArray){

		    		echo '<div class="front-page-featured-image-wrapper">';
		    		echo '<img src="' . $urlArray['full'] . '" />';
		    		echo '</div>';

		    	}
		    	echo '</div>';
   			}

	   	?>
    <?php endwhile; endif; ?>

   

    <?php $wp_query = new WP_Query('posts_per_page=7'); ?>

  	<div class="front-blog-posts">
  	<article class="posts" >

	    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>

	    <a href="<?php the_permalink(); ?>">
	    <div class="post">
		    	<h4 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p class="excerpt"><?php echo strip_tags(get_the_excerpt()); ?></p>

				<?php 
					echo '<a href="' . get_the_permalink() . '">';

					if(get_the_post_thumbnail()){

						the_post_thumbnail('medium');
					}

					echo '</a>';

				?>

				<ul class="post-meta">
					<li class="author">
					 	<span class="wpt-avatar small">
					        <?php echo get_avatar(get_the_author_meta('ID'), 24); ?>
					    </span>
					    By <?php the_author_posts_link(); ?>				                   
					</li>
					<!-- Separating categories by a comman, rather than the default behavior
					of wrapping each category in an ul li -->
					<li class="cat">in <?php the_category(' ,'); ?></li>
					<li class="date"><?php the_time('F j, Y'); ?></li>
				</ul>
		</div>
		</a>
	    <?php endwhile; endif ?>

    </article>
	</div>

<?php get_footer(); ?>