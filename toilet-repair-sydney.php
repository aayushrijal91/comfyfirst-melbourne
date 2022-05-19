<?php
include __DIR__ . '/src/header.php';
$title = 'Leaking Toilet Repair ' . $global_city . ' | Toilet Plumber ' . $global_city . ' | Affordable Price';
$description = "Looking for Leaking Toilet Repair in " . $global_city . "? We are a plumbing contractor specialising in toilet repairs & installations services. Call at 1300 775 634 ";
$imgfolder = 'gas';

$banner = "Same Day Toilet Repairs and Plumbing";
$bheading = 'On-Time Guarantee or We Pay You $100!<span class="text-danger">*</span>';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banners.php';

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
							<?= lazyImg("$imgfolder/cc31.jpg", randalts($alts), "br w-100 h-100") ?>
						</div>
						<div class="col-xl-8 order-1 order-xl-2">
							<div class="card-body p-xxl-5 p-4">
								<p class=" text-dark display-2 line-height-1 fw-bold">Same Day Toilet Repairs and Plumbing Across <?= $global_city ?></p>
								<p>When it comes to expert toilet repairs and plumbing across <?= $global_city ?>, you can count on the great service you receive from PlumbFirst (read more here). PlumbFirst can help you with all of your plumbing needs including:</p>
							</div>
						</div>

					</div>
				</div>

				<!-- <p class="h1 line-height-1 text-dark text-center fw-bold mb-5 mt-xxl-5">Read more about our great service here, from our other happy customers here, or about how we can help you today below:</p> -->

				<div class="row">
					<?php $bctas = [
						'BLOCKED TOILETS' => "All toilet blockages cleared fast with the latest technology. We can be there on-time, 24 hours, 7 days.",
						'TOILET REPAIRS' => "From leaks, to running toilets that won't stop, to toilets that won't flush - whatever you're toilet issue we can handle it with a rapid repair.",
						'NEW TOILET INSTALLATIONS' => "With a range of the latest toilet designs, with more effective flushing, and water saving options too; PlumbFirst can help with both the supply and the professional installation of all your new toilet needs.",
						'LUXURY TOILETS' => "For the ultimate in toilet luxury, take a look at the latest technology (yes, technology!) from our range of Japanese Toto toilets as well.",
					];
					$i = 0;
					foreach ($bctas as $key => $value) {
						$i++;
					?>
						<div class="col-xl-3 mb-3 col-lg-6">
							<div class="card rounded-0 border-0 h-100">
								<? //= lazyImg("hotwater/ss$i.jpg", randalts($alts), "card-img w-100") 
								?>
								<div class="card-body h-100">
									<div class="row mb-3 align-items-center">
										<div class="col-3">
											<div class="card bg-danger text-white border-0 rounded-0 me-3 mt-2 step ">
												<div class="card-body py-1 ps-2 pe-1">
													<i class="h2 fw-bold line-height-1 "><?= $i ?></i>
												</div>
											</div>
										</div>
										<div class="col">
											<p class="mb-0 h5 line-height-1 fw-bold text-dark"><i><?= $key ?></i></p>
										</div>
									</div>

									<!-- <p class="text-center mt-xxl-3 mb-4 h2 fw-bold text-dark line-height-1"><i class=""><?= $key ?></i></p> -->
									<p class=""><?= $value ?></p>
								</div>
							</div>
						</div>
					<?php
					} ?>
				</div>

				<p class="h4 text-dark mt-3">As with all of our work you can be sure of on-time plumbers that respect both your busy schedule and your home. You can read about the PlumbFirst guarantee and how we price by the job, not the hour here.</p>

				<p class="h4 text-dark mt-3">For all of your toilet repair and plumbing needs in <?= $global_city ?>, call and speak with the specialists at PlumbFirst today.</p>

			</div>
		</div>
	</div>
</section>

<section class="standard text-white overflow-hidden font-coolvetica">
	<div class="container-fluid px-0">
		<div class="row g-0">
			<div class="col-lg-6 col-xl bg-danger">
				<div class="row justify-content-end h-100">
					<div class="col-xxl-8 my-auto p-md-5 p-4 p-xxl-0">
						<p class="display-2 fw-bold line-height-1">We Quote By The Job, Not The Hour!</p>
						<p class="h5 fw-normal">Why settle for anything less?</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-auto">
				<?= lazyImg("hotwater/type.jpg", randalts($alts), "w-100") ?>
			</div>
			<div class="col-12 col-xl bg-primary">
				<div class="row h-100">
					<div class="col-xxl-8 my-auto p-md-5 p-4 p-xxl-0">
						<p class="h5 mb-xxl-4 fw-normal">With PlumbFirst we price by the job, not the hour, up-front, for your complete peace of mind. No matter how long the job ends up taking us, You still pay the same price.</p>
						<?php /*$slists = [
							'Gas Hot Water',
							'Electric Hot Water',
							'Solar Hot Water',
							'Commercial Hot Water',
							'Heat Pumps',
						]; 
						foreach ($slists as $key => $value) {
							?>
							<div class="d-flex mb-3">
								<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
								<p class="h4 fw-normal mb-0"> <?=$value?></p>
							</div>
							<?php
						}*/
						?>

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
				<p class="display-2 line-height-1 text-dark text-center fw-bold mb-5 mt-xxl-5">Why Choose Us</p>

				<p class="h5 mb-5">When you choose PlumbFirst for your plumbing, hot water and drain needs across <?= $global_city ?>, you can be sure that our high quality, friendly service is second-to-none. Discover the PlumbFirst difference for yourself, or read from our other happy customers here.</p>

				<div class="row">
					<?php $ser = [
						'ON-TIME...GUARANTEED' => "With PlumbFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient plumbers that work around your schedule.",
						'FASTER SERVICE' => "Because PlumbFirst operates from MULTIPLE locations right across the " . $global_city . " metropolitan area, you can benefit from a rapid response for your plumbing needs.",
						'PAY BY THE JOB NOT THE HOUR' => 'With PlumbFirst you always know the price BEFORE we start, for your complete peace of mind. And because you pay by the job, and not by the hour, no matter how long the job takes you still only pay the same price you agreed, which can help save you money.',
						'FRIENDLY PLUMBERS' => "Courteous, polite and friendly plumbers that will take the time to answer all of your questions and help with all your plumbing requirements. It's the little details that can make all the difference.",
					];
					$i = 0;
					foreach ($ser as $key => $value) {
						$i++;
					?>
						<div class="col-xl-6 mb-3 col-lg-6 text-center">
							<div class="card rounded-0 border-0 h-100 bg-dark ">
								<? //= lazyImg("hotwater/s$i.png", randalts($alts), "card-img w-100") 
								?>
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

<?php /* ?>
<section class="py-3 py-xxl-5 text-white hcards">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">

				<div class="card mb-4 mb-xxl-5 bg-transparent border-0 rounded-0 d-none d-xxl-block">
					<?= lazyImg("hotwater/r1.png", randalts($alts), "card-img") ?>
					<div class="card-img-overlay d-flex py-0">
						<div class="row w-100 align-items-center">
							<div class="col-7 offset-5">
								<div class="p-xxl-3 ">
									<p class="display-2 fw-bold line-height-1 ">We can help you <br class="d-none d-xxl-block ">choose the right water heating system for you</p>
									<hr class="hr-h hr-white ">
									<div class="d-flex mb-3">
										<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
										<p class="h4 fw-normal mb-0"> Tailored Options</p>
									</div>
									<p class="text-tlblue">We can show you all the water heating options available to suit your home, family, lifestyle and budget and can help answering any questions you may have about the other options such as a <u class="text-danger">Continuous Flow Water Heater</u> or a <u class="text-danger">Heat Pump Water Heater</u>.</p>
									<div class="d-flex mb-3">
										<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
										<p class="h4 fw-normal mb-0"> New Install & Replacements</p>
									</div>
									<p class="text-tlblue">When you need a new or replacement water heater, we can help with a range of the best systems from the leading brands, all expertly installed. We'll even bring the new water heater direct to your door, and even take the old one away for your complete convenience</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-4 mb-xxl-5 bg-transparent border-0 rounded-0 d-xxl-none">
					<?= lazyImg("hotwater/rm1.png", randalts($alts), "w-100") ?>
					<div class="card-card d-flex py-0 bg-g-primary">
						<div class="row w-100 align-items-center">
							<div class="col-12">
								<div class="p-4">
									<p class="display-2 fw-bold ">We can help you choose the right water heating system for you</p>
									<p class="text-tlblue">We can show you all the water heating options available to suit your home, family, lifestyle and budget and can help answering any questions you may have about the other options such as a <u class="text-danger">Continuous Flow Water Heater</u> or a <u class="text-danger">Heat Pump Water Heater</u>.</p>
									<div class="d-flex mb-3">
										<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
										<p class="h4 fw-normal mb-0"> New Install & Replacements</p>
									</div>
									<p class="text-tlblue">When you need a new or replacement water heater, we can help with a range of the best systems from the leading brands, all expertly installed. We'll even bring the new water heater direct to your door, and even take the old one away for your complete convenience</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-4 mb-xxl-5 bg-transparent border-0 rounded-0 d-none d-xxl-block">
					<?= lazyImg("hotwater/r2.png", randalts($alts), "card-img") ?>
					<div class="card-img-overlay d-flex py-0">
						<div class="row w-100 align-items-center py-3">
							<div class="col-7 ">
								<div class="p-xxl-3 ">
									<p class="display-2 fw-bold line-height-1 mb-xxl-4">Fast Hot Water Repairs</p>
									<hr class="hr-h hr-white">
									<p class="h2 fw-bold">We're so confident of the level of service we provide at PlumbFirst, that we guarantee it!</p>
									<hr class="hr-h hr-white mb-xxl-4">
									<div class="d-flex mb-3">
										<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
										<p class="h4 fw-normal mb-0"> 24/7 Rapid Response Team</p>
									</div>
									<p class="text-tlblue ">Don't suffer longer than you have to without hot water in your Sydney home. As soon as you discover you have a problem, call PlumbFirst and we will dispatch one of our expert plumbers to your home at a time convenient to you. We're available 24 hours 7 days from multiple locations across Sydney for all your hot water emergencies. We'll have you enjoying hot water again before you know it</p>
									<div class="d-flex mb-3">
										<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
										<p class="h4 fw-normal mb-0"> All Types of Water Heater Repairs</p>
									</div>
									<p class="text-tlblue">PlumbFirst has the expertise and experience to handle every kind of repair to all brands and models of water heaters. All with a level of friendly service second-to-none</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card mb-4 mb-xxl-5 bg-transparent border-0 rounded-0 d-xxl-none">
					<?= lazyImg("hotwater/rm2.png", randalts($alts), "w-100") ?>
					<div class="card-card d-flex py-0 bg-g-primary">
						<div class="row w-100 align-items-center">
							<div class="col-12">
								<div class="p-4">
									<p class="display-2 fw-bold line-height-1 mb-xxl-4">Fast Hot Water Repairs</p>
									<hr class="hr-h hr-white">
									<p class="h2 fw-bold">We're so confident of the level of service we provide at PlumbFirst, that we guarantee it!</p>
									<hr class="hr-h hr-white mb-xxl-4">
									<div class="d-flex mb-3">
										<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
										<p class="h4 fw-normal mb-0"> 24/7 Rapid Response Team</p>
									</div>
									<p class="text-tlblue ">Don't suffer longer than you have to without hot water in your Sydney home. As soon as you discover you have a problem, call PlumbFirst and we will dispatch one of our expert plumbers to your home at a time convenient to you. We're available 24 hours 7 days from multiple locations across Sydney for all your hot water emergencies. We'll have you enjoying hot water again before you know it</p>
									<div class="d-flex mb-3">
										<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
										<p class="h4 fw-normal mb-0"> All Types of Water Heater Repairs</p>
									</div>
									<p class="text-tlblue">PlumbFirst has the expertise and experience to handle every kind of repair to all brands and models of water heaters. All with a level of friendly service second-to-none</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="energy bg-dark text-white overflow-hidden">
	<div class="container-fluid px-xxl-0">
		<div class="row justify-content-center align-items-center">
			<div class="col-xxl-5 ">
				<?= lazyImg("hotwater/energy.png", randalts($alts), "energybg ") ?>
			</div>
			<div class="col-xxl-7 ">
				<div class="row py-3 py-xxl-5">
					<div class="col-xxl-9">
						<p class="display-2 fw-bold line-height-1 mb-4">Enjoy the energy savings on your water heating</p>
						<hr class="hr-h hr-white mb-4">

						<div class="d-flex mb-3">
							<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
							<p class="h4 fw-normal mb-0"> Energy & Money Saving</p>
						</div>
						<p class="text-grey mb-4">With energy costs continually on the rise, there are always options to help keep those costs to a minimum. Speak with one of our experts today about the latest energy efficient water heating options. For all your Sydney water heating installations, repairs and maintenance, call and speak with the professionals at PlumbFirst today.</p>
						<div class="d-flex mb-3">
							<i class="far fa-check text-danger me-2 fa-lg mt-2"></i>
							<p class="h4 fw-normal mb-0"> Regular Maintenance Checks</p>
						</div>
						<p class="text-grey">To ensure you get the most out of your new water heater, it is important to have it maintained and checked for any faults on a regular basis. We can assist you by putting in place a maintenance plan to suit you which will help avoid any unnecessary breakdowns or safety issues in the future</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php */ ?>

<section class="solutions bg-light py-xxl-5 py-4 font-coolvetica overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<p class="text-center display-2 fw-bold line-height-1 text-dark mb-5">We Will Discuss & Provide You an Option Sheet for the Most Cost-Effective Solutions</p>
				<div class="position-relative">
					<div class="row z-1 position-relative justify-content-center pt-5">
						<div class="col-xxl-4 text-center">
							<p class="display-2 fw-bold line-height-1 text-dark pt-5">Hot Water Solutions</p>
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