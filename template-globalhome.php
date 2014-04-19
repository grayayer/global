<?php
/**
 * Template Name: GlobalNGO Home
 *
 * The contact form page template displays the a
 * simple contact form in your website's content area.
 *
 * @package WooFramework
 * @subpackage Template
 */

get_header();
?>
       
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
	<div id="home_cta">
		<div class="col-full">
			<div class="fivecol-three">
				<h1>Express interest in getting your .ngo|.ong name now</h1>
				<p>Sign up now and stay up-to-date on the latest news of the .ngo|.ong launch and let us know your interest in reserving a name.</p>
			</div>
			<div class="fivecol-two last">
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
			</div>
		</div>
	</div>

    <div id="content" class="col-full">
    
    	<div id="main-sidebar-container">    

            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            <section id="main">                     
<?php
	woo_loop_before();
	
	if (have_posts()) { $count = 0;
		while (have_posts()) { the_post(); $count++;
			woo_get_template_part( 'content', 'page' ); // Get the page content template file, contextually.
		}
	}
	
	woo_loop_after();
?>     
            </section><!-- /#main -->
            <?php woo_main_after(); ?>
    
            <?php get_sidebar(); ?>

		</div><!-- /#main-sidebar-container -->         

		<?php get_sidebar( 'alt' ); ?>

    </div><!-- /#content -->
	<?php woo_content_after(); ?>

<?php get_footer(); ?>