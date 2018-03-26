<?php 

/*
	Template Name: Contact Page
 */

 ?>

<?php 

echo 'sadasdsadsad';



 ?>

<?php get_header(); ?>

	<!-- Main Content -->
	<div class="container">

		<div class="row">

			<div class="col-md-9">

				<div class="articles">

					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<article class="clearfix">

						<header>

							<h1><?php the_title(); ?></h1>
							<?php if (current_user_can('edit_post', $post->ID)) {
								edit_post_link(__('Edit this', 'adaptive-framework'), '<p class="article-meta-extra">', '</p>');
							} ?>

						</header>

						<hr class="image-replacement">

						<?php the_content(); ?>
							
						<hr>					

					</article>

					
					<?php endwhile; else: ?>

					<article>
						
						<h1><?php _e('No posts were found!', 'adaptive-framework'); ?></h1>

					</article>

				<?php endif; ?>

				</div> <!-- end articles -->

				<div class="comments-area" id="comments">
					
					<?php comments_template('', true); ?>

				</div> <!-- end comments-area -->

			</div> <!-- end col-md-9 -->

			<aside class="col-md-3 main-sidebar">
				
				<?php get_sidebar(); ?>						

			</aside> <!-- end col-md-3 -->

		</div> <!-- end row -->

	</div> <!-- end container -->

<?php get_footer(); ?>