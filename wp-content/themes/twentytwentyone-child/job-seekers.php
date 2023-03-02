<?php /* Template Name: Job Seekers Page */ ?>
<?php get_header();
   $section_two_left = get_field('section_two_left');
   $section_two_top_description = get_field('section_two_top_description');
   $jobArgs = array('post_type' => 'job',
   					'post_status' => 'publish',
					'posts_per_page' => - 1
				   );
   $jobPosts = get_posts($jobArgs);
   ?>
<section class="pt-80" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <p class="text-center f-600"><?php echo $section_two_top_description; ?></p>
   </div>
</section>
<section class="pt-80 pb-80" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="jobs-des-section">
               <?php
                  $counter = 1;
                  foreach ($jobPosts as $jobValue):
                      $jobId = $jobValue->ID;
                      $jobTitle = $jobValue->post_title;
                      $jobContent = $jobValue->post_content;
                      $jobDescriptionTitle = get_field('job_description_title', $jobId);
                      $jobDescriptionContent = get_field('job_description_content', $jobId);
                      $jobDescriptionListing = get_field('job_description_listing', $jobId);
                      $jobExperienceTitle = get_field('job_experience_title', $jobId);
                      $jobExperienceDescription = get_field('experience_description', $jobId);
                      $desiredProfileTitle = get_field('desired_profile_title', $jobId);
                      $desiredProfileListing = get_field('desired_profile_lisiting', $jobId);
                      $country = get_field('country', $jobId);
                      $postedAt = new DateTime(get_the_date('', $jobId));
                      $postedAtDiff = $postedAt->diff(new DateTime());
                      $postedAtString = $postedAtDiff->format('%a days ago');
                      $jobTypeList = get_the_terms($jobId, 'jobtype');
                      $jobCatList = get_the_terms($jobId, 'job_cat');
                      // echo '<pre>';
                      // print_r($jobDescriptionListing);
                      // echo '<pre>'; 
                  ?>
               <div class="job-collapse <?php echo $counter; ?>-accor mb-3"  data-aos="fade-up" data-aos-duration="1500">
                  <a class="btn jobs-btn d-flex justify-content-between" data-bs-toggle="collapse" href="#collapse<?php echo $counter; ?>"
                     role="button" aria-expanded="false" aria-controls="collapse<?php echo $counter; ?>"><?php echo $jobTitle; ?><span><i
                     class="fa-solid fa-plus plus-acc"></i></span>
                  </a>
                  <div class="collapse" id="collapse<?php echo $counter; ?>">
                     <div class="card card-body">
                        <div class="describtion-div">
                           <h5 class="pb-2 f-600"><?php echo $jobDescriptionTitle ?></h5>
                           <p><?php echo $jobDescriptionContent ?></p>
                           <ul class="des-list">
                              <?php foreach ($jobDescriptionListing as $jobDescriptionListingContent):
                                 ?>
                              <li><span><img
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/list-dot.png"
                                 alt="dot" title="dot" /> </span><?php echo $jobDescriptionListingContent['description_list'] ?></li>
                              <?php
                                 endforeach ?> 
                           </ul>
                           <h5 class="pb-2 f-600"><?php echo $jobExperienceTitle; ?></h5>
                           <ul class="des-list">
                              <li><span><img
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/list-dot.png"
                                 alt="dot" title="dot" /> </span><?php echo $jobExperienceDescription; ?></li>
                           </ul>
                           <div>
                              <h5 class="pb-2 f-600"><?php echo $desiredProfileTitle; ?></h5>
                              <ul class="des-list">
                                 <?php foreach ($desiredProfileListing as $desiredProfileListingContent):
                                    ?>
                                 <li><span><img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/list-dot.png"
                                    alt="dot" title="dot" /> </span><?php echo $desiredProfileListingContent['desired_profile_content'] ?></li>
                                 <?php
                                    endforeach ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php $counter++;
                  endforeach ?>
            </div>
         </div>
         <div class="col-md-5">
            <div class=" bg-blue contact-form request-form">
               <?php echo $section_two_left; ?>
            </div>
         </div>
      </div>
   </div>
</section>
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