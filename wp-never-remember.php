<?php
/**
 * Plugin name: WP Never Remember
 * Author: Julien Maury
 * Author URI: https://www.julien-maury.dev
 * Version: 0.1
 * Description: I don't encourage the use of this plugin. I say I prefer this way. Nothing more. Maybe I'm wrong maybe I'm not. Use it "as is" with caution :)
 */

if ( ! function_exists( 'add_action' ) ) {
	die('~(|)~');
}

add_action( 'login_form', function (){
	ob_start();
}, 999 );

add_action( 'login_footer', function() {
	echo preg_replace( '#<p class="forgetmenot">.+</p>#', '', ob_get_clean() );
} );
