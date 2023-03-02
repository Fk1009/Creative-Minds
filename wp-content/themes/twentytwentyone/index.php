<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
				<body>
	
	<!-- navbar close -->

	<section class="hero-banner">
		<div class="container d-table h-100">
			<div class="banner-content d-table-cell align-middle">
				<h2 data-aos="fade-right" data-aos-duration="1500">Creative Minds</h2>
				<p data-aos="fade-right" data-aos-duration="1500">Staffing Recruitment Services</p>
				<div data-aos="fade-right" data-aos-duration="1500">
					<a href="#" class="btn theme-btn-dark me-3">I’ m a Job Seeker</a>
					<a href="#" class="btn theme-btn outline-btn">We’re an employer</a>
				</div>
			</div>
		</div>
	</section>
	<!-- banner end -->

	<section class="common-box rocket-bg mb-80 " data-aos="fade-up" data-aos-duration="1500">
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col-md-6">

				</div>
				<div class="col-md-6">
					<div class="small-container pl-50">
						<h5 data-aos="fade-right" data-aos-duration="1500"
							class="text-uppercase theme-red-font sub-heading f-600">The biggest startup allocate</h5>
						<h2 data-aos="fade-right" data-aos-duration="1500" class="large-font">75%</h2>
						<p data-aos="fade-right" data-aos-duration="1500" class="f-600">It serves as a variety of
							purposes, making presentations powerful tools for
							convincing and
							teaching</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- second section ends -->

	<section class="common-box service-bg pb-5" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h2 data-aos="fade-right" data-aos-duration="1500" class="text-center theme-red-font">Service We Provide
				</h3>
				<h4 data-aos="fade-right" data-aos-duration="1500" class="text-center sub-heading text-uppercase pb-3">
					Inspiring Service solutions</h4>
				<p data-aos="fade-right" data-aos-duration="1500" class="short-text text-center mb-5 f-14">Lorem ipsum
					dolor sit amet, consectetur adipiscing elit
					ipsum dolor sit amet, consectetur adipiscing eli ipsum dolor sit amet, consectetur adipiscing eli
				</p>
				<div class="row align-items-center">
					<div class="col-md-4">
						<div class="service-box">
							<img class="icon" src="<?php bloginfo('template_url'); ?>/assest/image/training-bg.png" alt="training" title="training" />
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php bloginfo('template_url'); ?>/assest/image/icon/training.png" alt="training"
									title="training" />
								<h4>Training</h4>
							</div>
							<a data-aos="fade-right" data-aos-duration="1500"
								class="text-center d-block mt-4 more-btn btn" href="#">More Details</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<img class="icon" src="<?php bloginfo('template_url'); ?>/assest/image/cons-bg.png" alt="construction" title="construction" />
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php bloginfo('template_url'); ?>/assest/image/icon/construction.png" alt="construction"
									title="construction" />
								<h4>Consultation</h4>
							</div>
							<a data-aos="fade-right" data-aos-duration="1500"
								class="text-center d-block mt-4 more-btn btn" href="#">More Details</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="service-box">
							<img class="icon" src="<?php bloginfo('template_url'); ?>/assest/image/fast-bg.png" alt="fast-recruitment"
								title="fast-recruitment" />
							<div class="service-small-box text-center " data-aos="fade-right" data-aos-duration="1500">
								<img class="icon" src="<?php bloginfo('template_url'); ?>/assest/image/icon/fast.png" alt="fast-recruitment"
									title="fast-recruitment" />
								<h4>Fast Recruitment</h4>
							</div>
							<a data-aos="fade-right" data-aos-duration="1500"
								class="text-center d-block mt-4 more-btn btn" href="#">More Details</a>
						</div>
					</div>
				</div>
		</div>
	</section>
	<!-- service tab -->

	<section class="section-service-area pb-80 pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<div class="d-flex align-items-start" data-aos="fade-right" data-aos-duration="1500">
				<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<h2 class="theme-red-font">Our service areas</h2>
					<p class="text-white mb-5 text-uppercase">Solving Recuitment Process
						Using Technologies</p>
					<button class="nav-link active" id="v-pills-it-tab" data-bs-toggle="pill"
						data-bs-target="#v-pills-it" type="button" role="tab" aria-controls="v-pills-it"
						aria-selected="true"><img class="tab-area-icon" src="<?php bloginfo('template_url'); ?>/assest/image/icon/it.png" alt="icon"
							title="icon" /> IT/Software</button>
					<button class="nav-link" id="v-pills-hospility-tab" data-bs-toggle="pill"
						data-bs-target="#v-pills-hospility" type="button" role="tab" aria-controls="v-pills-hospility"
						aria-selected="false"><img class="tab-area-icon" src="<?php bloginfo('template_url'); ?>/assest/image/icon/hospility.png"
							alt="icon" title="icon" /> Hospitality</button>
					<button class="nav-link" id="v-pills-manufacture-tab" data-bs-toggle="pill"
						data-bs-target="#v-pills-manufacture" type="button" role="tab"
						aria-controls="v-pills-manufacture" aria-selected="false"><img class="tab-area-icon"
							src="<?php bloginfo('template_url'); ?>assest/image/icon/manufacture.png" alt="icon" title="icon" /> Manufactoring</button>
					<button class="nav-link" id="v-pills-education-tab" data-bs-toggle="pill"
						data-bs-target="#v-pills-education" type="button" role="tab" aria-controls="v-pills-education"
						aria-selected="false"><img class="tab-area-icon" src="<?php bloginfo('template_url'); ?>/assest/image/icon/education.png"
							alt="icon" title="icon" /> Education</button>
					<button class="nav-link" id="v-pills-logistic-tab" data-bs-toggle="pill"
						data-bs-target="#v-pills-logistic" type="button" role="tab" aria-controls="v-pills-logistic"
						aria-selected="false"><img class="tab-area-icon" src="<?php bloginfo('template_url'); ?>/assest/image/icon/logistic.png" alt="icon"
							title="icon" /> Logistics</button>
				</div>
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" data-aos="fade-up" data-aos-duration="1500" id="v-pills-it"
						role="tabpanel" aria-labelledby="v-pills-it-tab" tabindex="0">
						<img src="<?php bloginfo('template_url'); ?>/assest/image/industries-section.png" alt="image" title="image" />
						<ul>
							<li>IT/Software<br /><span><i>20 jobs in different posts</i></span></li>
							<li><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/arrow-right.png" alt="arrow" title="arrow" /></li>
						</ul>
					</div>
					<div class="tab-pane fade" data-aos="fade-up" data-aos-duration="1500" id="v-pills-hospility"
						role="tabpanel" aria-labelledby="v-pills-hospility-tab" tabindex="0">
						<img src="<?php bloginfo('template_url'); ?>/assest/image/industries-section.png" alt="image" title="image" />
						<ul>
							<li>Hospitality<br /><span><i>20 jobs in different posts</i></span></li>
							<li><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/arrow-right.png" alt="arrow" title="arrow" /></li>
						</ul>
					</div>
					<div class="tab-pane fade" data-aos="fade-up" data-aos-duration="1500" id="v-pills-manufacture"
						role="tabpanel" aria-labelledby="v-pills-manufacture-tab" tabindex="0">
						<img src="<?php bloginfo('template_url'); ?>/assest/image/industries-section.png" alt="image" title="image" />
						<ul>
							<li>Manufactoring<br /><span><i>20 jobs in different posts</i></span></li>
							<li><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/arrow-right.png" alt="arrow" title="arrow" /></li>
						</ul>
					</div>
					<div class="tab-pane fade" data-aos="fade-up" data-aos-duration="1500" id="v-pills-education"
						role="tabpanel" aria-labelledby="v-pills-education-tab" tabindex="0">
						<img src="assest/image/industries-section.png" alt="image" title="image" />
						<ul>
							<li>Education<br /><span><i>20 jobs in different posts</i></span></li>
							<li><img src="assest/image/icon/arrow-right.png" alt="arrow" title="arrow" /></li>
						</ul>
					</div>
					<div class="tab-pane fade" data-aos="fade-up" data-aos-duration="1500" id="v-pills-logistic"
						role="tabpanel" aria-labelledby="v-pills-logistic-tab" tabindex="0">
						<img src="<?php bloginfo('template_url'); ?>/assest/image/industries-section.png" alt="image" title="image" />
						<ul>
							<li>Logistic<br /><span><i>20 jobs in different posts</i></span></li>
							<li><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/arrow-right.png" alt="arrow" title="arrow" /></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- service section -->

	<section class="crousal pt-80" data-aos="fade-up" data-aos-duration="1500">

		<div class="container">
			<h2 class="theme-red-font text-center " data-aos="fade-up" data-aos-duration="1500">Featured Jobs</h2>
			<h4 class="sub-heading pb-3 text-center text-uppercase" data-aos="fade-up" data-aos-duration="1500">Find
				your next job</h4>
			<p class="short-text text-center pb-5" data-aos="fade-up" data-aos-duration="1500">Lorem ipsum dolor sit
				amet, consectetur adipiscing elit ipsum dolor
				sit amet, consectetur adipiscing.</p>
			<div id="owl-carousel" class="owl-carousel feature-carousal owl-theme">
				<div class="item">
					<div class="item-box">
						<ul class="d-flex pb-3">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<p class="country-name mb-1">Ibotta , Inc</p>
								<p class="country-city mb-0 theme-red-font"><i class="fa-solid fa-location-dot "></i>
									&nbsp;USA</p>
							</li>
						</ul>
						<h4 class="job-title">Data Engineering - Specialist</h4>
						<p class="pb-3 job-meta"><span><i class="fa-solid fa-suitcase"></i> Full Time</span> &nbsp;
							&nbsp; <span><i class="fa-regular fa-clock"></i> Posted 2 day ago</span></p>
						<p>Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut
							vu lputate nisi. Integer in felis sed leo. </p>
						<p class="tags pb-4"> <span>App</span> &nbsp; <span>Digital</span> &nbsp; <span>Figma</span></p>
						<ul class="d-flex justify-content-between price-tag">
							<li>$900/Hr</li>
							<li><a class="apply-btn btn light-btn" href="#">Apply</a></li>
						</ul>
					</div>
				</div>
				<!-- 1st -->
				<div class="item">
					<div class="item-box">
						<ul class="d-flex pb-3">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<p class="country-name mb-1">Ibotta , Inc</p>
								<p class="country-city mb-0 theme-red-font"><i class="fa-solid fa-location-dot "></i>
									&nbsp;USA</p>
							</li>
						</ul>
						<h4 class="job-title">Data Engineering - Specialist</h4>
						<p class="pb-3 job-meta"><span><i class="fa-solid fa-suitcase"></i> Full Time</span> &nbsp;
							&nbsp; <span><i class="fa-regular fa-clock"></i> Posted 2 day ago</span></p>
						<p>Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut
							vu lputate nisi. Integer in felis sed leo. </p>
						<p class="tags pb-4"> <span>App</span> &nbsp; <span>Digital</span> &nbsp; <span>Figma</span></p>
						<ul class="d-flex justify-content-between price-tag">
							<li>$900/Hr</li>
							<li><a class="apply-btn btn light-btn" href="#">Apply</a></li>
						</ul>
					</div>
				</div>
				<!-- 2nd -->
				<div class="item">
					<div class="item-box">
						<ul class="d-flex pb-3">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<p class="country-name mb-1">Ibotta , Inc</p>
								<p class="country-city mb-0 theme-red-font"><i class="fa-solid fa-location-dot "></i>
									&nbsp;USA</p>
							</li>
						</ul>
						<h4 class="job-title">Data Engineering - Specialist</h4>
						<p class="pb-3 job-meta"><span><i class="fa-solid fa-suitcase"></i> Full Time</span> &nbsp;
							&nbsp; <span><i class="fa-regular fa-clock"></i> Posted 2 day ago</span></p>
						<p>Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut
							vu lputate nisi. Integer in felis sed leo. </p>
						<p class="tags pb-4"> <span>App</span> &nbsp; <span>Digital</span> &nbsp; <span>Figma</span></p>
						<ul class="d-flex justify-content-between price-tag">
							<li>$900/Hr</li>
							<li><a class="apply-btn btn light-btn" href="#">Apply</a></li>
						</ul>
					</div>
				</div>
				<!-- 3rd -->

				<div class="item">
					<div class="item-box">
						<ul class="d-flex pb-3">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<p class="country-name mb-1">Ibotta , Inc</p>
								<p class="country-city mb-0 theme-red-font"><i class="fa-solid fa-location-dot "></i>
									&nbsp;USA</p>
							</li>
						</ul>
						<h4 class="job-title">Data Engineering - Specialist</h4>
						<p class="pb-3 job-meta"><span><i class="fa-solid fa-suitcase"></i> Full Time</span> &nbsp;
							&nbsp; <span><i class="fa-regular fa-clock"></i> Posted 2 day ago</span></p>
						<p>Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut
							vu lputate nisi. Integer in felis sed leo. </p>
						<p class="tags pb-4"> <span>App</span> &nbsp; <span>Digital</span> &nbsp; <span>Figma</span></p>
						<ul class="d-flex justify-content-between price-tag">
							<li>$900/Hr</li>
							<li><a class="apply-btn btn light-btn" href="#">Apply</a></li>
						</ul>
					</div>
				</div>

				<!-- 4th -->
				<div class="item">
					<div class="item-box">
						<ul class="d-flex pb-3">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<p class="country-name mb-1">Ibotta , Inc</p>
								<p class="country-city mb-0 theme-red-font"><i class="fa-solid fa-location-dot "></i>
									&nbsp;USA</p>
							</li>
						</ul>
						<h4 class="job-title">Data Engineering - Specialist</h4>
						<p class="pb-3 job-meta"><span><i class="fa-solid fa-suitcase"></i> Full Time</span> &nbsp;
							&nbsp; <span><i class="fa-regular fa-clock"></i> Posted 2 day ago</span></p>
						<p>Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut
							vu lputate nisi. Integer in felis sed leo. </p>
						<p class="tags pb-4"> <span>App</span> &nbsp; <span>Digital</span> &nbsp; <span>Figma</span></p>
						<ul class="d-flex justify-content-between price-tag">
							<li>$900/Hr</li>
							<li><a class="apply-btn btn light-btn" href="#">Apply</a></li>
						</ul>
					</div>
				</div>

				<!--5th  -->
				<div class="item">
					<div class="item-box">
						<ul class="d-flex pb-3">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<p class="country-name mb-1">Ibotta , Inc</p>
								<p class="country-city mb-0 theme-red-font"><i class="fa-solid fa-location-dot "></i>
									&nbsp;USA</p>
							</li>
						</ul>
						<h4 class="job-title">Data Engineering - Specialist</h4>
						<p class="pb-3 job-meta"><span><i class="fa-solid fa-suitcase"></i> Full Time</span> &nbsp;
							&nbsp; <span><i class="fa-regular fa-clock"></i> Posted 2 day ago</span></p>
						<p>Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut
							vu lputate nisi. Integer in felis sed leo. </p>
						<p class="tags pb-4"> <span>App</span> &nbsp; <span>Digital</span> &nbsp; <span>Figma</span></p>
						<ul class="d-flex justify-content-between price-tag">
							<li>$900/Hr</li>
							<li><a class="apply-btn btn light-btn" href="#">Apply</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- owl crousal -->

	<section class="requitment-process pb-80 pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php bloginfo('template_url'); ?>/assest/image/recruitment-process.png" alt="image" title="image" />
				</div>
				<div class="col-md-6">
					<h2 data-aos="fade-right" data-aos-duration="1500" class="theme-red-font">Recruitment Process</h2>
					<h4 data-aos="fade-right" data-aos-duration="1500" class="sub-heading pb-4 text-uppercase">Solving
						Recuitment Process <br />Using Technologies</h4>
					<p data-aos="fade-right" data-aos-duration="1500" class="pb-4">Lorem ipsum dolor sit amet,
						consectetur adipiscing elit ipsum dolor sit amet,
						consectetur adipiscing.</p>
					<div class="recruitment-box mb-4" data-aos="fade-up" data-aos-duration="1500">
						<ul class="d-flex m-0">
							<li><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/recruitment.png" alt="icon" title="icon" /> </li>
							<li class="ps-4 recuit-text ">
								<h5 class="theme-color-primary f-600">01 <span class="red-line"></span> &nbsp; Sourcing
									the best</h5>
								<p class="m-0 p-0 small-text">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							</li>
						</ul>
					</div>
					<div class="recruitment-box mb-4" data-aos="fade-up" data-aos-duration="1500">
						<ul class="d-flex m-0">
							<li><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/recruitment.png" alt="icon" title="icon" /> </li>
							<li class="ps-4 recuit-text ">
								<h5 class="theme-color-primary f-600">01 <span class="red-line"></span> &nbsp; Sourcing
									the best</h5>
								<p class="m-0 p-0 small-text">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							</li>
						</ul>
					</div>
					<div class="recruitment-box" data-aos="fade-up" data-aos-duration="1500">
						<ul class="d-flex m-0">
							<li><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/recruitment.png" alt="icon" title="icon" /> </li>
							<li class="ps-4 recuit-text ">
								<h5 class="theme-color-primary f-600">01 <span class="red-line"></span> &nbsp; Sourcing
									the best</h5>
								<p class="m-0 p-0 small-text">Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- requirement process -->

	<section class="crousal bg-light-blue pb-80 pt-80" data-aos="fade-up" data-aos-duration="1500">

		<div class="container">
			<h4 class="sub-heading pb-3 text-uppercase" data-aos="fade-up" data-aos-duration="1500">Client testimonial
			</h4>
			<h2 class="theme-red-font " data-aos="fade-up" data-aos-duration="1500">Client Satisfaction Rate</h2>
			<p class="pb-5" data-aos="fade-up" data-aos-duration="1500">Lorem ipsum dolor sit amet, consectetur
				adipiscing elit ipsum dolor
				sit amet, consectetur adipiscing.</p>
			<div id="owl-carousel-client" class="owl-carousel client-carousel owl-theme">
				<div class="item">
					<span class="triangle-topleft"></span>
					<div class="item-box">
						<span class="quote"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/quote-solid.png" alt="quote" title="quote"
								width="25" /></span>
						<ul class="d-flex m-0">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<div class="star-rating  mb-1">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i>
								</div>
								<p class="client-name mb-3">Maria Hanks - <span
										class="text-uppercase client-position">Manager , Filton </span></p>
								<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing. amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing.</p>
							</li>
						</ul>

					</div>
				</div>
				<!-- 1st -->
				<div class="item">
					<span class="triangle-topleft"></span>
					<div class="item-box">
						<span class="quote"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/quote-solid.png" alt="quote" title="quote"
								width="25" /></span>
						<ul class="d-flex m-0">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<div class="star-rating  mb-1">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i>
								</div>
								<p class="client-name mb-3">Maria Hanks - <span
										class="text-uppercase client-position">Manager , Filton </span></p>
								<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing. amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing.</p>
							</li>
						</ul>

					</div>
				</div>
				<!-- 2nd -->
				<div class="item">
					<span class="triangle-topleft"></span>
					<div class="item-box">
						<span class="quote"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/quote-solid.png" alt="quote" title="quote"
								width="25" /></span>
						<ul class="d-flex m-0">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<div class="star-rating  mb-1">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i>
								</div>
								<p class="client-name mb-3">Maria Hanks - <span
										class="text-uppercase client-position">Manager , Filton </span></p>
								<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing. amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing.</p>
							</li>
						</ul>

					</div>
				</div>
				<!-- 3rd -->

				<div class="item">
					<span class="triangle-topleft"></span>
					<div class="item-box">
						<span class="quote"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/quote-solid.png" alt="quote" title="quote"
								width="25" /></span>
						<ul class="d-flex m-0">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<div class="star-rating  mb-1">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i>
								</div>
								<p class="client-name mb-3">Maria Hanks - <span
										class="text-uppercase client-position">Manager , Filton </span></p>
								<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing. amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing.</p>
							</li>
						</ul>

					</div>
				</div>

				<!-- 4th -->
				<div class="item">
					<span class="triangle-topleft"></span>
					<div class="item-box">
						<span class="quote"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/quote-solid.png" alt="quote" title="quote"
								width="25" /></span>
						<ul class="d-flex m-0">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<div class="star-rating  mb-1">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i>
								</div>
								<p class="client-name mb-3">Maria Hanks - <span
										class="text-uppercase client-position">Manager , Filton </span></p>
								<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing. amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing.</p>
							</li>
						</ul>

					</div>
				</div>

				<!--5th  -->
				<div class="item">
					<span class="triangle-topleft"></span>
					<div class="item-box">
						<span class="quote"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/quote-solid.png" alt="quote" title="quote"
								width="25" /></span>
						<ul class="d-flex m-0">
							<li class="country-first-name"><img src="<?php bloginfo('template_url'); ?>/assest/image/first-letter.png" alt="" title="" />
							</li>
							<li class=" ms-3">
								<div class="star-rating  mb-1">
									<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
										class="fa-solid fa-star"></i>
								</div>
								<p class="client-name mb-3">Maria Hanks - <span
										class="text-uppercase client-position">Manager , Filton </span></p>
								<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing. amet, consectetur adipiscing elit ipsum dolor sit
									amet, consectetur adipiscing.</p>
							</li>
						</ul>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- owl crousal -->
	<!-- testimonial -->

	<section class="newsletter-sec pt-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h2 class="text-o text-center text-uppercase" data-aos="fade-up" data-aos-duration="1500">News and updates
			</h2>
			<h4 class="sub-heading pb-3 text-center" data-aos="fade-up" data-aos-duration="1500">Featured News and Blogs
			</h4>
			<p class="short-text text-center pb-5" data-aos="fade-up" data-aos-duration="1500">Lorem ipsum dolor sit
				amet, consectetur adipiscing elit ipsum dolor
				sit amet, consectetur adipiscing.</p>
			<div class="row">
				<div class="col-md-4">
					<div class="news-box">
						<span class="text-center date">25 Aug</span>
						<img class="img-news" src="<?php bloginfo('template_url'); ?>/assest/image/news1.png" alt="image" title="image" />
						<div class="news-box-content">
							<p class="text-white small-text"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/news.png	" alt="icon"
									title="icon" />&nbsp; Latest news </p>
							<h5 class="text-white pb-3">Effective ways to hire more professionals</h5>
							<div class="comt-div">
								<p class="text-white m-0"><span><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/like.png" alt="like"
											title="like" /> 01 </span> &nbsp; || &nbsp; <span><img
											src="<?php bloginfo('template_url'); ?>/assest/image/icon/cmnt.png" alt="comments" title="comments" />
										02</span></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="news-box">
						<span class="text-center date">25 Aug</span>
						<img class="img-news" src="<?php bloginfo('template_url'); ?>/assest/image/news2.png" alt="image" title="image" />
						<div class="news-box-content">
							<p class="text-white small-text"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/news.png	" alt="icon"
									title="icon" />&nbsp; Latest news </p>
							<h5 class="text-white pb-3">Effective ways to hire more professionals</h5>
							<div class="comt-div">
								<p class="text-white m-0"><span><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/like.png" alt="like"
											title="like" /> 01 </span> &nbsp; || &nbsp; <span><img
											src="<?php bloginfo('template_url'); ?>/assest/image/icon/cmnt.png" alt="comments" title="comments" />
										02</span></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="news-box">
						<span class="text-center date">25 Aug</span>
						<img class="img-news" src="<?php bloginfo('template_url'); ?>/assest/image/news3.png" alt="image" title="image" />
						<div class="news-box-content">
							<p class="text-white small-text"><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/news.png	" alt="icon"
									title="icon" />&nbsp; Latest news </p>
							<h5 class="text-white pb-3">Effective ways to hire more professionals</h5>
							<div class="comt-div">
								<p class="text-white m-0"><span><img src="<?php bloginfo('template_url'); ?>/assest/image/icon/like.png" alt="like"
											title="like" /> 01 </span> &nbsp; || &nbsp; <span><img
											src="<?php bloginfo('template_url'); ?>/assest/image/icon/cmnt.png" alt="comments" title="comments" />
										02</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- newsetter -->



	<section class="faq pt-80 pb-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<h3 class="font-32 f-600 theme-red-font text-center text-uppercase">
				Frequently ask questions
			</h3>
			<h5 class="sub-heading text-center">Have Any Questions?</h5>
			<p class="short-text mb-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor
				sit amet, consectetur adipiscing.</p>
			<div class="faq-div">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Does we take into account a company’s needs?
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Answer: Yes, we do. As a leading staffing company, Creative minds uses targeted,
								facility-focused recruiting approach. All the candidates we finalize will meet your
								distinctive expectations.
							</div>
						</div>
					</div>
					<!-- 1st end -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								What industries and business types do you serve?
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
								literature from 45 BC, making it over 2000 years old
							</div>
						</div>
					</div>
					<!-- 2nd end -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Do you employ any cutting-edge technology to recruit candidates?
							</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
								literature from 45 BC, making it over 2000 years old
							</div>
						</div>
					</div>
					<!-- 3rd end -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Do you use Artificial Intelligence (AI) in your recruitment process?
							</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
								literature from 45 BC, making it over 2000 years old
							</div>
						</div>
					</div>
					<!-- 4th end -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingFive	">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseFive	" aria-expanded="false" aria-controls="collapseFive	">
								What are the factors that currently govern the staffing industry?
							</button>
						</h2>
						<div id="collapseFive	" class="accordion-collapse collapse" aria-labelledby="headingFive	"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
								literature from 45 BC, making it over 2000 years old
							</div>
						</div>
					</div>
					<!-- 5th end -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSix">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								What type of assignments do your staffing services offer?
							</button>
						</h2>
						<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
								literature from 45 BC, making it over 2000 years old
							</div>
						</div>
					</div>
					<!-- 6th end -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingSeven">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								Does your company adhere to safety requirements and compliance?
							</button>
						</h2>
						<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
								literature from 45 BC, making it over 2000 years old
							</div>
						</div>
					</div>
					<!-- 7 end -->
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingEight">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								How would Recruitment Process Outsourcing (RPO) benefit your clients?
							</button>
						</h2>
						<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
							data-bs-parent="#accordionExample">
							<div class="accordion-body">
								Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
								literature from 45 BC, making it over 2000 years old
							</div>
						</div>
					</div>
					<!-- 8th end -->
				</div>
			</div>
		</div>
	</section>
	<!-- faq section -->

	<section class="contact-section pb-80" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2 class="theme-red-font font-36 text-uppercase f-600">Contact us</h2>
					<h4 class="sub-heading pb-5">Get in touch with us</h4>
					<img src="<?php bloginfo('template_url'); ?>/assest/image/contact.png" alt="contact" title="image" />
				</div>
				<div class="col-md-5 c-block">
					<img class="contact-left-image" src="<?php bloginfo('template_url'); ?>/assest/image/dots.png" alt="dots">
					<img class="contact-bottom-image" src="<?php bloginfo('template_url'); ?>/assest/image/dots.png" alt="dots">
					<div class=" bg-blue contact-form">
						<form class="row g-3">
							<div class="col-md-12">
								<label for="inputName" class="form-label visually-hidden">Name</label>
								<input type="text" class="form-control" id="inputName" placeholder="Your Name">
							</div>
							<div class="col-md-12">
								<label for="inputmail" class="form-label visually-hidden">Your Email</label>
								<input type="text" class="form-control" id="inputmail" placeholder="Your Email">
							</div>
							<div class="col-12">
								<label for="inputphone" class="form-label visually-hidden">Your Phone</label>
								<input type="text" class="form-control" id="inputphone" placeholder="Your Phone">
							</div>
							<div class="col-12">
								<label class="form-label visually-hidden" for="floatingTextarea">Comments</label>
								<textarea class="form-control" placeholder="Your Message" row="3"
									id="floatingTextarea"></textarea>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-primary">Send</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact section -->
<?php
get_footer();
?>