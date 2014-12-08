<?php

//Allow SVG through WordPress Media Uploader
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

 
// Search box in primary navigation
add_action( 'woo_nav_inside', 'custom_nav_searchform', 10 );
 
function custom_nav_searchform () {
    echo '<div id="nav-search" class="nav-search fr">' . "
";
    get_template_part( 'search', 'form' );
    echo '</div><!--/#nav-search .nav-search fr-->' . "
";
}


/* excludes the early adopters posts from the blog
function exclude_early_adopters($query) {
if ( $query->is_home() ) {
$query->set('cat', '-248'); //include the id of the cateogry here, that's all you have to modify.
}
return $query;
}
add_filter('pre_get_posts', 'exclude_early_adopters');
*/

//Include SVGeezy
function my_scripts_method() {
	wp_enqueue_script( 'svgeezy-script', get_stylesheet_directory_uri() . '/js/svgeezy.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'svgeezy-call', get_stylesheet_directory_uri() . '/js/run-svgeezy.js', array(), 11, 'false');
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

/* custom excerpt length
function custom_excerpt_length( $length ) {
return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
*/


?>