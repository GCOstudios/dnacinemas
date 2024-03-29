<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dnacinemas
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
    <button class="scroll-up">Scroll Up</button>
		<div class="site-info">
      <?php
      /* translators: 1: Theme name, 2: Theme author. */
      printf( esc_html__( 'Developed by %2$s' ), 'dnacinemas', '<a href="https://jguerra.dev">JGuerra</a>' );
      ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
