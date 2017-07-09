<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="blog-entry">
          <?php $featuredImage = featured_image_url($post); ?>
          <a href="<?php the_permalink() ?>"><img src="<?php echo $featuredImage ?>"></a>
          <p class="post-info"><span><?php echo get_the_date(); ?></span> <span><?php echo the_category(', '); ?></span> <span>By <?php the_author_posts_link(); ?></span> <span><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span></p>
          <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
          <?php the_content(); ?>
        </div>

      <?php endwhile; // end the loop?>


      <div id="nav-below" class="clearfix">
        <p class="nav-previous"><?php posts_nav_link(' ','← Previous page',' '); ?></p>
        <p class="nav-next"><?php posts_nav_link(' ',' ','Next page →'); ?></p>
      </div>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>