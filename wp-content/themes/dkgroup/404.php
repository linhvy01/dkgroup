<?php get_header(); ?>

	<!-- Main Content -->
	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="articles">

					<article class="clearfix">

						<header>

							<h1><?php _e('Page not found', 'adaptive-framework'); ?></h1>

						</header>

						<hr>

						<p><?php _e('Oops, it seems you \'re looking for something that\'s not here. Please try again.', 'adaptive-framework'); ?></p>

						<div class="search-form-404">
							<?php get_search_form(); ?>
						</div> <!-- end search-form-404 -->
						

					</article>

				</div> <!-- end articles -->

			</div> <!-- end col-md-9 -->

		</div> <!-- end row -->

	</div> <!-- end container -->

<?php get_footer(); ?>