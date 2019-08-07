<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dnacinemas
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
  
  <header class="entry-header" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
    <?php
      if (get_post_meta( get_the_ID(), 'surtitle', true )) { ?>
        <span class="entry-surtitle"><?php echo get_post_meta($post->ID, 'surtitle', true) ?></span>
    <?php }
      if (get_post_meta( get_the_ID(), 'title', true )) { ?>
        <h1 class="entry-title"><?php echo get_post_meta($post->ID, 'title', true) ?></h1>
    <?php } else {
        the_title( '<h1 class="entry-title">', '</h1>' );
      }

      if (get_post_meta( get_the_ID(), 'subtitle', true )) { ?>
        <span class="entry-subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true) ?></span>
      <?php } ?>
    <button class="scroll-down">Scroll Down</button>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dnacinemas' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'dnacinemas' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
