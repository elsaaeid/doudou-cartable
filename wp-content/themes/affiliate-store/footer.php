<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Affiliate Store
 */
?>
<div id="footer">
  <?php 
    $affiliate_store_footer_widget_enabled = get_theme_mod('affiliate_store_footer_widget', true);
    
    if ($affiliate_store_footer_widget_enabled !== false && $affiliate_store_footer_widget_enabled !== '') { ?>

        <div class="footer-widget">
            <div class="container">
                <?php if (!dynamic_sidebar('footer-1')) : ?>
                <?php endif; // end footer widget area ?>
                      
                <?php if (!dynamic_sidebar('footer-2')) : ?>
                <?php endif; // end footer widget area ?>
              
                <?php if (!dynamic_sidebar('footer-3')) : ?>
                <?php endif; // end footer widget area ?>
                
                <?php if (!dynamic_sidebar('footer-4')) : ?>
                <?php endif; // end footer widget area ?>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
  <div class="copywrap text-center">
    <div class="container">
      <p><?php echo esc_html(get_theme_mod('affiliate_store_copyright_line',__('Affiliate Store WordPress Theme','affiliate-store'))); ?> <?php echo esc_html('By Classic Templates','affiliate-store'); ?></p>
    </div>
  </div>
</div>

<?php if(get_theme_mod('affiliate_store_scroll_hide',false)){ ?>
 <a id="button"><?php esc_html_e('TOP', 'affiliate-store'); ?></a>
<?php } ?>
  
<?php wp_footer(); ?>
</body>
</html>
