<section class="testiv py-5">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<p class="h2 font-weight-bold text-darkgrey mb-5">Video Testimonials</p>
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-xl-11">
				<div class="vslider">
					<?php
					$testiv=[
						[
							'name'=>'Stephanie T.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/Az_jT0eh1N0',
						],
						[
							'name'=>'Michelle M.',
							'date'=>'10 Jun 2020',
							'cost'=>'$1,500',
							'url'=>'https://www.youtube.com/embed/Q8xgC54cTB4',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/dcr8mcqn-zM',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/JZd4MtyhrgE',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/RByePJAdGmg',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/Qy4qoT3dTwQ',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/Ml0AhhlW4Fs',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/7PU0hI0GtGk',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/BjuZzgarzUs',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/lejnQuv9Cro',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/53oDuxTZLXQ',
						],
						[
							'name'=>'Thomas E.',
							'date'=>'14 Aug 2020',
							'cost'=>'$500',
							'url'=>'https://www.youtube.com/embed/k17ckmaVGxo',
						],
					];
					$n=0;
					$m=0;
					foreach ($testiv as $key => $value){
						$n++;
						$m++;
						?>
						<div>
							<div class="card border-0 rounded-0 bg-dark text-white ml-lg-5 overflow-hidden">
								<a href="#" class="text-white" data-toggle="modal" data-target="#message<?=$n?>" data-theVideo="<?=$value['url']?>">
									<div class="row">
										<div class="col-7 col-md-4 col-lg-7 col-xl-4 z-1">
											<div class="card-body position-relative z-1 pr-0 py-sm-5">
												<p><i class="fas fa-quote-left text-primary fa-2x"></i></p>
												<p class="font-weight-600 h4 mb-4"><?=$value['name']?></p>
												<div class="row align-items-center">
													<div class="col">
														<small class="text-primary font-weight-600 line-height-1">Service Date</small>
													</div>
													<div class="col">
														<small class=""><?=$value['date']?></small>
													</div>
												</div>
												<div class="row align-items-center">
													<div class="col">
														<small class="text-primary font-weight-600 line-height-1">Est. Cost</small>
													</div>
													<div class="col">
														<small class=""><?=$value['cost']?></small>
													</div>
												</div>
											</div>
											<?=lazyImg("testi/vcl.png", randalts($alts), " loadall object-fit")?>
											<!-- <img alt="<?=$site?>" class="lazy loadall object-fit" data-src="<?=$domain?>/assets/images/testi/vcl.svg"> -->
										</div>
										<?php 
										$m%2?$l=1:$l=2;
										?>
										<?= lazyImg("testi/v$l.jpg", randalts($alts), " loadall object-fit") ?>
									</div>
								</a>
								
							</div>
						</div>
						<?php
					}
					?>
				</div>
				<?php 
				$n=0;
				foreach ($testiv as $key => $value){
					$n++;
					?>
					<div class="modal fade videomodal" id="message<?=$n?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content bg-transparent border-0">
								<div class="modal-header border-0">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" width="100%" src=""></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>