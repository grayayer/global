<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
<title><?php woo_title(); ?></title>
<?php woo_meta(); ?>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
<?php wp_head(); ?>
<?php woo_head(); ?>

<!-- etrigue tracking code -->
<script type="text/javascript">
   var _etgq = _etgq || [];
   _etgq.push(['_etg_o',1209]);
   (function() {
       var etgs = document.createElement('script'); etgs.type = 'text/javascript'; etgs.async = true;
       etgs.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'trk.etrigue.com/etriguelive.js';
       var etst = document.getElementsByTagName('script')[0]; etst.parentNode.insertBefore(etgs, etst);
   })();
</script>


</head>
<body <?php body_class(); ?>>
<?php woo_top(); ?>
<div id="wrapper">

	<div id="inner-wrapper">

	<?php woo_header_before(); ?>

	<header id="header" class="col-full">

		<?php woo_header_inside(); ?>

	</header>
	<?php woo_header_after(); ?>