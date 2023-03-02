<?php /* Template Name: Contact Page */ ?> <?php get_header(); ?> 

<section class="contact-section pt-80 pb-80" data-aos="fade-up" data-aos-duration="1500">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-md-5" data-aos="fade-right" data-aos-duration="1500">
        <h4 class="pb-2">Stay in touch with us</h4>
        <p class="pb-4">You can also reach out to us by phone or email are many variations</p>
        <div class="contact-box mb-4" data-aos="fade-left" data-aos-duration="1500">
          <div class="d-flex p-3 bg-light-blue align-items-center">
            <div class="icon rotate mx-3">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="text">
              <span class="f-600">Phone</span>
              <p class="telephone">Call : <a href="tel:12345 67890">+12345 67890</a>
              </p>
            </div>
          </div>
        </div>
        <div class="contact-box mb-4" data-aos="fade-left" data-aos-duration="1500">
          <div class="d-flex p-3 bg-light-blue align-items-center">
            <div class="icon rotate mx-3">
              <i class="fa-solid fa-envelopes-bulk"></i>
            </div>
            <div class="text">
              <span class="f-600">Email</span>
              <p class="telephone">Mail : <a href="mailto:xyz@gmail.com">+xyz@gmail.com</a>
              </p>
            </div>
          </div>
        </div>
        <div class="contact-box mobile-mb-3" data-aos="fade-left" data-aos-duration="1500">
          <div class="d-flex p-3 bg-light-blue align-items-center">
            <div class="icon  mx-3">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="text">
              <span class="f-600">Address</span>
              <p>Lorem ipsum dolor <br />sit amet consectetur adipisicing elit. <br /> Voluptates consectetur architecto </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 m c-block">
        <img class="contact-left-image" src="
																	
											<?php echo get_stylesheet_directory_uri(); ?>/assest/image/dots.png" alt="dots">
        <div class=" bg-blue contact-form" data-aos="fade-right" data-aos-duration="1500">
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
              <textarea class="form-control" placeholder="Your Message" row="3" id="floatingTextarea"></textarea>
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
<!-- contact section --> <?php get_footer(); ?>