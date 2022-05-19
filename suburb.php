<?php
$suburb = $_GET["s"];
$suburb = str_replace("-"," ", $suburb);
$suburb = str_replace("/","", $suburb);
$suburb = ucwords($suburb);

$title = 'Plumber '.$suburb.' | $0 Call Out | Air Conditioning '.$suburb.' - ComfyFirst';
$description = 'ComfyFirst are local Technicians '. $suburb . ' offers affordable & reliable domestic, commercial, 24/7 emergency repair & drain services. Call now to get a quote.';
include __DIR__ . '/src/header.php';
$imgfolder = 'suburb';

$banner = $suburb.' <br class="d-one d-xxl-block">Plumber';
$bheading = 'On-time '.$suburb.' Technicians';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';
?>

<section class="bg-light py-3 py-xxl-5 whyus">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center display-2 fw-bold text-dark mb-xxl-5 mb-4 line-height-1">Quality <?=$suburb?> Air Conditioning</p>
				<div class="card mb-4 mb-xxl-5 shadow border-0 rounded-0">
					<div class="row g-0">
						<div class="col-xl-8">
							<div class="card-body p-xxl-5 p-4">
								<p class=" display-2 fw-bold text-dark mb-xxl-5 mb-4 line-height-1">Why Choose Our <br class="d-none d-xxl-block"><?=$suburb?> <br class="d-none d-xxl-block">Technicians</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Varius duis at consectetur lorem donec massa sapien faucibus. Condimentum id venenatis a condimentum. Suscipit adipiscing bibendum est ultricies integer quis auctor. Enim nec dui nunc mattis enim ut. Integer eget aliquet nibh praesent tristique magna. Vitae auctor eu augue ut lectus. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum.</p>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="position-relative h-100">
								<?= lazyImg("$imgfolder/c1.jpg", randalts($alts), "object-fit bl") ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-3 py-xxl-5 bg-info text-white">
	<div class="container-fluid py-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center display-2 fw-bold mb-5">Guaranteed Air Conditioning Solutions</p>
				<?php $plan=[
					'On-Time Guaranteed'=>'With ComfyFirst you always know the price BEFORE we start, for your complete peace of mind. And because you pay by the job, and not by the hour, no matter how long the job takes you still only pay the same price you agreed, which can help save you money',
					'Guaranteed Workmanship'=>'All of our workmanship is backed up by a signed, written guarantee. Have peace of mind knowing the job, your family and your home/property are all safe',
					'Pay by Job, not by Hour'=>'With ComfyFirst you always know the price <span class="text-white font-weight-500">BEFORE</span> we start, for your complete peace of mind. And because you pay by the job, and not by the hour, no matter how long the job takes you still only pay the same price you agreed, which can help save you money',
					'Smart & Friendly Technicians'=>'Our Technicians are smart, presentable and will keep your home clean and tidy. We have a considerate and cautious approach towards your home or property. We want your family to feel safe and at peace.',
					'Highly Professional'=>'Every plumber is fully licensed and insured for your Air Conditioning needs. Our Air Conditioning teams are fully trained and audited ensuring quality services, a positive and problem solving attitude and a get-it-done-right-the-first-time mentality.',
					'Around the Clock'=>'Available 24 hours a day, 7 days a week for all of your Air Conditioning emergencies. With over 150 teams in operation, we have increased coverage and likelihood of having a team close to your home',
				];
				$n=0;
				?>
				<div class="row">
					<?php
					foreach ($plan as $key => $value) {
						$n++;
						?>
						<div class="col-xxl-4 col-md-6 text-center mb-5">
							<div class="card bg-dark h-100 border-0 rounded-0">
								<?= lazyImg("$imgfolder/p$n.png", randalts($alts), "mt-xxl-n4") ?>
								<div class="card-body py-xxl-4">
									<p class="text-white h3 fw-bold"><i><?=$key?></i></p>
									<hr class="hr-h hr-orange">
									<p class="text-grey"><?=$value?></p>
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

<section class="bg-light py-3 py-xxl-5 whyus">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="card mb-4 mb-xxl-5 shadow border-0 rounded-0">
					<div class="row g-0">
						<div class="col-xl-4">
							<div class="position-relative h-100">
								<?= lazyImg("$imgfolder/c2.jpg", randalts($alts), "object-fit br") ?>
							</div>
						</div>
						<div class="col-xl-8">
							<div class="card-body p-xxl-5 p-4">
								<p class=" display-2 fw-bold text-dark mb-xxl-5 mb-4 line-height-1">< Insert Title Content Heading Here ></p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Varius duis at consectetur lorem donec massa sapien faucibus. Condimentum id venenatis a condimentum. Suscipit adipiscing bibendum est ultricies integer quis auctor. Enim nec dui nunc mattis enim ut. Integer eget aliquet nibh praesent tristique magna. Vitae auctor eu augue ut lectus. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras fermentum.</p>
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