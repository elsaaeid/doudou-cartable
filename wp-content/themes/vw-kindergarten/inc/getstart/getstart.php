<?php
//about theme info
add_action( 'admin_menu', 'vw_kindergarten_gettingstarted' );
function vw_kindergarten_gettingstarted() {
	add_theme_page( esc_html__('About VW Kindergarten', 'vw-kindergarten'), esc_html__('Theme Demo Import', 'vw-kindergarten'), 'edit_theme_options', 'vw_kindergarten_guide', 'vw_kindergarten_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_kindergarten_admin_theme_style() {
	wp_enqueue_style('vw-kindergarten-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('vw-kindergarten-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_kindergarten_admin_theme_style');

//guidline for about theme
function vw_kindergarten_mostrar_guide() { 
	//custom function about theme customizer
	$vw_kindergarten_return = add_query_arg( array()) ;
	$vw_kindergarten_theme = wp_get_theme( 'vw-kindergarten' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to VW Kindergarten', 'vw-kindergarten' ); ?> <span class="version"><?php esc_html_e( 'Version', 'vw-kindergarten' ); ?>: <?php echo esc_html($vw_kindergarten_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-kindergarten'); ?></p>
    </div>

    <div class="col-right coupen-section">
	    	<div class="logo-section">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
			</div>
			<div class="logo-right">			
				<div class="update-now">
					<h4><?php esc_html_e('Try Premium ','vw-kindergarten'); ?></h4>
					<h4><?php esc_html_e('VW Kindergarten Theme','vw-kindergarten'); ?></h4>
					<h4 class="disc-text"><?php esc_html_e('at 20% Discount','vw-kindergarten'); ?></h4>
					<h4><?php esc_html_e('Use Coupon','vw-kindergarten'); ?> ( <span><?php esc_html_e('vwpro20','vw-kindergarten'); ?></span> ) </h4> 
					<div class="info-link">
						<a href="<?php echo esc_url( VW_KINDERGARTEN_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-kindergarten' ); ?></a>
					</div>
				</div>
			</div>   
			<div class="logo-img">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
			</div>
   	</div>

    <div class="tab-sec">
    	<div class="tab">
		    <button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'vw-kindergarten' ); ?></button>
			<button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-kindergarten' ); ?></button>
			<button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-kindergarten' ); ?></button>
		    <button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'gutenberg_editor')"><?php  esc_html_e( 'Setup With Gutunberg Block', 'vw-kindergarten' ); ?></button>
			<button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'product_addons_editor')"><?php  esc_html_e( 'Woocommerce Product Addons', 'vw-kindergarten' ); ?></button>
			<button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-kindergarten' ); ?></button>
		  	<button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'vw-kindergarten' ); ?></button>
		  	<button class="tablinks" onclick="vw_kindergarten_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'vw-kindergarten' ); ?></button>
		</div>

		<?php 
			$vw_kindergarten_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_kindergarten_plugin_custom_css ='display: block';
			}
		?>

        <div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-kindergarten' ); ?></h3>
				<?php
				/* Get Started. */
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div>
		</div>


		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Kindergarten_Plugin_Activation_Settings::get_instance();
				$vw_kindergarten_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-kindergarten-recommended-plugins">
				    <div class="vw-kindergarten-action-list">
				        <?php if ($vw_kindergarten_actions): foreach ($vw_kindergarten_actions as $key => $vw_kindergarten_actionValue): ?>
				                <div class="vw-kindergarten-action" id="<?php echo esc_attr($vw_kindergarten_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_kindergarten_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_kindergarten_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_kindergarten_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-kindergarten'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_kindergarten_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-kindergarten' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('VW Kindergarten suits pre-schools, nursery, plat schools, daycare centers, infant and kids websites, preschool, babysitting, daycare, babysitting, kids growth program,Education, Preschool, Kindergarten, Childcare, Early Learning, kids art schools, kids hobby school, and kids store websites, Early Education, Montessori, Kids School, Learning Center, Playground. WordPress expert has crafted this theme and has provided with an elegant as well as sophisticated design that can serve as a multipurpose one. Minimal design is its USP as the entire focus of your audience is going to be on the main content published. With a retina-ready and responsive design, you can be assured that your website is going to look fantastic on smartphones s well as desktops and laptops. A user-friendly interface is made available for users of all skill levels. This beautiful free theme doesn’t compromise on quality and includes optimized codes. These will make your website work incredibly well as they result in a streamlined design that gives fast page load time. SEO-friendly codes also take care of the SEO requirements. You can expect the Call To Action Button (CTA) to work for better conversion rates of your website. With the Bootstrap framework giving you an easily customizable design, the CSS animations included will further enhance your website’s look. Developers have made this modern theme translation ready supporting multiple languages by including .pot files in it.','vw-kindergarten'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-kindergarten' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-kindergarten' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_KINDERGARTEN_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-kindergarten' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-kindergarten'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-kindergarten'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-kindergarten'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-kindergarten'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-kindergarten'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_KINDERGARTEN_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-kindergarten'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-kindergarten'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-kindergarten'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_KINDERGARTEN_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-kindergarten'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-kindergarten' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-kindergarten'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-kindergarten'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-kindergarten'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_about_section') ); ?>" target="_blank"><?php esc_html_e('About Section','vw-kindergarten'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-kindergarten'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-kindergarten'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-kindergarten'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-kindergarten'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-kindergarten'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-kindergarten'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-kindergarten'); ?></span><?php esc_html_e(' Go to ','vw-kindergarten'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-kindergarten'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-kindergarten'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-kindergarten'); ?></span><?php esc_html_e(' Go to ','vw-kindergarten'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-kindergarten'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-kindergarten'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','vw-kindergarten'); ?> <a class="doc-links" href="<?php echo esc_url( VW_KINDERGARTEN_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','vw-kindergarten'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Kindergarten_Plugin_Activation_Settings::get_instance();
			$vw_kindergarten_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-kindergarten-recommended-plugins">
				    <div class="vw-kindergarten-action-list">
				        <?php if ($vw_kindergarten_actions): foreach ($vw_kindergarten_actions as $key => $vw_kindergarten_actionValue): ?>
				                <div class="vw-kindergarten-action" id="<?php echo esc_attr($vw_kindergarten_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_kindergarten_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_kindergarten_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_kindergarten_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-kindergarten'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_kindergarten_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-kindergarten' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-kindergarten'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon.','vw-kindergarten'); ?></b></p>
	              	<div class="vw-kindergarten-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-kindergarten'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
				    <p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Sections >> Publish.','vw-kindergarten'); ?></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
	            </div>

              	<div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-kindergarten' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-kindergarten'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-kindergarten'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-kindergarten'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-kindergarten'); ?></a>
							</div>
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-kindergarten'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-kindergarten'); ?></a>
							</div> 
						</div>
					</div>
				</div>	
					
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Kindergarten_Plugin_Activation_Settings::get_instance();
			$vw_kindergarten_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-kindergarten-recommended-plugins">
				    <div class="vw-kindergarten-action-list">
				        <?php if ($vw_kindergarten_actions): foreach ($vw_kindergarten_actions as $key => $vw_kindergarten_actionValue): ?>
				                <div class="vw-kindergarten-action" id="<?php echo esc_attr($vw_kindergarten_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_kindergarten_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_kindergarten_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_kindergarten_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-kindergarten' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-kindergarten-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-kindergarten'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-kindergarten' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-kindergarten'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-kindergarten'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-kindergarten'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-kindergarten'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_kindergarten_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-kindergarten'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-kindergarten'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = VW_Kindergarten_Plugin_Activation_Woo_Products::get_instance();
				$vw_kindergarten_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-kindergarten-recommended-plugins">
					    <div class="vw-kindergarten-action-list">
					        <?php if ($vw_kindergarten_actions): foreach ($vw_kindergarten_actions as $key => $vw_kindergarten_actionValue): ?>
					                <div class="vw-kindergarten-action" id="<?php echo esc_attr($vw_kindergarten_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($vw_kindergarten_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($vw_kindergarten_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($vw_kindergarten_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-kindergarten' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-kindergarten-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','vw-kindergarten'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','vw-kindergarten'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','vw-kindergarten'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','vw-kindergarten'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','vw-kindergarten'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','vw-kindergarten'); ?></span></b></p>
	              	<div class="vw-kindergarten-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-kindergarten'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','vw-kindergarten'); ?></span></p>
			    </div>
			<?php } ?>
		</div> 

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-kindergarten' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Are you willing to have a colorful and delightful website for your kindergarten? This Kindergarten WordPress Theme will be an ideal choice for you. You can utilize its design to create websites for pre-schools, day-care centers, play-schools, and kids activity centers, kids toy stores and apparel stores, and kind of kids-related websites. With a super easy and user-friendly layout, this theme also has a visual appeal that not only makes it look incredible but also catches the eyeballs of parents and guardians who are looking for playschools for their children. WP Kindergarten WordPress Theme comes with a sticky header and this really facilitates easy navigation for users as they don’t have to scroll up every time they need to go to a different section or page. With an impressive slider projecting cute images and useful Call To Action (CTA) buttons, there is no chance that you will miss the target audience’s attention','vw-kindergarten'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_KINDERGARTEN_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-kindergarten'); ?></a>
					<a href="<?php echo esc_url( VW_KINDERGARTEN_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-kindergarten'); ?></a>
					<a href="<?php echo esc_url( VW_KINDERGARTEN_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-kindergarten'); ?></a>
					<a href="<?php echo esc_url( VW_KINDERGARTEN_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'vw-kindergarten'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-kindergarten' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-kindergarten'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-kindergarten'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-kindergarten'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-kindergarten'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-kindergarten'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-kindergarten'); ?></td>
								<td class="table-img"><?php esc_html_e('17', 'vw-kindergarten'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-kindergarten'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-kindergarten'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-kindergarten'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-kindergarten'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-kindergarten'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-kindergarten'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-kindergarten'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_KINDERGARTEN_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-kindergarten'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'vw-kindergarten' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','vw-kindergarten'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'vw-kindergarten' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'vw-kindergarten'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'vw-kindergarten'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'vw-kindergarten'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'vw-kindergarten'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'vw-kindergarten'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( VW_KINDERGARTEN_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'vw-kindergarten'); ?></a>
					<a href="<?php echo esc_url( VW_KINDERGARTEN_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'vw-kindergarten'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>

<?php } ?>