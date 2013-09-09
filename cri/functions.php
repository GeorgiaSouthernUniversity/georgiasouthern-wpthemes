<?php
/**
 * Child Theme Functions are loaded first before parent theme - see gsucollege/functions.php.
 */

function remove_homemenu() {
	// Unregister Home Menu Five - replaced with Division Links in SAEM Silver
	unregister_sidebar( 'home-menu-five' );
}

add_action( 'widgets_init' , 'remove_homemenu' , 11);

?>