<?php
$title = 'Discover the ComfyFirst Promise';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'discover';

$banner = 'Discover the ComfyFirst Promise';
$bheading = 'Guaranteed Consistent High Quality Services';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';
?>

<section class="bg-light py-3 py-xxl-5 whyus">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row justify-content-center">
					<div class="col-xxl-7">
						<p class="display-2 line-height-1 text-dark text-center fw-bold mb-5">The ComfyFirst Guarantee of Great Service</p>
					</div>
				</div>
				<hr class="hr-h hr-orange">
				<p class="text-center font-36 font-weight-500 line-height-1 text-dark">When you choose ComfyFirst for your air conditioning, lighting and switchboard needs across <?= $global_city ?>, you can be sure of a level of expert, friendly service which is second-to-none.<br>Discover the ComfyFirst difference for yourself, or read from our other happy customers <a class="text-info" href="<?= $domain ?>/reviews"><u>here</u></a></p>
				<hr class="hr-h hr-orange mb-5">

				<div class="pt-xxl-5">
					<?php $whyus = [
						[
							'heading' => 'On-time Guaranteed',
							'content' => "<p>With ComfyFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient Technicians that work around your schedule</p>",
						],
						[
							'heading' => 'Faster Services',
							'content' => '<p>Because ComfyFirst operates from <b class="text-dark">MULTIPLE</b> locations right across the ' . $global_city . ' metropolitan area, you can benefit from a rapid response for your air conditioning needs</p>',
						],
						[
							'heading' => 'Pay by the Job, <br>Not the Hour',
							'content' => '<p>With ComfyFirst you always know the price <b class="text-dark">BEFORE</b> we start, for your complete peace of mind. And because you pay by the job, and not by the hour, no matter how long the job takes you still only pay the same price you agreed, which can help save you money</p>',
						],
						[
							'heading' => 'Guaranteed <br>Workmanship',
							'content' => '<p>All of our workmanship is backed up by a signed, written guarantee. Have peace of mind knowing the job, your family and your home/property are all safe</p>',
						],
						[
							'heading' => 'Highly Professional',
							'content' => '<p>Every technician is fully licensed and insured for your air conditioning needs. Our air conditioning teams are fully trained and audited ensuring quality services, a positive and problem solving attitude and a get-it-done-right-the-first-time mentality.</p>',
						],
						[
							'heading' => 'Smart, Presentable Technicians',
							'content' => '<p>Our technicians are smart, presentable and will keep your home clean and tidy. We have a considerate and cautious approach towards your home or property. We want your family to feel safe and at peace.</p>',
						],
						[
							'heading' => 'Around the Clock',
							'content' => '<p>Available 24 hours a day, 7 days a week for all of your air conditioning emergencies. Our rapid emergency response teams are on standby to ensure we can answer your calls and arrive as quick as possible. With over 150 teams in operation, we have increased coverage and likelihood of having a team close to your home</p>',
						],
						[
							'heading' => 'Friendly Technicians',
							'content' => "<p>Courteous, polite and friendly Technicians that will take the time to answer all of your questions and help with all your air conditioning requirements. It's the little details that can make all the difference.</p>
							<p class=" . '"text-dark mb-0"' . "><b>For the best service for all your air conditioning needs across " . $global_city . ", with rapid service from multiple locations, call and speak with ComfyFirst today</b></p>",
						],
					];
					$n = 0;
					foreach ($whyus as $key => $value) {
						$n++;
						if ($n % 2) {
							$order = 'order-1 ';
							$orderr = 'order-2 ';
							$bl = 'bl';
						} else {
							$order = 'order-1 order-xl-2';
							$orderr = 'order-2 order-xxl-1 ';
							$bl = 'br';
						}
					?>
						<div class="card mb-4 mb-xxl-5 shadow border-0 rounded-0">
							<div class="row g-0 align-items-center">
								<div class="col-xl-8 <?= $order ?>">
									<div class="card-body p-xxl-5 p-4">
										<div class="d-flex mb-4 align-items-start">
											<div class="card bg-info text-white border-0 rounded-0 me-4 mt-2 step ">
												<div class="card-body py-1 ps-2 pe-3">
													<i class="font-36 fw-bold line-height-1 "><?= $n ?></i>
												</div>
											</div>
											<p class="mb-0 text-dark display-2 line-height-1 fw-bold"><?= $value['heading'] ?></p>
										</div>
										<div><?= $value['content'] ?></div>
									</div>
								</div>
								<div class="col-xl-4 <?= $orderr ?>">
									<?= lazyImg("$imgfolder/w$n.jpg", randalts($alts), "$bl w-100 h-100") ?>
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
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>