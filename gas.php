<?php
$title = 'Gas Services';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'gas';

$banner = 'Gas Services';
$bheading = 'On-Time Guarantee or We Pay You $100!<span class="text-danger">*</span>';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';

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

<section class="bg-light py-3 py-xxl-5 whyus blocked">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">

				<div class="card mb-4 mb-xxl-5 shadow border-0 rounded-0">
					<div class="row g-0">
						<div class="col-xl-4 order-2 order-xl-1">
							<?= lazyImg("$imgfolder/cc1.jpg", randalts($alts), "br w-100 h-100") ?>
						</div>
						<div class="col-xl-8 order-1 order-xl-2">
							<div class="card-body p-xxl-5 p-4">
								<p class=" text-dark display-2 line-height-1 fw-bold">On-Time Gas Fitting Service Experts in <?= $global_city ?> or We Pay You $100*</p>
								<p>For fast, on-time gas-fitters for your <?= $global_city ?> home, you can count on the same day service and professionalism you receive from PlumbFirst. You can read about our service level guarantee here, and from our other happy customers here. Discover how we can help with your gas needs today</p>
							</div>
						</div>

					</div>
				</div>

				<div class="card mb-4 mb-xxl-5 bg-transparent border-0 rounded-0 d-none d-xxl-block text-white">
					<?= lazyImg("gas/r1.png", randalts($alts), "card-img") ?>
					<div class="card-img-overlay d-flex py-0">
						<div class="row w-100 align-items-center">
							<div class="col-7 offset-5">
								<div class="p-xxl-3 ">
									<p class="display-2 fw-bold line-height-1 ">Professional, Efficient & Safe Gas Installations</p>
									<hr class="hr-h hr-white ">
									<?php $cc = [
										'100% On-time Guarantee or We Pay You $100*',
										'Fully licensed & experienced Gas Fitting team',
										'All options laid out for you before work commencement',
										'Sustainable & efficient power source for your home',
										'Strictly abide by Australian laws & quality standard installations',
										'Considerate, friendly & easy to work with; no stress!',
									]; ?>

									<?php foreach ($cc as $key => $value) {
									?>
										<div class="d-flex mb-3">
											<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
											<p class="h4 fw-normal mb-0"> <?= $value ?></p>
										</div>
									<?php
									} ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-4 mb-xxl-5 bg-transparent border-0 rounded-0 d-xxl-none text-white">
					<?= lazyImg("gas/rm1.png", randalts($alts), "w-100") ?>
					<div class="card-card d-flex py-0 bg-g-primary">
						<div class="row w-100 align-items-center">
							<div class="col-12">
								<div class="p-4">
									<p class="display-2 fw-bold line-height-1 ">Professional, Efficient & Safe Gas Installations</p>
									<hr class="hr-h hr-white ">
									<?php $cc = [
										'100% On-Time Guarantee or We Pay You $100*',
										'Fully licensed & experienced Gas Fitting team',
										'All options laid out for you before work commencement',
										'Sustainable & efficient power source for your home',
										'Strictly abide by Australian laws & quality standard installations',
										'Considerate, friendly & easy to work with; no stress!',
									]; ?>

									<?php foreach ($cc as $key => $value) {
									?>
										<div class="d-flex mb-3">
											<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
											<p class="h4 fw-normal mb-0"> <?= $value ?></p>
										</div>
									<?php
									} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-g-dark text-white ">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center">
					<div class="col-xxl-5 mt-n1">
						<?= lazyImg("gas/cover.png", randalts($alts), "mb-xxl-n2 mt-xxl-n4") ?>
					</div>
					<div class="col-xxl-7">
						<div class="py-3 py-xxl-5">
							<p class="display-2 fw-bold line-height-1 ">We Cover All Gas Plumbing</p>
							<hr class="hr-h hr-white">

							<?php $ccd = [
								'Best Appliance Recommendations' => "We'll help you choose the best appliances for your tailored needs",
								'Resizing of Any Gas Pipes' => 'Ensuring all your appliances & needs have enough gas resources',
								'Selection of Materials' => 'We choose the best value for money in your specific situation so you can save more on installation & servicing costs',
								'Servicing & Maintenance' => "We'll work with you & ensure all gas services are working the best they can with you, your family & property as priority, at your most preferred time and date. Scheduled servicing is available so you’ll never forget to maintain your gas services & avoid huge repairs",
							]; ?>

							<?php foreach ($ccd as $key => $value) {
							?>
								<div class="d-flex mb-2">
									<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
									<p class="h4 fw-normal mb-0"> <?= $key ?></p>
								</div>
								<p class="text-grey small mb-3"><?= $value ?></p>
							<?php
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-3 py-xxl-5 whyus blocked">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<p class="display-2 line-height-1 text-dark text-center fw-bold mb-5 mt-xxl-5">Gas Installation Services</p>

				<div class="row">
					<?php $ser = [
						'Cooktops' => 'Delivering reliable heat with easy temperature control. Gas with cooktops is consistent & easily manageable.',
						'Heating' => "Gas heating can save your wallet. It provides efficient & economical indoor & outdoor services",
						'Hot Water' => 'Gas powered water heaters provide fast & consistent heating.',
						'Pool Heating' => 'Gas is overall highly reliable all year round & can save you money on gas consumption',
						'Commercial Gas' => 'PlumbFirst offers highly professional commerical services. Our teams are cautious & very organised',
						'New Gas Installations' => 'Not sure if you have natural gas in your area? We can check for you & install them properly for your home',
					];
					$i = 0;
					foreach ($ser as $key => $value) {
						$i++;
					?>
						<div class="col-xl-4 mb-3 col-lg-6 text-center">
							<div class="card rounded-0 border-0 h-100 bg-dark ">
								<?= lazyImg("gas/s$i.png", randalts($alts), "card-img w-100") ?>
								<div class="card-body h-100">
									<p class="mt-xxl-3 mb-4 h2 fw-bold text-white line-height-1"><i class=""><?= $key ?></i></p>
									<hr class="hr-h hr-orange">
									<p class=""><?= $value ?></p>
								</div>
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
				<p class="text-center display-2 fw-bold line-height-1 text-dark mb-5">We Will Discuss & Provide You an Option Sheet for the Most Cost-Effective Solutions</p>
				<div class="position-relative">
					<div class="row z-1 position-relative justify-content-center pt-5">
						<div class="col-xxl-4 text-center">
							<p class="display-2 fw-bold line-height-1 text-dark pt-5">Gas Fitting Solutions</p>
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