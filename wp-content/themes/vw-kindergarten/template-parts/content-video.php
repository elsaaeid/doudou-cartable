<?php
/**
 * The template part for displaying post
 *
 * @package VW Kindergarten 
 * @subpackage vw-kindergarten
 * @since vw-kindergarten 1.0
 */
?>

<?php 
  $vw_kindergarten_archive_year  = get_the_time('Y'); 
  $vw_kindergarten_archive_month = get_the_time('m'); 
  $vw_kindergarten_archive_day   = get_the_time('d'); 
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box p-3 mb-3 wow zoomIn" data-wow-duration="2s">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the video file.
        if ( ! empty( $video ) ) {
          foreach ( $video as $video_html ) {
            echo '<div class="entry-video">';
              echo $video_html;
            echo '</div>';
          }
        };
      };
    ?> 
    <article class="new-text">
      <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'vw_kindergarten_toggle_postdate',true) == 1 || get_theme_mod( 'vw_kindergarten_toggle_author',true) == 1 || get_theme_mod( 'vw_kindergarten_toggle_comments',true) == 1 || get_theme_mod( 'vw_kindergarten_toggle_time',true) == 1) { ?>
          <div class="post-info p-2 my-3">
            <?php if(get_theme_mod('vw_kindergarten_toggle_postdate',true)==1){ ?>
              <i class="fas fa-calendar-alt me-2"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_kindergarten_archive_year, $vw_kindergarten_archive_month, $vw_kindergarten_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_kindergarten_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_kindergarten_meta_field_separator', '|'));?></span> <i class="fas fa-user me-2"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_kindergarten_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_kindergarten_meta_field_separator', '|'));?></span> <i class="fa fa-comments me-2" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-kindergarten'), __('0 Comments', 'vw-kindergarten'), __('% Comments', 'vw-kindergarten') ); ?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_kindergarten_toggle_time',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_kindergarten_meta_field_separator', '|'));?></span> <i class="fas fa-clock"></i> <span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <p class="mb-0">
          <?php $vw_kindergarten_theme_lay = get_theme_mod( 'vw_kindergarten_excerpt_settings','Excerpt');
          if($vw_kindergarten_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($vw_kindergarten_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <?php $vw_kindergarten_excerpt = get_the_excerpt(); echo esc_html( vw_kindergarten_string_limit_words( $vw_kindergarten_excerpt, esc_attr(get_theme_mod('vw_kindergarten_excerpt_number','30')))); ?>
            <?php }?>
          <?php }?>
        </p>
        <?php if( get_theme_mod('vw_kindergarten_button_text','Read More') != ''){ ?>
          <div class="more-btn mt-4 mb-4">
            <a class="p-3" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_kindergarten_button_text',__('Read More','vw-kindergarten')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_kindergarten_button_text',__('Read More','vw-kindergarten')));?></span></a>
          </div>
        <?php } ?>
    </article>
  </div>
</div>