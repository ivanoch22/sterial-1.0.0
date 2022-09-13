<!doctype html>
<html lang="<?= get_bloginfo('language') ?>">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="<?= THEME_IMG . '/favicon.png'?>">

    <?php wp_head(); ?>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= THEME_FTS . '/icomoon/style.css'?>">
	<link rel="stylesheet" href="<?= THEME_FTS . '/flaticon/font/flaticon.css'?>">

	<link rel="stylesheet" href="<?= THEME_CSS . '/tiny-slider.css'?>">
	<link rel="stylesheet" href="<?= THEME_CSS . '/aos.css'?>">
	<link rel="stylesheet" href="<?= THEME_CSS . '/flatpickr.min.css'?>">
	<link rel="stylesheet" href="<?= THEME_CSS . '/glightbox.min.css'?>">
	<link rel="stylesheet" href="<?= THEME_CSS . '/style.css'?>">


</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav mt-3">
		<div class="container">

			<div class="site-navigation">
				<div class="row">
					<div class="col-6 col-lg-3">
						<a href="<?= home_url ?>" class="logo m-0 float-start">Sterial</a>
					</div>
					<div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
						<ul class="js-clone-nav  text-center site-menu p-0 m-0">
							<li class="active"><a href="<?= home_url ?>">Home</a></li>
							<li><a href="<?= get_permalink( get_page_by_path( 'about' ) ) ?>">About us</a></li>
							<li class="has-children">
								<a href="javascript:void(0)">Dropdown</a>
								<ul class="dropdown">
									<li><a href="javascript:void(0)">Menu One</a></li>
									<li class="has-children">
										<a href="javascript:void(0)">Menu Two</a>
										<ul class="dropdown">
											<li><a href="javascript:void(0)">Sub Menu One</a></li>
											<li><a href="javascript:void(0)">Sub Menu Two</a></li>
											<li><a href="javascript:void(0)">Sub Menu Three</a></li>
										</ul>
									</li>
									<li><a href="javascript:void(0)">Menu Three</a></li>
								</ul>
							</li>
							<li><a href="<?= get_permalink( get_page_by_path( 'services' ) ) ?>">Services</a></li>
							<li><a href="<?= get_permalink( get_page_by_path( 'blog' ) ) ?>">Blog</a></li>

						</ul>
					</div>
					<div class="col-6 col-lg-3 text-lg-end">
						<ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
							<li class="cta-button"><a href="<?= get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact Us</a></li>
						</ul>

						<a href="javascript:void(0)" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
							<span></span>
						</a>
					</div>
				</div>
			</div>
			
		</div>
	</nav>