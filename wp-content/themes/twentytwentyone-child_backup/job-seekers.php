<?php /* Template Name: Job Seekers Page */ ?>
<?php get_header(); ?>

	<section class="common-box pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container h-100">
			
			<h5 data-aos="fade-right" data-aos-duration="1500"
			class="text-uppercase theme-red-font sub-heading f-600 pb-5 text-center"><?php echo get_field('sectiontwoHeading'); ?></h5>

			<div class="row ">
			<?php $sectiontwoImages 	= get_field('sectiontwoImages');
			foreach($sectiontwoImages as $contentValue){
			$sectionTwoImageId = $contentValue['image'];
			if($sectionTwoImageId){
				$sectionTwoImgSrc = wp_get_attachment_image_url($sectionTwoImageId,'full');
			} ?>
				<div class="col-md-3">
					<div class="brand-logo">
						<img src="<?php echo $sectionTwoImgSrc; ?>">
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- second section ends -->
	
	<section class="crousal pt-80 pb-80" data-aos="fade-up" data-aos-duration="1500">

		<div class="container">
			<h2 class="theme-red-font text-center " data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('heading'); ?></h2>
			<h4 class="sub-heading pb-3 text-center text-uppercase" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('subheading'); ?></h4>
			<p class="short-text text-center pb-5" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('description'); ?></p>
			<div id="owl-carousel" class="owl-carousel feature-carousal owl-theme">
			<?php echo do_shortcode( '[featuredjob]' ); ?>
			</div>
		</div>
	</section>

	<!-- owl crousal -->
	
	<section class="common-box bg-light-blue pt-80 industries-we-serve-box pb-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h2 data-aos="fade-right" data-aos-duration="1500" class="text-center theme-red-font"><?php echo get_field('Industrialheading'); ?>
				</h2>
			


				<div class="row align-items-center">
					<?php $industrialservecategory = get_field('industrialservecategory');
							 if($industrialservecategory){
								foreach($industrialservecategory as $row){ ?>
								
					<div class="col-md-3">
						<div class="service-box">
							<?php 
					if(!empty($row['industrialservelink']['url'])){
	                    if( $row['industrialservelink']['url'] == '#' ){
	                        $link = "javascript:void(0);";
	                        
	                    }else{
	                        $link = $row['industrialservelink']['url'];
	                
	                    } 
	                } ?> 
							<a data-aos="fade-right" data-aos-duration="1500"
								class="" href="<?php echo $link; ?>">
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<?php 
								$industrialImgId =  $row['industrialserveIcon'];
								if($industrialImgId){
									$industrialImageSrc = wp_get_attachment_image_url($industrialImgId,'full');
									$industrialImgAlt = get_post_meta( $industrialImgId, '_wp_attachment_image_alt', true);
								} ?>
								<img class="icon" src="<?php echo $industrialImageSrc; ?>" alt="<?php echo $industrialImgAlt; ?>"
									title="<?php echo $industrialImgAlt; ?>" />
								<h4><?php echo $row['IndustrialServeTitle'] ?></h4>
							</div>
							</a>
						</div>
					</div>
					<?php } } ?>

				</div>
		</div>
	</section>
	<!-- service tab -->
	

	<section class="crousal pt-80 pb-80" data-aos="fade-up" data-aos-duration="1500">

		<div class="container">
			<h2 class="theme-red-font text-center " data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('blog_heading'); ?></h2>
			<h4 class="sub-heading pb-3 text-center text-uppercase" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('blog_subheading'); ?>
			</h4>
			<p class="short-text text-center pb-5" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('blog_description');?></p>
			<div id="blog-carousel" class="owl-carousel blog-carousal owl-theme">
			

			<?php echo do_shortcode( '[blog]' ); ?>

			</div>
		</div>
	</section>
	<!-- owl crousal -->

	<?php

 ?>

	<section class="crousal bg-light-blue pb-80 pt-80" data-aos="fade-up" data-aos-duration="1500">

		<div class="container">
			<h4 class="sub-heading pb-3 text-uppercase" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('testimonial_heading');?>
			<h2 class="theme-red-font " data-aos="fade-up" data-aos-duration="1500"> <?php echo get_field('testimonial_subheading');?></h2>
			<p class="pb-5" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('testimonial_description');?></p>
			<div id="owl-carousel-client" class="owl-carousel client-carousel owl-theme">
				
			<?php echo do_shortcode( '[testimonial]' ); ?>

			</div>
		</div>
	</section>
	<?php
				//} ?>
	<!-- owl crousal -->
	<!-- testimonial -->

	<section class="contact-section pt-80 pb-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="theme-red-font font-36 text-uppercase f-600"><?php echo get_field('subscribe_heading');?></h2>
					<h4 class="sub-heading pb-5"><?php echo get_field('subscribe_description');?></h4>
				</div>
				<div class="col-md-7 c-block">
					<img class="contact-left-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/dots.png" alt="dots">
					<div class=" bg-blue contact-form request-form">
						<form class="row g-3 align-items-center">
							<div class="col-md-7 ">
								<label for="inputState" class="form-label text-white " ><?php echo get_field('contact_form_heading');?></label>
								<select id="inputState" class="form-select">
									<option selected>Please Select...</option>
									<option>Job Seeker</option>
									<option>Company</option>
								</select>								
								
							</div>
							<div class="col-md-5">
								<label for="inputmail" class="form-label ">Your Email</label>
								<input type="text" class="form-control" id="inputmail" placeholder="Your Email">
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary"><?php echo get_field('contact_form_button');?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact section -->

	<?php get_footer(); ?>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous"
		referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
	<!-- <script>
		jQuery('#blog-carousel').owlCarousel({
			loop: true,
			margin: 30,
			dots: false,
			nav: true,
			items: 3,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true
		});
		jQuery('#owl-carousel').owlCarousel({
			loop: true,
			margin: 30,
			dots: false,
			nav: true,
			items: 3,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true
		});
		jQuery('#owl-carousel-client').owlCarousel({
			loop: true,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			margin: 30,
			dots: false,
			nav: false,
			items: 2,
		});
	</script> -->

<!-- 	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
		crossorigin="anonymous"></script> -->



	<!-- aos -->
	<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script> -->


