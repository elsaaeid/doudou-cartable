<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<?php $related_posts = kindergarten_education_related_posts();
if(get_theme_mod('kindergarten_education_related_enable_disable',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <h3 class="mb-3"><?php echo esc_html(get_theme_mod('kindergarten_education_related_title',__('Related Post','kindergarten-education')));?></h3>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-inner-box mb-3 p-3">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h4>
                        <div class="metabox py-2 mb-3">
                            <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_single_post_date_icon','far fa-calendar-alt')); ?> mx-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>" class="py-3 px-1"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                            <span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_single_post_author_icon','fas fa-user')); ?> mx-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>" class="py-3 px-1"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
                        </div>
                        <?php $kindergarten_education_excerpt = get_the_excerpt(); echo esc_html( kindergarten_education_string_limit_words( $kindergarten_education_excerpt, esc_attr(get_theme_mod('kindergarten_education_related_post_excerpt_number','15')))); ?> <?php echo esc_html( get_theme_mod('kindergarten_education_post_discription_suffix','[...]') ); ?>
                        <?php if( get_theme_mod('kindergarten_education_button_text','View More') != ''){ ?>
                            <div class="postbtn my-4 text-start">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('kindergarten_education_button_text','View More'));?><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_button_icon','fas fa-long-arrow-alt-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('kindergarten_education_button_text','View More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>