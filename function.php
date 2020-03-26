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
								  		<a href="https://jobnow.page.link/Bt5C" target="_blank" >
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
								  		<a href="https://jobnow.page.link/Bt5C" target="_blank" >
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
								  		<a href="https://jobnow.page.link/Bt5C" target="_blank" >
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
								  		<a href="https://jobnow.page.link/Bt5C" target="_blank" >
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