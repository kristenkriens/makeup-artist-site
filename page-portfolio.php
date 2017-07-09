<?php get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
      <div class="gallery" data-flickity>
        <?php
          if(have_rows('gallery')) {
            while(have_rows('gallery')) {
              the_row();
              ?>
              <div class="gallery-item">
                <?php
                  $galleryImage = get_sub_field('gallery_image');
                ?>
                <a href="<?php echo $galleryImage['url'] ?>" rel="lightbox">
                  <div class="image-overlay">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                  <img src="<?php echo $galleryImage['url'] ?>">
                </a>
              </div>
              <?php
            } // end while
          } // end if
        ?>
      </div>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>