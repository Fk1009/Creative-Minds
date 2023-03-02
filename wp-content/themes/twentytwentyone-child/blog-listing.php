<?php /* Template Name: Blog Listing Page */ ?>
<?php get_header(); ?>
<section class="newsletter-sec pt-80" data-aos="fade-up" data-aos-duration="1500">
   <div class="container">
      <h2 class="text-o text-center text-uppercase" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('heading'); ?>
      </h2>
      <h4 class="sub-heading pb-3 text-center" data-aos="fade-up" data-aos-duration="1500"><?php echo get_field('description'); ?> 
      </h4>
		<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$blogArgs = array('post_type' => 'post', 
					  'post_status' => 'publish', 
					  'posts_per_page' => 2, 
					  'paged' => $paged
					 );
	$allBlogs = new WP_Query($blogArgs);
	// echo '<pre>';
	// print_r($allBlogs);
	// echo '<pre>';
	?>
    <div class="row">
		<?php foreach ($allBlogs->posts as $allBlogsValue1) {
				$blogId = $allBlogsValue1->ID;
				$blogDate = date("j M", strtotime($allBlogsValue1->$post_date));
				$blogTitle = $allBlogsValue1->post_title;
				$blogContent = $allBlogsValue1->post_content; ?>
					<div class="col-md-4 mb-2 mt-2">
					<div class="news-box"   data-aos="fade-up" data-aos-duration="1500">
						<span class="text-center date"><?php echo $blogDate; ?></span>
						<img class="img-news" src="<?php echo get_the_post_thumbnail_url($blogId) ?>" alt="image" title="image" />
						<div class="news-box-content">
							<p class="text-white small-text"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assest/image/icon/news.png	" alt="icon"
								title="icon" />&nbsp; Latest news </p>
							<h5 class="text-white pb-3"><a class="text-white" href="#"><?php echo $blogTitle ?></h5>
							</a>
						</div>
					</div>
					</div>
		<?php } ?>
		<?php
		// call method from function.php
		$pagination_links = list_pagination($allBlogs);
        ?>

<div class="col-md-12 mt-4">
	<nav aria-label="blog-pagination" class="blog-pagination" >
		<ul class="pagination justify-content-center">
			<?php foreach ( $pagination_links as $key => $page_link ) : ?>
			<li class="page-item" class="paginated_link<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
			<?php endforeach ?>
		</ul>
		</nav>
</div>
      </div>
   </div>
</section>
<?php get_footer(); ?>