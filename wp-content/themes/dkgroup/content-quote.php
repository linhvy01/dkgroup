<?php 

/****************************************************************/
/* Template for quote post */
/****************************************************************/


 ?>
<article <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">

	<header>

		<span class="post-format-quote"><i class="fas fa-quote-left"></i></span>
		<p class="article-meta-categories"><a href=""><?php the_category('&nbsp;&nbsp;/&nbsp;&nbsp;'); ?></a></p>
		<p class="article-meta-extra"><?php the_date(get_option('date_format')); ?> at <?php the_time(get_option('time_format')); ?> by <?php the_author_posts_link(); ?></p>

	</header>
	
	<div class="quote-container">

		<?php the_content(); ?>
		
	</div> <!-- end quote-container -->	

</article>

<hr class="fancy-hr">	