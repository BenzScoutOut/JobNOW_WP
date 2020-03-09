
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

<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
	<div class="row">
		<?php 
	foreach ($bodyResponse as $key => $value) {
		if($key < 9){
			
		
		if($value["salaryType"] == "MONTHLY"){
			$salaryType = "บาท / เดือน";
		}else if($value["salaryType"] == "DAILY"){
			$salaryType = "บาท / ชั่วโมง";
		}else if($value["salaryType"] == "HOURLY"){
			$salaryType = "บาท / ชั่วโมง";
		}else{
			$salaryType = "บาท / ชั่วโมง";
		}
		
		if($value["jobExpireTimeLeftUnit"] == "day"){
			$jobExpireType = "วัน";
		}else{
			$jobExpireType = "ชั่วโมง";
		}
		
		?> 
		<div class="col-12 col-md-6 col-lg-4 d-none d-md-flex">
			<a href="https://job.jobnow.work/job/<?php echo $value["uuid"];?>?utm_source=ScoutOut&utm_medium=JobNOW_LD_Parttime" target="_blank" class="mx-auto">
			<div class="card-job mx-auto">
				<img src="<?php echo $value["jobProfileImageUrl"]; ?>" class="image-job">
				<div class="text-control d-flex flex-column">
					<span class="job-title"><?php echo $value["jobTitle"]; ?></span>
					<span class="salary-text"><?php echo number_format($value["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
					<span class="company-text"><?php echo $value["headquarterName"]; ?></span>
					<div class="row mt-auto">
						<div class="col-lg-6 col-12 d-flex">
							<span class="company-text">เหลืออีก <?php echo $value["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
						</div>
						<div class="col-lg-6 col-12 d-flex">
							<button class="btn btn-apply mx-auto my-auto">
								สมัครงานนี้
							</button>
						</div>
					</div>
					
				</div>
				
			</div>
				</a>
		</div>
		
		<?php
		}
	}?>
		
	</div>
		<div class="container-fluid d-flex d-md-none mx-auto row-width">
					  <div class="carousel w-100" data-flickity>
						<?php
						foreach ($bodyResponse as $key => $value2) {
								if($key < 9){
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
											<a href="https://job.jobnow.work/job/<?php echo $value2["uuid"];?>?utm_source=ScoutOut&utm_medium=JobNOW_LD_Parttime" target="_blank" class="mx-auto">
												<img src="<?php echo $value2["jobProfileImageUrl"]; ?>" class="image-job">
												<div class="text-control d-flex flex-column">
													<span class="job-title"><?php echo $value2["jobTitle"]; ?></span>
													<span class="salary-text"><?php echo number_format($value2["salaryFrom"], 0, '', ','); ?> - <?php echo number_format($value2["salaryTo"], 0, '', ','); ?> <?php echo $salaryType; ?></span>
													<span class="company-text"><?php echo $value2["headquarterName"]; ?></span>
													<div class="row mt-auto">
														<div class="col-lg-6 col-12 d-flex">
															<span class="company-text">เหลืออีก <?php echo $value["jobExpireTimeLeft"]; ?> <?php echo $jobExpireType ?> </span>
														</div>
														<div class="col-lg-6 col-12 d-flex">
															<button class="btn btn-apply mx-auto my-auto">
																สมัครงานนี้
															</button>
														</div>
													</div>
												</div>
											</a>
										</div>
									<?php
									}
								}?>
						   </div>
					</div>
	
<?php
}