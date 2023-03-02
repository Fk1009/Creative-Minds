<?php get_header(); ?>

<?php
$biggestStartupBgImage 	= get_field('biggest_startup_bg_image');
$biggestStartupHeading 	= get_field('biggest_startup_heading');
$percentageValue		= get_field('percentage_value');
$biggestStartupContent	= get_field('biggest_startup_content'); ?>  
<section class="common-box rocket-bg mb-80 " data-aos="fade-up" data-aos-duration="1500" style="background-image: url('<?php echo $biggestStartupBgImage; ?>');">
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<?php
				if($biggestStartupHeading || $percentageValue || $biggestStartupContent){ ?>
					<div class="small-container pl-50">
						<?php
						if($biggestStartupHeading){ ?>
							<h5 data-aos="fade-right" data-aos-duration="1500" class="text-uppercase theme-red-font sub-heading f-600"><?php echo $biggestStartupHeading; ?></h5>
						<?php
						}
						if($percentageValue){ ?>
							<h2 data-aos="fade-right" data-aos-duration="1500" class="large-font">
								<?php echo $percentageValue; ?>
							</h2>
						<?php
						}
						if($biggestStartupContent){ ?>
							<p data-aos="fade-right" data-aos-duration="1500" class="f-600">
								<?php echo $biggestStartupContent; ?>
							</p>
						<?php
						} ?>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</div>
</section>
<!-- second section ends -->

<!-- Service Provider Section -->
<?php
$serviceProviderHeading 	= get_field('service_provider_heading');
$serviceProviderSubHeading 	= get_field('service_provider_sub_heading');
$serviceProviderContent		= get_field('service_provider_content');
$serviceItemSection			= get_field('service_item_section');
if(!empty($serviceItemSection)){ ?>
	<section class="common-box service-bg pb-5" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h2 data-aos="fade-right" data-aos-duration="1500" class="text-center theme-red-font">
				<?php echo $serviceProviderHeading; ?>
			</h2>
			<h4 data-aos="fade-right" data-aos-duration="1500" class="text-center sub-heading text-uppercase pb-3"><?php echo $serviceProviderSubHeading; ?></h4>
			<p data-aos="fade-right" data-aos-duration="1500" class="short-text text-center mb-5 f-14">
				<?php echo $serviceProviderContent; ?>
			</p>
			<div class="row align-items-center">
				<?php
				foreach ($serviceItemSection as $value) { 
					$serviceImageId = $value['service_image'];
					$serviceIconId = $value['service_icon'];
					$serviceName = $value['service_name'];
					$serviceButtonLink = $value['service_button_link'];

					if($serviceImageId){
					    $serviceImgSrc = wp_get_attachment_image_url($serviceImageId,'full');
					    $serviceImgAlt = get_post_meta( $serviceImageId, '_wp_attachment_image_alt', true);
					}

					if($serviceIconId){
					    $serviceIconSrc = wp_get_attachment_image_url($serviceIconId,'full');
					    $serviceIconAlt = get_post_meta( $serviceIconId, '_wp_attachment_image_alt', true);
					}


					if(!empty($serviceButtonLink)){
	                    if( $serviceButtonLink['url'] == '#' ){
	                        $link = "javascript:void(0);";
	                        $target = "";
	                    }else{
	                        $link = $serviceButtonLink['url'];
	                        $target = $serviceButtonLink['target'];
	                    } 
	                } ?>
					<div class="col-md-4">
						<div class="service-box">
							<img class="icon" src="<?php echo $serviceImgSrc; ?>" alt="<?php echo $serviceImgAlt; ?>" title="<?php echo $serviceName; ?>" />
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php echo $serviceIconSrc; ?>" alt="<?php echo $serviceName; ?>"
									title="<?php echo $serviceName; ?>" />
								<h4><?php echo $serviceName; ?></h4>
							</div>
							<a data-aos="fade-right" data-aos-duration="1500" class="text-center d-block mt-4 more-btn btn" href="<?php echo $link; ?>" target="<?php echo $target; ?>"><?php echo $serviceButtonLink['title']; ?></a>
						</div>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</section>
<?php
} ?>
<!-- service tab -->

<?php
$ourServicesHeading 	= get_field('our_services_heading');
$ourServicesSubHeading 	= get_field('our_services_sub_heading');
$args=array(
	'post_type'      => 'service',
	'post_status'    => 'publish',
	'posts_per_page' => -1
);
$servicePosts = get_posts( $args );
if(!empty($servicePosts)){ ?>
	<section class="section-service-area pb-80 pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<div class="d-flex align-items-start" data-aos="fade-right" data-aos-duration="1500">
				<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<h2 class="theme-red-font"><?php echo $ourServicesHeading; ?></h2>
					<p class="text-white mb-5 text-uppercase"><?php echo $ourServicesSubHeading; ?></p>
					<?php
					$count = 1;
					foreach ($servicePosts as $servicePostsValue) { 
						$serviceId 	= $servicePostsValue->ID;
						$slug 		= $servicePostsValue->post_name;
						$serviceIconId  = get_field('service_icon',$serviceId);
						if($serviceIconId){
						    $serviceIconSrc = wp_get_attachment_image_url($serviceIconId,'full');
						    $serviceIconAlt = get_post_meta( $serviceIconId, '_wp_attachment_image_alt', true);
						    if(empty($serviceIconAlt)){
						        $serviceIconAlt = get_the_title($serviceId);
						    }
						}
						if($count == 1){$active = "active";}else{$active = "";} ?>
						<button class="nav-link <?php echo $active; ?>" id="v-pills-<?php echo $slug; ?>-tab" data-bs-toggle="pill"
						data-bs-target="#v-pills-<?php echo $slug; ?>" type="button" role="tab" aria-controls="v-pills-<?php echo $slug; ?>"
						aria-selected="true">
							<img class="tab-area-icon" src="<?php echo $serviceIconSrc; ?>" alt="<?php echo $serviceIconAlt; ?>" title="<?php echo $serviceIconAlt; ?>" /> <?php echo $servicePostsValue->post_title; ?>
						</button>
					<?php 
					$count++;
					} ?>
				</div>
				<div class="tab-content" id="v-pills-tabContent">

					<?php
					$counter = 1;
					foreach ($servicePosts as $servicePostsValue) { 

						$serviceId 	= $servicePostsValue->ID;
						$slug 		= $servicePostsValue->post_name;
						if($counter == 1){$active = "show active";}else{$active = "";} ?>
						<div class="tab-pane fade <?php echo $active; ?>" data-aos="fade-up" data-aos-duration="1500" id="v-pills-<?php echo $slug; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $slug; ?>-tab" tabindex="0">
							<div class="industries">
								<p class="inner-text"><?php echo $servicePostsValue->post_content; ?></p>
							</div>
							<img src="<?php echo get_the_post_thumbnail_url($serviceId); ?>" alt="image" title="image" />
							<ul>
								<li class="ps-2"><?php echo get_the_title($serviceId); ?></li>
							</ul>
						</div>
					<?php
					$counter++;
					} ?>
				</div>
			</div>
		</div>
	</section>
<?php
} ?>
<!-- service section -->
<?php
$featuredJobsHeading 	= get_field('featured_jobs_heading');
$featuredJobsSubHeading = get_field('featured_jobs_sub_heading');
$featuredJobsContent 	= get_field('featured_jobs_content');
$jobArgs=array(
	'post_type'      => 'job',
	'post_status'    => 'publish',
	'posts_per_page' => -1
);
$jobPosts = get_posts( $jobArgs );
if(!empty($jobPosts)){ ?>
	<section class="crousal pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h2 class="theme-red-font text-center " data-aos="fade-up" data-aos-duration="1500">
				<?php echo $featuredJobsHeading; ?>
			</h2>
			<h4 class="sub-heading pb-3 text-center text-uppercase" data-aos="fade-up" data-aos-duration="1500"><?php echo $featuredJobsSubHeading; ?></h4>
			<p class="short-text text-center pb-5" data-aos="fade-up" data-aos-duration="1500">
				<?php echo $featuredJobsContent; ?>
			</p>
			<div id="owl-carousel" class="owl-carousel feature-carousal owl-theme">
				<?php
				foreach ($jobPosts as $jobValue) {
					$jobId 			= $jobValue->ID;
					$jobTitle 		= $jobValue->post_title;
					$jobContent 	= $jobValue->post_content;
					$companyName	= get_field('company_name',$jobId);
					$country		= get_field('country',$jobId);
					$postedAt 		= new DateTime(get_the_date('',$jobId));
					$postedAtDiff 	= $postedAt->diff(new DateTime());
					$postedAtString = $postedAtDiff->format('%a days ago');
					$jobTypeList 	= get_the_terms($jobId, 'jobtype');
					$jobCatList 	= get_the_terms($jobId, 'job_cat'); ?>
					<div class="item">
						<div class="item-box">
							<ul class="d-flex pb-3">
								<li class="country-first-name">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/first-letter.png" alt="" title="" />
								</li>
								<li class=" ms-3">
									<p class="country-name mb-1"><?php echo $companyName; ?></p>
									<p class="country-city mb-0 theme-red-font">
										<i class="fa-solid fa-location-dot "></i>
										&nbsp;<?php echo $country; ?>
									</p>
								</li>
							</ul>
							<h4 class="job-title"><?php echo $jobTitle; ?></h4>
							<p class="pb-3 job-meta">
								<span>
									<i class="fa-solid fa-suitcase"></i>
									<?php
									foreach($jobTypeList as $jobTypeListValue) {
									    echo ucfirst($jobTypeListValue->name);
									} ?>
								</span> 
								<span>
									<i class="fa-regular fa-clock"></i> 
									Posted <?php echo $postedAtString; ?>
								</span>
							</p>
							<p><?php echo $jobContent; ?></p>
							<p class="tags pb-4"> 
								<?php
								foreach($jobCatList as $jobCatListValue) { ?>
								    <span><?php echo ucfirst($jobCatListValue->name); ?></span>
								<?php 
								} ?>
							</p>
							<ul class="d-flex justify-content-between price-tag">
								<li>$900/Hr</li>
							<!-- 	<li><a class="apply-btn btn light-btn" href="<?php //echo get_the_permalink($jobId); ?>">Apply</a></li> -->
							</ul>
						</div>
					</div>

				<?php
				} ?>
			</div>
			<div class="text-center pt-5 pb-2"> <a href="#" class="btn bg-blue text-white">Explore More Jobs</a></div>
		</div>
	</section>
<?php
} ?>
<!-- owl crousal -->
<?php
$recruitmentLeftImgId		= get_field('recruitment_process_left_image');
$recruitmentHeading 		= get_field('recruitment_process_heading');
$recruitmentSubHeading 		= get_field('recruitment_process_sub_heading');
$recruitmentHeadingContent 	= get_field('recruitment_process_heading_content');
$recruitmentProcessContent 	= get_field('recruitment_process_content');
if($recruitmentLeftImgId){
    $recruitmentImageSrc = wp_get_attachment_image_url($recruitmentLeftImgId,'full');
    $recruitmentImgAlt = get_post_meta( $recruitmentLeftImgId, '_wp_attachment_image_alt', true);
}
?>
<section class="requitment-process pb-80 pt-80" data-aos="fade-up" data-aos-duration="1500">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo $recruitmentImageSrc; ?>" alt="<?php echo $recruitmentImgAlt; ?>" title="image" />
			</div>
			<div class="col-md-6">
				<h2 data-aos="fade-right" data-aos-duration="1500" class="theme-red-font">
					<?php echo $recruitmentHeading; ?>
				</h2>
				<h4 data-aos="fade-right" data-aos-duration="1500" class="sub-heading pb-4 text-uppercase">		<?php echo $recruitmentSubHeading; ?>
				</h4>
				<p data-aos="fade-right" data-aos-duration="1500" class="pb-4">
					<?php echo $recruitmentHeadingContent; ?>
				</p>

				<?php
				if(!empty($recruitmentProcessContent)){
					$counter = 1;
					foreach($recruitmentProcessContent as $contentValue){
						$recruitmentImageId = $contentValue['recruitment_process_image'];
						$recruitmentTitle 	= $contentValue['recruitment_process_title'];
						$recruitmentDesc    = $contentValue['recruitment_process_description'];
						if($recruitmentImageId){
						    $recruitmentImgSrc = wp_get_attachment_image_url($recruitmentImageId,'full');
						    $recruitmentImgAlt = get_post_meta( $recruitmentImageId, '_wp_attachment_image_alt', true);
						} ?>
						<div class="recruitment-box mb-4" data-aos="fade-up" data-aos-duration="1500">
							<ul class="d-flex m-0">
								<li><img src="<?php echo $recruitmentImgSrc; ?>" alt="<?php echo $recruitmentImgAlt; ?>" title="icon" /> </li>
								<li class="ps-4 recuit-text ">
									<h5 class="theme-color-primary f-600">0<?php echo $counter++; ?> <span class="red-line"></span> <?php echo $recruitmentTitle; ?></h5>
									<p class="m-0 p-0 small-text">
										<?php echo $recruitmentDesc; ?>
									</p>
								</li>
							</ul>
						</div>
					<?php
					} 
				} ?>
				
			</div>
		</div>
		<div class="text-center pt-5 pb-2"> <a href="#" class="btn bg-blue text-white ">Contact Us</a></div>
	</div>
</section>
<!-- requirement process -->


<?php
$testimonialHeading 	= get_field('testimonial_heading');
$testimonialSubHeading	= get_field('testimonial_sub_heading');
$testimonialContent 	= get_field('testimonial_content');
$testimonialsArgs=array(
	'post_type'      => 'testimonials',
	'post_status'    => 'publish',
	'posts_per_page' => -1
);
$allTestimonials = get_posts( $testimonialsArgs );
if(!empty($allTestimonials)){ ?>
	<section class="crousal bg-light-blue pb-80 pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h4 class="sub-heading pb-3 text-uppercase" data-aos="fade-up" data-aos-duration="1500">
				<?php echo $testimonialHeading; ?>
			</h4>
			<h2 class="theme-red-font " data-aos="fade-up" data-aos-duration="1500">
				<?php echo $testimonialSubHeading; ?>
			</h2>
			<p class="pb-5" data-aos="fade-up" data-aos-duration="1500">
				<?php echo $testimonialContent; ?>
			</p>
			<div id="owl-carousel-client" class="owl-carousel client-carousel owl-theme">
				<?php
				foreach($allTestimonials as $allTestimonialsValue){
					$postId 			= $allTestimonialsValue->ID;
					$testimonialsTitle 	= $allTestimonialsValue->post_title;
					$testimonialsContent= $allTestimonialsValue->post_content; ?>
					<div class="item">
						<span class="triangle-topleft"></span>
						<div class="item-box">
							<span class="quote">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/quote-solid.png" alt="quote" title="quote"
									width="25" />
							</span>
							<ul class="d-flex m-0">
								<li class="country-first-name">
									<img src="<?php echo get_the_post_thumbnail_url($postId); ?>" alt="" />
								</li>
								<li class=" ms-3">
									<div class="star-rating  mb-1">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
									<p class="client-name mb-3">
										<?php echo $testimonialsTitle; ?> - 
										<span class="text-uppercase client-position">
											<?php echo get_field('designation',$postId); ?>
										</span>
									</p>
									<p class="m-0"><?php echo $testimonialsContent; ?></p>
								</li>
							</ul>

						</div>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</section>
<?php
} ?>
<!-- owl crousal -->
<!-- testimonial -->
<?php
$blogMainHeading 	= get_field('blog_main_heading');
$blogSubHeading		= get_field('blog_sub_heading');
$blogHeadingContent = get_field('blog_heading_content');
$blogArgs=array(
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => -1
);
$allBlogs = get_posts($blogArgs);
if(!empty($allBlogs)){ ?>
	<section class="newsletter-sec pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h2 class="theme-red-font text-center text-uppercase" data-aos="fade-up" data-aos-duration="1500">
				<?php echo $blogMainHeading; ?>
			</h2>
			<h4 class="sub-heading pb-3 text-center" data-aos="fade-up" data-aos-duration="1500">
				<?php echo $blogSubHeading; ?>
			</h4>
			<p class="short-text text-center pb-5" data-aos="fade-up" data-aos-duration="1500">
				<?php echo $blogHeadingContent; ?>
			</p>
			<div class="row">
				<?php
				foreach ($allBlogs as $allBlogsValue){
					$blogId 	= $allBlogsValue->ID;
					$blogTitle 	= $allBlogsValue->post_title;
					$blogContent= $allBlogsValue->post_content; ?>
					<div class="col-md-4">
						<div class="news-box">
							<span class="text-center date">
								<?php echo get_the_date('j M',$blogId); ?>
							</span>
							<img class="img-news" src="<?php echo get_the_post_thumbnail_url($blogId); ?>" alt="image" title="image" />
							<div class="news-box-content">
								<p class="text-white small-text">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/news.png	" alt="icon" title="icon" />&nbsp; Latest news 
								</p>
								<h5 class="text-white pb-3"><?php echo $blogTitle; ?></h5>
								<div class="comt-div">
									<p class="text-white m-0">
										<span>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/like.png" alt="like" title="like" /> 01 </span> &nbsp; || &nbsp; 
										<span>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/cmnt.png" alt="comments" title="comments" /> 02</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</section>
<?php
} ?>
<!-- newsetter -->


<?php
$faqHeading 		= get_field('faq_heading');
$faqSubHeading		= get_field('faq_sub_heading');
$faqHeadingContent 	= get_field('faq_heading_content');
$faqContent 		= get_field('faq_content');
if(!empty($faqContent)){ ?>
	<section class="faq pt-80 pb-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h3 class="font-32 f-600 theme-red-font text-center text-uppercase">
				Frequently ask questions
			</h3>
			<h5 class="sub-heading text-center">Have Any Questions?</h5>
			<p class="short-text mb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur adipiscing.</p>
			<div class="faq-div">
				<div class="accordion" id="accordionExample">
					<?php
					$counter = 1;
					foreach ($faqContent as $faqValue){
						if($counter == 1){$show = "show";}else{$show = "";}; ?>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading<?php echo $counter; ?>">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $counter; ?>">
									<?php echo $faqValue['faq_title']; ?>
								</button>
							</h2>
							<div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="heading<?php echo $counter; ?>"data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<?php echo $faqValue['faq_description']; ?>
								</div>
							</div>
						</div>
					<?php 
					$counter++;
					} ?>
				</div>
			</div>
		</div>
	</section>
<?php
} ?>
<!-- faq section -->

<?php
$contactHeading 	= get_field('contact_heading');
$contactSubHeading	= get_field('contact_sub_heading');
$contactLeftImgId 	= get_field('contact_left_image');
if($contactLeftImgId){
    $imageSrc = wp_get_attachment_image_url($contactLeftImgId,'full');
    $imageAlt = get_post_meta( $contactLeftImgId, '_wp_attachment_image_alt', true);
} ?>
<section class="contact-section pb-80" data-aos="fade-up" data-aos-duration="1500">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h2 class="theme-red-font font-36 text-uppercase f-600">
					<?php echo $contactHeading; ?>
				</h2>
				<h4 class="sub-heading pb-5"><?php echo $contactSubHeading; ?></h4>
				<img src="<?php echo $imageSrc; ?>" alt="<?php echo $imageAlt; ?>" title="image" class="	d-block  d-md-block d-sm-none" />
			</div>
			<div class="col-md-5 c-block">
				<img class="contact-left-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/dots.png" alt="dots">
				<img class="contact-bottom-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/dots.png" alt="dots">
				<div class=" bg-blue contact-form">
					<div class="row g-3">
						<?php echo do_shortcode('[contact-form-7 id="213" title="Home Page"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact section -->

<?php get_footer(); ?>