<?php
/**
 * Kindergarten Education functions and definitions
 * @package Kindergarten Education
 */
 /* Breadcrumb Begin */
 function kindergarten_education_the_breadcrumb() {
 	if (!is_home()) {
 		echo '<a href="';
 			echo esc_url( home_url() );
 		echo '">';
 			bloginfo('name');
 		echo "</a> ";
 		if (is_category() || is_single()) {
 			the_category(',');
 			if (is_single()) {
 				echo "<span> ";
 					the_title();
 				echo "</span> ";
 			}
 		} elseif (is_page()) {
 			echo "<span> ";
 				the_title();
 		}
 	}
 }
/* Theme Setup */
if ( ! function_exists( 'kindergarten_education_setup' ) ) :

function kindergarten_education_setup() {

	$GLOBALS['content_width'] = apply_filters( 'kindergarten_education_content_width', 640 );

	load_theme_textdomain( 'kindergarten-education', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('kindergarten-education-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kindergarten-education' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', kindergarten_education_font_url() ) );

}
endif; // kindergarten_education_setup
add_action( 'after_setup_theme', 'kindergarten_education_setup' );

/*radio button sanitization*/
 function kindergarten_education_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function kindergarten_education_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );

	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function kindergarten_education_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

/* Theme Widgets Setup */
function kindergarten_education_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'kindergarten-education' ),
		'description'   => __( 'Appears on posts and pages', 'kindergarten-education' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Posts and Pages Sidebar', 'kindergarten-education' ),
		'description'   => __( 'Appears on posts and pages', 'kindergarten-education' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'kindergarten-education' ),
		'description'   => __( 'Appears on posts and pages', 'kindergarten-education' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$kindergarten_education_widget_areas = get_theme_mod('kindergarten_education_footer_widget_areas', '4');
	for ($i=1; $i<=$kindergarten_education_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'kindergarten-education' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'kindergarten-education' ),
		'description'   => __( 'Appears on shop page', 'kindergarten-education' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'kindergarten-education' ),
		'description'   => __( 'Appears on single product page', 'kindergarten-education' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'kindergarten_education_widgets_init' );

/* Footer Widget */
add_theme_support( 'starter-content', array(
	'widgets' => array(
		'footer-1' => array(
			'archives',
		),
		'footer-2' => array(
			'meta',
		),
		'footer-3' => array(
			'categories',
		),
		'footer-4' => array(
			'search',
		),
	),
));

// edit
if (!function_exists('kindergarten_education_edit_link')) :
    function kindergarten_education_edit_link($view = 'default')
    {
        global $post;
            edit_post_link(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Edit <span class="screen-reader-text">%s</span>', 'kindergarten-education'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    get_the_title()
                ),
                '<span class="edit-link"><i class="fa-solid fa-pen mx-2"></i>',
                '</span>'
            );
    }
endif;

/* Theme Font URL */
function kindergarten_education_font_url() {
	$font_family   = array(
		'ABeeZee:ital@0;1',
		'Abril Fatface',
		'Acme',
		'Allura',
		'Anton',
		'Architects Daughter',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bangers',
		'Boogaloo',
		'Bad Script',
		'Barlow Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bree Serif',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Caveat Brush',
		'Cherry Swash:wght@400;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming Soon',
		'Charm:wght@400;700',
		'Chewy',
		'Days One',
		'Dosis:wght@200;300;400;500;600;700;800',
		'DM Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700',
		'EB Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka One',
		'Fjalla One',
		'Francois One',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Gabriela',
		'Gloria Hallelujah',
		'Great Vibes',
		'Handlee',
		'Hammersmith One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Hind:wght@300;400;500;600;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie Flower',
		'IM Fell English SC',
		'Julius Sans One',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
		'Lobster',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Marck Script',
		'Marcellus',
		'Merienda One',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Nunito Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Oswald:wght@200;300;400;500;600;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent Marker',
		'Poiret One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prata',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
	 	'Russo One',
	 	'Righteous',
	 	'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Satisfy',
	 	'Sen:wght@400;700;800',
	 	'Slabo 13px',
	 	'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
	 	'Shadows Into Light Two',
	 	'Shadows Into Light',
	 	'Sacramento',
	 	'Sail',
	 	'Shrikhand',
	 	'League Spartan:wght@100;200;300;400;500;600;700;800;900',
	 	'Staatliches',
	 	'Stylish',
	 	'Tangerine:wght@400;700',
	 	'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
	 	'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
	 	'Unica One',
	 	'VT323',
	 	'Varela Round',
	 	'Vampiro One',
	 	'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
	 	'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
	 	'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
	 	'ZCOOL XiaoWei',
	 	'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700'
	);

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/* Theme enqueue scripts */
function kindergarten_education_scripts() {
	wp_enqueue_style( 'kindergarten-education-font', kindergarten_education_font_url(), array() );
	// blocks-css
	wp_enqueue_style( 'kindergarten-education-block-style', get_theme_file_uri('/css/blocks.css') );

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'kindergarten-education-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'kindergarten-education-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );

	// body
	$kindergarten_education_body_color       = get_theme_mod(
		'kindergarten_education_body_color', '');
	$kindergarten_education_body_font_family = get_theme_mod('kindergarten_education_body_font_family', '');
	$kindergarten_education_body_font_size   = get_theme_mod(
		'kindergarten_education_body_font_size', '');

	// Paragraph
	$kindergarten_education_paragraph_color       = get_theme_mod('kindergarten_education_paragraph_color', '');
	$kindergarten_education_paragraph_font_family = get_theme_mod('kindergarten_education_paragraph_font_family', '');
	$kindergarten_education_paragraph_font_size   = get_theme_mod('kindergarten_education_paragraph_font_size', '');
	// "a" tag
	$kindergarten_education_atag_color       = get_theme_mod('kindergarten_education_atag_color', '');
	$kindergarten_education_atag_font_family = get_theme_mod('kindergarten_education_atag_font_family', '');
	// "li" tag
	$kindergarten_education_li_color       = get_theme_mod('kindergarten_education_li_color', '');
	$kindergarten_education_li_font_family = get_theme_mod('kindergarten_education_li_font_family', '');

	// H1
	$kindergarten_education_h1_color       = get_theme_mod('kindergarten_education_h1_color', '');
	$kindergarten_education_h1_font_family = get_theme_mod('kindergarten_education_h1_font_family', '');
	$kindergarten_education_h1_font_size   = get_theme_mod('kindergarten_education_h1_font_size', '');
	// H2
	$kindergarten_education_h2_color       = get_theme_mod('kindergarten_education_h2_color', '');
	$kindergarten_education_h2_font_family = get_theme_mod('kindergarten_education_h2_font_family', '');
	$kindergarten_education_h2_font_size   = get_theme_mod('kindergarten_education_h2_font_size', '');
	// H3
	$kindergarten_education_h3_color       = get_theme_mod('kindergarten_education_h3_color', '');
	$kindergarten_education_h3_font_family = get_theme_mod('kindergarten_education_h3_font_family', '');
	$kindergarten_education_h3_font_size   = get_theme_mod('kindergarten_education_h3_font_size', '');
	// H4
	$kindergarten_education_h4_color       = get_theme_mod('kindergarten_education_h4_color', '');
	$kindergarten_education_h4_font_family = get_theme_mod('kindergarten_education_h4_font_family', '');
	$kindergarten_education_h4_font_size   = get_theme_mod('kindergarten_education_h4_font_size', '');
	// H5
	$kindergarten_education_h5_color       = get_theme_mod('kindergarten_education_h5_color', '');
	$kindergarten_education_h5_font_family = get_theme_mod('kindergarten_education_h5_font_family', '');
	$kindergarten_education_h5_font_size   = get_theme_mod('kindergarten_education_h5_font_size', '');
	// H6
	$kindergarten_education_h6_color       = get_theme_mod('kindergarten_education_h6_color', '');
	$kindergarten_education_h6_font_family = get_theme_mod('kindergarten_education_h6_font_family', '');
	$kindergarten_education_h6_font_size   = get_theme_mod('kindergarten_education_h6_font_size', '');

	$kindergarten_education_custom_css = '
		body{
		    color:'.esc_html($kindergarten_education_body_color).'!important;
		    font-family: '.esc_html($kindergarten_education_body_font_family).';
		    font-size: '.esc_html($kindergarten_education_body_font_size).'px;
		}
		p,span{
		    color:'.esc_html($kindergarten_education_paragraph_color).'!important;
		    font-family: '.esc_html($kindergarten_education_paragraph_font_family).';
		    font-size: '.esc_html($kindergarten_education_paragraph_font_size).'px;
		}
		a{
		    color:'.esc_html($kindergarten_education_atag_color).'!important;
		    font-family: '.esc_html($kindergarten_education_atag_font_family).';
		}
		li{
		    color:'.esc_html($kindergarten_education_li_color).'!important;
		    font-family: '.esc_html($kindergarten_education_li_font_family).';
		}
		h1{
		    color:'.esc_html($kindergarten_education_h1_color).'!important;
		    font-family: '.esc_html($kindergarten_education_h1_font_family).'!important;
		    font-size: '.esc_html($kindergarten_education_h1_font_size).'px!important;
		}
		h2{
		    color:'.esc_html($kindergarten_education_h2_color).'!important;
		    font-family: '.esc_html($kindergarten_education_h2_font_family).'!important;
		    font-size: '.esc_html($kindergarten_education_h2_font_size).'px!important;
		}
		h3{
		    color:'.esc_html($kindergarten_education_h3_color).'!important;
		    font-family: '.esc_html($kindergarten_education_h3_font_family).'!important;
		    font-size: '.esc_html($kindergarten_education_h3_font_size).'px!important;
		}
		h4{
		    color:'.esc_html($kindergarten_education_h4_color).'!important;
		    font-family: '.esc_html($kindergarten_education_h4_font_family).'!important;
		    font-size: '.esc_html($kindergarten_education_h4_font_size).'px!important;
		}
		h5{
		    color:'.esc_html($kindergarten_education_h5_color).'!important;
		    font-family: '.esc_html($kindergarten_education_h5_font_family).'!important;
		    font-size: '.esc_html($kindergarten_education_h5_font_size).'px!important;
		}
		h6{
		    color:'.esc_html($kindergarten_education_h6_color).'!important;
		    font-family: '.esc_html($kindergarten_education_h6_font_family).'!important;
		    font-size: '.esc_html($kindergarten_education_h6_font_size).'px!important;
		}
	';
	wp_add_inline_style('kindergarten-education-basic-style', $kindergarten_education_custom_css);


	/* Theme Color sheet */
	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'kindergarten-education-basic-style',$kindergarten_education_custom_css );
	wp_enqueue_script( 'tether-js', get_template_directory_uri() . '/js/tether.js', array('jquery') ,'',true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'kindergarten-education-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kindergarten_education_scripts' );

define('KINDERGARTEN_EDUCATION_LIVE_DEMO',__('https://demos.buywptemplates.com/kindergarten-education-pro/', 'kindergarten-education'));
define('KINDERGARTEN_EDUCATION_BUY_PRO',__('https://www.buywptemplates.com/products/kindergarten-education-wordpress-theme', 'kindergarten-education'));
define('KINDERGARTEN_EDUCATION_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/kindergarten-education-pro/', 'kindergarten-education'));
define('KINDERGARTEN_EDUCATION_FREE_DOC',__('https://demos.buywptemplates.com/demo/docs/free-kindergarten-education/', 'kindergarten-education'));
define('KINDERGARTEN_EDUCATION_PRO_SUPPORT',__('https://buywptemplates.com/pages/community/', 'kindergarten-education'));
define('KINDERGARTEN_EDUCATION_FREE_SUPPORT',__('https://wordpress.org/support/theme/kindergarten-education/', 'kindergarten-education'));
define('KINDERGARTEN_EDUCATION_REVIEW',__('https://wordpress.org/support/theme/kindergarten-education/reviews/#new-post', 'kindergarten-education'));
define('KINDERGARTEN_EDUCATION_CREDIT',__('https://www.buywptemplates.com/products/free-education-wordpress-theme', 'kindergarten-education'));

if ( ! function_exists( 'kindergarten_education_credit' ) ) {
	function kindergarten_education_credit(){
		echo "<a href=".esc_url(KINDERGARTEN_EDUCATION_CREDIT)." target='_blank'>".esc_html__('Education WordPress Theme','kindergarten-education')."</a>";
	}
}

/* Excerpt Limit Begin */
function kindergarten_education_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/* Switch sanitization */
if ( ! function_exists( 'kindergarten_education_switch_sanitization' ) ) {
	function kindergarten_education_switch_sanitization( $input ) {
		if ( true === $input ) {
			return 1;
		} else {
			return 0;
		}
	}
}

/* Integer sanitization */
if ( ! function_exists( 'kindergarten_education_sanitize_integer' ) ) {
	function kindergarten_education_sanitize_integer( $input ) {
		return (int) $input;
	}
}

function kindergarten_education_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 4
add_filter('loop_shop_columns', 'kindergarten_education_loop_columns');
if (!function_exists('kindergarten_education_loop_columns')) {
	function kindergarten_education_loop_columns() {
		$kindergarten_education_columns = get_theme_mod( 'kindergarten_education_per_columns', 4 );
		return $kindergarten_education_columns; // 4 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'kindergarten_education_shop_per_page', 20 );
function kindergarten_education_shop_per_page( $cols ) {
  	$kindergarten_education_cols = get_theme_mod( 'kindergarten_education_product_per_page', 9 );
	return $kindergarten_education_cols;
}

//Display the related posts
if ( ! function_exists( 'kindergarten_education_related_posts' ) ) {
	function kindergarten_education_related_posts() {
		wp_reset_postdata();
		global $post;
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'         => absint( get_theme_mod( 'kindergarten_education_related_posts_count_number', '3' ) ),
		);
		// Categories
		if ( get_theme_mod( 'kindergarten_education_related_posts_taxanomies', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Tags
		if ( get_theme_mod( 'kindergarten_education_related_posts_taxanomies', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}
		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();
		return $query;
	}
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Load Jetpack compatibility file. */
require get_template_directory() . '/inc/customizer.php';

/* Get Started */
require get_template_directory() . '/inc/dashboard/get_started_info.php';

/* Webfonts */
require get_template_directory() . '/wptt-webfont-loader.php';

/* TGM Plugin Activation */
require get_template_directory() . '/inc/tgm/tgm.php';