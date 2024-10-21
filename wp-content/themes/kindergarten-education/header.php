<?php
/**
 * The Header for our theme.
 * @package Kindergarten Education
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open(); 
  } else { 
    do_action( 'wp_body_open' ); 
  } ?>
  <?php if(get_theme_mod('kindergarten_education_preloader',false) != '' || get_theme_mod( 'kindergarten_education_display_preloader',false) != '' ){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'kindergarten-education' ); ?></a>
    <div class="responsive-menu <?php if( get_theme_mod( 'kindergarten_education_sticky_header', false) != '' || get_theme_mod( 'kindergarten_education_display_fixed_header',false) != '' ) { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
      <div id="header" class="w-100 pb-lg-5 mb-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-9 logo_bar align-self-center">
              <div class="logo m-0 py-1 text-lg-center text-start align-self-center">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('kindergarten_education_site_title_enable',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title text-lg-center text-start p-0 my-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="p-0 my-0 text-center"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="p-0 my-0 text-center"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                    ?>
                    <?php if( get_theme_mod('kindergarten_education_site_tagline_enable',false) != ''){ ?>
                      <p class="site-description m-0">
                        <?php echo esc_html($description); ?>
                      </p>
                    <?php }?>
                <?php endif; ?>      
              </div>     
            </div>
            <div class="<?php if( get_theme_mod( 'kindergarten_education_display_search', true) == true ) { ?> col-lg-8 col-md-8 <?php } else { ?> col-lg-9 col-md-9 <?php } ?>  col-3 p-0 align-self-center">
              <div class="toggle-menu responsive-menu text-center my-2 mx-0">
                <button role="tab" class="mobiletoggle" onclick="kindergarten_education_responsive_menu_open()"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_responsive_menu_open_icon','fas fa-bars')); ?>"></i><p class="mb-0"><?php echo esc_html( get_theme_mod('kindergarten_education_open_menu_label')); ?></p><span class="screen-reader-text"><?php esc_html_e('Open Menu','kindergarten-education'); ?></span>
                </button>
              </div>
              <div id="navbar-header" class="menu-brand text-center">
                <?php if(get_theme_mod('kindergarten_education_res_search',true) != ''){ ?>
                  <div id="responsive-search">
                    <?php get_search_form(); ?>
                  </div>
                <?php }?>
                <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'kindergarten-education' ); ?>">
                  <?php 
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'main-menu-navigation clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav text-start ps-0 my-3 mx-0">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) );
                  ?>
                </nav>
                <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="kindergarten_education_responsive_menu_close()"><p class="mb-0"><?php echo esc_html( get_theme_mod('kindergarten_education_close_menu_label')); ?></p><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','kindergarten-education'); ?></span></a>
              </div>
            </div>
            <?php if( get_theme_mod( 'kindergarten_education_display_search', true) == true ) { ?>
              <div class="col-lg-1 col-md-1 col-6 align-self-center">
                <div class="main-search my-4 ps-2 align-self-center">
                  <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_search_icon','fas fa-search')); ?> pt-1"></i></a></span>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="searchform_page w-100 h-100">
            <div class="close w-100 text-end me-4"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
            <div class="search_input">
              <?php get_search_form(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>