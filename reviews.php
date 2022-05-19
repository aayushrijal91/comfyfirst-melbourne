<?php
$title = 'Reviews';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'review';

$banner = 'What Our <br class="d-none d-xxl-block">Customers Say';
$bheading = 'Discover why so many clients choose ComfyFirst';
$bch = '2021 Product Review Awards Winner';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';
?>

<section class="inner-banner banner bg-dark text-white position-relative banner-<?=$imgfolder?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row z-2 position-relative align-items-center g-0">
					<div class="col-xxl-7 col-md-6">
						<div class="py-xxl-5 my-xxl-4 my-4">
							<p class="display-1x fw-bold line-height-1 mb-xxl-5"><?=$banner?></p>	

							<p class="font-weight-500 font-36 mb-xxl-5 line-height-1 me-xxl-n5"><?=$bheading?></p>
							<?php $bctas = [
								'2021 Product Review Awards Winner'=>'No matter how long the job ends up taking us, you still pay the same price',
							]; 
							$n=0;
							foreach ($bctas as $key => $value) {
								$n++;
								?>
								<div class="d-flex mb-4">
									<?= lazyImg("$imgfolder/c$n.png", randalts($alts), "",85,58) ?>
									<div>
										<p class="font-36 font-weight-500 mb-0 ms-3 line-height-1"><i><?=$key?></i></p>
										<p class="text-grey mb-0"><?=$value?></p>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>

					<div class="col-xxl-5 col-md-6">
						<div class="position-relative">
							<?= lazyImg("$imgfolder/banner.png", randalts($alts), "") ?>

							<div class="p-r position-absolute mb-xxl-n5">
								<div class="review py-1 card position-relative bg-dgreen border-0 rounded-0 mb-3">
									<div class="card-body px-0 ">
										<div class="d-flex align-items-center">
											<p class="display-1x line-height-1 mb-0">4.5</p>
											<?= lazyImg("home/cstar.png", randalts($alts), "") ?>
										</div>
										<p class="h4 fw-normal ms-n4 position-relative z-1">Over 3200 Reviews</p>	
									</div>
								</div>
								<div class="review py-1 card position-relative bg-dgreen border-0 rounded-0">
									<div class="card-body px-0 ">
										<div class="d-flex align-items-start">
											<p class="display-1x line-height-1 mb-0">3200</p>
											<p class="h4 text-success mt-2">+</p>
										</div>
										<p class="h4 fw-normal ms-n4 position-relative z-1">Customer Reviews</p>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?= lazyImg('banner/badge.png', randalts($alts), "badge position-absolute ms-2 mt-2 z-2",114) ?>
</section>

<section class="bg-light py-3 py-xxl-5 faq reviews">
	<div class="container-fluid py-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<?php $testi=[
					[
						'name'=>'Wolf',
						'location'=>'Greater <?= $global_city ?> (Outer), VIC',
						'date'=>'3 days ago',
						'heading'=>'Outstanding',
						'content'=>'Quick, highly professional and personable service, and reasonably priced especially considering their 25 year guarantee. As someone who is time poor, money strapped, disabled, but with good trade knowledge, I would recommend ComfyFirst and their partner businesses to everyone. They are quick to respond to emergencies and their workmanship is first class. I will be using their services for all further trade work on my home because they excel on all aspects of good service and good work.',
						'video'=>'',
						'rated'=>['Customer Service','Timeliness'],
					],
					[
						'name'=>'Dave',
						'location'=>'Sydney, NSW',
						'date'=>'4 days ago',
						'heading'=>'Finally a decent, well priced, plumber',
						'content'=>"I've had a few plumbers come by and do small jobs for exorbitant prices and I felt a bit ripped off, and never engaged them again. These ones were different - same day, professional job, and a fixed rate even when the job turned out to be more challenging than expected. They also gave me reduced rates, including a thorough look over the whole house to fix up a bunch of small issues for no extra cost - gas and water. I'm really impressed with them and subscribed to their membership because I know I'll be calling them back.",
						'video'=>'',
						'rated'=>['Customer Service','Timeliness'],
					],
					[
						'name'=>'Jack',
						'location'=>'',
						'date'=>'4 days ago',
						'heading'=>'Hot water at last!',
						'content'=>"Absolutely fantastic service, our hot water heater failed and we Lee out to check it, did us a couple different quote options, very efficient and helpful with any questions, and then to replace it Steve and Dan W. did the work today which proved to be a bit trickier than originally thought due to our house's strange electric system. They did such a great job, very friendly, cleaned everything up, and we couldn't be happier! We will definitely be calling Plumb First again for any other issues we have.",
						'video'=>'',
						'rated'=>[],
					],
					[
						'name'=>'Desmond',
						'location'=>'Greater Melbourne (Outer), VIC',
						'date'=>'4 days ago',
						'heading'=>'Service',
						'content'=>'I would like to take this opportunity to comment on Plumfirst. Over the last 2 days I have had a new hot water service put in. Lockie worked on Thursday and did a amazing job and was professional and cleaned up after he was finished. Wednesday the other plumber and electrician was of the same in their work effort. I had new pipes put in as well. I would recommend Plumfirst to anyone who requires a plumber.',
						'video'=>'',
						'rated'=>['Customer Service','Job Satisfaction'],
					],
					[
						'name'=>'Isabelle',
						'location'=>'Greater Melbourne (Outer), VIC',
						'date'=>'4 days ago',
						'heading'=>"Excellent job can't complain",
						'content'=>"Like the way theu approached with the customer. Straight away found what's the problem and give me 2 quote which is reasonable. He put the things in a nice way and did extra job by replacing my old tap. I'm really appreciate for the job done. Thnx. Isabelle.",
						'video'=>'',
						'rated'=>['Customer Service','Timeliness'],
					],
					[
						'name'=>'John K.',
						'location'=>'',
						'date'=>'',
						'heading'=>'',
						'content'=>'',
						'video'=>'https://www.youtube.com/embed/21fiOnYQOgc',
						'rated'=>[],
					],
					[
						'name'=>'Kimberley M.',
						'location'=>'Greater Melbourne (Outer), VIC',
						'date'=>'5 days ago',
						'heading'=>"Excellent job can't complain",
						'content'=>'Very efficient and great work. Will definitely ask for Ben again. He went above and beyond to help us get a great deal and was great workmanship. Thanks so much Ben Mack',
						'video'=>'',
						'rated'=>['Customer Service','Timeliness'],
					],
					[
						'name'=>'Dianne B',
						'location'=>'5 days ago',
						'date'=>'5 days ago',
						'heading'=>'An excellent job replacing two toilet suites completed by Alex K :',
						'content'=>'Alex K is a Pro, replaced into existing plumbing, a p and a skew trap. Top job was completed 9-1.30. 100% improvement -Everything left clean & waste removed. Clearly experienced and able to resolve tricky changes in small spaces.',
						'video'=>'',
						'rated'=>['Customer Service','Timeliness'],
					],
					[
						'name'=>'Marjorie A.',
						'location'=>'',
						'date'=>'',
						'heading'=>'',
						'content'=>'',
						'video'=>'https://www.youtube.com/embed/fEJkCbFeWiY',
						'rated'=>[],
					],
					[
						'name'=>'Leah Viney',
						'location'=>'',
						'date'=>'5 days ago',
						'heading'=>"Couldn’t fault the service",
						'content'=>'I called ComfyFirst yesterday due to a gas leak, and by this afternoon today Mat V and Kale B fixed the gas leak. Both guys were very easy to deal and communicate with. Will definitely recommend to any family/friends for any of there plumbing needs. Thanks heaps guys, appreciate it.',
						'video'=>'',
						'rated'=>['Customer Service','Job Satisfaction'],
					],
					// [
					// 	'name'=>'John K.',
					// 	'location'=>'',
					// 	'date'=>'',
					// 	'heading'=>'',
					// 	'content'=>'',
					// 	'video'=>'https://www.youtube.com/embed/21fiOnYQOgc',
					// 	'rated'=>[],
					// ],
					[
						'name'=>'Leah Viney',
						'location'=>'',
						'date'=>'5 days ago',
						'heading'=>"Couldn’t fault the service",
						'content'=>'I called ComfyFirst yesterday due to a gas leak, and by this afternoon today Mat V and Kale B fixed the gas leak. Both guys were very easy to deal and communicate with. Will definitely recommend to any family/friends for any of there plumbing needs. Thanks heaps guys, appreciate it.',
						'video'=>'',
						'rated'=>['Customer Service','Job Satisfaction'],
					],

				];?>

				<div class="row align-items-center mb-4 mb-xxl-5">
					<div class="col-auto">
						<p class="h4 mb-xxl-0 text-dark">Type of Service</p>
					</div>
					<div class="col-xxl-8">
						<div class="btn-toolbar d-flex justify-content-center">
							<a href="javascript:;" key="all" class="d-none d-xl-block border-0 col rounded-0 review-btn btn btn-dark active mx-2 w-100 py-2 px-xxl-5 mb-2"><span class="h6 font-weight-600">Show All</span></a>
							<a href="javascript:;" key="review" class="border-0 col rounded-0 review-btn btn btn-dark mx-2 w-100 py-2 px-xxl-5 mb-2"><span class="h6 font-weight-600">Written Review</span></a>
							<a href="https://www.youtube.com/channel/UCBf-Ho05QfkfSLoMBVwM1cg/featured" target="_blank" key="video" class="border-0 col rounded-0  btn btn-dark mx-2 w-100 py-2 px-xxl-5 mb-2"><span class="h6 font-weight-600">Video</span></a>
						</div>
						<select class="review-select form-select h5 fw-bold d-none mb-0 w-100">
							<!-- <option disabled="" selected="">Select a Region</option> -->
							<option key="all">Show All</option>
							<option key="review">Written Review</option>
							<!-- <option key="video">Video</option> -->
						</select>
					</div>
				</div>

				<div class="row masrow mb-xxl-5" >
					<?php 
					$l=0;
					foreach ($testi as $key => $value) {
						$l++; 
						if(!$value['video']){ 
							$keyt = 'review';
						}else{
							$keyt = 'video';
						}
						?>
						<div class="bcontent col-xl-6 mb-4 col-12 <?=($l>8?'d-none':'')?>" key="<?=$keyt?>">
							<?php if(!$value['video']){ ?>
								<div class="card rounded-0 border-0 showdow bg-white">
									<div class="card-header px-4 bg-white py-3">
										<div class="row align-items-center">
											<div class="col-auto">
												<div class="d-flex align-items-center mb-2 mb-md-0">
													<div class="me-3">
														<?php 
														$ti = __DIR__.'/assets/images/review/r'.$l.'.png';
														if(!file_exists($ti)){ 
															?>
															<span class="initial position-relative font-weight-800 px-3 rounded-circle">
																<span class="position-relative z-1 h5 mb-0 text-white">
																	<?=$value['name'][0]?>
																</span>
															</span>
															<?php
														}else{
															echo lazyImg("$imgfolder/r$l.png", randalts($alts), "");
														} ?>
													</div>
													<div>
														<p class="mb-0 h6 text-dark"><?=$value['name']?></p>
														<p class="mb-0 small"><?=$value['location']?></p>
													</div>
												</div>
											</div>
											<div class="col-auto ms-auto">
												<p class="mb-0 small"><?=$value['date']?> <span class="text-warning ms-3"><?=star(5)?></span></p>
											</div>
										</div>
									</div>
									<div class="card-body px-4">
										<div class="d-flex mb-4">
											<i class="fas fa-quote-left text-info fa-lg me-4 mt-md-2"></i>
											<p class="mb-0 h4 text-dark"><?=$value['heading']?></p>
										</div>
										<p><?=$value['content']?></p>
									</div>
									<div class="card-foter bg-llight py-3 px-4">
										<div class="row align-items-center">
											<div class="col-md-auto">
												<div class="d-flex align-items-center text-light mb-2 mb-md-0">
													<i class="fal fa-thumbs-up me-2"></i>
													<small >Rated Traits: </small>
												</div>
											</div>
											<div class="col-auto">
												<?php foreach ($value['rated'] as $k => $v) {
													?>
													<small class="d-inline-block rounded-pill bg-infol text-info py-2 px-4 me-2 fw-600 text-nowrap mb-2 mb-md-0"><?=$v?></small>
													<?php
												} ?>
											</div>
										</div>
									</div>
								</div>
							<?php }else{ ?>
								<div class="card rounded-0 border-0 showdow bg-dark text-white">
									<div class="card-header px-4 py-3">
										<div class="d-flex ">
											<i class="fas fa-quote-left text-danger fa-lg me-4 mt-md-2"></i>
											<p class="mb-0 h4"><?=$value['name']?> Video Testimonial</p>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="ratio ratio-16x9">
											<iframe src="<?=$value['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
						<?php
					}?>
				</div>

				<div class="row align-items-center loadrow">
					<div class="col"><hr></div>
					<div class="col-auto">
						<a href="javascript:;" class="btn btn-dark btn-more px-xxl-5">Load More</a>
					</div>
					<div class="col"><hr></div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>