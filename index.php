<?php get_header(); ?>

<div id="wrapper">
   
    <p id="hours">
      Hours: Mon - Fri 10am - 5pm
    </p>

    <p id="slogan"><i>Consciousness café proudly serving
      Capulin traditionally handcrafted 
      coffee in Nelson BC</i>
    </p>

    <?php $wp_query = new WP_Query('posts_per_page=7'); ?>

  	<div class="front-blog-posts">
  	<article class="posts" >

	    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
	    <div class="post">
		    	<h4 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?php echo strip_tags(get_the_excerpt()); ?></p>

				<?php 

					if(get_the_post_thumbnail()){

						the_post_thumbnail('medium');
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
		</div>
	    <?php endwhile; endif ?>

    </article>
	</div>

<?php get_footer(); ?>