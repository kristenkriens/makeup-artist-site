<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>
<header style="background-image: url(<?php echo $src[0]; ?> );" class="front">
  <div class="navigation-bar">
    <div class="container">
      <div class="logo">
        <?php the_custom_logo() ?>
      </div>
      <div class="mobile">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <nav>
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </nav>
    </div>
  </div> <!-- /.container -->

  <div class="container">
    <div class="header-text">
      <h1><?php bloginfo( 'name' ); ?></h1>
      <h2><?php bloginfo( 'description' ); ?></h2>
    </div>
  </div> <!-- /.container -->

  <div class="scroll-down">
    <i class="fa fa-angle-down" aria-hidden="true"></i>
  </div>
</header><!--/.header-->

