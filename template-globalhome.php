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
			<div class="sixcol-four eoi_slide" style="z-index:0;">
				<?php wooslider( array( 'slider_type' => 'posts', 'smoothheight' => 'true'), array( 'category' => 'early-adopter', 'layout' => 'text-bottom', 'overlay' => 'full', 'link_title' => 'true' ) ); ?>

				<?php // echo do_shortcode(‘[wooslider category="early-adopter" slider_type="posts" layout="text-bottom" overlay="full" thumbnails="default"]‘); ?>
			</div>
			<div class="sixcol-two last">
				<h1 class="column-right" style="font-size: 1.8em; font-weight: 500;">Get info about your new .ngo|.ong domain names</h1>
				<p>Sign up now to stay up-to-date on the .ngo|.ong launch, get useful news and tips for the NGO community. It's easy and free!</p>

				<div class="etrigue_homepage_signup">	
					<form name="etrReg" id="etrReg" class="home_etrigue_short_eoi" action="" method="post">
					<input type="hidden" name="espFormID" value="1" />
					<input placeholder="Organisation Name*" type="text" name="x_udf_marcom_company249" maxlength="100" size="25" value="" class="full_width" />
					<input placeholder="Email*" type="text" name="x_emailaddress" maxlength="250" size="25" value="" class="left_half" />
					<input placeholder="Full Name*" type="text" name="x_udf_full_name254" maxlength="100" size="25" value="" class="right_half"  />
					<div class="checkbox" style="display:block; margin-bottom:15px;"><input name="x_udf_featured_257" type="checkbox" value="yes" id="choice_16_1" tabindex="16" style="width: 6%; margin-bottom: 0;">
						<label class="normal_weight" style="font-size: .9em;line-height: 1em;">
							I agree to having my organization’s name featured on .ngo|.ong marketing materials.
						</label>
					</div>

					<input class="hidden" type="text" name="x_udf_marcom_contact_type245" maxlength="100" size="25" value="NGO Newsletter" />
					<input class="hidden" type="text" name="x_udf_marcom_tld246" maxlength="50" size="25" value="NGO" />
					<input class="hidden" type="text" name="x_udf_marcom_source247" maxlength="100" size="25" value="Homepage Short EOI Form" />

					<!--Additional_eTrigue_Fields-->
					<input type="button"  value="Submit" class=button onClick="etr_submit();" id="etrSubmit" />
					</form>
					<script type="text/javascript">
					var etr_sb=document.getElementById("etrSubmit");
					function etr_ls(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.src=a;c.type="text/javascript";b.appendChild(c);}
					function etr_submit(){var err=false,msg="The following errors were found:\n\n";
					if(etr_empty(document.etrReg.x_emailaddress.value)){err=true;msg+='-E-mail is Required.\n';}
					if(etr_empty(document.etrReg.x_emailaddress.value)||!etr_valid(document.etrReg.x_emailaddress.value)){err=true;msg+='-Email Address is Invalid.\n';}
					if(etr_empty(document.etrReg.x_udf_full_name254.value)){err=true;msg+='-Full Name is Required.\n';}
					if(etr_empty(document.etrReg.x_udf_marcom_company249.value)){err=true;msg+='-Marcom Company is Required.\n';}
					if(err==true){alert(msg);}else{var etrigueForm=new EtrigueForm(1209);etr_sb.disabled=true;etrigueFormSuccess=false;etrigueForm.submitClassic("etrReg",function(dat){if(dat.err){etr_sb.disabled=false;return;}etrigueFormSuccess=true;if(dat.thankYouPage){if(dat.repost){document.etrReg.action=dat.thankYouPage;document.etrReg.submit();}else{window.location=dat.thankYouPage;}}});}}
					function etr_trim(a){a=a.replace(/^\s+/,"");for(var b=a.length-1;b>=0;b--){if(/\S/.test(a.charAt(b))){a=a.substring(0,b+1);break}}return a;}function etr_empty(a){return a?(a=etr_trim(a),0===a.length):!0;}function etr_valid(a){var b=/^([a-zA-Z0-9]+[a-zA-Z0-9_\-\.]*\@([a-zA-Z0-9]+[a-zA-Z0-9\_-]*\.)+[a-zA-Z0-9]+)$/;return b.test(a)?!0:!1;}function etr_isint(a){return parseFloat(a)!=parseInt(a)||isNaN(a)?!1:!0;}function etr_ischkd(a){var i,b=document.getElementsByName(a);for(i=0;i<b.length;i++){if(b[i].checked){return true;}}}
					etr_ls("http://trk.etrigue.com/etrigueForm.js");
					</script>
				</div>

				<?php // gravity_form(8, false, false, false, '', true, 12); ?><!-- the gravity form version -->
			</div>
		</div>
	</div>
	<div id="future-ngo" class="col-full future-ngo">
		<div class="future-images">
			<a href="/discover/eoi/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured_ngos/join_those.png" height='60' width="170"></a>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured_ngos/second_harvest_web.png" height='60' width="127">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured_ngos/brac_web.png" height='60' width="99">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured_ngos/logo_rotary_web.png" height='60' width="60">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured_ngos/logo_malarianomore_web.png" height='60' width="107">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured_ngos/logo_worldvision_web.png" height='60' width="116">
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