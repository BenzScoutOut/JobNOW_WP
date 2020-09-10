<?php
function article_b_opengraph() {
   $args = array(  
	   	'post_type' => array('article','covid19'),
        'post_status' => 'publish',
		'posts_per_page' => 8,
        'include' => get_the_ID()
	);
	$myposts = get_posts($args);
	foreach ($myposts as $value){
		$title = $value->title;
		$description = $value->description;
		$thumbnails_values = $value->thumbnail;
		$image = wp_get_attachment_image_src($thumbnails_values, 'full');
	?>
	<meta property="title" content="<?php echo $title; ?>"/>
	<meta property="description" content="<?php echo $description; ?>"/>
    <meta property="type" content="article"/>
    <meta property="url" content="<?php echo the_permalink(); ?>"/>
	<meta property="image" content="<?php echo $image[0]; ?>"/>
	<meta property="og:title" content="<?php echo $title; ?>"/>
	<meta property="og:description" content="<?php echo $description; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
	<meta property="og:image" content="<?php echo $image[0]; ?>"/>
 
	<?php
	}
}
add_action('wp_head', 'article_b_opengraph', 5);


function fb_opengraph() {
   $args = array(  
        'post_status' => 'publish',
		'posts_per_page' => 8,
        'include' => get_the_ID()
	);
	$myposts = get_posts($args);
	foreach ($myposts as $value){
		$title = $value->title;
		$description = $value->description;
		$thumbnails_values = $value->thumbnail;
		$image = wp_get_attachment_image_src($thumbnails_values, 'full');
	?>
	<meta property="title" content="<?php echo $title; ?>"/>
	<meta property="description" content="<?php echo $description; ?>"/>
    <meta property="type" content="article"/>
    <meta property="url" content="<?php echo the_permalink(); ?>"/>
	<meta property="image" content="<?php echo $image[0]; ?>"/>
	<meta property="og:title" content="<?php echo $title; ?>"/>
	<meta property="og:description" content="<?php echo $description; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
	<meta property="og:image" content="<?php echo $image[0]; ?>"/>
 
	<?php
	}
}
add_action('wp_head', 'fb_opengraph', 5);




function all_article(){
	$args = array(  
       'post_type' => array('article','covid19'),
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'exclude'       => get_the_ID()
	);
	$myposts = get_posts($args);
	?>

<div class="row"> <?php
		article_get_ui($myposts, false);
				?> </div> <?php
}

function other_article(){
	$args = array(  
       'post_type' => array('article','covid19'),
        'post_status' => 'publish',
		'posts_per_page' => 3,
		'exclude'       => get_the_ID()
	);
	$myposts = get_posts($args);
	?> <div class="d-md-flex d-block"> <?php
		other_article_get_ui($myposts, false);
				?> </div> <?php
}

function get_product_list_bundle(){
	?>
 <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<?php
   $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'product_cat'    => 'bundle',
	   	'orderby'          => 'menu_order+title',
        'order'            => 'ASC',
    );

    $myposts = get_posts($args);
	?>
<div class="container mx-auto w-100 pricing-main-padding-control">
						  <div class="carousel" data-flickity='{ "wrapAround": false, "contain" : true, "pageDots": false, "draggable": true, "selectedAttraction": 0.01, "friction" : 0.15, "prevNextButtons": false}'>
							  <?php
							foreach ($myposts as $key => $value){
								$image = wp_get_attachment_image_src($value->product_image, 'full');
							?> 
							     <div class="carousel-cell mx-auto">
									 <? if($key%2==0){
								?><div class="pricing-bundle-control d-flex flex-column"><?
							}else{
								?><div class="pricing-bundle-control-white  d-flex flex-column"><?
							}?>
										 	<h2 class="pricing-bundle-package-name mx-auto">
												<? echo $value->package_name; ?>
										 </h2>
										 <img src="<? echo $image[0]; ?>" class="pricing-bundle-product-image mx-auto">
										 <div class="d-flex justify-content-center pricing-bundle-price-control">
											 <span class="pricing-bundle-price-title"><? echo $value->price_title; ?></span>
											 <span class="pricing-bundle-price-sub-title mt-auto">บาท</span>
										 </div>
									 
									 	<div class="d-flex justify-content-center">
											<span class="pricing-bundle-orginal-price">(มูลค่าปกติ </span>
											<span class="pricing-bundle-orginal-price-red"><? echo $value->original_price; ?></span>
											<span class="pricing-bundle-orginal-price"> บาท)</span>
									 	</div>
									 <span class="pricing-bundle-credit-amount mx-auto"><? echo $value->credits; ?> <span class="pricing-bundle-credit-unit">เครดิต</span></span>
									 <span class="pricing-bundle-expired-text mx-auto">อายุเครดิต <span class="pricing-bundle-expired-amount"><? echo $value->expired_credits; ?> </span>เดือน</span>
										 <div class="pricing-bundle-divider">
											 
										 </div>
									 	 <span class="pricing-bundle-benefit-head-text mx-auto">บริการเสริมช่วยหาคนสุดว้าว!</span>
									 <div class="d-flex pricing-bundle-benefit-control">
										   <div class="pricing-bundle-img-benefit-control">
											  <img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-benefit-green@3x.png" class="pricing-bundle-img-benefit">
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->benefit_1;?></span>
									 </div>
									 <div class="d-flex pricing-bundle-benefit-control">
										   <div class="pricing-bundle-img-benefit-control">
											  <img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-benefit-green@3x.png" class="pricing-bundle-img-benefit">
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->benefit_2;?></span>
									 </div>
									 <div class="d-flex pricing-bundle-benefit-control">
										   <div class="pricing-bundle-img-benefit-control">
											   <? if($value->benefit_3 != ' '){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-benefit-green@3x.png" class="pricing-bundle-img-benefit">
											   <? } ?>
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->benefit_3;?></span>
									 </div>
									  <div class="d-flex pricing-bundle-benefit-control">
										   <div class="pricing-bundle-img-benefit-control">
											 <? if($value->benefit_4 != ' '){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-benefit-green@3x.png" class="pricing-bundle-img-benefit">
											   <? } ?>
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->benefit_4;?></span>
									 </div>
									  <div class="d-flex pricing-bundle-benefit-control">
										   <div class="pricing-bundle-img-benefit-control">
											  <? if($value->benefit_5 != ' '){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-benefit-green@3x.png" class="pricing-bundle-img-benefit">
											   <? } ?>
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->benefit_5;?></span>
									 </div>
									  <div class="d-flex pricing-bundle-benefit-control">
										   <div class="pricing-bundle-img-benefit-control">
											   <? if($value->benefit_6 != ' '){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-benefit-green@3x.png" class="pricing-bundle-img-benefit">
											   <? } ?>
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->benefit_6;?></span>
									 </div>
									  <div class="d-flex pricing-bundle-benefit-control">
										   <div class="pricing-bundle-img-benefit-control">
											   <? if($value->benefit_7 != ' '){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-benefit-green@3x.png" class="pricing-bundle-img-benefit">
											   <? } ?>
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->benefit_7;?></span>
									 </div>
										 <div class="pricing-bundle-divider">
											 
										 </div>
											 <span class="pricing-bundle-benefit-head-text mx-auto">รับฟรี! ของสมนาคุณ</span>
									  <div class="d-flex pricing-bundle-gift-control">
										   <div class="pricing-bundle-img-gift-control">
											   <? if($value->gift_1 != ' '){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-mask-gq@3x.png" class="pricing-bundle-img-gift">
											   <? } ?>
											   
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->gift_1;?></span>
									 </div>
									  <div class="d-flex pricing-bundle-gift-control">
										   <div class="pricing-bundle-img-gift-control">
											   <? if($value->gift_2 != ' '){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-gift-voucher@3x.png" class="pricing-bundle-img-gift">
											   <? } ?>
											   
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->gift_2;?></span>
									 </div>
									  <div class="d-flex pricing-bundle-gift-control">
										   <div class="pricing-bundle-img-gift-control">
											   <? if($value->gift_3 != ' ' && $key == 2){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-gift-mi-scale@3x.png" class="pricing-bundle-img-gift">
											   <? } else if($value->gift_3 != ' ' && $key == 3){
												?><img src="https://scoutout.co/wp-content/uploads/2020/07/pricing-gift-xiaomi@3x.png" class="pricing-bundle-img-gift">
											   <? } ?>
									 	</div>
										 <span class="pricing-bundle-benefit-text my-auto"><? echo $value->gift_3;?></span>
									 </div>
									  <a href="https://scoutout.co/redirect-to-cart?product_id=<? echo $value->product_id;?>"  class="mx-auto pricing-bundle-button-buy">
										 
											ซื้อแพ็กเกจ
										  </a>
									 </div>
							  </div>
								<?php
								}
	
							  ?></div></div><?
}

function get_product_list_main() {
	
	?>
 <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<?php
   $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 10,
        'product_cat'    => 'main',
	   	'orderby'          => 'menu_order+title',
        'order'            => 'ASC',
    );

    $myposts = get_posts($args);
	?>

<div class="container mx-auto w-100 pricing-main-padding-control">
						  <div class="carousel" data-flickity='{ "wrapAround": false, "contain" : true, "pageDots": false, "draggable": true}'>
							  <?php
							foreach ($myposts as $key => $value){
								$image = wp_get_attachment_image_src($value->product_image, 'full');
							?> 
							     <div class="carousel-cell mx-auto">
									 <? if($key%2==0){
								?><div class="pricing-main-control-white d-flex flex-column"><?
							}else{
								?><div class="pricing-main-control d-flex flex-column"><?
							}?>
										 	<h2 class="pricing-main-package-name mx-auto">
												<? echo $value->name; ?>
										 </h2>
										 <img src="<? echo $image[0]; ?>" class="pricing-main-product-image mx-auto">
										 <div class="d-flex justify-content-center pricing-main-price-control">
											 <span class="pricing-main-price-title"><? echo $value->price_title; ?></span>
											 <span class="pricing-main-price-sub-title mt-auto">บาท</span>
										 </div>
										 <div class="pricing-main-divider">
											 
										 </div>
										 
										 <div class="d-flex pricing-main-credit-control justify-content-center">
											 <span class="pricing-main-credit-title-black"><? echo $value->amount_credit;?></span>
											 <span class="pricing-main-credit-title-red"><? echo $value->bonus_credit;?></span>
											 <span class="pricing-main-credit-subtitle mt-auto">เครดิต</span>
										 </div>
										 <span class="pricing-main-text-bonus-red mx-auto">(+โบนัสเครดิต)</span>
										 
										 <div class="pricing-main-divider">
											 
										 </div>
										 
										 <div class="pricing-main-expired-control d-flex flex-column justify-content-center">
											 <span class="pricing-main-expired-title-gray mx-auto">อายุเครดิต</span>
											 <span class="pricing-main-expired-title mx-auto"><? echo $value->expired_credit;?> เดือน</span>
										 </div>
										  <div class="pricing-main-divider">
											 
										 </div>
									  <a href="https://scoutout.co/redirect-to-cart?product_id=<? echo $value->product_id;?>"  class="mx-auto pricing-bundle-button-buy">
										 
											ซื้อแพ็กเกจ
										  </a>
									 </div>
							  </div>
								<?php
								}
	
							  ?></div></div><?
}
function article_landing_ui(){
	$args = array(  
        'post_type' => array('article','covid19'),
        'post_status' => 'publish',
		'posts_per_page' => 5
	);
	$myposts = get_posts($args);
		
			?> 

		<div class="row section-article-landing-control">

			<div class="col-lg-6 col-12 landing-article-card-control">
				<a class="landing-article-head-card d-flex flex-column" href="<?php echo get_post_permalink($myposts[0]->ID); ?>">
					<img class="img landing-article-head-img" src="<?php echo wp_get_attachment_image_src($myposts[0]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-head-title"><?php echo $myposts[0]->title; ?></span>
					<span class="landing-article-head-short-desc"><?php echo $myposts[0]->description; ?></span>
				</a>
			</div> 
			<div class="col-lg-3 col-12 landing-article-card-control d-flex flex-column">
				
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[1]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[1]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[1]->title ?></span>
				</a>
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[2]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[2]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[2]->title ?></span>
				</a>
			</div>
			<div class="col-lg-3 col-12 landing-article-card-control d-flex flex-column">
				
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[3]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[3]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[3]->title ?></span>
				</a>
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[4]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[4]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[4]->title ?></span>
				</a>
			</div>
	</div>

	<div class="section-article-landing-mobile-control no-gutters">
			<div class="landing-article-card-control no-gutters">
				
				<a class="landing-article-card"  href="<?php echo get_post_permalink($myposts[0]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[0]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[0]->title ?></span>
				</a>
				
			</div>
			<div class="landing-article-card-control no-gutters">
				
				<a class="landing-article-card"  href="<?php echo get_post_permalink($myposts[1]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[1]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[1]->title ?></span>
				</a>
				
			</div>
			<div class="landing-article-card-control no-gutters">
				<a class="landing-article-card"  href="<?php echo get_post_permalink($myposts[2]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[2]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[2]->title ?></span>
				</a>
			</div>
			<div class="landing-article-card-control no-gutters">
				<a class="landing-article-card "  href="<?php echo get_post_permalink($myposts[3]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[3]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[3]->title ?></span>
				</a>
			</div>
	</div>
<?php

}
function other_article_get_ui($myposts, $isReading){
	foreach ($myposts as $value){
		$title = $value->title;
		$date_values = $value->date;
		$newDate = date("d M Y", strtotime($date_values));  
		$thumbnails_values = $value->thumbnail;
		$urlPost = get_post_permalink($value->ID);
		$image = wp_get_attachment_image_src($thumbnails_values, 'full');
		
		?> <div class="article-card-control d-flex">
				<a class="article-card d-flex flex-column" href="<?php echo $urlPost; ?>">
					<img src="<?php echo $image[0]; ?>" class="img article-image">
					<span class="article-text"><?php echo $title; ?></span>
				</a>
			</div> 
<?php
	}
}
function article_get_ui($myposts, $isReading){
	foreach ($myposts as $value){
		$title = $value->title;
		$date_values = $value->date;
		$newDate = date("d M Y", strtotime($date_values));  
		$thumbnails_values = $value->thumbnail;
		$urlPost = get_post_permalink($value->ID);
		$image = wp_get_attachment_image_src($thumbnails_values, 'full');
		
		?> <div class="col-lg-4 col-md-5 col-12 article-card-control d-flex">
				<a class="article-card d-flex flex-column" href="<?php echo $urlPost; ?>">
					<img src="<?php echo $image[0]; ?>" class="img article-image">
					<span class="article-text"><?php echo $title; ?></span>
					<span class="article-date"><?php echo $newDate; ?></span>
				</a>
			</div> 
<?php
	}
}

function show_partner_landing(){
	
	?> <div class="d-flex row">
		<div class="col-3">
			<img src="https://i1.wp.com/scoutout.co/wp-content/uploads/2020/08/ais-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i1.wp.com/scoutout.co/wp-content/uploads/2020/08/crg-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i1.wp.com/scoutout.co/wp-content/uploads/2020/08/major-logo-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i1.wp.com/scoutout.co/wp-content/uploads/2020/08/pizza_hut-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i2.wp.com/scoutout.co/wp-content/uploads/2020/08/lotus-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i0.wp.com/scoutout.co/wp-content/uploads/2020/08/loreal-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i2.wp.com/scoutout.co/wp-content/uploads/2020/08/uniqlo-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i0.wp.com/scoutout.co/wp-content/uploads/2020/08/watsons-logo-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i0.wp.com/scoutout.co/wp-content/uploads/2020/08/minor-1.png" class="img partner-img">
		</div>
	<div class="col-3">
			<img src="https://i2.wp.com/scoutout.co/wp-content/uploads/2020/08/zara-1.png" class="img partner-img">
		</div>
	<div class="col-3">
		<img src="https://i1.wp.com/scoutout.co/wp-content/uploads/2020/08/kfc-1.png" class="img partner-img">
	</div>
	<div class="col-3">
		<img src="https://i1.wp.com/scoutout.co/wp-content/uploads/2020/08/scb-1.png" class="img partner-img">
	</div>
	<div class="col-3">
		<img src="https://i2.wp.com/scoutout.co/wp-content/uploads/2020/08/mcdonal-1.png" class="img partner-img">
	</div>
	<div class="col-3">
		<img src="https://i2.wp.com/scoutout.co/wp-content/uploads/2020/08/cp_all-1.png" class="img partner-img">
	</div>
	<div class="col-3">
		<img src="https://i1.wp.com/scoutout.co/wp-content/uploads/2020/08/nestle-1.png" class="img partner-img">
	</div>
	</div><?php
}


function redirect_to_cart(){
	  $email = $_GET['email'];
      $company_name = $_GET['company'];
      $uuid = $_GET['uuid'];
	    if ( ! is_admin() && isset( $_GET['product_id'] )) {
                                global $woocommerce;
                                $product_id = $_GET['product_id'];
								$woocommerce->cart->add_to_cart( $product_id );
			  header("Location: https://scoutout.co/purchase/cart?email=".$email."&company=".$company_name."&uuid=".$uuid."");
                }
}


function redirect_to_pricing(){
	  $email = $_GET['email'];
      $company_name = $_GET['company'];
      $uuid = $_GET['uuid'];
      header("Location: https://scoutout.co/jobnow-demo/jobnow-pricing-th/");
}

function add_product_to_cart() {
                if ( ! is_admin() && isset( $_GET['product_id'] )) {
                                global $woocommerce;
                                $product_id = $_GET['product_id'];
                                $found = false;
								$woocommerce->cart->add_to_cart( $product_id );
                }
}

add_filter('add_to_cart_redirect', 'lw_add_to_cart_redirect');
function lw_add_to_cart_redirect() {
 global $woocommerce;
 $lw_redirect_checkout = $woocommerce->cart->get_checkout_url();
 return $lw_redirect_checkout;
}

add_filter('woocommerce_email_subject_new_order', 'change_admin_email_subject', 1, 2);
function change_admin_email_subject( $subject, $order ) {
	global $woocommerce;

	$blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

	$subject = sprintf( '[WP-Purchase] - ได้รับคำสั่งซื้อใหม่',  $order->id, $order->billing_first_name, $order->billing_last_name );

	return $subject;
}



add_action( 'woocommerce_email_before_order_table', 'bbloomer_add_content_specific_email', 20, 4 );
 function bbloomer_add_content_specific_email( $order, $sent_to_admin, $plain_text, $email ) {
   if ( $email->id == 'customer_processing_order' ) {
      echo '<span>ทางเราได้รับการชำระเงินจากคุณแล้ว คุณสามารถดูรายละเอียดคำสั่งซื้อเพื่อใช้อ้างอิงได้ตามด้านล่าง<br>
<br>
เครดิตจะได้รับการอนุมัติภายใน 1 วันทำการ (จันทร์-ศุกร์ เวลา 9.00-18.00 น.)
<br>
<br>
ขอบคุณมากค่ะ<br>
JobNOW Customer Service</span><br><br>';
   }
}

add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number' );
function change_woocommerce_order_number( $order_id ) {
    $prefix = '2020-';
    $new_order_id = $prefix . $order_id;
    return $new_order_id;
}
?>