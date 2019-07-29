<?php
  /* Template Name: Homepage */
  get_header(); ?>

  <main id="main" class="site-main">
    <div class="video-container">
      <video autoplay="autoplay" loop muted playsinline id="welcome-video" data-poster="">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/waves.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/waves.webm" type="video/webm">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/waves.ogv" type="video/ogg">
      </video>
    </div>

    <div class="container">
      <div class="entry-content">
        <?php
          while ( have_posts() ) :
            the_post();
        ?>

        <?php
          the_content();
      
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dnacinemas' ),
            'after'  => '</div>',
          ) );
        ?>
      </div><!-- .entry-content -->
      
      <?php // if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
          <!-- <?php
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
          ?> -->
        </footer><!-- .entry-footer -->
      <?php // endif; ?>
      <?php
        endwhile; // End of the loop.
      ?>
    </div>
  </main>

<?php 
  get_footer();
?>