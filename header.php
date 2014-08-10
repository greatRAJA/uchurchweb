<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php wp_title('|',1,'right'); ?><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />

		<!-- CSS -->
		<!--<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">-->

		<!-- javascript -->
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- include cover image for front page only -->
		<?php if (is_front_page())	{ ?> 
			<header id="header">
				<div class="bcg" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px" data-anchor-target="#header"/>
			</header>
		<?php } ?>
		
		<!-- navigation bar -->
		<nav class="navbar navbar-default navbar-fixed-top remove-bottom-margin" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/UCHURCH.png"/></a>
				</div>
				<ul class="pull-right">
					<?php
						wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'header-menu',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'echo'				=> 'false',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</ul>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>

		<div><!-- begin body -->