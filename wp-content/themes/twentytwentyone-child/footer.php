<section class="footer bg-light-blue pt-5" data-aos="fade-up" data-aos-duration="1500">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php
				$footerLogoImageId  = get_field('footer_logo','option');
				$footerDescription  = get_field('footer_description','option');
				$socialMenuHeading	= get_field('social_menu_heading','option');
				$socialMenuSection	= get_field('social_menu_section','option');
				if($footerLogoImageId){
				    $footerLogoSrc = wp_get_attachment_image_url($footerLogoImageId,'full');
				    $FooterLogoAlt = get_post_meta( $footerLogoImageId, '_wp_attachment_image_alt', true);
				    if(!empty($FooterLogoAlt)){
				        $logoImgAlt = get_post_meta( $footerLogoImageId, '_wp_attachment_image_alt', true);
				    }
				    else{
				        $logoImgAlt = get_the_title($termthumbid);
				    }
				}
				else{
					$footerLogoSrc = get_stylesheet_directory_uri().'/assests/image/logo.png';
				} ?>
				<img class="mb-4" src="<?php echo $footerLogoSrc; ?>" alt="<?php echo $logoImgAlt; ?>" title="<?php echo $logoImgAlt; ?>" />
				<p><?php echo $footerDescription; ?></p>

				<?php
				if(!empty($socialMenuSection)){ ?>
					<div class="d-flex">
						<?php
						if($socialMenuHeading){ ?>
							<p class="pe-2"><?php echo $socialMenuHeading; ?> : </p>
						<?php
						}
						foreach ($socialMenuSection as $socialMenuValue) {
							$socialMediaLinks = $socialMenuValue['social_media_links'];
							$socialMediaIcon  = $socialMenuValue['social_media_icon'];
							if(!empty($socialMediaLinks)){
                                if( $socialMediaLinks['url'] == '#' ){
                                    $link = "javascript:void(0);";
                                    $target = "";
                                }
                                else{
                                    $link = $socialMediaLinks['url'];
                                    $target = $socialMediaLinks['target'];
                                } 
                            } ?>
						 	<span class="pe-2">
								<a href="<?php echo $link; ?>" target="<?php echo $target; ?>">
									<?php echo $socialMediaIcon; ?>
								</a>
							</span>
						<?php
						} ?>
					</div>
				<?php
				} ?>
			</div>
			<div class="col-md-4">
				<h3 class="mt-5">Useful Links:</h3>
				<?php 
				wp_nav_menu( array(
				      'theme_location' 	=> 'footer-menu',
				      'container' 		=> 'ul',
				      'menu_id'        	=> '',
				      'menu_class'  	=> 'quick-link w-5',
				      'submenu_class' 	=> 'nav-item dropdown-menu',
				  ) ); 
				?>    
			</div>

			<?php
			$mobileNumber 			= get_field('mobile_number','option');
			$alternateMobileNumber 	= get_field('alternate_mobile_number','option');
			$emailAddress 			= get_field('email_address','option');
			$copyrightContent 		= get_field('copyright_content','option');
			if($mobileNumber || $alternateMobileNumber || $emailAddress){ ?>
				<div class="col-md-4">
					<h3 class="mt-5">Contact</h3>
					<ul class="w-5">
						<li>
							<a href="tel:+91 <?php echo $mobileNumber; ?>"><?php echo $mobileNumber; ?></a>
						</li>
						<li>
							<a href="tel:+91 <?php echo $alternateMobileNumber; ?>"><?php echo $alternateMobileNumber; ?></a>
						</li>
						<li><a href="mailto:<?php echo $emailAddress; ?>"><?php echo $emailAddress; ?></a></li>
					</ul>
				</div>
			<?php
			} ?>
		</div>
		<div class="pb-2 pt-5">
			<p class="text-center">Subscribe to recieve latest news and notification</p>
			<form
				class="row row-cols-lg-auto g-3 align-items-center justify-content-between sub-form border-bottom">
				<div class="col-10">
					<label class="visually-hidden" for="inlineFormInputmail">Email</label>
					<div class="input-group">
						<input type="mail" class="form-control" id="inlineFormInputmail"
							placeholder="Enter email here">
					</div>
				</div>

				<div class="col-2 text-end">
					<button type="submit" class="btn footer-sub-btn btn-primary">Subscribe Us</button>
				</div>
			</form>
		</div>
		<div class="pt-3 site-bottom pb-3">
			<div class="row">
				<div class="col-md-8">
					<p><?php echo $copyrightContent; ?></p>
				</div>
				<?php
				$extraLinkSection	= get_field('extra_link_section','option');
				if(!empty($extraLinkSection)){ ?>
					<div class="col-md-4">
						<div class="d-flex text-end justify-content-between">
							<?php
							foreach ($extraLinkSection as $extraLinkValue) { 
								$extraLink = $extraLinkValue['extra_link'];
								if(!empty($extraLink)){
	                                if( $extraLink['url'] == '#' ){
	                                    $link = "javascript:void(0);";
	                                    $target = "";
	                                }
	                                else{
	                                    $link = $extraLink['url'];
	                                    $target = $extraLink['target'];
	                                } 
	                            } ?>
								<a href="<?php echo $link; ?>" target="<?php echo $target; ?>">
									<?php echo $extraLink['title']; ?>
								</a>
							<?php
							} ?>
						</div>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</div>
</section>
	<!-- footer section -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous"
		referrerpolicy="no-referrer"></script> -->
	<!--
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
	

	<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
		crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://github.hubspot.com/odometer/odometer.js"></script>
	<!-- aos -->
	<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
	jQuery(document ).ready(function() {
		jQuery('#owl-carousel').owlCarousel({
			loop: true,
			margin: 30,
			dots: false,
			nav: true,
			items: 3,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:1,
			            nav:false
			        },
			        1000:{
			            items:3,
			            nav:true,
			            loop:false
			        }
			    }
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
			responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:1,
			            nav:false
			        },
			        1000:{
			            items:3,
			            nav:true,
			            loop:false
			        }
			    }
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
			responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:1,
			            nav:false
			        },
			        1000:{
			            items:3,
			            nav:true,
			            loop:false
			        }
			    }
		});
		jQuery('#blog-carousel').owlCarousel({
			loop: true,
			margin: 30,
			dots: false,
			nav: true,
			items: 3,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true, 
			responsiveClass:true,
			    responsive:{
			        0:{
			            items:1,
			            nav:true
			        },
			        600:{
			            items:1,
			            nav:false
			        },
			        1000:{
			            items:3,
			            nav:true,
			            loop:false
			        }
			    }
		});

	});
	setTimeout(function () {
			odometerYear.innerHTML = 35;//ending number
		}, 1000);//last argument is for time in milliseconds or seconds depending on the need

		setTimeout(function () {
			odometerClient.innerHTML = 35;//ending number
		}, 1000);//last argument is for time in milliseconds or seconds depending on the need

		setTimeout(function () {
			odometerPlace.innerHTML = 35;//ending number
		}, 1000);//last argument is for time in milliseconds or seconds depending on the need
	</script>

	    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 5) {
                $(".navbar-me").addClass("fixed-me");
            } else {
                $(".navbar-me").removeClass("fixed-me");
            }
        });
    </script>
	<script>
		AOS.init();
	</script>

	<script>
		$(document).ready(function ($)
 		{
			$(".pagination .page-item .page-numbers").addClass("page-link");
			$(".pagination .page-item .page-link").removeClass("page-numbers");
		});
    </script>
	<?php wp_footer(); ?>
	
</body>

</html>