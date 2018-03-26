<?php 
/*
Plugin Name: Adaptive Shortcodes
Plugin URI: http://www.ngoisao.net
Description: An awesome plugin for displaying shorcodes
Author: Adi Purdila
Author URI: http://www.adipurdila.com
Text Domain: shortcodes
Domain Path: /languages/
Version: 1.0
*/

add_shortcode('button', 'button');

function button($atts, $content = null) {
	extract(shortcode_atts(
		array(
			'color' => 'blue',
			'to'    => ''
		), $atts));

	return '<a href="'.$to.'" class="button '.$color.'">'.$content.'</a>';
}

add_shortcode('video_embed', 'video_embed');

function video_embed($atts) {
	extract(shortcode_atts(
		array(
			'src' => '',
		), $atts));	

	return '<div class="video-container">'.
	'<iframe width="560" height="315" src="'.$src.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'.
	'</div>';
	;
}

 ?>