<?php
$title = 'Finance';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'finance';

$banner = 'Discover the ComfyFirst Promise';
$bheading = 'Offering Stress-Free 0% Interest Payment <br class="d-none d-xxl-block">Plans for All Our Services';
?>

<section class="inner-banner banner bg-info text-white position-relative banner-<?=$imgfolder?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row z-2 position-relative align-items-center g-0">
					<div class="col-xxl-7 col-md-6">
						<div class="py-xxl-5 my-xxl-4 my-4">
							<?= lazyImg("$imgfolder/pftag.png", randalts($alts), "mb-xxl-5 mb-4") ?>

							<p class="font-weight-500 font-36 mb-xxl-5 line-height-1 me-xxl-n5"><?=$bheading?></p>
							<?php $bctas = [
								'From $1,000 to $30,000'=>'Get serviced now, pay later with completely zero interest!',
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
						<div class="position-relative">
							<?= lazyImg("$imgfolder/banner.png", randalts($alts), "") ?>

							<div class="f-r p-r position-absolute">
								<div class="promo py-1 card position-relative bg-primary border-0 rounded-0 mb-3">
									<div class="card-body px-0 ">
										<div class="d-flex align-items-center justify-content-center">
											<p class="display-1x line-height-1 mb-0">0%</p>
										</div>
										<p class="h4 fw-normal ms-n4 position-relative z-1 text-danger">Interest-Free Plans!</p>	
									</div>
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

<section class="bg-light py-3 py-xxl-5">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="card border-0 rounded-0 mb-4 mb-xxl-5">
					<div class="card-body p-xxl-5">
						<div class="row">
							<?php $whyus=[
								[
									'heading'=>'Payment Control',
									'content'=>"Have control in paying back in smaller or bigger amounts, with no extra charges or interest",
								],
								[
									'heading'=>'Options to Pause',
									'content'=>'Pause repayments of a Monthly Balance for an extra month for a 3.5% fee, up to two times',
								],
								[
									'heading'=>'Flexibility Plans',
									'content'=>'Need more time to pay? Convert any Monthly Balance to a Plan & repay over 6,9 or 12 months',
								],
							]; 
							$n=0;
							foreach ($whyus as $key => $value) {
								$n++;
								?>
								<div class="col-xxl-4 text-center">
									<p><?= lazyImg("$imgfolder/w$n.png", randalts($alts), "") ?></p>
									<p class="text-dark h2"><i><?=$value['heading']?></i></p>
									<hr class="hr-h hr-info">
									<p><?=$value['content']?></p>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				<p class="display-2 line-height-1 text-dark text-center fw-bold ">How does it work? It’s easy as 1, 2, 3!</p>
				<p class="h4 text-dark text-center mb-5 fw-normal">At ComfyFirst, we love to keep things easy, simple & convenient for our clients</p>
			</div>
		</div>
	</div>
</section>

<section class="w-steps whyus ">
	<div class="container-fluid bg-g-primary text-white pt-3 pt-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row g-0">
					<div class="col-auto">
						<div class="card bg-info text-white border-0 rounded-0 me-5 mt-4 step ">
							<div class="card-body py-1 ps-2 pe-3">
								<i class="font-36 fw-bold line-height-1 ">1</i>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<p class="fw-bold display-2 lh-1 mb-4 mb-xxl-5">Start a booking <br class="d-none d-xxl-block">via online or phone</p>
						<hr class="hr-h hr-white">
						<p class="h6 fw-normal text-tlblue mb-4">Booking options available:</p>
						<?php $cta=['Online Booking','Phone Booking']; 
						foreach ($cta as $key => $value) {
							?>
							<div class="h2 d-flex"><i class="fas fa-check text-info fw-normal me-2 mt-1"></i> <i><?=$value?></i></div>
							<?php
						}
						?>
						<hr class="hr-h hr-white">
						<div class="row mt-4 mt-xxl-5">
							<div class="col-auto">
								<a href="<?=$domain?>/book-online" class="btn btn-info text-nowrap w-100 ms-1 py-xxl-3 px-xxl-4 mb-3">Book Online</a>
							</div>
							<div class="col-auto">
								<a href="tel:<?=$phone?>" class="btn btn-dark text-nowrap w-100 py-xxl-3 px-xxl-4 mb-3">Call <?=$phone?></a>
							</div>
						</div>
					</div>
					<div class="col-xxl-5">
						<?= lazyImg("$imgfolder/wi1.png", randalts($alts), " w-100 h-100") ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-g-primary text-white pt-3 pt-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row g-0">
					<div class="col-auto">
						<div class="card bg-info text-white border-0 rounded-0 me-5 mt-4 step ">
							<div class="card-body py-1 ps-2 pe-3">
								<i class="font-36 fw-bold line-height-1 ">2</i>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<p class="fw-bold display-2 lh-1 mb-4 mb-xxl-5">During payment, <br class="d-none d-xxl-block">we’ll offer you our <br class="d-none d-xxl-block">interest-free plan</p>
						<hr class="hr-h hr-white">
						
						<?php $cta=['Pay in small or big amounts:']; 
						foreach ($cta as $key => $value) {
							?>
							<div class="h2 d-flex"><i class="fas fa-check text-info fw-normal me-2 mt-1"></i> <i><?=$value?></i></div>
							<?php
						}
						?>
						<p class="h4 fw-normal text-tlblue my-4">
							<span class="text-info">Small:</span> 5 or 10 fortnightly payments<br>
							<span class="text-info">Big:</span> Up to 60 months interest free
						</p>
						<hr class="hr-h hr-white">
					</div>
					<div class="col-xxl-5">
						<?= lazyImg("$imgfolder/wi2.png", randalts($alts), " w-100 h-100") ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid pt-3 pt-xxl-5 text-dark">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row g-0">
					<div class="col-auto">
						<div class="card bg-info text-white border-0 rounded-0 me-5 mt-4 step ">
							<div class="card-body py-1 ps-2 pe-3">
								<i class="font-36 fw-bold line-height-1 ">3</i>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<p class="fw-bold display-2 lh-1 mb-4 mb-xxl-5"><span class="text-info">All done!</span> Simply use the humm app to keep track of your payments</p>
						<hr class="hr-h hr-orange">
						<?php $cta=['Track your account in real time','Check your available spend','See your upcoming payments','BPAY payment option available']; 
						foreach ($cta as $key => $value) {
							?>
							<div class="h2 d-flex align"><i class="fas fa-check text-info fw-normal me-2 mt-1"></i> <i><?=$value?></i></div>
							<?php
						}
						?>
						<hr class="hr-h hr-orange">
					</div>
					<div class="col-xxl-5">
						<?= lazyImg("$imgfolder/wi3.png", randalts($alts), " w-100 h-100") ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="overflow-hidden text-white app">
	<div class="container-fluid px-0">
		<div class="row g-0">
			<div class="col-lg-6 col-xxl-8 bg-primary ">
				<div class="row justify-content-end h-100 py-md-4 py-3 mx-3 mx-xxl-0">
					<div class="col-xxl-9">
						<div class="row align-items-center">
							<div class="col-xxl-auto ">
								<p class="fw-bold display-2">Get Started Now</p>
							</div>
							<div class="col-xxl">
								<p class="h6 fw-normal mb-3">Get Started by Booking a Service</p>
								<p><a href="<?=$domain?>/book-online" class="btn btn-danger text-nowrap py-xxl-2 px-xxl-4">Book Online</a></p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="col-lg-6 col-xxl bg-dark py-md-4 py-3 position-relative">
				<div class="ms-xxl-5 mx-3">
					<p class="h6 fw-normal mb-3">Download Humm App</p>
					<div class="row">
						<div class="col-xxl-7">
							<div class="row">
								<div class="col-xxl-6 col-md-auto col-6">
									<a href="https://apps.apple.com/au/app/humm/id1455391873" target="_blank"><?= lazyImg("$imgfolder/app1.png", randalts($alts), "") ?></a>
								</div>
								<div class="col-xxl-6 col-md-auto col-6">
									<a href="https://play.google.com/store/apps/details?id=com.shophumm&hl=en_AU&gl=US" target="_blank"><?= lazyImg("$imgfolder/app2.png", randalts($alts), "") ?></a>
								</div>
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