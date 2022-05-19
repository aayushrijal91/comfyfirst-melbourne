<?php
$title = 'Services';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'services';
$service_name_query = $_GET["s"];

$banner = 'Services';
$bheading = 'On-Time Guarantee or We Pay You $100!<span class="text-danger">*</span>';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';

?>

<section class="text-dark py-3 py-xxl-4">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row align-items-center justify-content-between">
					<div class="col-xxl-auto">
						<p class="h5 mb-xxl-0">Complete Air Conditioning Services: For All Your Air Conditioning Needs Across <?= $global_city ?></p>
					</div>
					<div class="col-xxl-auto">
						<div class="row align-items-center">
							<div class="col-xxl-auto">
								<p class="mb-xxl-0"><span class="fw-bold">Best Value</span> with Our HomeFirst Membership</p>
							</div>
							<div class="col-xxl-auto">
								<p class="mb-xxl-0"><a class="btn btn-danger rounded-pill px-xxl-4">See Membership</a></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="my-0">
<section class="diy-tab services">
	<div class="container-fluid">
		<div class="row ">
			<div class="col-xl-4 bg-light ">
				<div class="row justify-content-end py-3 py-xxl-5 sticky-top">
					<div class="col-xxl-7 me-xxl-4 s">
						<p class="h6 mb-4 d-none d-xl-block">Select Type of Service</p>
						<div class="d-none d-xl-block">
							<?php
							$n = 0;
							foreach ($services as $key => $value) {
								$n++;
								$k = strtolower(str_replace(" ", "-", $key));
								$k = str_replace("&", "", $k);
							?>
								<a href="javascript:;" key="<?= $k ?>" class="border-0 col-xl rounded-0 quote-book-request-btn btn btn-mlight btn-disable <?= $n == 3 ? 'active' : '' ?> mb-2 w-100 py-0 px-xxl-3">
									<div class="d-flex justify-content-between align-items-center">
										<span class="h6 font-weight-600"><?= $key ?></span>
										<div class="<?= ($n == 1 ? 'my-2' : 'mt-2') ?>">
											<?= lazyImg("$imgfolder/sb$n.png", randalts($alts), "") ?>
										</div>
									</div>
								</a>
							<?php
							}
							?>
						</div>
						<select class="form-select select-tab h5 fw-bold d-none mb-0 w-100">
							<!-- <option disabled="" selected="">Select a Region</option> -->
							<?php
							foreach ($services as $key => $value) {
								$k = strtolower(str_replace(" ", "-", $key));
								$k = str_replace("&", "", $k);
							?>
								<option key="<?= $k ?>"><?= $key ?></option>
							<?php
							}
							?>
						</select>

						<p class="h6 my-4">Service Categories</p>

						<?php
						$l = 0;
						foreach ($services as $key => $value) {
							$l++;
							$k = strtolower(str_replace(" ", "-", $key));
							$k = str_replace("&", "", $k);
						?>
							<div class="bcontent <?= $l == 3 ? '' : 'd-none' ?>" key="<?= $k ?>">
								<div class="d-none d-xl-block">
									<?php
									$n = 0;
									foreach ($value as $s => $c) {
										$n++;
										$sk = $k . '-' . $s;
										$sk = strtolower(str_replace(" ", "-", $sk));
										$sk = str_replace("&", "", $sk);
									?>
										<p class="mb-2">
											<a href="javascript:;" key="<?= $sk ?>" class="diy-btn btn btn-dlight d-flex align-items-center justify-content-between py-2  <?= $n == 1 ? 'active' : '' ?>"><small><?= $s ?></small><small><i class="fas fa-chevron-right"></i></small></a>
										</p>
									<?php } ?>
								</div>
								<div class=" d-xl-none">
									<select class="form-select select-diy h5 fw-bold ">
										<!-- <option disabled="" selected="">Select a Region</option> -->
										<?php
										$n = 0;
										foreach ($value as $s => $c) {
											$n++;
											$sk = $k . '-' . $s;
											$sk = strtolower(str_replace(" ", "-", $sk));
											$sk = str_replace("&", "", $sk);
										?>

											<option key="<?= $sk ?>"><?= $s ?></option>

										<?php
										}
										?>
									</select>
								</div>

							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-xl-8">
				<div class="row py-3 py-xxl-5">
					<div class="col-xxl-10 ms-xxl-4">
						<?php
						$l = 0;
						foreach ($services as $key => $value) {
							$l++;
							$k = strtolower(str_replace(" ", "-", $key));
							$k = str_replace("&", "", $k);
						?>
							<div class="bcontent <?= $l == 3 ? '' : 'd-none' ?>" key="<?= $k ?>">
								<?php
								$m = 0;
								foreach ($value as $s => $c) {
									$sk = $k . '-' . $s;
									$sk = strtolower(str_replace(" ", "-", $sk));
									$sk = str_replace("&", "", $sk);
									$m++;
								?>
									<div class="bscontent <?= $m == 1 ? '' : 'd-none' ?>" key="<?= $sk ?>">
										<p class="text-dark display-2 fw-bold"><?= $s ?></p>
										<p>You can depend on the expertise, professionalism and great value you receive from <?= $key ?> for all your needs across <?= $global_city ?></p>
										<div class="row">
											<?php
											$o = 0;
											foreach ($c as $ke => $va) {
												$o++;
											?>
												<div class="col-md-6 col-lg-4 mb-4 text-center">
													<div class="card shadow rounded-0 border-0">
														<div class="card-image">
															<?php
															$ti = __DIR__;
															if (file_exists($ti . "/assets/images/services/s" . $l . '-' . $m . '-' . $o . ".jpg")) {
																echo lazyImg("$imgfolder/s$l-$m-$o.jpg", randalts($alts), "w-100");
															} else {
																echo lazyImg("$imgfolder/s.jpg", randalts($alts), "w-100");
															} ?>
														</div>
														<div class="card-body">
															<p class="h5 text-dark"><?= $ke ?></p>
															<p><a href="<?= $domain ?>/<?= $va ?>" class="btn btn-dark rounded-pill w-100 px-xxl-4">Learn More</a></p>
														</div>
													</div>
												</div>
											<?php
											} ?>
										</div>
									</div>
								<?php
								} ?>
							</div>
						<?php
						}
						?>
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