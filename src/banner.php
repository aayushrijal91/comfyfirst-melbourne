<section class="inner-banner banner bg-info text-white position-relative  banner-<?=$imgfolder?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row z-2 position-relative align-items-center g-0">
					<div class="col-xxl-7 col-md-6">
						<div class="py-xxl-5 my-xxl-4 my-4">
							<h1 class="display-1x fw-bold line-height-1 mb-xxl-5"><?=$banner?></h1>	
							<p class="font-weight-500 font-36 mb-xxl-5 line-height-1 me-xxl-n5"><?=$bheading?></p>
							<?php $bctas = [
								$bch=>$bcc,
							]; 
							$n=0;
							foreach ($bctas as $key => $value) {
								$n++;
								?>
								<div class="d-flex mb-4 bctas">
									<?= lazyImg("banner/c$n.png", randalts($alts), "position-relative z-1",85,58) ?>
									<div class="bg-dark px-xxl-3">
										<p class="h3 font-weight-500 mb-0 ms-3 line-height-1"><i><?=$key?></i></p>
										<p class="text-grey mb-0"><?=$value?></p>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>

					<div class="col-xxl-5 col-md-6">
						<div class="position-relative review-scrollsection">
							<?= lazyImg("$imgfolder/banner.png", randalts($alts), "") ?>
							<div class="review py-1 card position-absolute bg-dgreen border-0 rounded-0">
								<div class="card-body px-0 ">
									<div class="d-flex align-items-center">
										<p class="display-1x line-height-1 mb-0">4.5</p>
										<?= lazyImg("home/cstar.png", randalts($alts), "") ?>
									</div>
									<p class="h4 fw-normal ms-n4 position-relative z-1">Over <span class="reviewnumber">3200</span> Reviews</p>	
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