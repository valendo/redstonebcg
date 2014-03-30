<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" />
<!-- viewport meta to reset iPhone inital scale -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<!-- css3-mediaqueries.js for IE8 or older -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.js"></script>
<?php wp_head(); ?> 
</head>

<body>
<!-- header-->
<header>
  <div class="headwrap"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">Logo</a> 
    <!-- navi-->
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav' ) ); ?>    
  </div>
  </div>
</header>