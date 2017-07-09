<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h2 class="blog-filter-title">Not Found</h2>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php $featuredImage = featured_image_url($post); ?>
          <a href="<?php the_permalink() ?>"><img src="<?php echo $featuredImage ?>"></a>
			<h3 class="entry-title">
	        	<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
	          <?php the_title(); ?>
	         </a>
      	</h3>

			<section class="entry-content">
				<?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
				<?php wp_link_pages( array(
          'before' => '<div class="page-link"> Pages:',
          'after' => '</div>'
        )); ?>
			</section><!-- .entry-content -->

			<section class="footer-content">
				<p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', '); ?></p>
        		<p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
			</section>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="nav-previous"><?php next_posts_link('← Older Entries'); ?></p>
  <p class="nav-next"><?php previous_posts_link('Newer Entries →'); ?></p>
<?php endif; ?>
