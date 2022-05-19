<section class="inner-banner banner bg-danger text-white position-relative  banner-<?=$imgfolder?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row z-2 position-relative align-items-center g-0">
					<div class="col-xxl-7 col-md-6">
						<div class="py-xxl-5 my-xxl-4 my-4">
							<h1 class="display-1x fw-bold line-height-1 mb-xxl-5"><?=$banner?></h1>	
							<p class="font-weight-500 font-36 mb-xxl-5 line-height-1 me-xxl-n5"><?=$bheading?></p>
							<a href="tel:<?=$phone?>" class="btn btn-dark text-nowrap px-xxl-5 py-xxl-3">24/7 Fast Call</a>
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