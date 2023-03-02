
<section class="footer bg-light-blue pt-5" data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="mb-4" src="<?php bloginfo('template_url'); ?>/assest/image/logo.png" alt="logo" title="logo" />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur
						adipiscing. amet, consectetur adipiscing elit ipsum dolor sit amet, consectetur adipiscing. </p>
					<p>Connected : <span><a href="#"><i
									class="fa-brands social-icon fa-facebook-f"></i></a></span>&nbsp; <span><a
								href="#"><i class="fa-brands social-icon fa-twitter"></i></a></span> &nbsp; <span><a
								href="#"><i class="fa-brands social-icon fa-linkedin-in"></i></a></span></p>
				</div>
				<div class="col-md-4">
					<h3 class="mt-5">Useful Links:</h3>
					<ul class="quick-link w-5">
						<li><a href="#">Home</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Contracting</a></li>
						<li><a href="#">Hiring</a></li>
						<li><a href="#">Consultation</a></li>
						<li><a href="#">Training</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Job Seekers</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h3 class="mt-5">Contact</h3>
					<ul class="w-5">
						<li><a href="tel:+91 1231230000">12312300000</a></li>
						<li><a href="tel:+91 1231230000">12312300000</a></li>
						<li><a href="mailto:xyz@creativeminds.com">xyz@creativeminds.com</a></li>
					</ul>
				</div>
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
			<div class="pt-3 site-bottom">
				<div class="row">
					<div class="col-md-8">
						<p>&copy; 2022 ST Creative Minds, All Right Reserved.</p>
					</div>
					<div class="col-md-4">
						<div class="d-flex text-end justify-content-between">
							<a href="#">Privacy Policy</a>
							<a href="#">Terms & Conditions</a>
							<a href="#">Site Map</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer section -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous"
		referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
	<script>
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
	</script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
		crossorigin="anonymous"></script>



	<!-- aos -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
<?php wp_footer(); ?>

</body>
</html>
