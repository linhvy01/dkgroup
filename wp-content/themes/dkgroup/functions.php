<?php 

/****************************************************************/
/* Define Constants */
/****************************************************************/
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/images');


/****************************************************************/
/* Menus */
/****************************************************************/
function register_my_menus() {
	register_nav_menus(array(
		'top-menu' => __('Top Menu', 'adaptive-framework'),
		'main-menu' => __('Main Menu', 'adaptive-framework')
	));
}
add_action('init', 'register_my_menus');

/****************************************************************/
/* Register Sidebars */
/****************************************************************/
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => __('Main Sidebar', 'adaptive-framework'),
		'id'   => 'main-sidebar',
		'description' => __('The main sidebar area', 'adaptive-framework'),
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' => '</div> <!-- end sidebar-widget --!>',
		'before_title' => '<h4>',
		'after_title'  => '</h4>'
	));

	register_sidebar(array(
		'name' => __('Left Footer', 'adaptive-framework'),
		'id'   => 'left-footer',
		'description' => __('The left footer area', 'adaptive-framework'),
		'before_widget' => '<div class="footer-sidebar-widget col-md-3">',
		'after_widget' => '</div> <!-- end footer-sidebar-widget --!>',
		'before_title' => '<h4>',
		'after_title'  => '</h4>'
	));	

	register_sidebar(array(
		'name' => __('Right Footer', 'adaptive-framework'),
		'id'   => 'right-footer',
		'description' => __('The right footer area', 'adaptive-framework'),
		'before_widget' => '<div class="footer-sidebar-widget col-md-6">',
		'after_widget' => '</div> <!-- end footer-sidebar-widget --!>',
		'before_title' => '<h4>',
		'after_title'  => '</h4>'
	));		
}

/****************************************************************/
/* Add Theme Support For Post Thumbnails */
/****************************************************************/
if(function_exists('add_theme_support')) {
	add_theme_support('post-formats', array('link', 'quote', 'gallery'));

	add_theme_support('post-thumbnails', array('post'));
}

/****************************************************************/
/* Function to display comments */
/****************************************************************/
function adaptive_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;

	if (get_comment_type() == 'pingback' || get_comment_type() == 'trackback') : ?>

		<li class="pingback" id="comment-<?php comment_ID(); ?>">
			<article <?php comment_class('clearfix'); ?>>
				<header>
					<h5><?php _e('Pingback:', 'adaptive-framework') ?></h5>
					<p><?php edit_comment_link(); ?></p>
				</header>

				<p><?php comment_author_link(); ?></p>


			</article>
		</li>	

<?php elseif (get_comment_type() == 'comment') : ?>

	<li id="comment-<?php comment_ID(); ?>">
		<article class="<?php comment_class('clearfix'); ?>">
			<header>
				<h5><?php comment_author_link(); ?></h5>
				<p><span>on <?php comment_date(); ?> at <?php comment_time(); ?> -</span><?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max-depth' => $args['max-depth']))); ?></p>
			</header>

			<figure class="comment-avatar clearfix">
				<?php 
					$avatar_size = 80;
					if($comment->comment_parent != 0) {
						$avatar_size = 64;
					}

					echo get_avatar($comment, $avatar_size);

				 ?>
			</figure>
			
			<?php if($comment->comment_approved = '0') : ?>

				<p class="awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'adapative-framework'); ?></p>
			
			<?php endif; ?>

			<?php comment_text(); ?>


		</article>

<?php endif;
}

 ?>

<?php 

/****************************************************************/
/* Custom Comments Form */
/****************************************************************/
function adaptive_custom_comment_form($defaults) {
	$defaults['comment_notes_before'] = '';
	$defaults['id_form'] = 'comment-form';
	$defaults['comment_field'] = '<p><textarea name="comment" id="comment" cols="30" rows="10"></textarea></p>';
	return $defaults;
}
add_filter('comment_form_defaults', 'adaptive_custom_comment_form');

function adaptive_custom_comment_fields() {
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = ($req ? "aria_required='true'" : ' ');

	$fields = array(
		'author' => '<p>' .
					'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '"'. $aria_req  .'>'.
					'<label for="author">'. __('Name', 'adaptive-framework'). ' '. ($req ? '*' : '') .'</label>'.
					'</p>',

		'email' => '<p>' .
					'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '"'. $aria_req  .'>'.
					'<label for="email">'. __('Email', 'adaptive-framework'). ' '. ($req ? '*' : '') .'</label>'.
					'</p>',

		'url' => '<p>' .
					'<input type="text" id="url" name="url" value="' . esc_attr($commenter['comment_author_url']) . '" >'.
					'<label for="url">'. __('Website', 'adaptive-framework') . '</label>'.
					'</p>',					

	);

	return $fields;
}

add_filter('comment_form_default_fields', 'adaptive_custom_comment_fields');

/****************************************************************/
/* Load Custom Widgets */
/****************************************************************/

require_once 'functions/widget-ad-260.php';

 ?>