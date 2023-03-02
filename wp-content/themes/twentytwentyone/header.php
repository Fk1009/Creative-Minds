<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Creative Mind</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assest/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		crossorigin="anonymous">
	<!-- font link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<!-- font- awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- aos -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- owl -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
		rel="stylesheet">
</head>


<body>
	<section class="navbar-header">
		<nav class="navbar navbar-expand-lg bg-white">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/assest/image/logo.png"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								Service
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Contracting</a></li>
								<li><a class="dropdown-item" href="#">Hiring Recruitment?</a></li>
								<li><a class="dropdown-item" href="#">Consultation</a></li>
								<li><a class="dropdown-item" href="#">Training?</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Job Seekers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Employers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>