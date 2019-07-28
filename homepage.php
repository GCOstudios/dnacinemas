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
      <?php the_content(); ?>
      <!-- <h2><span>Excellence</span> is in our DNA</h2>
      <p class="lead-text">Worldwide Cinema Design and Installation</p>
      <a class="cta-button" href="mailto:rich@dnacinemas.com">Contact us</a>
      <p>tel: 07493 821925</p> -->
    </div>
  </main>

<?php 
  get_footer();
?>