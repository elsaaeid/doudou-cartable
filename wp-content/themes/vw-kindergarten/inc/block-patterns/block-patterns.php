<?php
/**
 * VW Kindergarten: Block Patterns
 *
 * @package VW Kindergarten
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'vw-kindergarten',
		array( 'label' => __( 'VW Kindergarten', 'vw-kindergarten' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'vw-kindergarten/banner-section',
		array(
			'title'      => __( 'Banner Section', 'vw-kindergarten' ),
			'categories' => array( 'vw-kindergarten' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png\",\"id\":4432,\"dimRatio\":60,\"customOverlayColor\":\"#404376\",\"minHeight\":600,\"align\":\"full\",\"className\":\"is-light slider-box\"} -->\n<div class=\"wp-block-cover alignfull is-light slider-box\" style=\"min-height:600px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-60 has-background-dim\" style=\"background-color:#404376\"></span><img class=\"wp-block-cover__image-background wp-image-4432\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/slider.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"align\":\"wide\",\"className\":\"mx-3 mx-lg-0\"} -->\n<div class=\"wp-block-columns alignwide mx-3 mx-lg-0\"><!-- wp:column {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\"><!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\",\"fontStyle\":\"normal\",\"fontWeight\":\"600\",\"textTransform\":\"capitalize\"},\"color\":{\"text\":\"#fe598b\"},\"elements\":{\"link\":{\"color\":{\"text\":\"#fe598b\"}}}},\"className\":\"small-title\"} -->\n<p class=\"small-title has-text-color has-link-color\" style=\"color:#fe598b;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize\">welcome to</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"50px\"}},\"textColor\":\"white\"} -->\n<h1 class=\"wp-block-heading has-text-align-left has-white-color has-text-color\" style=\"font-size:50px\">TE OBTINUIT UT ADEPTO SATIS </h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"white\",\"fontSize\":\"normal\"} -->\n<p class=\"has-text-align-left has-white-color has-text-color has-normal-font-size\">Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard. Lorem Ipsum has been the industrys standard.&nbsp;</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\",\"orientation\":\"horizontal\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#fe598b\"},\"typography\":{\"fontSize\":\"15px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"background-color:#fe598b\">Discover More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'vw-kindergarten/about-section',
		array(
			'title'      => __( 'About Section', 'vw-kindergarten' ),
			'categories' => array( 'vw-kindergarten' ),
			'content'    => "<!-- wp:columns {\"align\":\"wide\",\"className\":\"about-sec my-5\"} -->\n<div class=\"wp-block-columns alignwide about-sec my-5\"><!-- wp:column {\"width\":\"60%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:60%\"><!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"color\":{\"text\":\"#fe598b\"}},\"className\":\"about-text\"} -->\n<p class=\"about-text has-text-color\" style=\"color:#fe598b;font-size:15px\">About Us</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"style\":{\"typography\":{\"fontSize\":\"32px\"},\"color\":{\"text\":\"#404376\"}},\"className\":\"my-2\"} -->\n<h2 class=\"wp-block-heading my-2 has-text-color\" style=\"color:#404376;font-size:32px\">WELCOME TO THE KINDERGARTEN !</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"color\":{\"text\":\"#9495ad\"}},\"className\":\"mt-3\",\"fontSize\":\"normal\"} -->\n<p class=\"mt-3 has-text-color has-normal-font-size\" style=\"color:#9495ad\">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\",\"orientation\":\"horizontal\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"color\":{\"background\":\"#fe598b\"},\"typography\":{\"fontSize\":\"15px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-background wp-element-button\" style=\"background-color:#fe598b\">More About Us</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"40%\",\"className\":\"abt-img\"} -->\n<div class=\"wp-block-column abt-img\" style=\"flex-basis:40%\"><!-- wp:image {\"align\":\"right\",\"id\":4991,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignright size-full\"><img src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/pencil.png\" alt=\"\" class=\"wp-image-4991\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:group {\"className\":\"trusted-col\"} -->\n<div class=\"wp-block-group trusted-col\"><!-- wp:group {\"className\":\"trusted-box\"} -->\n<div class=\"wp-block-group trusted-box\"><!-- wp:paragraph {\"className\":\"trusted-by\"} -->\n<p class=\"trusted-by\">Trusted By</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:group --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);
}