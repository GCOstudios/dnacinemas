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
        ?>
      </div><!-- .entry-content -->
      
      <?php
        endwhile; // End of the loop.
      ?>
    </div>
  </main>

<?php 
  get_footer();
?>