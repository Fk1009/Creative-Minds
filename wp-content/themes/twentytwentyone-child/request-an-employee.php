<?php /* Template Name: Employee Page */ ?>
<?php get_header(); 
//Get all fields
$left_content =  get_field('left_content');
$right_content =  get_field('right_content');
$staff_needs_section_heading = get_field('staff_needs_section_heading');
$staffing_need_content = get_field('staffing_need_content');
$testimonial_heading = get_field('heading');
$testimonial_subheading = get_field('testimonial_subheading');
$testimonial_description = get_field('testimonial_description');
?>
<!-- Second Section -->
<section class="pt-80 employee-page-form" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <p class="employee-page-text"><?php echo $left_content; ?>
            <p>
         </div>
         <div class="col-md-6">
            <?php echo $right_content  ?>
         </div>
      </div>
   </div>
</section>
<!-- Second Section -->

<!-- Staffing Needs Section -->
<section class="pt-80 " data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <h2 class="text-center pb-4" ><?php echo $staff_needs_section_heading ?></h2>
      <div class="row">
        	<?php 
			foreach($staffing_need_content as $contentValue):
				$sectionTwoImageId = $contentValue['staffing_need_content_image'];
				$sectionTwoImageNumber = $contentValue['staffing_need_content_number'];
				$sectionTwoImageDescription = $contentValue['staffing_need_content_description'];
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
   </div>
</section>
<!-- Staffing Needs Section -->

<!-- testimonial Section -->
<section class="crousal pb-5 pt-80" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <h4 class="sub-heading pb-3 text-uppercase" data-aos="fade-up" data-aos-duration="1500"><?php echo $testimonial_heading; ?>
      </h4>
      <h2 class="theme-red-font " data-aos="fade-up" data-aos-duration="1500"><?php echo $testimonial_subheading; ?></h2>
      <p class="pb-5" data-aos="fade-up" data-aos-duration="1500"><?php echo $testimonial_description  ?></p>
      <div id="owl-carousel-client" class="owl-carousel client-carousel owl-theme">
         <?php echo do_shortcode('[testimonial]'); ?>
      </div>
   </div>
</section>
<!-- testimonial Section -->
<?php get_footer(); ?>