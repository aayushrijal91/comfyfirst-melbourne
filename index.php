<?php

include __DIR__ . '/src/header.php';
$title = $site;
$description = '';
$alts = ['Technicians', '', 'Comfy First', 'Great Service'];

?>

<section class="banner bg-dark text-white position-relative">
	<div class="container-fluid">
		<div class="row z-2 position-relative">
			<div class="col-xxl-auto align-self-end order-2 order-xxl-1">
				<div class="py-xxl-3 me-xxl-5 pe-xxl-5 ps-xxl-1">
					<?= lazyImg('banner/badge.png', randalts($alts), "badge", 114) ?>
				</div>
			</div>
			<div class="col-xxl-5 col-md-6 order-1 order-xxl-2">
				<div class="py-xxl-5 my-xxl-5 my-4">
					<h1 class="display-1x fw-bold line-height-1 mb-xxl-5">On-Time <?= $global_city ?> <br class="d-none d-xxl-block">Technicians or <br class="d-none d-xxl-block">We Pay You $100!*</h1>
					<p class="font-weight-500 font-36 mb-xxl-5">Call Us Today on <a href="tel:<?= $phone ?>" class="text-white"><?= $phone ?></a> or <a href="<?= $domain ?>/book-online" class="text-white">Book Online</a></p>
					<?php $bctas = [
						'Pricing by the job, not by the hour' => 'No matter how long the job ends up taking us, you still pay the same price',
						'Professional & Tidy Technicians' => 'Our technicians are presentable, polite and keep your home clean & tidy',
					];
					$n = 0;
					foreach ($bctas as $key => $value) {
						$n++;
					?>
						<div class="d-flex mb-4">
							<?= lazyImg("banner/cd$n.png", randalts($alts), "", 85, 58) ?>
							<div>
								<p class="font-36 font-weight-500 mb-0 ms-3 line-height-1"><i><?= $key ?></i></p>
								<p class="text-grey mb-0"><?= $value ?></p>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="position-absolute right top h-100 z-2 pman">
		<?= lazyImg("banner/man2.png", randalts($alts), "h-100 w-auto") ?>
		<div class="position-absolute content-r text-center z-1 d-none d-lg-block">
			<p class="font-36 font-weight-500 line-height-1">Discover <span class="text-danger">ComfyFirst</span></p>
			<p class="h6 fw-normal">Save money with <br>ComfyFirst's commitment <br>to value & professionalism</p>
		</div>
		<a href="#" class="text-red position-absolute center play" data-bs-toggle="modal" data-bs-target="#message" data-theVideo="https://www.youtube.com/embed/21fiOnYQOgc">
			<span class="fa-stack h1 pulsered mb-0">
				<i class="fas fa-circle fa-stack-2x"></i>
				<i class="fas fa-play fa-stack-1x fa-inverse font-16"></i>
			</span>
		</a>
	</div>
	<img alt="<?= randalts($alts) ?>" class="lazy loadall h-100 position-absolute top left w-100 city d-none d-md-block" data-src="<?= $domain ?>/assets/images/banner/city.jpg" width="auto" height="auto">
	<?php
	$season = [
		"01" => "Summer",
		"02" => "Summer",
		"03" => "Autumn",
		"04" => "Autumn",
		"05" => "Autumn",
		"06" => "Winter",
		"07" => "Winter",
		"08" => "Winter",
		"09" => "Spring",
		"10" => "Spring",
		"11" => "Spring",
		"12" => "Summer",
	];
	$saleSeason = $season[date('m')];
	?>
	<div class="seasonal_sale <?= strtolower($saleSeason) ?>">
		<div class="seasonal_saleInner">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto">
					<div class="row align-items-center">
						<div class="col-auto season">
							<?= $saleSeason ?> Sale
						</div>
						<div class="col-auto buyText">
							Buy in <?= $saleSeason ?> <br>&amp; Save up to
						</div>
					</div>
				</div>
				<div class="col-auto percentage">
					35%
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade videomodal" id="message" aria-labelledby="staticBackdropLabel">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content bg-transparent border-0">
			<div class="modal-header border-0">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="ratio ratio-16x9">
					<iframe class="embed-responsive-item" width="100%" src=""></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="bg-light form py-xxl-5 py-3 font-coolvetica">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="card mb-3 shadow border-0 rounded-0">
					<div class="row g-0">
						<div class="col-lg-6 ">
							<div class="position-relative w-100 h-100 text-white">
								<?= lazyImg("home/form.png", randalts($alts), "card-img w-100 h-100 object-fit") ?>
								<div class="card-img-overlay">
									<div class="heading position-absolute">
										<p class="display-3 fw-bold text-uppercase line-height-1 mb-0">$52 off</p>
										<p class="h4 fw-bold text-uppercase">your next service*</p>
										<p class="text-center heading-b ms-5 font-14 d-none d-md-block">Simply quote <b><span class="cday"></span>52</b> when calling or get discounted automatically when you book online</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6" id="form">
							<div class="card-body p-xxl-5">
								<h3 class="text-center display-2 line-height-1 fw-bold text-dark mb-0">Book Now & Save</h3>
								<p class="text-center text-dark h4 mb-4">Simply fill in the form below & we’ll get back to you ASAP</p>
								<form id="book" class="needs-validation contact_form" action="<?= $domain ?>/form.php" method="POST" name="MyForm" novalidate>
									<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">
									<div class="row">
										<div class="col">
											<div class="mb-3">
												<input type="text" class="form-control " name="name" placeholder="Full Name" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="mb-3">
												<input type="tel" class="form-control " name="phone" placeholder="Phone Number" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="mb-3">
												<input type="email" class="form-control " name="email" placeholder="Email Address" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="mb-3">
												<select class="form-select" id="yourservice" name="service" required>
													<option selected disabled value="">Please select a service</option>
													<?php foreach ($services['ComfyFirst'] as $key => $value) { ?>
														<optgroup label="<?= $key ?>">
															<?php foreach ($value as $k => $v) : ?>
																<option><?= $k ?></option>
															<?php endforeach ?>
														</optgroup>
													<?php
													}
													?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="form-group mb-3">
												<textarea class="form-control" id="detail" name="detail" placeholder="Further Information (optional)" required></textarea>
											</div>
										</div>
									</div>
									<div class="row align-items-center text-light">
										<div class="col-xxl-7">
											<div class="d-flex align-items-center mb-4">
												<span class="fa-stack fa-sm me-2">
													<i class="fas fa-shield fa-stack-2x"></i>
													<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
												</span>
												<div>
													<p class="font-14 mb-0">Your Privacy is Our Priority</p>
													<p class="font-12 mb-0">Your information will remain private & secure</p>
												</div>
											</div>
										</div>
										<div class="col-xxl-5">
											<button type="submit" class="btn btn-danger py-3 w-100">Book Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="coupons bg-light py-xxl-5 py-3 font-coolvetica">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row">
					<div class="col-xxl-4">
						<div class="row justify-content-center">


							<?php $coupons = [
								// [
								// 	'top'=>'Blocked Drains',
								// 	'big'=>'$77*',
								// 	'bot'=>'We do all types of drains',
								// 	'under'=>'Unblock Your Drains Today!',
								// ],
								[
									'top' => '',
									'big' => 'FREE',
									'bot' => 'ESTIMATES<p class="mb-3"></p>On New Air Conditioning*',
									'under' => 'All Leading Brands!',
								],
								[
									'top' => '',
									'big' => 'ZERO',
									'bot' => 'Interest Payment Plans Available <br>(no interest ever!)',
									'under' => '0% Interest Payment Plans',
								],
							];
							$n = 0;
							foreach ($coupons as $key => $value) {
								$n++;
							?>
								<div class="col-xxl-12 col-xl-4 col-md-6">
									<div class="card mb-4 text-white bg-info rounded-0 border-0">
										<div class="position-relative">
											<div class="row g-0 align-items-center">
												<div class="col-8">
													<div class="card-body ps-4 pe-0 py-5 <?= ($n == 1 ? 'my-4 ' : 'my-3') ?>">
														<h4 class="fw-normal mb-0">
															<span class="font-36 fw-bold line-height-1  mb-0 d-block"><?= $value['top'] ?></span>
															<span class="display-1x line-height-1 fw-bold mb-0 d-block"><?= $value['big'] ?></span>
															<span class="font-36 fw-bold line-height-1 mb-0 d-block"><?= $value['bot'] ?></span>
														</h4>
													</div>
												</div>
											</div>
											<?= lazyImg("home/co$n.png", randalts($alts), "position-absolute right top h-100") ?>
										</div>
										<div class="card-footer text-center bg-dark">
											<p class="font-36 fw-bold mb-0"><?= $value['under'] ?></p>
										</div>
									</div>
								</div>
							<?php
							}
							?>
							<div class="col-xxl-12 col-xl-4 col-md-6 mb-4 text-center">
								<div class="card text-white bg-g-blue rounded-0 border-0 h-100">
									<div class="card-body py-5">
										<h4 class="font-36 fw-bold line-height-1"></h4>
										<hr class="hr-white hr-h">

										<p class="display-1x line-height-1 fw-bold mb-0">COVID-19</p>
										<p class="font-36 fw-bold text-uppercase line-height-1">compliant services</p>

										<hr class="hr-white hr-h ">
										<p class="font-18 text-info line-height-1">In compliance with Australian laws &amp; standards</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 text-center">
						<div class="card bg-g-white text-dark rounded-0 border-0 mb-4">
							<div class="card-body pb-3 px-0">
								<p class="display-2 line-height-1 fw-bold">Daily Specials</p>
								<div class="card bg-dark text-white rounded-0 mb-3">
									<div class="card-body p-2">
										<p class="mb-0 h4 fw-bold"><span class="cday"></span> Specials Ends in</p>
									</div>
								</div>
								<div class="row text-uppercase">
									<div class="col">
										<p class="mb-0">HOURS</p>
										<p id="chour" class="fw-bold display-2 line-height-1"></p>
									</div>
									<div class="col">
										<p class="mb-0">minutes</p>
										<p id="cmin" class="fw-bold display-2 line-height-1"></p>
									</div>
									<div class="col">
										<p class="mb-0">seconds</p>
										<p id="csec" class="fw-bold display-2 line-height-1"></p>
									</div>
								</div>
								<?= lazyImg("home/ds.png", randalts($alts), "ds") ?>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 text-center">
						<div class="row justify-content-center">
							<?php $cctas = [
								[
									'top' => '<span class="cday"></span> <span class="text-info">Daily Deal</span>',
									'big' => '$52 OFF',
									'bot' => 'your next service*',
									'under' => 'Must quote <span class="text-white"><b class="cday"></b>52</span> when calling',
								],
								[
									'top' => '',
									'big' => '5 STAR',
									'bot' => 'red carpet services',
									'under' => '',
								],
							];
							$n = 0;
							foreach ($cctas as $key => $value) {
								$n++;
								if ($n == 1) {
									$bg = 'bg-dark';
								} elseif ($n == 2) {
									$bg = 'bg-verydark';
								} else {
									$bg = 'bg-g-blue';
								}
							?>
								<div class="col-xxl-12 col-xl-4 col-md-6 mb-4">
									<div class="card text-white <?= $bg ?> rounded-0 border-0 h-100">
										<div class="card-body <?= ($n == 2) ? 'pb-0' : 'py-5' ?>  ">
											<h4 class="font-36 fw-bold line-height-1"><?= $value['top'] ?></h4>
											<hr class="hr-white hr-h">
											<?php if ($n == 3) { ?>
												<h4 class="fw-normal mb-0">
													<span class="display-1x line-height-1 fw-bold mb-0 d-block"><?= $value['big'] ?></span>
													<span class="font-36 fw-bold text-uppercase line-height-1 d-block"><?= $value['bot'] ?></span>
												</h4>
											<?php } else { ?>
												<p class="display-1x line-height-1 fw-bold mb-0"><?= $value['big'] ?></p>
												<p class="font-36 fw-bold text-uppercase line-height-1"><?= $value['bot'] ?></p>
											<?php } ?>
											<?php if ($n == 2) { ?>
												<p class="text-info mb-0 h5 line-height-1"><?= star(5) ?></p>
												<hr class="hr-white hr-h w-50 mx-auto">
											<?php } else { ?>
												<hr class="hr-white hr-h ">
											<?php } ?>
											<p class="font-18 text-info line-height-1"><?= $value['under'] ?></p>
										</div>
										<?php if ($n == 2) {
											echo lazyImg("home/sbot.jpg", randalts($alts), "mt-n4 w-100");
										} ?>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="member text-white bg-dark py-xxl-5 py-4 font-coolvetica overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<h2 class="text-center display-2 line-height-1 fw-bold">One of the best air conditioning membership plans in all of Australia. <span class="text-danger">Discover why!</span></h2>
				<?php $sliderm = [
					'Best Plan in Australia' => 'A membership plan like no other, that covers you & your home, even when you move houses! <br>(with no extra fees)',
					'Our Lifetime Commitment to You' => 'Our Membership never expires! We ensure priority servicing & amazing value for our members. We’ll protect you & your home.',
					'1 Payment & it’s all yours ...forever!' => 'Just one payment of $149 & we’ll register you as a member & cover any homes you move in... <br>for your entire life!',
					'Free Safety Condition Report for Each Trade' => 'Book your membership online today for a promotional offer of $99!',
				];
				$n = 0;
				?>
				<div class="sliderm">
					<?php foreach ($sliderm as $key => $value) {
						$n++;
					?>
						<div>
							<div class="card text-white rounded-0 border-0 bg-transparent">
								<?= lazyImg("home/sm$n.png", randalts($alts), "") ?>
								<div class="card-img-overlay px-md-4">
									<div class="row justify-content-between align-items-center">
										<div class="col-lg-auto col-6">
											<?= lazyImg("home/pftag.png", randalts($alts), "") ?>
										</div>
										<div class="col-4">
											<div class="ms-md-4 ms-xxl-5">
												<h3 class="fw-bold display-3 line-height-1 mb-0"><?= $key ?></h3>
												<hr class="hr-h hr-white d-none d-md-block">
												<p class="font-36 fw-bold line-height-1 d-none d-md-block"><?= $value ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					} ?>
				</div>
				<div class="row justify-content-center mt-lg-n5 mb-md-5">
					<div class="col-11">
						<div class="card bg-ldark text-white">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-lg-9">
										<div class="row mb-2 d-none d-md-flex">
											<?php $pro = ['Best Plan in Australia', 'Our Commitment', 'One Payment', 'Free Safety Report'];
											foreach ($pro as $key => $value) {
											?>
												<div class="col text-center">
													<p class="fw-bold h5"><?= $value ?></p>
												</div>
											<?php
											}
											?>
										</div>
										<div class="position-relative mb-4 mb-lg-0">
											<div class="progress ">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 5%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<?php for ($i = 1; $i < 5; $i++) {
											?>
												<span class="steps position-absolute step<?= $i ?>"></span>
											<?php
											} ?>
										</div>
									</div>
									<div class="col-lg-3">
										<a href="<?= $domain ?>/membership" class="btn btn-danger text-nowrap w-100 py-xxl-3">Become a Member</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</span>
		</div>
</section>

<section class="sctas bg-danger text-white font-coolvetica">
	<div class="container-fluid">
		<div class="row justify-content-end">
			<?php $sctas = [
				[
					'heading' => 'PlumbFirst <br>Services',
					'url' => 'services.php',
					'cta' => ['Blocked Drains', 'Hot Water Systems', 'Gas Services',],
				],
				[
					'heading' => 'ComfyFirst <br>Services',
					'url' => 'services.php',
					'cta' => ['Electrical Services', 'Lighting', 'Switchboards & Rewiring',],
				],
				[
					'heading' => 'Heating <br>& Cooling',
					'url' => 'services.php',
					'cta' => ['Air Conditioning', 'Heating', 'Repairs & Maintenance',],
				],
			];
			$n = 0;
			foreach ($sctas as $key => $value) {
				$n++;
				if ($n == 1) {
					$bg = 'bg-danger';
				} elseif ($n == 2) {
					$bg = 'bg-gc-primary';
				} elseif ($n == 3) {
					$bg = 'bg-gc-info';
				}
			?>
				<div class=" col-xxl-4 position-relative col<?= $n ?> <?= $bg ?>">
					<div class="py-3 py-md-5 position-relative z-4 ">
						<h3 class="display-2 fw-bold line-height-1 mb-md-5 mt-4"><?= $value['heading'] ?></h3>
						<p class="mb-md-5 <?= $n != 1 ? 'ms-xxl-n2' : '' ?>"><a href="<?= $domain ?>/<?= $value['url'] ?>" class="text-white h5 fw-normal">Click to view all our services</a></p>
						<div class="mb-md-5 <?= $n != 1 ? 'ms-xxl-n5' : '' ?>">
							<?php foreach ($value['cta'] as $k => $v) { ?>
								<div class="cta card rounded-0 border-0 mb-1 bg-transparent ">
									<div class="card-body p-0 position-relative">
										<i class="fw-bold font-36 line-height-1 bg-dark d-inline-block py-1 ms-4 ps-2 pe-3 position-relative"><?= $v ?></i>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="<?= $n != 1 ? 'ms-xxl-n5' : '' ?>">
							<?php if ($n == 1) {
								echo lazyImg("home/sci$n.png", randalts($alts), "mt-4 ms-xxl-n1 slogo");
							} elseif ($n == 2) {
								echo lazyImg("home/sci$n.png", randalts($alts), "mt-4 ms-xxl-n5 slogo");
							} elseif ($n == 3) {
								echo lazyImg("home/sci$n.png", randalts($alts), "mt-4 ms-xxl-n5 slogo");
							}
							?>
						</div>
					</div>
					<?php if ($n == 1) {
						echo lazyImg("home/scm$n.png", randalts($alts), "scm position-absolute");
					} elseif ($n == 2) {
						echo lazyImg("home/scm$n.png", randalts($alts), "scm position-absolute z-2");
						echo lazyImg("home/scl$n.png", randalts($alts), "position-absolute h-100 right top z-1 scl");
					} elseif ($n == 3) {
						echo lazyImg("home/scm$n.png", randalts($alts), "scm position-absolute z-3");
						echo lazyImg("home/scl$n.png", randalts($alts), "position-absolute h-100 right top z-2 scl");
					}
					?>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<section class="solutions bg-light py-xxl-5 py-4 font-coolvetica overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<h3 class="text-center display-2 fw-bold line-height-1 text-dark mb-5">Everyone’s property is different. <br>We provide an Option Sheet that will show all available solutions in great detail</h3>
				<div class="position-relative">
					<div class="row z-1 position-relative justify-content-center pt-5">
						<div class="col-xxl-5 text-center">
							<p class="display-2 fw-bold line-height-1 text-dark pt-5">Air Conditioning Solutions</p>
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
														<i class="fw-bold font-36 line-height-1 <?= ($n == 1) ? 'bg-dark' : 'bg-info' ?> d-inline-block py-1 ms-4 ps-2 pe-3 position-relative">Step <?= $n ?></i>
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

<section class="standard bg-info text-white overflow-hidden font-coolvetica">
	<div class="container-fluid px-0">
		<div class="row g-0">
			<div class="col-lg-6 col-xxl bg-info">
				<div class="row justify-content-end h-100">
					<div class="col-xxl-8 my-auto p-md-5 p-4 p-xxl-0">
						<h3 class="display-2 fw-bold line-height-1">Strictly Compliant to Australian Laws & Quality Standards</h3>
						<p class="h5 fw-normal">We comply meticulously to proper Australian procedures, laws and quality standards</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xxl-auto">
				<?= lazyImg("home/struck.png", randalts($alts), "w-100") ?>
			</div>
			<div class="col-12 col-xxl bg-info">
				<div class="row h-100">
					<div class="col-xxl-8 my-auto">
						<div class="row p-3 p-md-5 p-xxl-0">
							<?php $si = [
								'Australian Quality Standards' => 'Strictly adhering to Australian Quality Standards',
								'NSW Goverment Laws' => 'Abiding by Australian laws, procedures & safety',
							];
							$n = 0;
							foreach ($si as $key => $value) {
								$n++;
							?>
								<div class="col-6 text-center">
									<div class="card h-100 border-0 rounded-0  ">
										<div class="card-body <?= ($n == 2 ? 'd-flex flex-column' : '') ?> ">
											<p class="font-14 line-height-1 text-dark"><?= $key ?></p>
											<?= lazyImg("home/si$n.png", randalts($alts), "py-3 py-md-5 my-auto") ?>
											<p class="font-14 text-grey line-height-1"><?= $value ?></p>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="biggest py-xxl-5 py-3 mt-xxl-5">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="card bg-gc-dark text-white border-0 rounded-0">
					<div class="row g-0">
						<div class="col-lg-5">
							<div class="position-relative w-100 h-100">
								<? //= lazyImg("home/bman.png", randalts($alts), "position-absolute left bottom w-90") 
								?>
								<?= lazyImg("home/bigl.png", randalts($alts), " h-100") ?>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="card-body pt-5 pe-xxl-5">
								<h2 class="display-2 line-height-1 fw-bold">One of the Biggest Technicians in Australia</h2>
								<hr class="hr-h hr-white">
								<p class="font-36 font-coolvetica line-height-1 fw-bold">Our workmanship & dedication has propelled us in becoming a huge successful business with over 150 vehicles on the road daily & over 200 staff</p>
								<p class="text-grey">When you choose ComfyFirst for your air conditioning needs across <?= $global_city ?>, you can be sure of a level of expert, friendly service which is second-to-none.</p>
							</div>
							<div class="ms-lg-n5 mb-lg-n5 me-lg-5 p-3 p-lg-0">
								<div class="row ms-xxl-n5">
									<?php $bcards = [
										'Pay by Job, Not by Hour' => 'With ComfyFirst we price by the job, not the hour, up-front, for your complete peace of mind. No matter how long the job ends up taking us, You still pay the same price. <i class="fw-bold text-white">Why settle for anything less?</i>',
										'On-time Guaranteed' => "With ComfyFirst you can be so sure of on-time service that we even promise that. It's your assurance of punctual, convenient technicians that work around your schedule.",
									];
									foreach ($bcards as $key => $value) {
									?>
										<div class="col-lg-6 mb-3 mb-lg-0">
											<div class="card bg-info h-100 rounded-0 border-0">
												<div class="card-body px-4">
													<p class="text-center fw-bold font-36 font-coolvetica line-height-1"><i><?= $key ?></i></p>
													<hr class="hr-h hr-white">
													<p class="text-white"><?= $value ?></p>
												</div>
											</div>
										</div>
									<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="customers pt-5 position-relative mt-xxl-5 overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row justify-content-between crow">
					<div class="col-lg-5">
						<h3 class="text-dark display-2 fw-bold line-height-1 ">What Our Customers Say</h3>
						<div class="cta card rounded-0 border-0 mb-5 bg-transparent ">
							<div class="card-body p-0 position-relative">
								<i class="fw-bold font-36 line-height-1 bg-dgreen text-white d-inline-block py-1 ms-4 ps-2 pe-3 position-relative"><?= date('Y') ?> Product Review Winner</i>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8">
								<p class="h4 fw-bold text-dark">Satisfaction Guaranteed Service</p>
								<p>Our priority for value & quality have allowed us to become one of the most successful electrical businesses in Australia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-auto text-white">
						<div class="d-flex reviews h-100 cover">
							<div class="me-2 left position-relative review">
								<div class="position-relative z-1 p-4">
									<?= lazyImg("home/cpr1.png", randalts($alts), "mb-5") ?>
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
								<div class="position-relative z-1 p-4">
									<?= lazyImg("home/cpr2.png", randalts($alts), "mb-5") ?>
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
	<?= lazyImg("home/cman.png", randalts($alts), "position-absolute cman bottom") ?>
</section>

<section class="testimonials bg-transparent position-relative z-1 pb-md-5">
	<div class="container-fluid px-0">
		<div class="slidert">
			<?php $testi = [
				[
					'name' => 'Randy',
					'heading' => 'Perfect plumbing job',
					'content' => 'Had a burst waterline called plumbfirst came on time explained the problem and what had to be done. Tristan did a perfect job was very polite under trying conditions thanks.',
				],
				[
					'name' => 'Phil',
					'heading' => 'Gas Line replacement',
					'content' => 'Alex K and his crew were on time, accurate and their attention to detail was strong. Wouldn’t hesitate to use Plumb a first again.<br>Albeit they’re not the cheapest, definitely trustworthy and you’ll know the job will be done to the highest quality.',
				],
				[
					'name' => 'Kevin',
					'heading' => 'Excellent',
					'content' => 'Dear Sir/Madam <br>Liam did a terrific job installing two cisterns and new pipes for the bathroom. He was cordial and polite on arrival and throughout the day, and I would not hesitate to recommend to friends, family and even enemies! Regards Satisfied Customer',
				],
				[
					'name' => 'Missy',
					'heading' => 'Hot water system installed - Thanks Tai',
					'content' => 'Tai finalised the installation of the new hot water system this morning. Clearly explained the duration of the work, professionally installed the system, and communicated with the team to follow up a few points to be followed up. Thanks!',
				],
				[
					'name' => 'Qball R.',
					'heading' => 'Kitchen sink & water mains fixed quick. Thanks Blaine',
					'content' => "After the first tradesman was not able to make it they sent out a second. He called to let us know what time he would be here and was spot on time. Blaine was very professional and quick having it all sorted in just over an hour. His attitude was great and I'd recommend him for anyone wanting the job done quickly and professionally.",
				],
				[
					'name' => 'Randy',
					'heading' => 'Perfect plumbing job',
					'content' => 'Had a burst waterline called plumbfirst came on time explained the problem and what had to be done. Tristan did a perfect job was very polite under trying conditions thanks.',
				],
			];
			$n = 0;
			foreach ($testi as $key => $value) {
				$n++;
			?>
				<div>
					<div class="<?= ($n % 2 ? 'mt-md-5 pt-md-5' : '') ?>">
						<div class="card-o card rounded-0 mx-2 ">
							<div class="card-header bg-white p-3">
								<div class="d-flex align-items-center justify-content-center">
									<?php
									$ti = __DIR__;
									if (file_exists($ti . "/assets/images/home/t" . $n . ".png")) {
										echo lazyImg("home/t$n.png", randalts($alts), "me-2");
									} else {
									?>
										<p class="mb-0 h3 me-2"><span class="badge rounded-circle bg-purple text-white"><?= $value['name'][0] ?></span></p>
									<?php
									}
									?>
									<p class="mb-0 h5 text-dark"><?= $value['name'] ?></p>
								</div>
							</div>
							<div class="card-body p-4">
								<p class="fw-bold text-center"><i>User Score</i></p>
								<p class="text-center"><?= lazyImg("home/tstars.png", randalts($alts), "") ?></p>
								<p class="text-dark h4 text-center mb-4"><i>“<?= $value['heading'] ?>”</i></p>
								<p><?= $value['content'] ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<?php
include __DIR__ . '/src/qcb-home.php';
include __DIR__ . '/src/footer.php';
?>