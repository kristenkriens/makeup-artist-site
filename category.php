<?php get_header('short'); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <h2 class="blog-filter-title">Category Archives: <?php single_cat_title(); ?></h2>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>