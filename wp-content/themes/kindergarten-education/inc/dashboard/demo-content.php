<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $kindergarten_education_demo_import_completed = get_option('kindergarten_education_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($kindergarten_education_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'kindergarten-education') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'kindergarten-education') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {

            // ------- Create Nav Menu --------
            $kindergarten_education_menuname = 'Primary Menu';
            $kindergarten_education_bpmenulocation = 'primary';
            $kindergarten_education_menu_exists = wp_get_nav_menu_object($kindergarten_education_menuname);

            if (!$kindergarten_education_menu_exists) {
                $kindergarten_education_menu_id = wp_create_nav_menu($kindergarten_education_menuname);

                // Create Home Page
                $kindergarten_education_home_title = 'Home';
                $kindergarten_education_home = array(
                    'post_type' => 'page',
                    'post_title' => $kindergarten_education_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $kindergarten_education_home_id = wp_insert_post($kindergarten_education_home);
                // Assign Home Page Template
                add_post_meta($kindergarten_education_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $kindergarten_education_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($kindergarten_education_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'kindergarten-education'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $kindergarten_education_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $kindergarten_education_pages_title = 'Pages';
                $kindergarten_education_pages_content = '
                Explore all the pages we have on our website. Find information about our services, company, and more. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $kindergarten_education_pages = array(
                    'post_type' => 'page',
                    'post_title' => $kindergarten_education_pages_title,
                    'post_content' => $kindergarten_education_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $kindergarten_education_pages_id = wp_insert_post($kindergarten_education_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($kindergarten_education_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'kindergarten-education'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $kindergarten_education_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $kindergarten_education_about_title = 'About Us';
                $kindergarten_education_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';

                $kindergarten_education_about = array(
                    'post_type' => 'page',
                    'post_title' => $kindergarten_education_about_title,
                    'post_content' => $kindergarten_education_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $kindergarten_education_about_id = wp_insert_post($kindergarten_education_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($kindergarten_education_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'kindergarten-education'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $kindergarten_education_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));
                // Create Mobile Page with Dummy Content
                $kindergarten_education_classes_title = 'Classes';
                $kindergarten_education_classes_content = '
                Explore our latest classes collection.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...';
                $kindergarten_education_classes = array(
                    'post_type' => 'page',
                    'post_title' => $kindergarten_education_classes_title,
                    'post_content' => $kindergarten_education_classes_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'classes'
                );
                $kindergarten_education_classes_id = wp_insert_post($kindergarten_education_classes);
                // Add classes Page to Menu
                wp_update_nav_menu_item($kindergarten_education_menu_id, 0, array(
                    'menu-item-title' => __('Classes', 'kindergarten-education'),
                    'menu-item-classes' => 'classes',
                    'menu-item-url' => home_url('/classes/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $kindergarten_education_classes_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Headphone Page with Dummy Content
                $kindergarten_education_blogs_title = 'Blogs';
                $kindergarten_education_blogs_content = '
                Find the best blogss here.
                Lorem Ipsum is simply dummy text...';
                $kindergarten_education_blogs = array(
                    'post_type' => 'page',
                    'post_title' => $kindergarten_education_blogs_title,
                    'post_content' => $kindergarten_education_blogs_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'blogs'
                );
                $kindergarten_education_blogs_id = wp_insert_post($kindergarten_education_blogs);
                // Add blogs Page to Menu
                wp_update_nav_menu_item($kindergarten_education_menu_id, 0, array(
                    'menu-item-title' => __('Blogs', 'kindergarten-education'),
                    'menu-item-classes' => 'blogs',
                    'menu-item-url' => home_url('/blogs/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $kindergarten_education_blogs_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Clothes Page with Dummy Content
                $kindergarten_education_contactus_title = 'Contact Us';
                $kindergarten_education_contactus_content = '
                Browse our clothing collection.
                Lorem Ipsum is simply dummy text...';
                $kindergarten_education_contactus = array(
                    'post_type' => 'page',
                    'post_title' => $kindergarten_education_contactus_title,
                    'post_content' => $kindergarten_education_contactus_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'contactus'
                );
                $kindergarten_education_contactus_id = wp_insert_post($kindergarten_education_contactus);
                // Add contactus Page to Menu
                wp_update_nav_menu_item($kindergarten_education_menu_id, 0, array(
                    'menu-item-title' => __('Contact Us', 'kindergarten-education'),
                    'menu-item-classes' => 'contactus',
                    'menu-item-url' => home_url('/contactus/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $kindergarten_education_contactus_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Repeat the process for Shoes, Watches, Blogs, and Contact Us

               // Create Shoes Page with Dummy Content
                $kindergarten_education_services_title = 'Services';
                $kindergarten_education_services_content = 'Discover top-quality services.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s...';
                $kindergarten_education_services = array(
                    'post_type' => 'page',
                    'post_title' => $kindergarten_education_services_title,
                    'post_content' => $kindergarten_education_services_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'services'
                );
                $kindergarten_education_services_id = wp_insert_post($kindergarten_education_services);
                // Add services Page to Menu
                wp_update_nav_menu_item($kindergarten_education_menu_id, 0, array(
                    'menu-item-title' => __('Services', 'kindergarten-education'),
                    'menu-item-classes' => 'services',
                    'menu-item-url' => home_url('/services/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $kindergarten_education_services_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));
                // Set the menu location if it's not already set
                if (!has_nav_menu($kindergarten_education_bpmenulocation)) {
                    $kindergarten_education_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($kindergarten_education_locations)) {
                        $kindergarten_education_locations = array();
                    }
                    $kindergarten_education_locations[$kindergarten_education_bpmenulocation] = $kindergarten_education_menu_id;
                    set_theme_mod('nav_menu_locations', $kindergarten_education_locations);
                }
            }

            // Set the demo import completion flag
    		update_option('kindergarten_education_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'kindergarten-education') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'kindergarten-education') . '</a></span>';
            //end

            // slider section start //
            set_theme_mod( 'kindergarten_education_slider_button_text', 'READ MORE' );
            set_theme_mod( 'kindergarten_education_option_slider_height', '600' );

            for($kindergarten_education_i=1;$kindergarten_education_i<=3;$kindergarten_education_i++){
               $kindergarten_education_slider_title = 'LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE';
               $kindergarten_education_slider_content = 'Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum is simply dummy text of the printing and typesetting industry.';
                  // Create post object
               $kindergarten_education_my_post = array(
               'post_title'    => wp_strip_all_tags( $kindergarten_education_slider_title ),
               'post_content'  => $kindergarten_education_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $kindergarten_education_post_id = wp_insert_post( $kindergarten_education_my_post );

               if ($kindergarten_education_post_id) {
                 // Set the theme mod for the slider page
                 set_theme_mod('kindergarten_education_slider_page' . $kindergarten_education_i, $kindergarten_education_post_id);

                  $kindergarten_education_image_url = get_template_directory_uri().'/images/slider'.$kindergarten_education_i.'.png';

                $kindergarten_education_image_id = media_sideload_image($kindergarten_education_image_url, $kindergarten_education_post_id, null, 'id');

                    if (!is_wp_error($kindergarten_education_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($kindergarten_education_post_id, $kindergarten_education_image_id);
                    }
                }
            }

            // services single post

            // Define the post content and image URL
            $kindergarten_education_post_title = "OUR SERVICE";
            $kindergarten_education_post_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.';
            $kindergarten_education_image_url = get_template_directory_uri() . '/images/services/service-banner.png'; // Adjust the image URL as needed

            // Create post object
            $kindergarten_education_post_data = array(
                'post_title'    => wp_strip_all_tags($kindergarten_education_post_title),
                'post_content'  => $kindergarten_education_post_content,
                'post_status'   => 'publish',
                'post_type'     => 'post', // Set post type to 'post'
            );
            set_theme_mod('kindergarten_education_single_post', $kindergarten_education_post_title);

            // Insert the post into the database
            $kindergarten_education_post_id = wp_insert_post($kindergarten_education_post_data);

            if (is_wp_error($kindergarten_education_post_id)) {
                error_log('Error creating post: ' . $kindergarten_education_post_id->get_error_message());
            } else {
                // Handle the featured image
                $kindergarten_education_image_id = media_sideload_image($kindergarten_education_image_url, $kindergarten_education_post_id, null, 'id');

                if (is_wp_error($kindergarten_education_image_id)) {
                    error_log('Error downloading image: ' . $kindergarten_education_image_id->get_error_message());
                } else {
                    // Assign featured image to post
                    set_post_thumbnail($kindergarten_education_post_id, $kindergarten_education_image_id);
                }
            }

            // services
            set_theme_mod('kindergarten_education_blogcategory_setting', 'postcategory1');

            // Define post category names and post titles
            $kindergarten_education_category_names = array('postcategory1', 'postcategory2', 'postcategory3', 'postcategory4');
            $kindergarten_education_title_array = array(
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3","OUR SERVICE TITLE 4", "OUR SERVICE TITLE 5", "OUR SERVICE TITLE 6"),
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3","OUR SERVICE TITLE 4", "OUR SERVICE TITLE 5", "OUR SERVICE TITLE 6"),
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3","OUR SERVICE TITLE 4", "OUR SERVICE TITLE 5", "OUR SERVICE TITLE 6"),
                array("OUR SERVICE TITLE 1", "OUR SERVICE TITLE 2", "OUR SERVICE TITLE 3","OUR SERVICE TITLE 4", "OUR SERVICE TITLE 5", "OUR SERVICE TITLE 6")
            );

            foreach ($kindergarten_education_category_names as $kindergarten_education_index => $kindergarten_education_category_name) {
                // Create or retrieve the post category term ID
                $kindergarten_education_term = term_exists($kindergarten_education_category_name, 'category');
                if ($kindergarten_education_term === 0 || $kindergarten_education_term === null) {
                    // If the term does not exist, create it
                    $kindergarten_education_term = wp_insert_term($kindergarten_education_category_name, 'category');
                }
                if (is_wp_error($kindergarten_education_term)) {
                    error_log('Error creating category: ' . $kindergarten_education_term->get_error_message());
                    continue; // Skip to the next iteration if category creation fails
                }

                for ($kindergarten_education_i = 0; $kindergarten_education_i < 6; $kindergarten_education_i++) {
                    // Create post content
                    $kindergarten_education_title = $kindergarten_education_title_array[$kindergarten_education_index][$kindergarten_education_i];
                    $kindergarten_education_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.';

                    // Create post post object
                    $kindergarten_education_my_post = array(
                        'post_title'    => wp_strip_all_tags($kindergarten_education_title),
                        'post_content'  => $kindergarten_education_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'post', // Post type set to 'post'
                    );

                    // Insert the post into the database
                    $kindergarten_education_post_id = wp_insert_post($kindergarten_education_my_post);

                    if (is_wp_error($kindergarten_education_post_id)) {
                        error_log('Error creating post: ' . $kindergarten_education_post_id->get_error_message());
                        continue; // Skip to the next post if creation fails
                    }
                    // Assign the category to the post
                    wp_set_post_categories($kindergarten_education_post_id, array((int)$kindergarten_education_term['term_id']));

                    // Handle the featured image using media_sideload_image
                    $kindergarten_education_image_url = get_template_directory_uri() . '/images/services/services' . ($kindergarten_education_i + 1) . '.png';
                    $kindergarten_education_image_id = media_sideload_image($kindergarten_education_image_url, $kindergarten_education_post_id, null, 'id');

                    if (is_wp_error($kindergarten_education_image_id)) {
                        error_log('Error downloading image: ' . $kindergarten_education_image_id->get_error_message());
                        continue; // Skip to the next post if image download fails
                    }
                    // Assign featured image to post
                    set_post_thumbnail($kindergarten_education_post_id, $kindergarten_education_image_id);
                }
            }
            //Copyright Text
            set_theme_mod( 'kindergarten_education_footer_text', 'By BWTWordpress' );
        }
    ?>

    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=kindergarten-education-guide-page" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('kindergarten_education_demo_import_completed')) : ?>
            <div class="demo-btn">
            <h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'kindergarten-education' ); ?></h3>
            <form method="post">
                <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Demo Content','kindergarten-education'); ?>" class="button button-primary button-large">
            </form>
            </div>
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
