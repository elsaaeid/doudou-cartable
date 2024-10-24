<?php
/**
 * The template part for displaying gallery post
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
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="row m-0">
    <div class="col-lg-2 col-md-2 p-0">
      <?php if( get_theme_mod( 'kindergarten_education_metafields_date',true) != '') { ?>
      <div class="datebox text-center p-1 mt-2">
        <div class="datewrap">
          <span class="date-day"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date( 'd') ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date( 'd') ); ?></span></a></span>
        </div>
        <div class="month-yearwrap">
          <span class="date-month"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date( 'M' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date( 'M' ) ); ?></span></a></span>
          <span class="date-year"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date( 'Y' ) ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span></a></span>
        </div>
      </div>
      <?php }?>
    </div>
    <div class="col-lg-10 col-md-10 inner-box p-1 mb-2">
      <div class="box-image">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the gallery.
            if ( get_post_gallery() ) {
              echo '<div class="entry-gallery">';
              echo get_post_gallery();
              echo '</div>';
            };
          };
        ?>
      </div>
      <h2 class="section-title text-start py-1"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>   
      <div class="new-text">
        <?php $kindergarten_education_theme_lay = get_theme_mod( 'kindergarten_education_content_settings','Excerpt');
        if($kindergarten_education_theme_lay == 'Content'){ ?>
          <?php the_content(); ?>
        <?php }
        if($kindergarten_education_theme_lay == 'Excerpt'){ ?>
          <?php if(get_the_excerpt()) { ?>
            <?php $kindergarten_education_excerpt = get_the_excerpt(); echo esc_html( kindergarten_education_string_limit_words( $kindergarten_education_excerpt, esc_attr(get_theme_mod('kindergarten_education_post_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('kindergarten_education_post_discription_suffix','[...]') ); ?>
          <?php }?>
        <?php }?>
      </div> 
      <div class="row inner-box-cat-tag m-1">
        <div class="col-lg-6 col-md-6">
          <p class="cats m-0"><span class="cats-1"><?php esc_html_e( 'Category: ','kindergarten-education' ); ?></span><?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?>
          </p>
          <p class="tag m-0">
            <span class="tags-1"><?php esc_html_e( 'Tags: ','kindergarten-education' ); ?></span><?php
              if( $tags = get_the_tags() ) {
                echo '<span class="meta-sep"></span>';
                foreach( $tags as $post_tag ) {
                  $sep = ( $post_tag === end( $tags ) ) ? '' : ' ';
                  echo '<a href="' . esc_url(get_term_link( $post_tag, $post_tag->taxonomy )) . '">#' . esc_html($post_tag->name) . '</a>' . esc_html($sep);
                }
              }
            ?>
          </p>        
        </div>
        <div class="col-lg-6 col-md-6">
          <?php if( get_theme_mod('kindergarten_education_button_text','View More') != ''){ ?>
            <div class="postbtn text-md-start text-end my-4">
              <a href="<?php the_permalink(); ?>" class="p-2"><?php echo esc_html(get_theme_mod('kindergarten_education_button_text','View More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('kindergarten_education_button_text','View More'));?></span></a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</article>