<?php 
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<?php 
	// Get the favicon.
	$favicon = IMAGES . '/icons/favicon.png';

	// Get the custom touch icon.
	$touch_icon = IMAGES . '/icons/apple-touch-icon-152x152-precomposed.png';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
	
	<!-- Favicon and Apple Icons -->
	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $touch_icon; ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="home">
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
	<![endif]-->
	
	<!-- Start Site Header -->
	<header class="site-header">
		<div class="top-header hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ul class="horiz-nav pull-right">
							<li><a href="tel:+17604206581">Call Us Today <i class="fa fa-phone" style="margin-left:10px;"></i> 760.420.6581</a></li>
							<li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="middle-header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-8 col-xs-12" style="text-align:center;">
						<div id="mobile-header" style="position:relative;left:0px;">
							<a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
						</div>
						
						<h1 class="logo">
							<a href="/">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Logo">
							</a>
						</h1>
					</div>
					<div class="col-md-8 col-sm-4 col-xs-0 s-main-navigation">
						
						<div id="navigation">
							
								
								<?php
								
								$defaults = array(
									'theme_location'  => '',
									'menu'            => '',
									'container'       => 'nav',
									'container_class' => 'nav',
									'container_id'    => '',
									'menu_class'      => 'nav nav-pills',
									'menu_id'         => 'navPrimary',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 1,
									'walker'          => ''
								);
								
								wp_nav_menu( $defaults );
								
								?>
								
								
								
							
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End Site Header -->
	

	<!-- MAIN CONTENT AREA -->
	<div class="container">
		<div class="row">