<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options;

 woo_footer_top();
 	woo_footer_before();
?>
	<footer id="footer" class="col-full">

		<?php woo_footer_inside(); ?>

		<div id="copyright" class="col-left">
			<?php woo_footer_left(); ?>
		</div>

		<div id="credit" class="col-right">
			<?php woo_footer_right(); ?>
<!-- 			<ul class="bottom-nav-legal">
				<li><span ></span>
					<a class="icon-mail" href="<?php echo get_site_url(); ?>/contact/">Contact Us</a></li>
			</ul> -->
		</div>

	</footer>

	<?php woo_footer_after(); ?>

	</div><!-- /#inner-wrapper -->

</div><!-- /#wrapper -->

<div class="fix"></div><!--/.fix-->

<?php wp_footer(); ?>
<?php woo_foot(); ?>


<!-- placeholder for ie 9 and below -->
<script src="<?php echo get_stylesheet_directory_uri()?>/js/placeholder-script.js"></script>

</body>
</html>