<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title><?php the_title(); ?></title>

		<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/css/knacss.css">
		<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/css/responsive.css">
		<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>
	</head>
	<body>
		<!-- main container -->
		<section class="w960p center" id="container">
			
			<!-- header -->
			<header id="header pas" role="header">
				<section id="logo">
					<h1 class="man pan pts pbs">
						<?php bloginfo('title'); ?>
					</h1>
				</section>
			</header>
			<!-- /header -->
	
			<!-- main menu -->
			<nav id="menu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
				<ul class="unstyled man pan">
					<li class="inbl" id="wrap-search">
						<?php get_search_form(); ?>
					</li>
				</ul>
			</nav>
			<!-- /main menu -->