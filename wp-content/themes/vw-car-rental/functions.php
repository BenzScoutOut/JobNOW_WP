<?php
/**
 * VW Car Rental functions and definitions
 *
 * @package VW Car Rental
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'vw_car_rental_setup' ) ) :
 
function vw_car_rental_setup() {

	$GLOBALS['content_width'] = apply_filters( 'vw_car_rental_content_width', 640 );
	
	load_theme_textdomain( 'vw-car-rental', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('vw-car-rental-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vw-car-rental' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', vw_car_rental_font_url() ) );
}
endif;

	// Theme Activation Notice
	global $pagenow;

	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
	add_action( 'admin_notices', 'vw_car_rental_activation_notice' );
}

add_action( 'after_setup_theme', 'vw_car_rental_setup' );

// Notice after Theme Activation
function vw_car_rental_activation_notice() {	
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
	echo '<h3>'. esc_html__( 'Warm Greetings to you!!', 'vw-car-rental' ) .'</h3>';
	echo '<p>'. esc_html__( 'Thank you for choosing VW Car Rental Theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW Car Rental Theme.', 'vw-car-rental' ) .'</p>';
	echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=vw_car_rental_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'vw-car-rental' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function vw_car_rental_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-car-rental' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-car-rental' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-car-rental' ),
		'description'   => __( 'Appears on page sidebar', 'vw-car-rental' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'vw-car-rental' ),
		'description'   => __( 'Appears on page sidebar', 'vw-car-rental' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'vw-car-rental' ),
		'description'   => __( 'Appears on footer 1', 'vw-car-rental' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'vw-car-rental' ),
		'description'   => __( 'Appears on footer 2', 'vw-car-rental' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'vw-car-rental' ),
		'description'   => __( 'Appears on footer 3', 'vw-car-rental' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'vw-car-rental' ),
		'description'   => __( 'Appears on footer 4', 'vw-car-rental' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'vw-car-rental' ),
		'description'   => __( 'Appears on shop page', 'vw-car-rental' ),
		'id'            => 'woocommerce-shop-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Sidebar', 'vw-car-rental' ),
		'description'   => __( 'Appears on shop page', 'vw-car-rental' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_car_rental_widgets_init' );

/* Theme Font URL */
function vw_car_rental_font_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'Poppins';
	$font_family[] = 'Source Sans Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family' => rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_car_rental_scripts() {
	wp_enqueue_style( 'vw-car-rental-font', vw_car_rental_font_url(), array() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css' );
	wp_enqueue_style( 'vw-car-rental-basic-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/inline-style.php' );
	wp_add_inline_style( 'vw-car-rental-basic-style',$custom_css );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'vw-car-rental-custom-scripts-jquery', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'vw_car_rental_scripts' );

function vw_car_rental_ie_stylesheet(){
	wp_enqueue_style('vw-car-rental-ie', get_template_directory_uri().'/css/ie.css');
	wp_style_add_data( 'vw-car-rental-ie', 'conditional', 'IE' );
}
add_action('wp_enqueue_scripts','vw_car_rental_ie_stylesheet');

function vw_car_rental_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/*radio button sanitization*/
function vw_car_rental_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function vw_car_rental_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

define('VW_CAR_RENTAL_FREE_THEME_DOC',__('https://www.vwthemesdemo.com/docs/free-vw-car-rental/','vw-car-rental'));
define('VW_CAR_RENTAL_SUPPORT',__('https://wordpress.org/support/theme/vw-car-rental/','vw-car-rental'));
define('VW_CAR_RENTAL_REVIEW',__('https://wordpress.org/support/theme/vw-car-rental/reviews','vw-car-rental'));
define('VW_CAR_RENTAL_BUY_NOW',__('https://www.vwthemes.com/themes/car-rental-wordpress-theme/','vw-car-rental'));
define('VW_CAR_RENTAL_LIVE_DEMO',__('https://www.vwthemes.net/vw-car-rental-pro/','vw-car-rental'));
define('VW_CAR_RENTAL_PRO_DOC',__('https://www.vwthemesdemo.com/docs/vw-car-rental-pro/','vw-car-rental'));
define('VW_CAR_RENTAL_FAQ',__('https://www.vwthemes.com/faqs/','vw-car-rental'));
define('VW_CAR_RENTAL_CONTACT',__('https://www.vwthemes.com/contact/','vw-car-rental'));
define('VW_CAR_RENTAL_CHILD_THEME',__('https://developer.wordpress.org/themes/advanced-topics/child-themes/','vw-car-rental'));
define('VW_CAR_RENTAL_CREDIT',__('https://www.vwthemes.com/themes/free-car-rental-wordpress-theme/','vw-car-rental'));

if ( ! function_exists( 'vw_car_rental_credit' ) ) {
	function vw_car_rental_credit(){
		echo "<a href=".esc_url(VW_CAR_RENTAL_CREDIT).">".esc_html__('Car Rental WordPress Theme','vw-car-rental')."</a>";
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'vw_car_rental_loop_columns');
	if (!function_exists('vw_car_rental_loop_columns')) {
		function vw_car_rental_loop_columns() {
		return 3; // 3 products per row
	}
}


/* Custom Part-Time */
function show_card_design(){

	$url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?jobTypes=PART_TIME&searchText=&googlePlaceId=&googlePlaceName=&latitude=&longitude=&page=0';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	
	
	?>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
		
		<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain": true }'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salaryType"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["jobExpireTimeLeftUnit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
						  
						  
						
										<div class="carousel-cell card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=JobNOW&utm_medium=JobNOW_LD_Parttime" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary my-auto">
														<span class="salary-text my-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary my-auto">
													<span class="company-text my-auto"><?php echo $value2["headquarterName"]; ?></span>
													</div>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary my-auto">
															<span class="company-text my-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																ดูรายละเอียดงาน
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
						  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="carousel-cell card-job mx-auto">
							  
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
								  <div class="text-control margin-extra d-flex flex-column">
										<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
									  	<span class="job-title d-flex">รอคนอยู่อีกเยอะที่ <img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow"></span>
								  		<a href="https://job.jobnow.work/jobs?latitude=&longitude=&part_time=true&utm_source=JobNOW&utm_medium=JobNOW_LD_Parttime" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://account.scoutout.co/login?callbackUrl=https:%2F%2Fjob.jobnow.work%2Fredirect-authenticate%3Fredirect_path%3D%252Fprofile%26utm_source%3DJobNOW%26utm_medium%3DJobNOW_LD_Parttime%26utm_campaign%3D%26utm_content%3D%26fbclid%3D%26gclid%3D" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
							<?php } 
								}?>
						   </div>
					</div>
		<div class="container-fluid d-flex d-md-none mx-auto row-width">
					  <div class="carousel w-100" data-flickity>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salaryType"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["jobExpireTimeLeftUnit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
										<div class="carousel-cell card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=JobNOW&utm_medium=JobNOW_LD_Parttime" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary my-auto">
														<span class="salary-text my-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary my-auto">
													<span class="company-text my-auto"><?php echo $value2["headquarterName"]; ?></span>
													</div>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary my-auto">
															<span class="company-text my-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																ดูรายละเอียดงาน
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
						  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="carousel-cell card-job mx-auto">
							  
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
								  <div class="text-control margin-extra d-flex flex-column">
										<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
									  	<span class="job-title d-flex">รอคนอยู่อีกเยอะที่ <img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow"></span>
								  		<a href="https://job.jobnow.work/jobs?latitude=&longitude=&part_time=true&utm_source=JobNOW&utm_medium=JobNOW_LD_Parttime" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://account.scoutout.co/login?callbackUrl=https:%2F%2Fjob.jobnow.work%2Fredirect-authenticate%3Fredirect_path%3D%252Fprofile%26utm_source%3DJobNOW%26utm_medium%3DJobNOW_LD_Parttime%26utm_campaign%3D%26utm_content%3D%26fbclid%3D%26gclid%3D" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
									<?php
							}
								}?>
						   </div>
					</div>
	
<?php
}
/* Custom CP-ALL */
function show_card_cp_all(){

	$url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=%E0%B8%8B%E0%B8%B5%E0%B8%9E%E0%B8%B5%20%E0%B8%AD%E0%B8%AD%E0%B8%A5%E0%B8%A5%E0%B9%8C&googlePlaceId=&googlePlaceName=&latitude=&longitude=&page=0';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	
	
	?>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
		
		<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain": true }'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salaryType"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["jobExpireTimeLeftUnit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
						  
						  
						
										<div class="carousel-cell card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=JobNOW&utm_medium=JobNOW_LD_CP_ALL" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary my-auto">
														<span class="salary-text my-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary my-auto">
													<span class="company-text my-auto"><?php echo $value2["headquarterName"]; ?></span>
													</div>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary my-auto">
															<span class="company-text my-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																ดูรายละเอียดงาน
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
						  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="carousel-cell card-job mx-auto">
							  
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
								  <div class="text-control margin-extra d-flex flex-column">
										<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
									  	<span class="job-title d-flex">รอคนอยู่อีกเยอะที่ <img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow"></span>
								  		<a href="https://job.jobnow.work/company/cpalljobs?utm_source=JobNOW&utm_medium=JobNOW_LD_CP_ALL" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://jobnow.page.link/vn1s" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
							<?php } 
								}?>
						   </div>
					</div>
		<div class="container-fluid d-flex d-md-none mx-auto row-width">
					  <div class="carousel w-100" data-flickity>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salaryType"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["jobExpireTimeLeftUnit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
										<div class="carousel-cell card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=JobNOW&utm_medium=JobNOW_LD_CP_ALL" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary my-auto">
														<span class="salary-text my-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary my-auto">
													<span class="company-text my-auto"><?php echo $value2["headquarterName"]; ?></span>
													</div>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary my-auto">
															<span class="company-text my-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																ดูรายละเอียดงาน
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
						  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="carousel-cell card-job mx-auto">
							  
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
								  <div class="text-control margin-extra d-flex flex-column">
										<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
									  	<span class="job-title d-flex">รอคนอยู่อีกเยอะที่ <img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow"></span>
								  		<a href="https://job.jobnow.work/company/cpalljobs?utm_source=JobNOW&utm_medium=JobNOW_LD_CP_ALL" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://jobnow.page.link/vn1s" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
									<?php
							}
								}?>
						   </div>
					</div>
	
<?php
}

/* Custom CP-ALL */
function show_card_lotus(){

	$url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&googlePlaceId=&googlePlaceName=&latitude=&longitude=&hqUuids=2674d0d7-930b-4ef9-a116-f16f1f80b7c8&page=0';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	
	
	?>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
		
		<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain": true }'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salaryType"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["jobExpireTimeLeftUnit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
						  
						  
						
										<div class="carousel-cell card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=JobNOW&utm_medium=JobNOW_LD_LOTUS" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary my-auto">
														<span class="salary-text my-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary my-auto">
													<span class="company-text my-auto"><?php echo $value2["headquarterName"]; ?></span>
													</div>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary my-auto">
															<span class="company-text my-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																ดูรายละเอียดงาน
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
						  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="carousel-cell card-job mx-auto">
							  
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
								  <div class="text-control margin-extra d-flex flex-column">
										<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
									  	<span class="job-title d-flex">รอคนอยู่อีกเยอะที่ <img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow"></span>
								  		<a href="https://job.jobnow.work/company/tescolotus?utm_source=JobNOW&utm_medium=JobNOW_LD_LOTUS" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://jobnow.page.link/vn1s" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
							<?php } 
								}?>
						   </div>
					</div>
		<div class="container-fluid d-flex d-md-none mx-auto row-width">
					  <div class="carousel w-100" data-flickity>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salaryType"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["jobExpireTimeLeftUnit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
										<div class="carousel-cell card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=JobNOW&utm_medium=JobNOW_LD_LOTUS" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary my-auto">
														<span class="salary-text my-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary my-auto">
													<span class="company-text my-auto"><?php echo $value2["headquarterName"]; ?></span>
													</div>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary my-auto">
															<span class="company-text my-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																ดูรายละเอียดงาน
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
						  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="carousel-cell card-job mx-auto">
							  
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
								  <div class="text-control margin-extra d-flex flex-column">
										<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
									  	<span class="job-title d-flex">รอคนอยู่อีกเยอะที่ <img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow"></span>
								  		<a href="https://job.jobnow.work/company/tescolotus?utm_source=JobNOW&utm_medium=JobNOW_LD_LOTUS" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://jobnow.page.link/vn1s" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
									<?php
							}
								}?>
						   </div>
					</div>
	
<?php
}

/* Custom CP-ALL */
function show_all_jobs(){
	$one = 1;
	$page = get_query_var('page');
	if(empty($page)){
		$page = 0;
	}
	
	$nextPage = $page + $one;
	$prevPage = $page - $one;
	$url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&jobTypes=FULL_TIME&googlePlaceId=&page='.get_query_var('page').'&googlePlaceName=&latitude='.$_GET['latitude'].'&longitude='.$_GET['longitude'];
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	$url2 = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&jobTypes=FULL_TIME&googlePlaceId=&page='.$nextPage.'&googlePlaceName=&latitude='.$_GET['latitude'].'&longitude='.$_GET['longitude'];
			//Create cURL connection
	$response2 =  wp_remote_get($url2, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse2 = json_decode(wp_remote_retrieve_body($response2), TRUE);
	getCardUI($bodyResponse, $page, $nextPage, $prevPage, 'https://jobnow.work/th/mobile-jobs/mobile-jobs-full-time?page=', $bodyResponse2);
	
						 
}

/* Custom CP-ALL */
function show_all_jobs_parttime(){
$one = 1;
	$page = get_query_var('page');
	if(empty($page)){
		$page = 0;
	}
	$nextPage = $page + $one;
	$prevPage = $page - $one;
	$url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&jobTypes=PART_TIME&googlePlaceId=&page='.get_query_var('page').'&googlePlaceName=&latitude='.$_GET['latitude'].'&longitude='.$_GET['longitude'];
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	$url2 = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&jobTypes=PART_TIME&googlePlaceId=&page='.$nextPage.'&googlePlaceName=&latitude='.$_GET['latitude'].'&longitude='.$_GET['longitude'];
			//Create cURL connection
	$response2 =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse2 = json_decode(wp_remote_retrieve_body($response2), TRUE);
	getCardUI($bodyResponse, $page, $nextPage, $prevPage, 'https://jobnow.work/th/mobile-jobs/mobile-jobs-parttime?page=',$bodyResponse2);
}

/* Custom CP-ALL */
function show_all_jobs_contract(){
$one = 1;
	$page = get_query_var('page');
	if(empty($page)){
		$page = 0;
	}
	$nextPage = $page + $one;
	$prevPage = $page - $one;
	$url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&jobTypes=CONTRACT&page='.get_query_var('page').'&googlePlaceId=&googlePlaceName=&latitude='.$_GET['latitude'].'&longitude='.$_GET['longitude'];
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	$url2 = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&jobTypes=CONTRACT&page='.$nextPage.'&googlePlaceId=&googlePlaceName=&latitude='.$_GET['latitude'].'&longitude='.$_GET['longitude'];
			//Create cURL connection
	$response2 =  wp_remote_get($url2, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Authorization' => 'Basic bWVzc3VhOnBpbmd1MTIz',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse2 = json_decode(wp_remote_retrieve_body($response2), TRUE);
	getCardUI($bodyResponse, $page, $nextPage, $prevPage, 'https://jobnow.work/th/mobile-jobs/mobile-jobs-contract?page=',$bodyResponse2);
}

function getCardUI($bodyResponse, $page, $nextPage, $prevPage, $url,$bodyResponse2){
	$isShowNext = true;
	$one = 1;
	if(sizeof($bodyResponse2) == 0){
		$isShowNext = false;
	}
	?>
		<div class="container-fluid d-flex d-md-none mx-auto app-row-width">
					  <div class="w-100 d-flex flex-column">
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salaryType"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["jobExpireTimeLeftUnit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
										<div class="app-card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=JobNOW&utm_medium=APP_JOBNOW" target="_blank" class="mx-auto row">
												<div class="col-5 no-margin-padding">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="app-image-job">
													<div class="app-img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
													</div>
												</div>
												<div class="col-7 app-text-control d-flex flex-column">
													<span class="app-job-title"><?php echo $value2["jobTitle"]; ?></span>
													<span class="app-company-text my-auto"><?php echo $value2["headquarterName"]; ?></span>
													<div class="app-control-desc">
														<div class="d-flex" style="margin-top: 8px;">
															<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="app-img-salary my-auto">
													<span class="app-desc-text my-auto"><?php echo $value2["branchName"]; ?></span>
														
													</div>
													<div class="d-flex">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="app-img-salary my-auto">
															<span class="app-desc-text my-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
													<div class="d-flex">
														
													<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="app-img-salary my-auto">
														<span class="app-salary-text my-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													</div>
													
													
												</div>
											</a>
										</div>
						  <?php } ?>

						   </div>
					</div>

						  	<?php if($page==0 || $page==1){ 
							  $nextPage = 2; ?>
							  <div class="row"> 
								  
								   <div class="col-12 d-flex">
									   <a class="app-button-next mx-auto text-center" href="<?php echo  $url.''.$nextPage; ?>">ต่อไป</a>
								   </div>
	
									
								</div> 
						 <?php }else if(!$isShowNext){
							?>
							<div class="row"> 
								  
								   <div class="col-12 d-flex">
									   <a class="app-button-next mx-auto text-center" href="<?php echo  $url.''.$prevPage; ?>">ย้อนกลับ</a>
								   </div>
	
									
								</div> <?php
						}
		else{?>
							  <div class="row"> 
								   <div class="col-6 d-flex">
									   <a  class="app-button-next mx-auto text-center" href="<?php echo  $url.''.$prevPage; ?>">ย้อนกลับ</a>
								   </div>
								   <div class="col-6 d-flex">
									   <a class="app-button-next mx-auto text-center" href="<?php echo  $url.''.$nextPage; ?>">ต่อไป</a>
								   </div>		
								</div> 
							<?php  
						  }
		
}

function get_tab_video_ui(){
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<ul  class="nav nav-tabs d-flex nav-tab-control">
			<li class="active">
        		<a  href="#1a" class="video-tab-title" data-toggle="tab">ทั้งหมด</a>
			</li>
			<li>
				<a href="#2a"  class="video-tab-title" data-toggle="tab">Live Facebook</a>
			</li>
			<li>
				<a href="#3a"  class="video-tab-title" data-toggle="tab">บทสัมภาษณ์</a>
			</li>
			<!-- <span class="ml-auto my-auto"> เรียงจากมากไปน้อย </span> -->
		</ul>
		<div class="tab-content clearfix tab-control">
			<div class="tab-pane active" id="1a">
				<div class="row">
					<?php 
					video_current_post_all();
					video_post_without_current_all();
					?>

				</div> 	
			</div>
			<div class="tab-pane" id="2a">
				<div class="row">
					<?php 
					video_current_post_fb();
					video_post_without_current_fb();
					?>

				</div> 	
			</div>
			<div class="tab-pane" id="3a">
				<div class="row">
					<?php 
					if(checkAllInterview()){
						video_current_post_interview();
						video_post_without_current_interview();
					}
					
					?>

				</div> 	
			</div>
		</div>
	<?php
}
function fb_opengraph() {
	$args = array(  
		 'post_type' => 'video_channel',
		 'post_status' => 'publish',
		 'posts_per_page' => 8,
		 'islive' => true,
		 'include' => get_the_ID()
	 );
	 $myposts = get_posts($args);
	 foreach ($myposts as $value){
		 $url_values = $value->url;
		 $description = $value->description;
	 ?>
	 <meta property="og:description" content="<?php echo $description; ?>"/>
	 <meta property="og:type" content="article"/>
	 <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
  
	 <?php
	 }
 }
 add_action('wp_head', 'fb_opengraph', 5);
function checkAllInterview(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'cat' => 1395,
        'exclude' => get_the_ID()
	);
	$myposts = get_posts($args);
	if(sizeof($myposts) == 0){
			?> <div class="col-12 no-video-control d-flex">
					<span class="no-video-text mx-auto my-auto">ยังไม่มีวีดีโอในหมวดนี้</span>
			</div><?php
		return false;
		}else{
		return true;
	}
}

function video_current_post_all(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
        'include'       => get_the_ID()
	);
	$myposts = get_posts($args);
	video_get_ui($myposts, true);
}

function video_post_without_current_all(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
        'exclude'       => get_the_ID()
	);
	$myposts = get_posts($args);
	video_get_ui($myposts, false);
}

function video_current_post_fb(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'cat' => 1394,
        'include' => get_the_ID()
	);
	$myposts = get_posts($args);
	video_get_ui($myposts, true);
}

function video_post_without_current_fb(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'cat' => 1394,
        'exclude' => get_the_ID()
	);
	$myposts = get_posts($args);
	video_get_ui($myposts, false);
}

function video_current_post_interview(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'cat' => 1395,
        'include'       => get_the_ID()
	);
	$myposts = get_posts($args);
	video_get_ui($myposts, true);
}

function video_post_without_current_interview(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'cat' => 1395,
        'exclude'       => get_the_ID()
	);
	$myposts = get_posts($args);
	video_get_ui($myposts, false);
}

function video_get_ui($myposts, $isPlaying){
		
			
		
		foreach ($myposts as $value){
			$url_values = $value->url;
			$title_values = $value->title;
			$thumbnails_values = $value->thumbnail;
			$date_values = $value->date;
			$isLive = $value->islive;
			$newDate = date("d M Y", strtotime($date_values));  
			$type = $value->type;
			$post_categories = get_the_category( $value->ID );
			$type = $post_categories[0]->cat_name;
			$urlPost = get_post_permalink($value->ID);
			if($type == 'livefacebook'){
				$type_values = 'live facebook';
			}else if($type == 'interview')
				$type_values = 'บทสัมภาษณ์';
			else{
				$type_values = 'ทั่วไป';
			}
			if ($thumbnails_values) {
				$image = wp_get_attachment_image_src($thumbnails_values, 'full');
			
				?>
				
						
					<div class="col-12 col-md-4 d-flex">
						<a class="d-flex d-md-none mobile-video-control">
							<img src="<?php echo $image[0]; ?>" class="mobile-video-thumbnail">
							<div class="mobile-video-desc-control d-flex flex-column">
							<?php 
								if($isPlaying){
									?> <span class="mobile-playing-text">กำลังเล่น</span>
										
								<?php } ?>
								
								<?php 
									if($isLive){
										?>
										<div class="video-live-button d-flex">
											<span class="video-live-button-text mx-auto my-auto">Live Now</span>
										</div>
								<?php	} ?>
								<span class="video-title mt-auto"><?php echo $title_values; ?></span>
							</div>
						</a>
						
						<a class="card-video-control d-md-flex d-none flex-column mx-auto" href="<?php echo $urlPost; ?>">
						<?php 
								if($isPlaying){
									?> 	<div class="border-card-video-active"></div>
								<?php } ?>
					
							<div class="video-thumbnail">
							<?php 
								if($isPlaying){
									?> <span class="video-now-playing">กำลังเล่น</span>
									<div class="video-thumbnail-gradient"></div>
								<?php } ?>
								
								<img src="<?php echo $image[0]; ?>" class="video-thumbnail">
							</div>
							<div class="video-desc-control d-flex flex-column">
								<span class="video-title mx-auto text-center"><?php echo $title_values; ?></span>
								<div class="mt-auto d-flex flex-column">
								<?php 
									if($isLive){
										?>
										<div class="video-live-button mx-auto d-flex">
											<span class="video-live-button-text mx-auto my-auto">Live Now</span>
										</div>
										<?php
									}
								?>
									
									<div class="video-button-type mx-auto d-flex">
										<span class="video-button-text mx-auto my-auto"><?php echo $type_values; ?></span>
									</div>
									<span class="video-date-text mx-auto"><?php echo $newDate;?></span>
									
								</div>
								
							</div>
						</a>
					</div>
				<?php
				wp_reset_postdata();
			}
			}
		
	
}
function get_jobid() {

   return $_GET['jobID'];

}


/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Customizer additions. */
require get_template_directory() . '/inc/social-widgets/social-icon.php';

/* Implement the About theme page */
require get_template_directory() . '/inc/getstart/getstart.php';

/* typography */
require get_template_directory() . '/inc/typography/ctypo.php';