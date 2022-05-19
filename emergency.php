<?php
include __DIR__ . '/src/header.php';
$title = 'Emergency - Drain Unblocking Repair Services From $70';
$description = 'Offering a wide range of Blocked Drains ' . $global_city . ' services. We are experts in unblocking drain treatments. Call us now on 1300 775 634 to discover more.';
$imgfolder = 'emergency';

$banner = '24/7 Emergency Electricians';
$bheading = 'On-Time Guarantee or We Pay You $100!*';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/bannere.php';

?>

<section class=" py-3 py-xxl-4 border-bottom">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center justify-content-between">
					<div class="col-auto">
						<div class="row align-items-center">
							<div class="col-md text-center">
								<p class="mb-md-0"><a href="<?= $domain ?>/services" class="btn btn-outline-danger rounded-pill text-nowrap"><i class="fal fa-long-arrow-left me-2"></i>View All Services</a></p>
							</div>
							<div class="col-md text-center">
								<p class="text-dark mb-md-0">See Full Range of Services</p>
							</div>
						</div>
					</div>
					<div class="col-auto ms-md-auto">
						<div class="row align-items-center">
							<div class="col-md text-center">
								<p class="text-dark text-nowrap mb-md-0"><b>Best Value</b> with Our HomeFirst Membership</p>
							</div>
							<div class="col-md text-center">
								<p class="mb-md-0"><a href="<?= $domain ?>/membership" class="btn btn-danger rounded-pill">See Membership</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-dark text-white text-center pt-3 pt-xxl-5 emergency">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row justify-content-center">
					<div class="col-xxl-9">
						<p class="display-2 fw-bold line-height-1 mb-xxl-5 mb-4">Do you have any of the following emergency problems?</p>
					</div>
				</div>
				<div class="row justify-content-between mb-5">
					<?php $sctas = ['Fallen Power Lines', 'Power Outages', 'Blown Switchboards', 'No Hot Water'];
					$i = 0;
					foreach ($sctas as $key => $value) {
						$i++;
					?>
						<div class="col-auto ">
							<div class="d-flex align-items-center mb-3">
								<?= lazyImg("emergency/e$i.png", randalts($alts), "me-3") ?>
								<p class="fw-bold font-36 mb-0"><?= $value ?></p>
							</div>
						</div>
					<?php
					} ?>
				</div>
				<div class="card rounded-0 border-0 bg-danger mb-n5">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="card-body py-xxl-5">
								<p class="display-2 fw-bold line-height-1 mb-0">Call an Expert Now!</p>
							</div>
						</div>
						<div class="col-md-6 h-100">
							<div class="card-body bg-primary py-xxl-5 card-right position-relative px-xxl-5">
								<div class="row align-items-center justify-content-xxl-between justify-content-center">
									<div class="col-xxl-auto text-xxl-start">
										<p class="fw-bold font-36 line-height-1 "><i>Fix It Today!</i></p>
										<p class="text-tlblue">Same Day <?= $global_city ?> Plumbers</p>
									</div>
									<div class="col-auto">
										<?= lazyImg("emergency/arrow.png", randalts($alts), "") ?>
									</div>
									<div class="col-auto">
										<a href="tel:<?= $phone ?>" class="btn btn-danger text-nowrap px-xxl-5 py-xxl-3">24/7 Fast Call</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-3 py-xxl-5 whyus blocked">
	<div class="container-fluid mt-5">
		<div class="row justify-content-center">
			<div class="col-xxl-9">

				<div class="card mb-4 mb-xxl-5 shadow border-0 rounded-0">
					<div class="row g-0">
						<div class="col-xl-4 order-2 order-xl-1">
							<?= lazyImg("$imgfolder/c1.jpg", randalts($alts), "br w-100 h-100") ?>
						</div>
						<div class="col-xl-8 order-1 order-xl-2">
							<div class="card-body p-xxl-5 p-4">
								<div class="row">
									<div class="col-xxl-12">
										<p class=" text-dark display-2 line-height-1 fw-bold">On-Time <?= $global_city ?> Emergency Electricians or We Pay You $100!*</p>
									</div>
								</div>
								<p>When it comes to emergency services for your <?= $global_city ?> home or business, depend on the on-time, professional service you receive when you choose the electrical experts at ElecFirst Electricians. With our satisfaction guarantee, read what other delighted customers have to say about us <a href="<?= $domain ?>/reviews" class="fw-bold text-decoration-underline text-dark">here</a> and learn more about our commitment to great service <a href="<?= $domain ?>/reviews" class="fw-bold text-decoration-underline text-dark">here</a>. Our 24/7 Rapid Response Team will be on standby to assist you with any urgent electrical problems</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="whyus bg-dark text-white py-3 py-xxl-5">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row">
					<?php $sctas = [
						'On-time Guaranteed' => "With ElecFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient electricians that work around your schedule",
						$global_city . '-Wide Coverage' => 'With electrical teams across ' . $global_city . ', we can dispatch the nearest available electrician direct to your door',
						'Pay by the Job, <br class="d-none d-xxl-block">Not by the Hour' => 'With ElecFirst you pay by the job, never the hour, meaning you know the full price BEFORE we start any work for your complete peace of mind',
						'Friendly Electricians' => "With ElecFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient electricians that work around your schedule",
					];
					$i = 0;
					foreach ($sctas as $key => $value) {
						$i++;
					?>
						<div class="mb-4 col-lg-6 text-center">
							<div class="card rounded-0 border-0 bg-frdark h-100">
								<div class="card-boby h-100 px-xxl-5 p-4">
									<p class=" display-2 line-height-1 fw-bold"><?= $key ?></p>
									<p class="text-grey"><?= $value ?></p>
								</div>
								<?= lazyImg("blockeddrain/s$i.png", randalts($alts), "card-img w-100") ?>
							</div>
						</div>
					<?php
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="solutions bg-light py-xxl-5 py-4 font-coolvetica overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<p class="text-center display-2 fw-bold line-height-1 text-dark mb-5">Everyone’s property is different.<br class="d-none d-xxl-block">
					We provide an Option Sheet that will show all available solutions in great detail</p>
				<div class="position-relative">
					<div class="row z-1 position-relative justify-content-center pt-5">
						<div class="col-xxl-4 text-center">
							<p class="display-2 fw-bold line-height-1 text-dark pt-5">LED Lighting Solutions</p>
							<p class="h5 fw-normal"><i>We calculate ALL available options for your property</i></p>
							<?= lazyImg("home/sfp.png", randalts($alts), "mb-5", 453, 30) ?>
						</div>
					</div>
					<div class="row justify-content-center position-relative z-1 g-0">
						<?php $steps = [
							'We gather detailed information about your home to accurately assess your options',
							'We provide a highly detailed Option Sheet that lists every possible solution for your issue.',
							'We’ll confirm your decision before starting any work. Guaranteed on-time professional services',
						];
						$n = 0;
						foreach ($steps as $key => $value) {
							$n++;
						?>
							<div class="<?= ($n == 1) ? 'col-xxl-4 offset-lg-3 offset-xxl-4 col-lg-6 me-auto mb-lg-n5 position-relative z-1' : 'col-lg-6 mt-xl-n5' ?> <?= ($n == 2) ? 'me-lg-n5' : '' ?> <?= ($n == 3) ? 'ms-lg-n5' : '' ?>">
								<div class="card border-0 rounded-0 bg-transparent text-white">
									<?= lazyImg("home/st$n.png", randalts($alts), "card-img w-100") ?>
									<div class="card-img-overlay d-flex">
										<div class="row my-auto">
											<div class="<?= ($n == 1) ? 'col-6 mt-n5' : 'col-5 mt-md-5 mt-4' ?> <?= ($n == 3) ? 'offset-1' : 'offset-6' ?>">
												<div class="cta card rounded-0 border-0 mb-3 bg-transparent <?= ($n == 1) ? '' : 'ctad' ?>">
													<div class="card-body p-0 position-relative">
														<i class="fw-bold font-36 line-height-1 <?= ($n == 1) ? 'bg-dark' : 'bg-danger' ?> d-inline-block py-1 ms-4 ps-2 pe-3 position-relative">Step <?= $n ?></i>
													</div>
												</div>
												<p class="h4 fw-normal line-height-1"><?= $value ?></p>
											</div>
										</div>

									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
					<?= lazyImg("home/sf.png", randalts($alts), "position-absolute top") ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>