<?php 

/****************************************************************/
/* Template for link post */
/****************************************************************/


 ?>
<article <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">

	<header>

		<span class="post-format-url"><i class="fas fa-link"></i></span>
		<p class="article-meta-categories"><a href=""><?php the_category('&nbsp;&nbsp;/&nbsp;&nbsp;'); ?></a></p>
		<p class="article-meta-extra"><?php the_date(get_option('date_format')); ?> at <?php the_time(get_option('time_format')); ?> by <?php the_author_posts_link(); ?></p>

	</header>
	
	<div class="url-container">
		
		<p><?php the_title(); ?></p>
		<span><?php the_content(); ?></span>
		
	</div> <!-- end url-container -->	

</article>

<hr class="fancy-hr">	