<?php /* Template Name: Services Page Template */ ?>
<?php get_header(); 
$section_two_description =  get_field('section_two_description');
$staffing_need_heading =  get_field('staffing_need_heading');
$staffing_needs_categories =  get_field('satffing_needs_categories');
$left_section =  get_field('left_section');
$right_section =  get_field('right_section');
$testimonial_heading =  get_field('testimonial_heading');
$testimonial_subheading =  get_field('testimonial_subheading');
$testimonial_description =  get_field('testimonial_description');
?>
<!-- Section 1 -->
<!-- Banner Data -->
<!-- Section 1 -->

<!-- Section 2 -->
<section class="pt-80 ">
   <div class="container">
      <p data-aos="fade-up" data-aos-duration="1500" class="f-600 text-center"><?php echo $section_two_description ?></p>
   </div>
</section>
<!-- Section 2 -->
<!-- Section 3 Staffing Needs-->
<section class="pt-80 " data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <h2 class="text-center pb-4" ><?php echo $staffing_need_heading ?></h2>
      <div class="row">
         <?php 
            foreach($staffing_needs_categories as $contentValue):
            $sectionTwoImageId = $contentValue['staffing_needs_icon'];
            $sectionTwoImageNumber = $contentValue['staffing_needs_number'];
            $sectionTwoImageDescription = $contentValue['staffing_needs_content'];
            if($sectionTwoImageId):
            	$sectionTwoImgSrc = wp_get_attachment_image_url($sectionTwoImageId, 'full');
            endif;
            ?>  
         <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1500">
            <div class="whybox bg-light-blue">
               <span class="icon-box">
               <img src="<?php echo $sectionTwoImgSrc; ?>" class=" ">
               </span>
               <div class="whybox-item-content">
                  <div class="ratingbox pt-3 pb-3 f-600"> <?php echo $sectionTwoImageNumber; ?></div>
                  <h5><?php echo $sectionTwoImageDescription; ?></h5>
               </div>
            </div>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>
<!-- Section 3 Staffing Needs-->
<!-- Section 4 -->
<section class="pt-80 employee-page-form" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-md-6">
            <p class="employee-page-text"><?php echo $left_section; ?></p>
         </div>
         <div class="col-md-5">
            <?php echo $right_section; ?>
         </div>
      </div>
   </div>
</section>
<!-- Section 4 -->
<!-- Section 5 Testimonials-->
<section class="crousal pb-5 pt-80" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <h4 class="sub-heading pb-3 text-uppercase" data-aos="fade-up" data-aos-duration="1500"><?php echo $testimonial_heading; ?>
      </h4>
      <h2 class="theme-red-font " data-aos="fade-up" data-aos-duration="1500"><?php echo $testimonial_subheading; ?></h2>
      <p class="pb-5" data-aos="fade-up" data-aos-duration="1500"><?php echo $testimonial_description; ?></p>
      <div id="owl-carousel-client" class="owl-carousel client-carousel owl-theme">
         <?php echo do_shortcode('[testimonial]'); ?>
      </div>
   </div>
</section>
<!-- Section 5 Testimonials-->
<?php get_footer(); ?>