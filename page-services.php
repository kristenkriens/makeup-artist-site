<?php get_header();  ?>

<div class="main">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="services">
        <div class="container">
          <h2>
            <div class="title-1">
              <?php the_field('services_title_1'); ?>
          </div>
          <div class="title-2 light">
            <?php the_field('services_title_2'); ?>
          </div>
        </h2>
        <div class="services-content">
          <div class="services-image">
            <?php $servicesImage1 = get_field('services_image_1'); ?>
            <img src="<?php echo $servicesImage1[url] ?>">
            <h3><?php the_field('services_image_1_title'); ?></h3>
          </div>
          <div class="services-image">
            <?php $servicesImage2 = get_field('services_image_2'); ?>
            <img src="<?php echo $servicesImage2[url] ?>">
            <h3><?php the_field('services_image_2_title'); ?></h3>
          </div>
          <div class="services-image">
            <?php $servicesImage3 = get_field('services_image_3'); ?>
            <img src="<?php echo $servicesImage3[url] ?>">
            <h3><?php the_field('services_image_3_title'); ?></h3>
          </div>
         </div>
      </div> <!-- /.container -->
    </div> <!-- /.services -->
    <div class="pricing">
        <div class="container">
          <h2>
            <div class="title-1">
              <?php the_field('pricing_title_1'); ?>
            </div>
            <div class="title-2">
              <?php the_field('pricing_title_2'); ?>
            </div>
          </h2>
          <div class="pricing-content">
            <div class="pricing-content-left">
              <?php
                if(have_rows('pricing_category_left')) {
                  while(have_rows('pricing_category_left')) {
                    the_row();
                    ?>
                    <div class="pricing-category">
                      <h3><?php the_sub_field('pricing_category_left_title'); ?></h3>
                      <ul class="pricing-category-info">
                        <?php
                          if(have_rows('pricing_category_left_info')) {
                            while(have_rows('pricing_category_left_info')) {
                              the_row();
                              ?>
                              <li class="clearfix">
                                <p class="title"><?php the_sub_field('pricing_item_left_title'); ?></p>
                                <p class="price"><?php the_sub_field('pricing_item_left_price'); ?></p>
                              </li>
                              <?php
                            } // end while
                          } // end if
                        ?>
                      </ul>
                    </div>
                    <?php
                  } // end while
                } // end if
              ?>
           </div>
           <div class="pricing-content-right">
              <?php
                if(have_rows('pricing_category_right')) {
                  while(have_rows('pricing_category_right')) {
                    the_row();
                    ?>
                    <div class="pricing-category">
                      <h3><?php the_sub_field('pricing_category_right_title'); ?></h3>
                      <ul class="pricing-category-info">
                        <?php
                          if(have_rows('pricing_category_right_info')) {
                            while(have_rows('pricing_category_right_info')) {
                              the_row();
                              ?>
                              <li class="clearfix">
                                <p class="title"><?php the_sub_field('pricing_item_right_title'); ?></p>
                                <p class="price"><?php the_sub_field('pricing_item_right_price'); ?></p>
                              </li>
                              <?php
                            } // end while
                          } // end if
                        ?>
                      </ul>
                    </div>
                    <?php
                  } // end while
                } // end if
              ?>
           </div>
         </div>
        </h2>
      </div> <!-- /.container -->
    </div> <!-- /.pricing -->
    <?php endwhile; // end the loop?>
</div> <!-- /.main -->

<?php get_footer(); ?>
