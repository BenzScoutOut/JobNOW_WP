<?php
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

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		
		<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain": true }'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / วัน";
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
																สมัครงาน นี้
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
									  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
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
											$salaryType = "บาท / วัน";
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
																สมัครงาน นี้
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
									  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
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

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		
		<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain": true }'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / วัน";
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
																สมัครงาน นี้
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
											$salaryType = "บาท / วัน";
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
																สมัครงาน นี้
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
									  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
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

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		
		<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain": true }'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / วัน";
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
																สมัครงาน นี้
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
									  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
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
											$salaryType = "บาท / วัน";
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
																สมัครงาน นี้
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
									  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
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
											$salaryType = "บาท / วัน";
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

function show_digital_jobs(){
	?> <!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> <?
	$url = 'https://ftateuclr7.execute-api.ap-southeast-1.amazonaws.com/production/job/recommend/digital';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'x-api-key' => '9MI61CdeGG3eVZI5Q7tzP1hPwPxVWJdW7Zm9rhIm',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	get_ui_card_recommend($bodyResponse, "digital_job");
}

function get_new_card_recommend($bodyResponse, $utm_medium){
	?>
<div class="container d-block mx-auto row-width">
	<div class="scrolling-wrapper">
		<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salary_type"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salary_type"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salary_type"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["job_expire_time_left_unit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> <div class="card-job mx-auto card-carousel">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=jobnow.work&utm_medium=<?php echo $utm_medium; ?>" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["job_profile_image_url"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarter_logo_image_url"]; ?>" class="img-logo">
														<span class="text-branch-name my-auto"><?php echo $value2["headquarter_name"]; ?></span>
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column content-control">
													<span class="job-title"><?php echo $value2["job_title"]; ?></span>
													<div class="d-flex item-desc-margin" style="margin-top: 8px;">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary mb-auto">
														<span class="salary-text mb-auto"><?php echo number_format($value2["salary_from"], 0, '', ','); ?> - <?php echo number_format($value2["salary_to"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex item-desc-margin"  style="margin-top: 8px;">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary mb-auto">
													<span class="company-text mb-auto"><?php echo $value2["branch_name"]; ?></span>
													</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																สมัครงาน นี้
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
			  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="card-job mx-auto card-carousel">
							  					<div class="d-flex flex-column">
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
													  <div class="text-control margin-extra d-flex flex-column">
															<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
															<div class="d-inline">
																<span class="job-title">รอคนอยู่อีกเยอะที่ </span>
																<img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow">
														  </div>
															<a href="https://job.jobnow.work/jobs?latitude=&longitude=&utm_source=JobNOW&utm_medium=recommend_all_jobs" target="_blank" >
																<button class="btn btn-apply-extra">
																					ดูงานใหม่ทั้งหมด
																</button></a>
													  </div>
												</div>
						  </div>
							<?php } 
								}?>
	</div>
</div><?
}

function get_ui_card_recommend($bodyResponse, $utm_medium){
	?>
<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain" : true}'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salary_type"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salary_type"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salary_type"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["job_expire_time_left_unit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> 
						  
						  
						
										<div class="carousel-cell card-job mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=jobnow.work&utm_medium=<?php echo $utm_medium; ?>" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["job_profile_image_url"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarter_logo_image_url"]; ?>" class="img-logo">
														<span class="text-branch-name my-auto"><?php echo $value2["headquarter_name"]; ?></span>
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["job_title"]; ?></span>
													<div class="d-flex item-desc-margin" style="margin-top: 8px;">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary mb-auto">
														<span class="salary-text mb-auto"><?php echo number_format($value2["salary_from"], 0, '', ','); ?> - <?php echo number_format($value2["salary_to"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex item-desc-margin"  style="margin-top: 8px;">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary mb-auto">
													<span class="company-text mb-auto"><?php echo $value2["branch_name"]; ?></span>
													</div>
													<div class="d-md-flex d-none item-desc-margin"  style="margin-top: 8px;">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary mb-auto">
															<label class="company-text mb-auto">เหลืออีก <?php echo $value2["job_expire_time_left"]; ?> <?php echo $jobExpireType ?> </label>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																สมัครงาน นี้
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
									  	<div class="d-inline">
											<span class="job-title">รอคนอยู่อีกเยอะที่ </span>
											<img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow">
									  </div>
								  		<a href="https://job.jobnow.work/jobs?latitude=&longitude=&utm_source=JobNOW&utm_medium=recommend_all_jobs" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
							<?php } 
								}?>
						   </div>
</div>
<div class="container d-block d-md-none mx-auto row-width">
	<div class="scrolling-wrapper">
		<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salary_type"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salary_type"] == "DAILY"){
											$salaryType = "บาท / ชั่วโมง";
										}else if($value2["salary_type"] == "HOURLY"){
											$salaryType = "บาท / ชั่วโมง";
										}else{
											$salaryType = "บาท / ชั่วโมง";
										}

										if($value2["job_expire_time_left_unit"] == "day"){
											$jobExpireType = "วัน";
										}else{
											$jobExpireType = "ชั่วโมง";
										}

								?> <div class="card-job mx-auto card-carousel">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=jobnow.work&utm_medium=<?php echo $utm_medium; ?>" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["job_profile_image_url"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarter_logo_image_url"]; ?>" class="img-logo">
														<span class="text-branch-name my-auto"><?php echo $value2["headquarter_name"]; ?></span>
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column content-control">
													<span class="job-title"><?php echo $value2["job_title"]; ?></span>
													<div class="d-flex item-desc-margin" style="margin-top: 8px;">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary mb-auto">
														<span class="salary-text mb-auto"><?php echo number_format($value2["salary_from"], 0, '', ','); ?> - <?php echo number_format($value2["salary_to"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex item-desc-margin"  style="margin-top: 8px;">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary mb-auto">
													<span class="company-text mb-auto"><?php echo $value2["branch_name"]; ?></span>
													</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																สมัครงาน นี้
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
			  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="card-job mx-auto card-carousel">
							  					<div class="d-flex flex-column">
												<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job">
													  <div class="text-control margin-extra d-flex flex-column">
															<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
															<div class="d-inline">
																<span class="job-title">รอคนอยู่อีกเยอะที่ </span>
																<img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow">
														  </div>
															<a href="https://job.jobnow.work/jobs?latitude=&longitude=&utm_source=JobNOW&utm_medium=recommend_all_jobs" target="_blank" >
																<button class="btn btn-apply-extra">
																					ดูงานใหม่ทั้งหมด
																</button></a>
													  </div>
												</div>
						  </div>
							<?php } 
								}?>
	</div>
</div>
<?
}
function show_recommend_landing_test(){
//https://usdan0cyoc.execute-api.ap-southeast-1.amazonaws.com/dev/job/recommend/landing lLXlQyIYAE5MQHdqHJOD03Gbu8FQ1yFy4evXFjua   Dev
//https://ftateuclr7.execute-api.ap-southeast-1.amazonaws.com/production/job/recommend/landing 9MI61CdeGG3eVZI5Q7tzP1hPwPxVWJdW7Zm9rhIm  Prod
	$url = 'https://ftateuclr7.execute-api.ap-southeast-1.amazonaws.com/production/job/recommend/landing';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'x-api-key' => '9MI61CdeGG3eVZI5Q7tzP1hPwPxVWJdW7Zm9rhIm',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
		if(sizeof($bodyResponse) > 0){
	?>
		
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<?php
			get_new_card_recommend($bodyResponse, "recommend_landing");
		}
}
function show_recommend_landing(){
//https://usdan0cyoc.execute-api.ap-southeast-1.amazonaws.com/dev/job/recommend/landing lLXlQyIYAE5MQHdqHJOD03Gbu8FQ1yFy4evXFjua   Dev
//https://ftateuclr7.execute-api.ap-southeast-1.amazonaws.com/production/job/recommend/landing 9MI61CdeGG3eVZI5Q7tzP1hPwPxVWJdW7Zm9rhIm  Prod
	$url = 'https://ftateuclr7.execute-api.ap-southeast-1.amazonaws.com/production/job/recommend/landing';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'x-api-key' => '9MI61CdeGG3eVZI5Q7tzP1hPwPxVWJdW7Zm9rhIm',
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
		if(sizeof($bodyResponse) > 0){
	?>
		
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<?php
			get_ui_card_recommend($bodyResponse, "recommend_landing");
		}
}

function test_public_recommend_job(){
	?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="https://firebasestorage.googleapis.com/v0/b/scoutout-jobnow.appspot.com/o/jquery-3.4.1.min.js?alt=media"></script>
    <link rel="stylesheet"
        href="https://firebasestorage.googleapis.com/v0/b/scoutout-jobnow.appspot.com/o/style.min.css?alt=media">
   <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
 <script src="https://firebasestorage.googleapis.com/v0/b/scoutout-jobnow.appspot.com/o/code.min.js?alt=media"></script>
    <div class="container  mx-auto row-width">
        <div class="carousel" data-flickity='{ "wrapAround": true, "contain" : true, "cellAlign": left }'>

        </div>
    </div>
<?php
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
function article_b_opengraph() {
   $args = array(  
	   	'post_type' => 'article',
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

function showpopupvideoFB(){
	$args = array(  
        'post_type' => 'elementor_library',
        'post_status' => 'publish'
	);
	$myposts = get_post(2338);
		$url_values =$myposts->url;
	?>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=590534365055696&autoLogAppEvents=1"></script>
<div class="fb-video" data-href="https://www.facebook.com/jobnow.work/videos/<?php echo $url_values; ?>/" data-show-text="false" data-width=""><blockquote cite="https://developers.facebook.com/jobnow.work/videos/<?php echo $url_values; ?>/" class="fb-xfbml-parse-ignore"></blockquote></div>
<?php
}

function showTagVideoCurrent(){
	$myposts = get_post(get_the_ID());
	$post_categories = get_the_category( $myposts->ID );
	$type = $post_categories[0]->cat_name;
	$tagLink = "#1a";
	
			if($type == 'livefacebook'){
				$type_values = 'live facebook';
				$tagLink = "#2a";
			}else if($type == 'interview'){
				$type_values = 'บทสัมภาษณ์';
				$tagLink = "#3a";
			}else{
				$type_values = 'ทั่วไป';
				$tagLink = "#1a";
			}
	
	?> <a href="<?php echo $tagLink; ?>" data-toggle="tab"><div class="tag-button d-flex">
		<span class="tag-button-text mx-auto my-auto"><?php echo $type_values; ?></span>
		</div></a>
	<?php
}
function showCurrentVideoFB(){
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
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=590534365055696&autoLogAppEvents=1"></script>
<div class="fb-video" data-href="https://www.facebook.com/jobnow.work/videos/<?php echo $url_values; ?>/" data-show-text="false" data-width=""><blockquote cite="https://developers.facebook.com/jobnow.work/videos/<?php echo $url_values; ?>/" class="fb-xfbml-parse-ignore"></blockquote></div>
<?php
	}
}
function checkCurrentIDLive(){
	$args = array(  
        'post_type' => 'video_channel',
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'islive' => true,
        'include' => get_the_ID()
	);
	$myposts = get_posts($args);
	foreach ($myposts as $value){
			$isLive = $value->islive;
		if($isLive){
		?> <div class="video-live-button d-flex mx-auto">
					<span class="video-live-button-text mx-auto my-auto">Live Now</span>
				</div><?php
		}else{
			
		}
	}
	
	
}

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

function all_article(){
	$args = array(  
        'post_type' => 'article',
        'post_status' => 'publish',
		'posts_per_page' => 8,
		'exclude'       => get_the_ID()
	);
	$myposts = get_posts($args);
	?> <div class="row"> <?php
		article_get_ui($myposts, false);
				?> </div> <?php
}

function other_article(){
	$args = array(  
        'post_type' => 'article',
        'post_status' => 'publish',
		'posts_per_page' => 3,
		'exclude'       => array(2704, get_the_ID())
	);
	$myposts = get_posts($args);
	?> <div class="d-md-flex d-block"> <?php
		other_article_get_ui($myposts, false);
				?> </div> <?php
}

function article_landing_ui(){
	$args = array(  
        'post_type' => 'article',
        'post_status' => 'publish',
		'posts_per_page' => 5,
		'exclude' => 2704
	);
	$myposts = get_posts($args);
		
			?> 
		<div class="row d-block d-md-none d-lg-block">

			<div class="col-lg-6 col-md-6 col-12 landing-article-card-control">
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

	<div class=" d-lg-none d-md-flex d-none no-gutters">
			<div class="landing-article-card-control d-flex flex-column no-gutters">
				
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[0]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[0]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[0]->title ?></span>
				</a>
				
			</div>
			<div class="landing-article-card-control d-flex flex-column no-gutters">
				
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[1]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[1]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[1]->title ?></span>
				</a>
				
			</div>
			<div class="landing-article-card-control d-flex flex-column no-gutters">
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[2]->ID); ?>">
					<img class="img landing-article-img" src="<?php echo wp_get_attachment_image_src($myposts[2]->thumbnail, 'full')[0]; ?>">
					<span class="landing-article-title"><?php echo $myposts[2]->title ?></span>
				</a>
			</div>
			<div class="landing-article-card-control d-flex flex-column no-gutters">
				<a class="landing-article-card d-flex flex-column"  href="<?php echo get_post_permalink($myposts[3]->ID); ?>">
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
					<span class="article-date"><?php echo $newDate; ?></span>
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
						<a class="d-flex d-md-none mobile-video-control"  href="<?php echo $urlPost; ?>">
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
								
								<img loading='lazy' src="<?php echo $image[0]; ?>" class="video-thumbnail">
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

function pro_developer_jobs(){
	?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<?php
	$url = 'https://jobnow-api.scoutoutapi.com/api/v3.0/job-seeker/public/jobs?searchText=&roleIds=8&googlePlaceId=&googlePlaceName=&latitude=&longitude=&page=0';
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
	ui_card_pro($bodyResponse, true);
}

function ui_card_pro($bodyResponse, $isJobNOW){
	?>
<div class="container d-none d-md-block mx-auto row-width">
					  <div class="carousel" data-flickity='{ "wrapAround": false, "contain" : true}'>
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
										<div class="carousel-cell card-job-pro mx-auto">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=jobnow.work&utm_medium=recommend_landing" target="_blank" class="mx-auto">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
														<span class="text-branch-name my-auto"><?php echo $value2["branchName"]; ?></span>
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex item-desc-margin" style="margin-top: 8px;">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary mb-auto">
														<span class="salary-text mb-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													</div>
													
													<div class="d-flex item-desc-margin"  style="margin-top: 8px;">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary mb-auto">
													<span class="company-text mb-auto"><?php echo $value2["headquarterName"]; ?></span>
													</div>
													<div class="d-flex item-desc-margin"  style="margin-top: 8px;">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary mb-auto">
															<label class="company-text mb-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </label>
														</div>
													<div class="row mt-auto">
														
														<div class="col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																สมัครงาน นี้
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
									  	<div class="d-inline">
											<span class="job-title">รอคนอยู่อีกเยอะที่ </span>
											<img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow">
									  </div>
								  		<a href="https://job.jobnow.work/jobs?latitude=&longitude=&utm_source=JobNOW&utm_medium=recommend_all_jobs" target="_blank" >
											<button class="btn btn-apply-extra">
																ดูงานใหม่ทั้งหมด
											</button></a>
									  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
									  ฝากประวัติของคุณ
									  </a>
									  	
								  </div>
						  </div>
							<?php } 
								}?>
						   </div>
					</div>
<div class="container-fluid d-md-none mx-auto">
					  <div class="carousel" data-flickity='{ "wrapAround": false }'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							
										if($value2["salaryType"] == "MONTHLY"){
											$salaryType = "บาท / เดือน";
										}else if($value2["salaryType"] == "DAILY"){
											$salaryType = "บาท / วัน";
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
										<div class="carousel-cell  card-job-pro">
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=jobnow.work&utm_medium=recommend_landing" target="_blank" class="mx-auto" style="pro-card-a">
												<div class="d-flex img-section">
													<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
													<div class="img-logo-section d-flex">
														<img src="<?php echo $value2["headquarterLogoUrl"]; ?>" class="img-logo">
														<span class="text-branch-name my-auto"><?php echo $value2["branchName"]; ?></span>
													</div>
													<div class="bg-section">
														
													</div>
												</div>
												<div class="text-control d-flex flex-column">
													<span class="job-title" style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: pre;"><?php echo $value2["jobTitle"]; ?></span>
													<div class="d-flex item-desc-margin">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/salary-icon@3x.png" class="img-salary mb-auto">
														<label class="salary-text mb-auto"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></label>
													</div>
													
													<div class="d-flex item-desc-margin">
														
														<img src="https://jobnow.work/wp-content/uploads/2020/03/place-icon@3x.png" class="img-salary mb-auto">
													<label class="company-text mb-auto"><?php echo $value2["headquarterName"]; ?></label>
													</div>
													<div class="d-flex item-desc-margin">
														<img src="https://jobnow.work/wp-content/uploads/2020/03/expired-icon@3x.png" class="img-salary mb-auto">
															<label class="company-text mb-auto">เหลืออีก <?php echo $value2["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </label>
														</div>
													
												</div>
												<div class="d-flex my-auto">
														<button class="btn btn-apply mx-auto my-auto">
																สมัครงาน นี้
												</button>
													
												</div>
											
											</a>
										</div>
						  <?php 
							if($key == sizeof($bodyResponse)-1){ ?>
								  <div class="carousel-cell card-job-pro mx-auto pro-card-extra-control">
							  
										<img src="https://jobnow.work/wp-content/uploads/2020/03/extra-card@3x.png" class="image-job"/>
									  <div class="text-control margin-extra d-flex flex-column">
											<span class="job-title d-flex">มีงานดีๆ ที่เหมาะกับคุณ</span>
												<div class="d-inline">
											<span class="job-title">รอคนอยู่อีกเยอะที่ </span>
											<img src="https://jobnow.work/wp-content/uploads/2020/03/logo-text@3x.png" class="extra-card-logo-jobnow">
									  </div>
											<a href="https://job.jobnow.work/jobs?latitude=&longitude=&utm_source=JobNOW&utm_medium=recommend_all_jobs" target="_blank" >
												<button class="btn btn-apply-extra">
																	ดูงานใหม่ทั้งหมด
												</button></a>
										  <a href="https://jobnow.work/resume" target="_blank" class="job-title-red mx-auto">
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
function get_jobid() {

   return $_GET['jobID'];

}

function jobnow_pro_recommend(){
	  ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<?php
	$url = 'https://connect-api.scoutoutapi.com/api/v1/public/companies/resume-jobnow/jobs?page=0&pageSize=9&keywords=&types=&roleIds=';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	card_jobnow_pro($bodyResponse, false, "");
}

function jobnow_pro_developer_all(){
	  ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<?php
	$url = 'https://connect-api.scoutoutapi.com/api/v1/public/job-now-pro/jobs?roleIds=64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88&keywords=';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	card_jobnow_pro($bodyResponse, true, "Developer");
}

function jobnow_pro_design_all(){
	  ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<?php
	$url = 'https://connect-api.scoutoutapi.com/api/v1/public/job-now-pro/jobs?roleIds=32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55&keywords=';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	card_jobnow_pro($bodyResponse, true, "Designer");
}

function jobnow_pro_marketing_all(){
	  ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<?php
	$url = 'https://connect-api.scoutoutapi.com/api/v1/public/job-now-pro/jobs?roleIds=1,2,3,4,5,6,7,8,9,10,11,12,13&keywords=';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	card_jobnow_pro($bodyResponse, true, "Marketing");
}


function jobnow_pro_all_company(){
	  ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"/>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<?php
	$url = 'https://leelatest.scoutout.net/api/v1/public/job-now-pro/companies';
			//Create cURL connection
	$response =  wp_remote_get($url, array(
				'method' => 'GET',
				'timeout' => 45,
				'redirection' => 5,
				'headers' => array(
					'Content-Type' => 'application/json'
				),
				'cookies' => array()
			));
	$bodyResponse = json_decode(wp_remote_retrieve_body($response), TRUE);
	if (isset($_GET['showAll']) && $_GET['showAll'] == true) {
		card_jobnow_pro_company($bodyResponse, true);
	}else{
		card_jobnow_pro_company($bodyResponse, false);
	}
}

function card_jobnow_pro($bodyResponse, $isAllJobs , $textAllJobs){
	?>
	<div class="container d-block mx-auto row-width pro-container-no-padding">
						  <div class="carousel" data-flickity='{ "wrapAround": false, "contain" : true}'>
						<?php
						foreach ($bodyResponse as $key => $value2) {
							$salaryType = $value2['jobSalaryType'];
							$jd_converter = strip_tags($value2['jobDescription']);
							if($value2['jobSalaryType'] == 'DAILY'){
								$salaryType = 'วัน';
							}else if($value2['jobSalaryType'] == 'ANNUALLY'){
								$salaryType = 'ปี';
							}else if($value2['jobSalaryType'] == 'MONTHLY'){
								$salaryType = 'เดือน';
							}else{
								$salaryType = 'ชั่วโมง';
							}
								?> 
										<div class="carousel-cell card-pro mx-auto d-flex flex-column">
											<a href="<?php echo $value2['jobUrl']; ?>" target="_blank" class="mx-auto d-flex flex-column">
												<div class="d-flex pro-card-company-job-control">
													<img src="<?php echo $value2['companyLogoImageUrl']; ?>" class="pro-card-logo">
 													<div class="d-flex flex-column pro-card-section-1-title-control my-auto">
														<span class="pro-card-company-name"><?php echo $value2['companyName'];?></span>
														<span class="pro-card-job-title"><?php echo $value2['jobName'];?></span>
														
														
													</div>
												</div>
												<div class="d-flex flex-column pro-card-exp-section-control">
													<div class="pro-card-img-section-control row">
														<div class="pro-card-img-icon-control col-1">
														<img src="https://jobnow.work/wp-content/uploads/2020/08/jobnow-pro-salary-icon@3x.png" class="pro-card-img-loc my-auto mx-auto">
															</div>
														<div class="col-10">
															<?php if($value2['jobDisplaySalary']){
									?><span class="pro-card-text-side-img my-auto"><?php echo number_format($value2['jobSalaryFrom']);?> - <?php echo number_format($value2['jobSalaryTo']);?> / <?php echo $salaryType; ?></span><?php
								}else{
									?><span class="pro-card-text-side-img my-auto">เงินเดือนสามารถต่อรองได้</span><?php
								}?>
														</div>
														
													</div>
													<div class="pro-card-img-section-control row">
														<div class="pro-card-img-icon-control col-1">
															<img src="https://jobnow.work/wp-content/uploads/2020/07/pro-exp@3x.png" class="pro-card-img-exp my-auto  mx-auto">
														</div>
														<div class="col-10">
														<span class="pro-card-text-side-img my-auto"><?php echo $value2['jobRoleDisplayName']; ?></span>
														</div>
													</div>
													<div class="pro-card-img-section-control row">
														<div class="pro-card-img-icon-control col-1">
														<img src="https://jobnow.work/wp-content/uploads/2020/07/pro-location@3x.png" class="pro-card-img-loc my-auto mx-auto">
															</div>
														<div class="col-10">
															<span class="pro-card-text-side-img my-auto"><?php echo $value2['jobLocation']; ?></span>
														</div>
														
													</div>
													
<!-- 													<span class="pro-card-description my-auto"><?php echo $jd_converter; ?></span> -->
												</div>
												<a href="<?php echo $value2['jobUrl'];?>" class="btn pro-job-viewmore-button mt-auto mx-auto">รายละเอียดเพิ่มเติม</a>
											</a>
										</div>
							
							 <?php 
// 							sizeof($bodyResponse)-1
							if($key == 1 && $isAllJobs == true){ ?>
							  <div class="carousel-cell card-pro mx-auto">
											<a href="https://job.jobnow.work/job/?utm_source=jobnow.work&utm_medium=recommend_landing" target="_blank" class="mx-auto d-flex flex-column h-100">
												<div class="d-flex flex-column">
													<?php 
																if($textAllJobs == "Developer"){
																	?> <img src="https://jobnow.work/wp-content/uploads/2020/07/pro-dev-img-card@3x.png" class="pro-all-card-img-size mx-auto">
													<?
																}else if($textAllJobs == "Designer"){
																	?> <img src="https://jobnow.work/wp-content/uploads/2020/07/pro-design-img-card@3x.png" class="pro-all-card-img-size mx-auto">
													<?
																}else if($textAllJobs == "Marketing"){
																	?> <img src="https://jobnow.work/wp-content/uploads/2020/07/pro-mark-img-card@3x.png" class="pro-all-card-img-size mx-auto">
													<?
																}
																?>
													
													<span class="pro-all-card-text-title mx-auto">ยังมีงานสำหรับ <?php echo $textAllJobs; ?> อีกเยอะ</span>
													
												</div>
												<button class="btn text-center pro-all-card-button mx-auto mt-auto">
														งาน <?php echo $textAllJobs; ?> ทั้งหมด
													</button>
								  </a>
							  </div>
							  <?php } ?>
								<?php }
						  ?>
						   </div>
					</div>
<?
}

function card_jobnow_pro_company($bodyResponse,$showAll){
	?>
	<div class="container d-flex pro-row-width-company pro-container-no-padding">
						  <div class="row">
							  
	
						<?php
						foreach ($bodyResponse as $key => $value2) {
								?> 
							  <div class="col-lg-4 col-md-6 col-12 d-flex">
								  
							
										<div class="card-pro-company mx-auto d-flex flex-column">
											<a href="<?php echo $value2['companyCareerSiteUrl'];?>" target="_blank" class="mx-auto d-flex flex-column">
												<div class="d-flex pro-card-company-img-section">
													<img src="<?php echo $value2['companyProfileImageUrl']; ?>" class="pro-card-company-img-bg">
													<img src="<?php echo $value2['companyLogoImageUrl']; ?>" class="pro-card-company-img-logo">
												</div>
												<div class="d-flex flex-column pro-card-company-text-control">
													<span class="pro-card-company-text-company-name text-center"><?php echo $value2["companyName"]; ?></span>
													<span class="pro-card-company-text-desc text-center">ตำแหน่งงานที่เปิดรับทั้งหมด <?php echo $value2["companyCareerSiteActiveJobs"]; ?>ตำแหน่ง</span>
													<?php if($value2["companyAddress"] != ''){ ?>
														<div class="pro-card-img-map-icon-control d-flex mx-auto">
														<img src="https://jobnow.work/wp-content/uploads/2020/07/pro-location@3x.png" class="pro-card-img-loc my-auto mx-auto"><a href="http://maps.google.com/?q=<?php echo $value2['companyAddress'];?>" class="pro-card-text-link-map my-auto">ดูแผนที่</a>
															</div> <?php } ?>
													
												</div>
											<a href="<?php echo $value2['companyCareerSiteUrl'];?>" class="btn pro-company-viewmore-button mt-auto mx-auto">รายละเอียดเพิ่มเติม</a>
												
											</a>
										</div>
							  </div>
								<?php }
						  ?>
							  <?php 
	?>
							  
							  	</div>
					</div>
<?
}

function redirect_to_pricing(){
	  $email = $_GET['email'];
      $company_name = $_GET['company'];
      $uuid = $_GET['uuid'];
	   header("location: https://scoutout.co/jobnow/package");
}

// Save user data from URL to Woocommerce session
add_action( 'template_redirect', 'set_custom_data_wc_session' );
function set_custom_data_wc_session () {
    if ( isset( $_GET['company'] ) || isset( $_GET['email'] ) ) {
        $em   = isset( $_GET['company'] )   ? esc_attr( $_GET['company'] )   : '';
        $name = isset( $_GET['email'] ) ? esc_attr( $_GET['email'] ) : '';

        // Set the session data
        WC()->session->set( 'custom_data', array( 'company' => $em, 'email' => $name ) );
    }
}
// Autofill checkout fields from user data saved in Woocommerce session
add_filter( 'woocommerce_billing_fields' , 'prefill_billing_fields' );
function prefill_billing_fields ( $address_fields ) {
    // Get the session data
    $data = WC()->session->get('custom_data');

    // company
    if( isset($data['company']) && ! empty($data['company']) )
        $address_fields['billing_company']['default'] = $data['company'];

    // email
    if( isset($data['email']) && ! empty($data['email']) )
        $address_fields['billing_email']['default'] = $data['email'];

    return $address_fields;
}
function all_vdo_profile_landing(){
	$args = array(  
        'post_type' => 'vdo_profile',
        'post_status' => 'publish',
		'posts_per_page' => 8,
        'exclude' => array(3408, 3409)
	);
	$myposts = get_posts($args);
	?> <div class="container row mx-auto"> <?
	foreach ($myposts as $value){
		$url_values = $value->url;
		$post_date = $value->posted_date;
		$image_url = $value->image_url;
		$name = $value->name;
		$newDate = date("d M Y", strtotime($post_date));  
		?>
			
						
				<div class="col-4 vdo-profile-col-control d-flex justify-content-center">
					<a href="<?php echo get_post_permalink($value->ID); ?>" class="vdo-profile-border d-flex flex-column mx-auto">
							<div class="vdo-profile-img-preview-control d-flex">
								<img src="<?php echo $image_url; ?>" class="vdo-profile-img-preview mx-auto">
								<img src="https://jobnow.work/wp-content/uploads/2020/08/play-video@3x.png" class="vdo-profile-img-play">
							</div>
							<div class="d-md-flex d-none flex-column">
								<span class="vdo-profile-name-text mx-auto text-center"><?php echo $name; ?></span>
						</div>
					</a>
				</div>
						

<? 
	}
	?> </div> <?
}

function all_vdo_profile(){
	$args = array(  
        'post_type' => 'vdo_profile',
        'post_status' => 'publish',
		'posts_per_page' => 8,
        'exclude' => array(3408, 3409)
	);
	$myposts = get_posts($args);
	?> <div class="container row mx-auto"> <?
	foreach ($myposts as $value){
		$url_values = $value->url;
		$post_date = $value->posted_date;
		$image_url = $value->image_url;
		$name = $value->name;
		$newDate = date("d M Y", strtotime($post_date));  
		?>
			
						
				<div class="col-lg-3 col-3 col-md-4 vdo-profile-col-control">
					<a href="<?php echo get_post_permalink($value->ID); ?>" class="vdo-profile-border d-flex flex-column mx-auto">
							<div class="vdo-profile-img-preview-control d-flex">
								<img src="<?php echo $image_url; ?>" class="vdo-profile-img-preview mx-auto">
								<img src="https://jobnow.work/wp-content/uploads/2020/08/play-video@3x.png" class="vdo-profile-img-play">
							</div>
							<div class="d-flex flex-column">
								<span class="vdo-profile-name-text mx-auto text-center"><?php echo $name; ?></span>
						</div>
					</a>
				</div>
						

<? 
	}
	?> </div> <?
}
?>