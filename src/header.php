<?php
include __DIR__ . '/../functions.php';

global $title;
global $description;

if ($title == '') {
	$title = $site;
}
?>

<!DOCTYPE html>
<html class="no-webp" lang="en">

<head>
	<meta charset="utf-8">
	<title>ComfyFirst | <?= $title ?></title>
	<link rel="canonical" href="<?= $actual_link ?>" />
	<meta name="description" content="<?= ($description != '' ? $description : '') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">

	<link rel="preload" href="<?= $domain ?>/assets/bootstrap/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= $domain ?>/assets/bootstrap/css/bootstrap.min.css">
	</noscript>
	<link rel="stylesheet" href="<?= $domain ?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="preload" href="<?= $domain ?>/assets/css/slick.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= $domain ?>/assets/css/slick.css">
	</noscript>
	<link rel="stylesheet" href="<?= $domain ?>/assets/css/slick.css">
	<link rel="preload" href="<?= $domain ?>/assets/css/slick-theme.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= $domain ?>/assets/css/slick-theme.css">
	</noscript>
	<link rel="stylesheet" href="<?= $domain ?>/assets/css/slick-theme.css">
	<link rel="preload" href="<?= $domain ?>/assets/fontawesome-pro/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= $domain ?>/assets/fontawesome-pro/css/all.min.css">
	</noscript>
	<link rel="stylesheet" href="<?= $domain ?>/assets/fontawesome-pro/css/all.min.css">
	<link rel="preload" href="<?= $domain ?>/assets/css/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="<?= $domain ?>/assets/css/style.min.css">
	</noscript>
	<link rel="stylesheet" href="<?= $domain ?>/assets/css/style.min.css">

	<link rel="apple-touch-icon" sizes="57x57" href="<?= $domain ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= $domain ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $domain ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $domain ?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $domain ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= $domain ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $domain ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $domain ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $domain ?>/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= $domain ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $domain ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= $domain ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $domain ?>/favicon-16x16.png">
	<link rel="manifest" href="<?= $domain ?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?= $domain ?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<script src='https://www.google.com/recaptcha/api.js?render=<?= $site_key ?>'></script>

</head>
<?php flush(); ?>

<body>
	<header class="sticky-top bg-white">
		<div class="container-fluid py-3 top">
			<div class="row justify-content-center">
				<div class="col-xxl-9">
					<div class="row align-items-center justify-content-between">
						<div class="col-auto">
							<a href="<?= $domain ?>" title="<?= $site ?>" rel="home" class="">
								<?= lazyImg('logo.png', randalts($alts), "logo") ?>
							</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<div class="row align-items-center font-coolvetica font-weight-500">
								<div class="col-auto px-0">
									<?= lazyImg('header/pr-l.png', randalts($alts), "", 30, 52) ?>
								</div>
								<div class="col-auto px-0">
									<?= lazyImg('header/pr.png', randalts($alts), "pr", 328, 44) ?>
								</div>
								<div class="col-auto">
									<div class="row">
										<div class="col-auto mx-2">
											<div class="d-flex align-items-center">
												<div class="text-dark font-30 mb-0 line-height-1">4.5</div>
												<div class="font-12 line-height-1 mx-2">Customer <br>Rating</div>
											</div>
											<p class="font-11 mb-0 text-warning"><?= star(5) ?></p>
										</div>
										<div class="col-auto review-scrollsection">
											<p class="text-dark font-30 mb-0 line-height-1"><span class="reviewnumber">3200</span>+</p>
											<p class="font-12 line-height-1-5 mb-0">Client Reviews</p>
										</div>
									</div>
								</div>
								<div class="col-auto px-0">
									<?= lazyImg('header/pr-r.png', randalts($alts), "", 30, 52) ?>
								</div>
							</div>
						</div>
						<div class="col-xxl-3 col-lg-auto col">
							<div class="row g-0">
								<div class="col-auto d-md-none">
									<a href="tel:<?= $phone ?>" class="btn btn-dark text-nowrap w-100 py-xxl-3"><i class="fas fa-phone-alt mr-3 mb-0"></i></a>
								</div>
								<div class="col-md-6 d-none d-md-block">
									<a href="tel:<?= $phone ?>" class="btn btn-primary text-nowrap w-100 py-xxl-3">Call <?= $phone ?></a>
								</div>
								<div class="col-md-6 col">
									<a href="<?= $domain ?>/book-online" class="btn btn-danger text-nowrap w-100 ms-1 py-xxl-3">Book Online</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg-info text-white  position-relative">
			<div class="row justify-content-center">
				<div class="col-xxl-9">
					<div class="row align-items-center justify-content-between">
						<div class="col d-none d-xxl-block">
							<ul class="nav ">
								<?php foreach ($menu as $key => $value) {
									//data-bs-toggle="dropdown" role="button"
								?>
									<li class="nav-item me-xxl-2 py-md-3 py-2 <?= (is_array($value) ? ' has-dropdown' : '') ?>">
										<a class="nav-link text-white h5 mb-0 <?= (is_array($value) ? 'dropdown-toggle' : '') ?>" href="<?= (is_array($value) ? $domain . '/services?s='.$key : $domain . '/' . $value) ?>" <?= (is_array($value) ? '' : '') ?>><?= $key ?></a>
										<?php if (is_array($value)) { ?>
											<div class="dropdown-menu bg-primary rounded-0 border-0 left w-100 py-0">
												<div class="row g-0">
													<div class="col-5 bg-mblue py-4">
														<?php foreach ($services_menu as $k => $v) {
															if ($k == 'ComfyFirst') {
																$m = 0;
														?>
																<div class="row justify-content-end g-0">
																	<div class="col-8">
																		<?php foreach ($v as $c => $i) {
																			$ci = strtolower(str_replace(" ", "-", $c));
																			$ci = str_replace("&", "", $ci);
																			$m++;
																		?>
																			<a href="javascript:;" class="<?= $ci ?> text-white d-block ps-4 py-2 menuc position-relative <?= (($key == $c) ? 'active' : '') ?>" key="<?= $ci ?>"><span class="position-relative z-1"><?= $c ?></span></a>
																		<?php
																		} ?>
																	</div>
																</div>
														<?php }
														} ?>
													</div>
													<div class="col-7 bg-mrblue py-4">
														<?php foreach ($services_menu as $k => $v) {
															if ($k == 'ComfyFirst') {
																$m = 0;
														?>
																<div class="row g-0">
																	<div class="col-8 offset-1">
																		<?php foreach ($v as $c => $i) {
																			$ci = strtolower(str_replace(" ", "-", $c));
																			$ci = str_replace("&", "", $ci);
																			$m++;
																		?>
																			<ul class="menucc mb-4 <?= $ci ?> column-count-2 list-unstyled <?= (($key == $c) ? 'active' : 'd-none') ?>" key="<?= $ci ?>">
																				<?php
																				foreach ($i as $x => $y) { ?>
																					<li>
																						<a href="<?= $domain ?>/<?= $y ?>" class="<?= $ci ?> d-flex py-2 " key="<?= $ci ?>"><i class="far fa-chevron-right me-2 mt-1 text-danger"></i> <?= $x ?></a>
																					</li>
																				<?php
																				} ?>
																			</ul>
																		<?php
																		} ?>
																	</div>
																</div>
															<?php }
															?>
														<?php
														} ?>
													</div>
												</div>
											</div>
										<?php } ?>
									</li>
								<?php
								} ?>
							</ul>
						</div>
						<div class="col-auto">
							<a href="javascript:;" class="text-white h5 mb-0 d-flex align-items-center ndropdown-btn"><?= lazyImg('header/m.png', randalts($alts), "me-3", 12) ?> Explore Our Group of Services</a>
							<div class="position-absolute w-100 ndropdown text-white left ">
								<div class="card bg-dark rounded-0">
									<div class="card-body">
										<p class="text-center display-2 fw-bold">Explore Our Franchise</p>
										<p class="text-center h5 fw-normal text-light mb-4">Solve your property issues with successful trades specialists</p>

										<div class="row">
											<?php $dmenu = [
												'Plumbing Services' => 'services',
												'Electrical Services' => 'services',
												'Solar & Air Conditioning' => 'services',
											];
											$i = 0;
											foreach ($dmenu as $key => $value) {
												$i++;
											?>
												<div class="col-md-4 text-center mb-3">
													<a href="<?= $domain ?>/<?= $value ?>" class="text-white">
														<div class="card rounded-0 border-0 bg-transparent">
															<?= lazyImg("header/d$i.png", randalts($alts), "card-img w-100") ?>
															<div class="card-body">
																<p class="h3"><?= $key ?></p>
															</div>
														</div>
													</a>
												</div>
											<?php
											}
											?>
										</div>

									</div>
								</div>

							</div>
						</div>
						<div class="col-auto d-xxl-none text-center bg-danger me-3">
							<button type="button" class="btn my-auto h-100" data-bs-toggle="modal" data-bs-target="#men">
								<i class="fas fa-bars text-white"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>