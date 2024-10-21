<?php
/**
 * The template part for displaying grid post
 * @package Kindergarten Education
 * @subpackage kindergarten_education
 * @since 1.0
 */
?>
<?php
  $archive_year  = get_the_time('Y');
  $archive_month = get_the_time('m');
  $archive_day   = get_the_time('d');
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-box'); ?>> 
    <div class="p-2"> 
      <h2 class="section-title text-start py-1"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'kindergarten_education_grid_post_date',true) != '' || get_theme_mod( 'kindergarten_education_grid_post_author',true) != '' || get_theme_mod( 'kindergarten_education_grid_post_comment',true) != '' || get_theme_mod( 'kindergarten_education_grid_post_time',true) != '') { ?>
        <div class="metabox p-2 mb-3">
          <?php if( get_theme_mod( 'kindergarten_education_grid_post_date',true) != '') { ?>
            <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_grid_date_icon','far fa-calendar-alt')); ?> me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>" class="py-3 px-1"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
          <?php }?>
          <?php if( get_theme_mod( 'kindergarten_education_grid_post_author',true) != '') { ?>
            <span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_grid_author_icon','fas fa-user')); ?> mx-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>" class="py-3 px-1"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span>
          <?php }?>
          <?php if( get_theme_mod( 'kindergarten_education_grid_post_comment',true) != '') { ?>
            <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_grid_comment_icon','fas fa-comments')); ?> mx-2"></i><?php comments_number( __('0 Comment', 'kindergarten-education'), __('0 Comments', 'kindergarten-education'), __('% Comments', 'kindergarten-education') ); ?></span>
          <?php }?>
          <?php if( get_theme_mod( 'kindergarten_education_grid_post_time',true) != '' ) { ?>
            <span class="entry-time me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_grid_time_icon','fas fa-clock')); ?> mx-2"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <?php }?>
        </div>
      <?php }?>
      <div class="box-image">
        <?php 
          if(has_post_thumbnail()) { 
            the_post_thumbnail(); 
          }
        ?>
      </div>
      <div class="new-text">
        <?php $kindergarten_education_excerpt = get_the_excerpt(); echo esc_html( kindergarten_education_string_limit_words( $kindergarten_education_excerpt, esc_attr(get_theme_mod('kindergarten_education_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('kindergarten_education_post_discription_suffix','[...]') ); ?>
      </div> 
      <?php if( get_theme_mod('kindergarten_education_button_text','View More') != ''){ ?>
        <div class="postbtn text-start my-4">
          <a href="<?php the_permalink(); ?>" class="p-2"><?php echo esc_html(get_theme_mod('kindergarten_education_button_text','View More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('kindergarten_education_button_text','View More'));?></span></a>
        </div>
      <?php }?>
    </div>
  </article>
</div>