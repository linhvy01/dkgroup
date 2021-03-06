<?php get_header(); ?>

<!-- Main Content -->
<div class="container">

	<div class="row">

		<div class="col-md-9 article-container-fix">

			<div class="articles">

				<?php if(have_posts()) : ?>

					<div class="additional-content">

						<h5><?php single_tag_title(__('Tags archives for: ', 'adaptive-framework'), true); ?></h5>
						<hr class="fancy-hr">					
						
					</div> <!-- end additional-content -->

				<?php while(have_posts()) : the_post(); ?>

					<?php get_template_part('content', get_post_format()); ?>				

				<?php endwhile; else : ?>

					<h1 class="not-found"><?php _e('No post were found!', 'adaptive-framework'); ?></h1>

				<?php endif; ?>
					
				<div class="articles-nav clearfix">
					
					<p class="articles-nav-prev"><?php next_posts_link(__('&larr;Older Posts', 'adaptive-framework')); ?></p>
					<p class="articles-nav-next"><?php previous_posts_link(__('Newer Posts &rarr;', 'adaptive-framework')); ?></p>

				</div>	<!-- end articles-nav -->

			</div> <!-- end articles -->

		</div> <!-- end col-md-9 -->

		<aside class="col-md-3 main-sidebar">
			
			<?php get_sidebar(); ?>					

		</aside> <!-- end col-md-3 -->

	</div> <!-- end row -->

</div> <!-- end container -->

<?php get_footer(); ?>