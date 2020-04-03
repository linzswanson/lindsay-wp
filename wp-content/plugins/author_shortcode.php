<?php
/**
 * @version 1.0

Plugin Name: Lindsay's Plugin
Plugin URI:  http://lindsayswanson.com
Description: Created for Liventus
Author: Lindsay Murphy
Version: 1.0
Author URI: http://lindsayswanson.com
*/

// Add Shortcode
function display_author() {

	global $post;

	echo get_the_author_meta('display_name',  $post->post_author );

}

add_shortcode( 'author_displayname', 'display_author' );



?>
