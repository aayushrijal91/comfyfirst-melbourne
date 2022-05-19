<?php
$title = 'Our Awards & Success';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'awards';

$banner = 'Our Awards <br class="d-none d-xxl-block">& Success';
$bheading = 'One of the Biggest Technicians in All of Australia';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';
?>

<section class="bg-light py-3 py-xxl-5 awards customers">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="h2 text-dark mb-4">Awards & Success 2021</p>
				<div class="card mb-3 mb-xxl-5 rounded-0 border-0 bg-vdgreen text-white">
					<div class="row g-0">
						<div class="col-xxl-3 text-center">
							<div class="card-body h-100 d-flex flex-wrap py-xxl-5 pe-xxl-0">
								<?= lazyImg("$imgfolder/al1.png", randalts($alts), "mb-4 mx-auto") ?>
								<div class="m-auto w-100">
									<p class="h4 mb-4">Product Review <br class="d-xxl-block d-none">Award Winner</p>
									<div class="card rounded-0 border-0 card-y bg-transparent me-n4 z-1 mb-3">
										<div class="card-body position-relative py-0">
											<i class="display-5 line-height-1 fw-bold position-relative bg-green ps-4 pe-5 d-block">Winner 2021</i>
										</div>
									</div>
								</div>
								<?= lazyImg("home/sci1.png", randalts($alts), "w-75 mx-auto mt-auto") ?>
							</div>
						</div>
						<div class="col-xxl-9">
							<div class="card border-0 rounded-0">
								<?= lazyImg("$imgfolder/a1.jpg", randalts($alts), " w-100") ?>
								<div class="card-img-overlay p-0 d-flex">
									<div class="d-flex reviews cover mt-auto mx-auto">
										<div class="me-2 left position-relative review">
											<div class="position-relative z-1 p-md-4 p-3">
												<?= lazyImg("home/cpr1.png", randalts($alts), "mb-md-5") ?>
												<div class="ms-n4">
													<div class="d-flex align-items-center">
														<p class="display-1x line-height-1 mb-0">4.5</p>
														<?= lazyImg("home/cstar.png", randalts($alts), "") ?>
													</div>
													<p class="h4 fw-normal">Customer Rating</p>	
												</div>
											</div>
										</div>
										<div class="right position-relative review">
											<div class="position-relative z-1 p-md-4 p-3">
												<?= lazyImg("home/cpr2.png", randalts($alts), "mb-md-5") ?>	
												<div class="ms-n4">
													<p class="display-1x line-height-1 mb-0">3283</p>
													<p class="h4 fw-normal">Customer Rating</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<p class="h2 text-dark mb-4">Awards & Success 2019</p>
				<div class="card mb-3 mb-xxl-5 rounded-0 border-0 bg-g-primary text-white card-right overflow-hidden">
					<div class="row g-0">
						<div class="col-xxl-9 order-2 order-xxl-1">
							<div class="card border-0 rounded-0">
								<?= lazyImg("$imgfolder/a2.jpg", randalts($alts), "w-100 ") ?>
							</div>
						</div>
						<div class="col-xxl-3 text-center order-1 order-xxl-2">
							<div class="card-body h-100 d-flex flex-wrap py-xxl-5 pe-xxl-0">
								<?= lazyImg("$imgfolder/al2.png", randalts($alts), "mb-4 mx-auto") ?>
								<div class="m-auto w-100">
									<p class="h4 mb-4">Wyndham Business Awards <br class="d-xxl-block d-none">Trade & Construction</p>
									<div class="card rounded-0 border-0 card-y bg-transparent me-n4 z-1 mb-3">
										<div class="card-body position-relative py-0">
											<i class="display-5 line-height-1 fw-bold position-relative bg-danger ps-4 pe-5 d-block">Winner 2019</i>
										</div>
									</div>

								</div>
								<?= lazyImg("home/sci3.png", randalts($alts), "w-75 mx-auto mt-auto") ?>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-3 mb-xxl-5 rounded-0 border-0 bg-g-primary text-white">
					<div class="row g-0">
						<div class="col-xxl-3 text-center">
							<div class="card-body h-100 d-flex flex-wrap py-xxl-5 pe-xxl-0">
								<?= lazyImg("$imgfolder/al3.png", randalts($alts), "mb-4 mx-auto") ?>
								<div class="m-auto w-100">
									<p class="h4 mb-4">Featured in <br class="d-xxl-block d-none">The Advertiser Magazine</p>
									<div class="card rounded-0 border-0 card-y bg-transparent me-n4 z-1 mb-3">
										<div class="card-body position-relative py-0">
											<i class="display-5 line-height-1 fw-bold position-relative bg-danger ps-4 pe-5 d-block">Winner 2019</i>
										</div>
									</div>
								</div>
								<?= lazyImg("home/sci1.png", randalts($alts), "w-75 mx-auto mt-auto") ?>
							</div>
						</div>
						<div class="col-xxl-9 ">
							<div class="card border-0 rounded-0">
								<?= lazyImg("$imgfolder/a3.jpg", randalts($alts), "w-100 ") ?>
							</div>
						</div>
					</div>
				</div>
				
				<p class="h2 text-dark mb-4">Awards & Success 2018</p>
				<div class="card mb-3 mb-xxl-5 rounded-0 border-0 bg-g-primary text-white card-right overflow-hidden">
					<div class="row g-0">
						<div class="col-xxl-9 order-2 order-xxl-1">
							<div class="card border-0 rounded-0">
								<?= lazyImg("$imgfolder/a4.jpg", randalts($alts), "w-100 ") ?>
							</div>
						</div>
						<div class="col-xxl-3 text-center order-1 order-xxl-2">
							<div class="card-body h-100 d-flex flex-wrap py-xxl-5 pe-xxl-0">
								<?= lazyImg("$imgfolder/al2.png", randalts($alts), "mb-4 mx-auto") ?>
								<div class="m-auto w-100">
									<p class="h4 mb-4">Wyndham Business Awards <br class="d-xxl-block d-none">Trade & Construction</p>
									<div class="card rounded-0 border-0 card-y bg-transparent me-n4 z-1 mb-3">
										<div class="card-body position-relative py-0">
											<i class="display-5 line-height-1 fw-bold position-relative bg-danger ps-4 pe-5 d-block">Winner 2018</i>
										</div>
									</div>

								</div>
								<?= lazyImg("home/sci3.png", randalts($alts), "w-75 mx-auto mt-auto") ?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>