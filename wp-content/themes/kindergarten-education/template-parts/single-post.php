<?php
/**
 * The template part for displaying single post
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
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service single-post-page'); ?>>
	<h1><?php the_title(); ?></h1>
	<?php if( get_theme_mod( 'kindergarten_education_single_post_date',true) != '' || get_theme_mod( 'kindergarten_education_single_post_author',true) != '' || get_theme_mod( 'kindergarten_education_single_post_comment',true) != '' || get_theme_mod( 'kindergarten_education_single_post_time',true) != '') { ?>
		<div class="metabox py-2 mb-3">
			<?php if( get_theme_mod( 'kindergarten_education_single_post_date',true) != '') { ?>
				<span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_single_post_date_icon','far fa-calendar-alt')); ?> mx-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>" class="py-3 px-1"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('kindergarten_education_single_post_meta_seperator','|') ); ?>
			<?php }?>
			<?php if( get_theme_mod( 'kindergarten_education_single_post_author',true) != '') { ?>
				<span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_single_post_author_icon','fas fa-user')); ?> mx-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>" class="py-3 px-1"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span><?php echo esc_html( get_theme_mod('kindergarten_education_single_post_meta_seperator','|') ); ?>
			<?php }?>
			<?php if( get_theme_mod( 'kindergarten_education_single_post_comment',true) != '') { ?>
				<span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_single_post_comment_icon','fas fa-comments')); ?> mx-2"></i><?php comments_number( __('0 Comment', 'kindergarten-education'), __('0 Comments', 'kindergarten-education'), __('% Comments', 'kindergarten-education') ); ?></span><?php echo esc_html( get_theme_mod('kindergarten_education_single_post_meta_seperator','|') ); ?>
			<?php }?>
			<?php if( get_theme_mod( 'kindergarten_education_single_post_time',true) != '' ) { ?>
    		<?php echo esc_html( get_theme_mod('kindergarten_education_blog_post_meta_seperator') ); ?><span class="entry-time me-2"><i class="<?php echo esc_attr(get_theme_mod('kindergarten_education_single_post_time_icon','fas fa-clock')); ?> mx-2"></i> <?php echo esc_html( get_the_time() ); ?></span>
  		<?php }?>
  		<?php echo esc_html (kindergarten_education_edit_link()); ?>
		</div>
	<?php }?>
	<?php if( get_theme_mod( 'kindergarten_education_single_post_featured_image',true) != '') { ?>
		<?php if(has_post_thumbnail()) { ?>
			<div class="feature-box">
				<?php the_post_thumbnail(); ?>
			</div>
			<hr>
		<?php } ?>
	<?php } ?>
  <?php if( get_theme_mod('kindergarten_education_show_hide_single_post_categories',true) != ''){ ?>
	   <div class="category mb-2">
	    <span>Categories :</span><?php the_category(); ?>
	   </div>
  <?php } ?>
	<?php if( get_theme_mod( 'kindergarten_education_single_post_tags',true) != '') { ?>
		<div class="tags"><?php the_tags(); ?></div>
	<?php } ?>
	<div class="new-text"><?php
	the_content(); ?></div>

	<?php if( get_theme_mod( 'kindergarten_education_enable_single_post_pagination',true) != '') { ?>
		<?php

		if ( is_singular( 'attachment' ) ) {
			// Parent post navigation.
			the_post_navigation( array(
				'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'kindergarten-education' ),
			) );
		} elseif ( is_singular( 'post' ) ) {
			if( get_theme_mod( 'kindergarten_education_enable_single_post_pagination',true) != '') 
			{
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('kindergarten_education_next_text',__( 'Next page', 'kindergarten-education' ))) . '</span> ' .
					'<span class="screen-reader-text">' . __( ' ', 'kindergarten-education' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('kindergarten_education_prev_text',__( 'Previous page', 'kindergarten-education' ))) . '</span> ' .
					'<span class="screen-reader-text">' . __( ' ', 'kindergarten-education' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		}
		}
		echo '<div class="clearfix"></div>';?>
	<?php } ?>

	<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	?>

	<?php get_template_part('template-parts/related-posts'); ?>
</article>
