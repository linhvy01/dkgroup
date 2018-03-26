<?php 
/****************************************************************/
/* Widget that displays a single 260x120px ad block */
/****************************************************************/
class Adaptive_Ad_260_Widget extends WP_Widget {
	// Widget init
	public function __construct() {
		parent::__construct(
			'adaptive_ad_260_w',
			'Custom Widget: 260x120 Ad',
			array('description' => __('Displays a single 260x120 ad block', 'adaptive-framework'))
		);
	}

	// Output the widget options in the back-end
	public function form($instance) {
		$defaults = array(
			'title' => __('Ad 260x120', 'adaptive-framework'),
			'ad_img' => IMAGES . '/icons/pic3.jpg',
			'ad_link' => 'http://ngoisao.net'
		);

		$instance = wp_parse_args((array) $instance, $defaults);

		?>

		<!-- The Title -->
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>"><?php _e('Title', 'adaptive-framework'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" class="widefat" value="<?php echo esc_attr($instance['title']); ?>">
		</p>

		<!-- The Ad Image -->
		<p>
			<label for="<?php echo $this->get_field_id('ad_img') ?>"><?php _e('Ad Image', 'adaptive-framework'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id('ad_img') ?>" name="<?php echo $this->get_field_name('ad_img') ?>" class="widefat" value="<?php echo esc_attr($instance['ad_img']); ?>">
		</p>

		<!-- The Ad Link -->
		<p>
			<label for="<?php echo $this->get_field_id('ad_link') ?>"><?php _e('Ad Link', 'adaptive-framework'); ?></label>
			<input type="text" id="<?php echo $this->get_field_id('ad_link') ?>" name="<?php echo $this->get_field_name('ad_link') ?>" class="widefat" value="<?php echo esc_attr($instance['ad_link']); ?>">
		</p>	

		<?php			
	}

	// Process widget options for saving
	public function update($new_instance, $old_instance) {
		$instance = $old_instance;

		// Title
		$instance['title'] = strip_tags($new_instance['title']);

		// The Ad
		$instance['ad_img'] = $new_instance['ad_img'];
		$instance['ad_link'] = $new_instance['ad_link'];

		return $instance;
	}

	// Display the widget on the page
	public function widget($args, $instance) {
		extract($args);

		$title = apply_filters('widget-title', $instance['title']);

		$ad_img = $instance['ad_img'];
		$ad_link = $instance['ad_link'];

		echo $before_widget;

		if ($title) {
			echo $before_title . $title . $after_title;
		}

		echo '<ul class="ad-260">';

		if($ad_img) : ?>

			<li>
				<figure class="ad-block">
					<a href="<?php echo $ad_link; ?>"><img src="<?php echo $ad_img ?>" alt=""></a>
				</figure>
			</li>

		<?php endif;

		echo '</ul>';

		echo $after_widget;
	}
}

register_widget('Adaptive_Ad_260_Widget');

 ?>