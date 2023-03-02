
<?php

function mychildtheme_enqueue_styles() {
    $parent_style = 'parent-style';
    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));

    wp_enqueue_style('main-style',get_stylesheet_directory_uri() .'/assest/css/style.css');
    wp_enqueue_style('bootstrap-min',get_stylesheet_directory_uri() .'/assest/css/bootstrap.min.css');
    //wp_enqueue_style('all-min-style',get_stylesheet_directory_uri() .'/assest/css/all.min.css');
    wp_enqueue_style('aos-style',get_stylesheet_directory_uri() .'/assest/css/aos.css');
    wp_enqueue_style('owl-carousel-min-style',get_stylesheet_directory_uri() .'/assest/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-style',get_stylesheet_directory_uri() .'/assest/css/owl.theme.default.css');
    //wp_enqueue_style('animate-style',get_stylesheet_directory_uri() .'/css/animate.css');
    wp_enqueue_script('owl-carousel-script', get_stylesheet_directory_uri() .'/assest/js/owl.carousel.js', '','',true );
    wp_enqueue_script('popper-min-script', get_stylesheet_directory_uri() .'/assest/js/popper.min.js','','',true );
    wp_enqueue_script('bootstrap-min-script', get_stylesheet_directory_uri() .'/assest/js/bootstrap.min.js','','',true);
    wp_enqueue_script('aos-script', get_stylesheet_directory_uri() .'/assest/js/aos.js','','',false );
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );


// Remove Parent Theme CSS
function PREFIX_remove_scripts() {
    wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_deregister_style( 'twenty-twenty-one-style' );

    wp_dequeue_script( 'site' );
    wp_deregister_script( 'site' );

}
add_action( 'wp_enqueue_scripts', 'PREFIX_remove_scripts', 20 );

// Customization Top Main Header Menu
class loggmax_class_walker extends Walker_Nav_Menu{

    // Start level, beginning tags
    function start_lvl(&$output, $depth) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $output .= "\n$indent";
        $output .= '<ul class="dropdown-menu">';
        //$output .= '<div class="sub-links pull-left">';
    }

    function end_lvl(&$output, $depth) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $output .= "$indent</ul>";
        //$output .= '</div>';
    }

    // Start element (beginning list items)
    function start_el( &$output, $item, $depth=0, $args=array(),$current_object_id=0 ) {
        $this->curItem = $item;
        $customClass = $item->classes[0];
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        if($customClass == "dropdown"){
            $ancherClass   = "nav-link dropdown-toggle";
            $liSubMenuClass = "dropdown";
        }
        else{
            $ancherClass   = "nav-link";
            $liSubMenuClass = "";
        }

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
        $atts['slug']   = ! empty( $item->slug )        ? $item->slug      : '';
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $attributes = '';
        $item_output = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // Check if it is a submenu
        if ( $depth == 1 ) {
            $output .= '<a'. $attributes. ' class="dropdown-item">';
            $output .= apply_filters( 'the_title', $item->title, $item->ID );
            $output .= '</a>';

        } elseif ( $depth == 0 ) {
            $item_output .= '<li class="nav-item '.$liSubMenuClass.'">';
            if($customClass == "dropdown"){
                $item_output .= '<a'. $attributes. ' class="'.$ancherClass.'" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
            }
            else{    
                $item_output .= '<a'. $attributes. ' class="'.$ancherClass.'">';
            }
            $item_output .= apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= '</a>';
        }

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $n = '';
        } 
        else {
            $n = "\n";
        }
        if ( $depth == 0 ) {
            $output .= "</li>{$n}";
        } 
        else {
            $output .= "{$n}";
        }
    }
}


// Register Custom Footer Menu
function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Useful Links Menu' ));
}
add_action( 'init', 'register_my_menu' );

//
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));   
}


// Register Custom Post type for (Our Services)
add_action( 'init', 'create_custom_service_posttype' );
function create_custom_service_posttype() {
    register_post_type( 'service',
        array(
            'labels' => array(
                'name'          => __( 'Service' ),
                'singular_name' => __( 'Services' ),
                'all_items'     => __( 'All Services'),
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title','editor','author','thumbnail'),
            'rewrite' => array('slug' => 'service'),
        )
    );
}
// Hooking up our function to theme setup

// Register Custom Post type for (Our Services)
add_action( 'init', 'create_custom_testimonials_posttype' );
function create_custom_testimonials_posttype() {
    register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name'          => __( 'Testimonial' ),
                'singular_name' => __( 'Testimonials' ),
                'all_items'     => __( 'All Testimonials'),
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title','editor','author','thumbnail'),
            'rewrite' => array('slug' => 'testimonials'),
        )
    );
}
// Hooking up our function to theme setup




// Register Custom Post type for (Our Services)

function create_custom_job_posttype() {
    $labels = array(
        'name'                  => __( 'Jobs'),
        'singular_name'         => __( 'Job'),
        'menu_name'             => __( 'Jobs'),
        'name_admin_bar'        => __( 'Job'),
        'add_new'               => __( 'Add New'),
        'add_new_item'          => __( 'Add New Job'),
        'new_item'              => __( 'New Job'),
        'edit_item'             => __( 'Edit Job'),
        'view_item'             => __( 'View Job'),
        'all_items'             => __( 'All Jobs'),
        'search_items'          => __( 'Search Jobs'),
        'parent_item_colon'     => __( 'Parent Jobs:'),
        'not_found'             => __( 'No Jobs found.' ),
        'not_found_in_trash'    => __( 'No Jobs found in Trash.'),
        'featured_image'        => __( 'Job Cover Image'),
        'set_featured_image'    => __( 'Set cover image'),
        'remove_featured_image' => __( 'Remove cover image'),
        'use_featured_image'    => __( 'Use as cover image'),
        'archives'              => __( 'Job archives'),
        'insert_into_item'      => __( 'Insert into job'),
        'uploaded_to_this_item' => __( 'Uploaded to this job'),
        'filter_items_list'     => __( 'Filter jobs list'),
        'items_list_navigation' => __( 'Jobs list navigation'),
        'items_list'            => __( 'Jobs list'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'job' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
    );
    register_post_type( 'job', $args );
}

add_action( 'init', 'create_custom_job_posttype' );

// Register Custom Taxonomy under Job Post Type
add_action( 'init', 'create_jobtype_cat_taxonomies', 0 );
function create_jobtype_cat_taxonomies() {
    register_taxonomy(
        'jobtype',
        'job',
        array(
            'labels' => array(
                'name' => 'Job Type Category',
                'add_new_item' => 'Add New Job Type Category',
                'new_item_name' => "New Job Type Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}

// Register Custom Taxonomy under Job Post Type
add_action( 'init', 'create_job_cat_taxonomies', 0 );
function create_job_cat_taxonomies() {
    register_taxonomy(
        'job_cat',
        'job',
        array(
            'labels' => array(
                'name' => 'Job Category',
                'add_new_item' => 'Add New Job Category',
                'new_item_name' => "New Job Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}

function testimonial_shortcode(){
    $result= '';
    $testimonialsArgs=array(
         'post_type'      => 'testimonials',
         'post_status'    => 'publish',
         'posts_per_page' => -1
    );
    $allTestimonials = get_posts( $testimonialsArgs );
        foreach($allTestimonials as $allTestimonialsValue1){
            $postId 			= $allTestimonialsValue1->ID;
            $testimonialsTitle 	= $allTestimonialsValue1->post_title;
            $testimonialsContent= $allTestimonialsValue1->post_content;
           
            $result.= '<div class="item">
            <span class="triangle-topleft"></span>
            <div class="item-box">
                <span class="quote">
                    <img src="'.get_stylesheet_directory_uri().'/assest/image/icon/quote-solid.png" alt="quote" title="quote"
                        width="25" />
                </span>
                <ul class="d-flex m-0">
                    <li class="country-first-name">
                        <img src="'.get_the_post_thumbnail_url($postId).'" alt="" />
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
                                '.get_field('designation',$postId).'
                            </span>
                        </p>
                        <p class="m-0">'.$testimonialsContent.'</p>
                    </li>
                </ul>
            </div>
        </div>';
        }      
    return $result;       
}
add_shortcode('testimonial', 'testimonial_shortcode');


    function blog_shortcode(){
        $resultb='';
        $blogArgs=array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => -1
        );
        $allBlogs = get_posts($blogArgs);
        // echo '<pre>';
        // print_r($allBlogs);
        // echo '<pre>';
        foreach ($allBlogs as $allBlogsValue1){
                $blogId= $allBlogsValue1->ID;
                $blogTitle 	= $allBlogsValue1->post_title;
                $blogContent= $allBlogsValue1->post_content;
                $resultb.= '<div class="item">
                <div class="item-box">
                    <img src="'.get_the_post_thumbnail_url($blogId).'" alt="training" />
                    <div class="blog-inner">
                    <h4 class="job-title">'.$blogTitle.'</h4>
                    <p>Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut
                        vu lputate nisi. Integer in felis sed leo. </p>
                    </div>
                </div>
            </div>';
            }      
        return $resultb;       
    }
add_shortcode('blog', 'blog_shortcode');


function featuredjob_shortcode(){
    $resultfj='';
    $jobArgs=array(
        'post_type'      => 'job',
        'post_status'    => 'publish',
        'posts_per_page' => -1
    );
    $jobPosts = get_posts( $jobArgs );
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
        $jobCatList 	= get_the_terms($jobId, 'job_cat'); 
        $resultfj.='<div class="item">
            <div class="item-box">
                <ul class="d-flex pb-3">
                    <li class="country-first-name">
                        <img src="'.get_stylesheet_directory_uri().'/assest/image/first-letter.png" alt="" title="" />
                    </li>
                    <li class=" ms-3">
                        <p class="country-name mb-1">'.$companyName.'</p>
                        <p class="country-city mb-0 theme-red-font">
                            <i class="fa-solid fa-location-dot "></i>
                            &nbsp;'.$country.'
                        </p>
                    </li>
                </ul>
                <h4 class="job-title">'.$jobTitle.'</h4>
                <p class="pb-3 job-meta">
                    <span>
                        <i class="fa-solid fa-suitcase"></i>';
                        foreach($jobCatList as $jobCatListValue) { 
                            $resultfj .= ucfirst($jobCatListValue->name);
                       
                        }
                        // foreach($jobTypeList as $jobTypeListValue) { 
                        //     $resultfj .= ucfirst($jobCatListValue->name);
                        // } 
                        $resultfj .='</span> 
                    <span>
                        <i class="fa-regular fa-clock"></i> 
                        Posted '.$postedAtString.
                    '</span>
                </p>
                <p><?php echo $jobContent; ?></p>
                <p class="tags pb-4">';
                  
                    foreach($jobCatList as $jobCatListValue) { 
                        $resultfj .= '<span>'.ucfirst($jobCatListValue->name).'</span>';
                   
                    }
                    $resultfj .= '</p>
                <ul class="d-flex justify-content-between price-tag">
                    <li>$900/Hr</li>

                    
                    <li><a class="apply-btn btn light-btn" href="#">Apply</a></li>
                </ul>
            </div>
        </div>';
   
    }  
    return $resultfj;       
}
add_shortcode('featuredjob', 'featuredjob_shortcode');