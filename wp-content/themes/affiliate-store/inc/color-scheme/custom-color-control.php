<?php


$affiliate_store_color_scheme_css = '';

//---------------------------------Logo-Max-height--------- 
  $affiliate_store_logo_width = get_theme_mod('affiliate_store_logo_width');

  if($affiliate_store_logo_width != false){

    $affiliate_store_color_scheme_css .='.logo .custom-logo-link img{';

      $affiliate_store_color_scheme_css .='width: '.esc_html($affiliate_store_logo_width).'px;';

    $affiliate_store_color_scheme_css .='}';
  }

  // by default header
  $affiliate_store_slider = get_theme_mod('affiliate_store_slider');

  if($affiliate_store_slider != true){

  $affiliate_store_color_scheme_css .='.page-template-template-home-page .mainhead{';

    $affiliate_store_color_scheme_css .='position: static;';

  $affiliate_store_color_scheme_css .='}';

  }

  $affiliate_store_slider_nav_img = get_theme_mod('affiliate_store_slider_nav_img');
  if($affiliate_store_slider_nav_img != false){
    $affiliate_store_color_scheme_css .='#slider-cat .owl-nav .owl-next:after{';
      $affiliate_store_color_scheme_css .='background: url('.esc_attr($affiliate_store_slider_nav_img).'); background-size: cover;';
    $affiliate_store_color_scheme_css .='}';
  }

/*--------------------------- Woocommerce Product Image Border Radius -------------------*/

$affiliate_store_woo_product_img_border_radius = get_theme_mod('affiliate_store_woo_product_img_border_radius');
  if($affiliate_store_woo_product_img_border_radius != false){
    $affiliate_store_color_scheme_css .='.woocommerce ul.products li.product a img{';
    $affiliate_store_color_scheme_css .='border-radius: '.esc_attr($affiliate_store_woo_product_img_border_radius).'px;';
    $affiliate_store_color_scheme_css .='}';
}  