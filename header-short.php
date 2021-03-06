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

<header class="blog">

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
    </div> <!-- /.container -->
  </div>
</header><!--/.header-->

