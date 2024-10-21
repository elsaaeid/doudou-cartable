<?php
/**
 * The template for displaying the footer.
 * @package Kindergarten Education
 */
?>
<?php if( get_theme_mod( 'kindergarten_education_hide_show_scroll',true) != ''  || get_theme_mod( 'kindergarten_education_display_scrolltop', true) != '') { ?>
    <?php $kindergarten_education_theme_lay = get_theme_mod( 'kindergarten_education_footer_options','Right');
        if($kindergarten_education_theme_lay == 'Left align'){ ?>
            <a href="#" id="scrollbutton" class="left"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'kindergarten-education' ); ?></span></a>
        <?php }else if($kindergarten_education_theme_lay == 'Center align'){ ?>
            <a href="#" id="scrollbutton" class="center"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'kindergarten-education' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" id="scrollbutton"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_back_to_top_icon','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Back to Top', 'kindergarten-education' ); ?></span></a>
    <?php }?>
<?php }?>
<footer role="contentinfo">
    <?php if (get_theme_mod('kindergarten_education_show_hide_footer', true)){ ?>
    <?php //Set widget areas classes based on user choice
        $kindergarten_education_widget_areas = get_theme_mod('kindergarten_education_footer_widget_areas', '4');
        if ($kindergarten_education_widget_areas == '3') {
            $cols = 'col-md-4';
        } elseif ($kindergarten_education_widget_areas == '4') {
            $cols = 'col-md-3';
        } elseif ($kindergarten_education_widget_areas == '2') {
            $cols = 'col-md-6';
        } else {
            $cols = 'col-md-12';
        }
    ?>
    <aside id="sidebar-footer" class="footer-wp" role="complementary">
        <div class="container">
        <div class="row">
            <div class="<?php echo !is_active_sidebar('footer-1') ? 'footer_hide' : esc_attr($auto_parts_garage_colmd); ?> col-lg-3 col-xs-12 footer-block">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php else : ?>
                    <aside id="search" class="widget py-3" role="complementary" aria-label="firstsidebar">
                        <h3 class="widget-title"><?php esc_html_e( 'Search', 'kindergarten-education' ); ?></h3>
                        <?php get_search_form(); ?>
                    </aside>
                <?php endif; ?>
            </div>

            <div class="<?php echo !is_active_sidebar('footer-2') ? 'footer_hide' : esc_attr($auto_parts_garage_colmd); ?> col-lg-3 col-xs-12 footer-block pe-2">
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php else : ?>
                    <aside id="archives" class="widget py-3" role="complementary" >
                        <h3 class="widget-title"><?php esc_html_e( 'Archives', 'kindergarten-education' ); ?></h3>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>
                <?php endif; ?>
            </div>

            <div class="<?php echo !is_active_sidebar('footer-3') ? 'footer_hide' : esc_attr($auto_parts_garage_colmd); ?> col-lg-3 col-xs-12 footer-block">
                <?php if (is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php else : ?>
                    <aside id="meta" class="widget py-3" role="complementary" >
                        <h3 class="widget-title"><?php esc_html_e( 'Meta', 'kindergarten-education' ); ?></h3>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <?php wp_meta(); ?>
                        </ul>
                    </aside>
                <?php endif; ?>
            </div>

            <div class="<?php echo !is_active_sidebar('footer-4') ? 'footer_hide' : esc_attr($auto_parts_garage_colmd); ?> col-lg-3 col-xs-12 footer-block">
                <?php if (is_active_sidebar('footer-4')) : ?>
                    <?php dynamic_sidebar('footer-4'); ?>
                <?php else : ?>
                    <aside id="categories" class="widget py-3" role="complementary">
                        <h3 class="widget-title"><?php esc_html_e( 'Categories', 'kindergarten-education' ); ?></h3>
                        <ul>
                            <?php wp_list_categories('title_li=');  ?>
                        </ul>
                    </aside>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </aside>
    <?php }?>
    <?php if (get_theme_mod('kindergarten_education_show_hide_copyright', true)) {?>
      <div class="copyright-wrapper text-center p-3">
        <div class="container">
           <div class="copyright">
            <span><?php kindergarten_education_credit(); ?> <?php echo esc_html(get_theme_mod('kindergarten_education_footer_copy',__('By Buywptemplate','kindergarten-education'))); ?></span>
            <?php if (get_theme_mod('kindergarten_education_show_footer_icons', true)){ ?> 
            <div class="d-flex justify-content-center align-items-center gap-3 mt-2">
                <?php if ( get_theme_mod('kindergarten_education_footer_facebook_link','') != "" ) {?>
                <a target="_blank" href="<?php echo esc_attr( get_theme_mod('kindergarten_education_footer_facebook_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_footer_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'kindergarten-education'); ?></span></a>
                <?php }?>
                <?php if ( get_theme_mod('kindergarten_education_footer_twitter_link','') != "" ) {?>
                <a target="_blank" href="<?php echo esc_attr( get_theme_mod('kindergarten_education_footer_twitter_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_footer_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'kindergarten-education'); ?></span></a>
                <?php }?>
                <?php if ( get_theme_mod('kindergarten_education_footer_linkdin_link','') != "" ) {?>
                <a target="_blank" href="<?php echo esc_attr( get_theme_mod('kindergarten_education_footer_linkdin_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_footer_linkdin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Linkdin', 'kindergarten-education'); ?></span></a>
                <?php }?>
                <?php if ( get_theme_mod('kindergarten_education_footer_instagram_link','') != "" ) {?>
                <a target="_blank" href="<?php echo esc_attr( get_theme_mod('kindergarten_education_footer_instagram_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_footer_instagram_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'kindergarten-education'); ?></span></a>
                <?php }?>
                <?php if ( get_theme_mod('kindergarten_education_footer_pintrest_link','') != "" ) {?>
                <a target="_blank" href="<?php echo esc_attr( get_theme_mod('kindergarten_education_footer_pintrest_link','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_footer_pinterest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Pintrest', 'kindergarten-education'); ?></span></a>
                <?php }?>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="clear"></div>
    </div>
    <?php }?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
