<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $vw_kindergarten_demo_import_completed = get_option('vw_kindergarten_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($vw_kindergarten_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-kindergarten') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'vw-kindergarten') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {

            // Check if Contact Form 7 is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
              // Install the plugin if it doesn't exist
              $plugin_slug = 'woocommerce';
              $plugin_file = 'woocommerce/woocommerce.php';

              // Check if plugin is installed
              $installed_plugins = get_plugins();
              if (!isset($installed_plugins[$plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $upgrader = new Plugin_Upgrader();
                  $upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($plugin_file);
            }

            // ------- Create Nav Menu --------
            $vw_kindergarten_menuname = 'Main Menus';
            $vw_kindergarten_bpmenulocation = 'primary';
            $vw_kindergarten_menu_exists = wp_get_nav_menu_object($vw_kindergarten_menuname);

            if (!$vw_kindergarten_menu_exists) {
                $vw_kindergarten_menu_id = wp_create_nav_menu($vw_kindergarten_menuname);

                // Create Home Page
                $vw_kindergarten_home_title = 'Home';
                $vw_kindergarten_home = array(
                    'post_type' => 'page',
                    'post_title' => $vw_kindergarten_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $vw_kindergarten_home_id = wp_insert_post($vw_kindergarten_home);
                // Assign Home Page Template
                add_post_meta($vw_kindergarten_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $vw_kindergarten_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($vw_kindergarten_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'vw-kindergarten'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_kindergarten_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $vw_kindergarten_pages_title = 'Pages';
                $vw_kindergarten_pages_content = '
                <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $vw_kindergarten_pages = array(
                    'post_type' => 'page',
                    'post_title' => $vw_kindergarten_pages_title,
                    'post_content' => $vw_kindergarten_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $vw_kindergarten_pages_id = wp_insert_post($vw_kindergarten_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($vw_kindergarten_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'vw-kindergarten'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_kindergarten_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $vw_kindergarten_about_title = 'About Us';
                $vw_kindergarten_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $vw_kindergarten_about = array(
                    'post_type' => 'page',
                    'post_title' => $vw_kindergarten_about_title,
                    'post_content' => $vw_kindergarten_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $vw_kindergarten_about_id = wp_insert_post($vw_kindergarten_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($vw_kindergarten_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'vw-kindergarten'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_kindergarten_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($vw_kindergarten_bpmenulocation)) {
                    $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($locations)) {
                        $locations = array();
                    }
                    $locations[$vw_kindergarten_bpmenulocation] = $vw_kindergarten_menu_id;
                    set_theme_mod('nav_menu_locations', $locations);
                }

        }


            // Set the demo import completion flag
    		update_option('vw_kindergarten_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-kindergarten') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'vw-kindergarten') . '</a></span>';
            //end


            // Top Bar //

            set_theme_mod( 'vw_kindergarten_phone_number', '9876543210' );
            set_theme_mod( 'vw_kindergarten_email_address', 'example@gmail.com' );
            set_theme_mod( 'vw_kindergarten_search_icon', 'fas fa-search' );
            set_theme_mod( 'vw_kindergarten_search_close_icon', 'fa fa-window-close0' );
            set_theme_mod( 'vw_kindergarten_cart_icon', 'fas fa-shopping-basket' );
          


            // slider section start //
            set_theme_mod( 'vw_kindergarten_slider_button_text', 'Discover More' );
            set_theme_mod( 'vw_kindergarten_slider_small_title', 'Welcome To ' );
            set_theme_mod( 'vw_kindergarten_topbar_btn_link', 'www.example-info.com' );

            for($vw_kindergarten_i=1;$vw_kindergarten_i<=4;$vw_kindergarten_i++){
               $vw_kindergarten_slider_title = 'PLAY & LEARN HOW TO CREATE NEW THINGS';
               $vw_kindergarten_slider_content = 'Get your kids exicited about discovering somethings new by disgusing the learning activities as fun time.';
                  // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $vw_kindergarten_slider_title ),
               'post_content'  => $vw_kindergarten_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $vw_kindergarten_post_id = wp_insert_post( $my_post );

               if ($vw_kindergarten_post_id) {
                 // Set the theme mod for the slider page
                 set_theme_mod('vw_kindergarten_slider_page' . $vw_kindergarten_i, $vw_kindergarten_post_id);

                  $vw_kindergarten_image_url = get_template_directory_uri().'/inc/block-patterns/images/slider'.$vw_kindergarten_i.'.png';

                $vw_kindergarten_image_id = media_sideload_image($vw_kindergarten_image_url, $vw_kindergarten_post_id, null, 'id');

                    if (!is_wp_error($vw_kindergarten_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($vw_kindergarten_post_id, $vw_kindergarten_image_id);
                    }
                }
            }

            // about page

            set_theme_mod( 'vw_kindergarten_section_title', 'About Us' );
            set_theme_mod( 'vw_kindergarten_image_text', 'Trusted by 5489+ ' );

            $vw_kindergarten_banner_title = 'WELCOME TO KINDERGARTEN!';
            $vw_kindergarten_banner_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam… Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a […]';
                  // Create post object
                // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $vw_kindergarten_banner_title ),
            'post_content'  => $vw_kindergarten_banner_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            );

            // Insert the post into the database
            $vw_kindergarten_post_id = wp_insert_post( $my_post );

            if ($vw_kindergarten_post_id) {
                // Set the theme mod for the slider page
            set_theme_mod('vw_kindergarten_about_page', $vw_kindergarten_post_id);

            $vw_kindergarten_image_url = get_template_directory_uri().'/inc/block-patterns/images/pencil.png';

            $vw_kindergarten_image_id = media_sideload_image($vw_kindergarten_image_url, $vw_kindergarten_post_id, null, 'id');

                if (!is_wp_error($vw_kindergarten_image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($vw_kindergarten_post_id, $vw_kindergarten_image_id);
                }
            }

            
            //Copyright Text
            set_theme_mod( 'vw_kindergarten_footer_text', 'By VWThemes' );

        }
    ?>

	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for VW Kindergarten','vw-kindergarten'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_kindergarten_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('vw_kindergarten_demo_import_completed')) : ?>
        <form method="post">
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','vw-kindergarten'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>
