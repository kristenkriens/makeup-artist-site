<?php get_header('front');  ?>

<div class="main">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="about">
	      <div class="container">
		      <h2>
		      	<div class="title-1">
		      		<?php the_field('about_title_1'); ?>
					</div>
					<div class="title-2">
						<?php the_field('about_title_2'); ?>
					</div>
				</h2>
				<div class="about-content clearfix">
					<div class="about-image">
						<?php $aboutImage = get_field('about_image'); ?>
						<img src="<?php echo $aboutImage[url] ?>">
					</div>
		      	<p><?php the_field('about_text'); ?></p>
			   </div>
			</div> <!-- /.container -->
		</div> <!-- /.about -->
		<?php $contactBackground = get_field('contact_background'); ?>
		<div class="contact" style="background-image:url('<?php echo $contactBackground[url] ?>');">
	      <div class="container">
		      <h2>
		      	<div class="title-1">
		      		<?php the_field('contact_title_1'); ?>
					</div>
					<div class="title-2 light">
						<?php the_field('contact_title_2'); ?>
					</div>
				</h2>
				<div class="contact-content">
					<div class="contact-text">
						<p>Address</p>
						<h3><?php the_field('contact_address'); ?></h3>
						<p>Phone number</p>
						<h3><a href="tel:<?php the_field('contact_phone'); ?>">+<?php the_field('contact_phone'); ?></a></h3>
						<p>Email</p>
						<h3 class="email"><a href="mailto:<?php get_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></h3>
						<p>Follow me</p>
						<div class="social-links">
							<?php
							  if(have_rows('social_links')) {
							    while(have_rows('social_links')) {
							      the_row();
							      ?>
							      <a href="<?php the_sub_field('site_link'); ?>" target="_blank"><i class="fa fa-<?php the_sub_field('site_name'); ?>" aria-hidden="true"></i></a>
							      <?php
							    } // end while
							  } // end if
							?>
						</div>
					</div>
				   <div class="contact-form">
				   	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Contact Form Widget Area") ) : ?>
						<?php endif;?>
				   </div>
			   </div>
			</div> <!-- /.container -->
		</div> <!-- /.contact -->
    <?php endwhile; // end the loop?>
</div> <!-- /.main -->

<?php get_footer(); ?>