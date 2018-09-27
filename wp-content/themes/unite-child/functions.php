<?php 
	add_action( 'wp_enqueue_scripts', 'unite_child_enqueue_styles' );
	function unite_child_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
	} 
 ?>
