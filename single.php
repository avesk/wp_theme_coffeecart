<?php get_header('non-front'); ?>

	<div id="wrapper-single">
        
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      	
      	<article class="single-post">

      		<h2 class="post-heading"><?php the_title(); ?></h2>

	      	<?php

		      	if(get_the_post_thumbnail()){

		      		the_post_thumbnail('large');

		      	} 

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

	      	<?php 
				the_content(); 
				// comments_template();
			?>

	    </article>

	  <?php endwhile; endif ?>

  <?php $wp_query = new WP_Query('posts_per_page=5'); ?>

  <aside class="sidebar">

    <h2>Recent Posts</h2>

    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
    	<ul>
	    <li><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></li>
	    </ul>
    <?php endwhile; endif ?>

  </aside>

</div>
</div>

<?php get_footer(); ?>