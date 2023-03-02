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
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- font link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="navbar-header">
	<nav class="navbar navbar-me navbar-expand-lg bg-white">
		<div class="container">
			<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
				<?php
				$logoImageId  = get_field('header_logo','option');
				if($logoImageId){
				    $logoImageSrc = wp_get_attachment_image_url($logoImageId,'full');
				    $headerImgAlt = get_post_meta( $logoImageId, '_wp_attachment_image_alt', true);
				    if(!empty($headerImgAlt)){
				        $logoImgAlt = get_post_meta( $logoImageId, '_wp_attachment_image_alt', true);
				    }
				    else{
				        $logoImgAlt = get_the_title($termthumbid);
				    }
				}
				else{
					$logoImageSrc = get_stylesheet_directory_uri().'/assests/image/logo.png';
				} ?>
				<img src="<?php echo $logoImageSrc; ?>" alt="<?php echo $logoImgAlt; ?>">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<?php
				wp_nav_menu( array(
					'theme_location'  => 'primary',
					'menu_class'      => 'navbar-nav ms-auto mb-2 mb-lg-0',
					'container_class' => 'primary-menu-container',
					'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
					'walker'            => new loggmax_class_walker()
				)); ?> 
			</div>
		</div>
	</nav>
</section>
<!-- navbar close -->

<!-- Banner Section -->
<?php
$bannerImageUrl 	= get_field('banner_image');
$bannerMainHeading 	= get_field('banner_main_heading');
$bannerSubHeading	= get_field('banner_sub_heading');
$firstBannerButton 	= get_field('first_banner_button'); 
$secondBannerButton = get_field('second_banner_button'); 
if($bannerImageUrl){
	$bannerImgUrl = get_field('banner_image');
}
else{
	$bannerImgUrl = get_stylesheet_directory_uri().'/assest/image/hero-banner.png';
} ?>
<section class="hero-banner" style="background-image: url('<?php echo $bannerImgUrl; ?>');">
	<div class="container d-table h-100">
		<div class="banner-content d-table-cell align-middle">
			<?php
			if($bannerMainHeading){ ?>
				<h2 data-aos="fade-right" data-aos-duration="1500">
					<?php echo $bannerMainHeading; ?>
				</h2>
			<?php
			}
			if($bannerSubHeading){ ?>
				<p data-aos="fade-right" data-aos-duration="1500">
					<?php echo $bannerSubHeading; ?>
				</p>
			<?php
			} ?>
			<div data-aos="fade-right" data-aos-duration="1500">
				<?php
				if(!empty($firstBannerButton)){
				    if( $firstBannerButton['url'] == '#' ){
				        $link = "javascript:void(0);";
				        $target = "";
				    }else{
				        $link = $firstBannerButton['url'];
				        $target = $firstBannerButton['target'];
				    } ?>
				    <a href="<?php echo $link; ?>" target="<?php echo $target; ?>" class="btn theme-btn-dark me-3">
				    	<?php echo $firstBannerButton['title']; ?>
				    </a>
				<?php
				}
				if(!empty($secondBannerButton)){
				    if( $secondBannerButton['url'] == '#' ){
				        $link = "javascript:void(0);";
				        $target = "";
				    }else{
				        $link = $secondBannerButton['url'];
				        $target = $secondBannerButton['target'];
				    } ?>
				    <a href="<?php echo $link; ?>" target="<?php echo $target; ?>" class="btn theme-btn outline-btn">
				    	<?php echo $secondBannerButton['title']; ?>		
				    </a>
				<?php
				} ?>
			</div>
		</div>
	</div>
</section>
<!-- banner end -->
