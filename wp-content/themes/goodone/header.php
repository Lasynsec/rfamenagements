<!doctype html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html>
  <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	  <meta name="viewport" content="width=device-width">
       <!--[if lt IE 9]>
          <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
       <![endif]-->
      <title><?php echo wp_title() ?></title>
      <!--<link rel="stylesheet" href="wp-content/themes/goodone/style.css" type="text/css"/>-->
       <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
      <?php wp_head(); ?>
  </head>
<body>
<header class="header">
    <div class="container">
        <h1><?php bloginfo() ?></h1>
        <?php wp_nav_menu(array('theme_location' => 'main_menu')) ?>
    </div>
</header>

