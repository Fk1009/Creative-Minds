<?php /* Template Name: Blog Detail Page */ ?>
<?php get_header(); ?>




	<section class="pb-80 pt-80">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="">
						<img alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/cons-bg.png" />
						<h2 class="theme-red-font">Social Dynamics are Changing Hiring Practices</h2>
						<div class="meta-div">
							<p class="small-text"><span>20/02/2023</span></p>
						</div>
						<div class="content-div">
							<p class="text-justify">Lorem Ipsum has been the industry's standard dummy text ever since
								the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
								specimen book. It has survived not only five centuries, but also the leap into
								electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
								with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
								with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<p class="text-justify">Lorem Ipsum has been the industry's standard dummy text ever since
								the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
								specimen book. It has survived not only five centuries, but also the leap into
								electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
								with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
								with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
							<p class="text-justify">Lorem Ipsum has been the industry's standard dummy text ever since
								the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
								specimen book. It has survived not only five centuries, but also the leap into
								electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
								with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
								with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
							</p>
						</div>


					</div>
				</div>
				<div class="col-md-5">
					<div class="sticky-div">
						<h2 class="theme-red-font font-36 text-uppercase f-600 pb-2">Get in touch with us</h2>
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
		</div>
	</section>


    <?php get_footer(); ?>


