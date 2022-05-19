<?php
include __DIR__ . '/src/header.php';
$title = 'Air Conditioning & Heating Zoning ';
$description = 'Offering a wide range of Blocked Drains '.$global_city.' services. We are experts in unblocking drain treatments. Call us now on 1300 775 634 to discover more.';
$imgfolder = 'ducted';

$banner = 'Air Conditioning & Heating Zoning ';
$bheading = 'On-Time Guarantee or We Pay You $100!*';
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
							<div class="col-md text-center"><p class="mb-md-0"><a href="<?=$domain?>/services" class="btn btn-outline-danger rounded-pill text-nowrap"><i class="fal fa-long-arrow-left me-2"></i>View All Services</a></p></div>
							<div class="col-md text-center"><p class="text-dark mb-md-0">See Full Range of Services</p></div>
						</div>
					</div>
					<div class="col-auto ms-md-auto">
						<div class="row align-items-center">
							<div class="col-md text-center"><p class="text-dark text-nowrap mb-md-0"><b>Best Value</b> with Our HomeFirst Membership</p></div>
							<div class="col-md text-center"><p class="mb-md-0"><a href="<?=$domain?>/membership" class="btn btn-danger rounded-pill">See Membership</a></p></div>
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
								<div class="row">
									<div class="col-xxl-12">
										<p class=" text-dark display-2 line-height-1 fw-bold">Air Conditioning & Heating Zoning For Your <?= $global_city ?> Home</p>
									</div>
								</div>
								<p>For a great upgrade to your <?= $global_city ?> home's air conditioning and heating system, speak with ComfyFirst about an "All Of Home" Zoning solution.</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="bg-info text-white overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center">
					<div class="col-xxl-5">
						<?= lazyImg("$imgfolder/switch.png", randalts($alts), "mb-xxl-n1 ") ?>
					</div>
					<div class="col-xxl-7">
						<div class="py-3 py-xxl-5">
							<p class="display-2 fw-bold line-height-1 mb-xxl-5 mb-4">What Is All Of Home Zoning?</p>
							<hr class="hr-h hr-white mb-xxl-5">
							<p class="">All Of Home Zoning is dividing your home into zones for your air conditioning and heating systems to operate independently of the other zones and giving you greater control over temperature, energy usage and overall comfort.</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-g-primary text-white overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center">
					<div class="col-xxl-6">
						<div class="py-3 py-xxl-5">
							<p class="display-2 fw-bold line-height-1 mb-4 me-xxl-n5">Greater Temperature Control</p>
							<hr class="hr-h hr-white mb-xxl-4">
							<?php /*
							$family = [
								'Fast New Ducted System Installations'=>"We work FAST to get your new ducted air conditioning installed so you can be enjoying cool comfort as quickly as possible",
								'Free Estimates On New Ducted Systems!'=>"We make it simple to discover just how affordable a new air conditioner, fully installed, will be with our FREE ESTIMATES on new ducted systems",
							];
							foreach ($family as $key => $value) {
								?>
								<div class="d-flex mb-3 ">
									<i class="fas fa-check-circle text-danger me-2 fa-3x"></i>
									
									<div>
										<p class="font-36 font-weight-500 mb-0 line-height-1"><i><?=$key?></i></p>
										<p class="text-tlblue mb-0"> <?=$value?></p>
									</div>
									
								</div>
								<?php
							}*/
							?>
							<p>Some parts of our home may receive more sunlight than others, requiring more cool air in summer or less heat in winter. Or you may have a number of your rooms not regularly in use that don't need cooled or heated. With All Of Home Zoning, you're able to accommodate these differences within your home and provide an even temperature throughout.</p>
						</div>
					</div>	
					<div class="col-xxl-6 align-self-end">
						<?= lazyImg("split/family.png", randalts($alts), "ps-xxl-5") ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-3 py-xxl-5">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row">
					<?php
					$contents=[
						'Independent Comfort Levels'=>'With independent control of each zone, set the temperatures to suit the individual needs of the room and occupants, keeping everyone happy and in comfort.',
						'Save Money On Energy Bills'=>"With the ability to only cool or heat rooms in use rather than your entire home, you have the potential to make real savings on your energy bills with decreased energy usage.",
						'Expert Advice And Installations'=>'With the experts at ComfyFirst installing your zoning system, you can be sure of a professional installation and benefit from our experience with expert advice on the most beneficial number of zones to suit your needs, operational guidance and how to get maximum energy efficiency and comfort.',
					];
					foreach ($contents as $key => $value) {
						?>
						<div class="col-md-6 col-xxl-4">
							<p class="h3"><?=$key?></p>
							<p><?=$value?></p>
						</div>
						<?php
					}
					?>	
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
					<?php $sctas=[
						'On-time Guaranteed'=>"With ComfyFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient electricians that work around your schedule",
						$global_city.'-Wide Coverage'=>'With electrical teams across '.$global_city.', we can dispatch the nearest available electrician direct to your door',
						'Pay by the Job, <br class="d-none d-xxl-block">Not by the Hour'=>'With ComfyFirst you pay by the job, never the hour, meaning you know the full price BEFORE we start any work for your complete peace of mind',
						'Friendly Electricians'=>"With ComfyFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient electricians that work around your schedule",
					]; 
					$i=0;
					foreach ($sctas as $key => $value) {
						$i++;
						?>
						<div class="mb-4 col-lg-6 text-center">
							<div class="card rounded-0 border-0 bg-frdark h-100">
								<div class="card-boby h-100 px-xxl-5 p-4">
									<p class=" display-2 line-height-1 fw-bold"><?=$key?></p>
									<p class="text-grey"><?=$value?></p>
								</div>
								<?= lazyImg("blockeddrain/s$i.png", randalts($alts), "card-img w-100") ?>
							</div>
						</div>
						<?php
					}?>
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
						<div class="col-xxl-5 text-center">
							<p class="display-2 fw-bold line-height-1 text-dark pt-5">Air Conditioning Solutions</p>
							<p class="h5 fw-normal"><i>We calculate ALL available options for your property</i></p>
							<?= lazyImg("home/sfp.png", randalts($alts), "mb-5",453,30) ?>
						</div>
					</div>
					<div class="row justify-content-center position-relative z-1 g-0">
						<?php $steps = [
							'We gather detailed information about your home to accurately assess your options',
							'We provide a highly detailed Option Sheet that lists every possible solution for your issue.',
							'We’ll confirm your decision before starting any work. Guaranteed on-time professional services',
						]; 
						$n=0;
						foreach ($steps as $key => $value) {
							$n++;
							?>
							<div class="<?=($n==1)?'col-xxl-4 offset-lg-3 offset-xxl-4 col-lg-6 me-auto mb-lg-n5 position-relative z-1':'col-lg-6 mt-xl-n5'?> <?=($n==2)?'me-lg-n5':''?> <?=($n==3)?'ms-lg-n5':''?>">
								<div class="card border-0 rounded-0 bg-transparent text-white">
									<?= lazyImg("home/st$n.png", randalts($alts), "card-img w-100") ?>
									<div class="card-img-overlay d-flex">
										<div class="row my-auto">
											<div class="<?=($n==1)?'col-6 mt-n5':'col-5 mt-md-5 mt-4'?> <?=($n==3)?'offset-1':'offset-6'?>">
												<div class="cta card rounded-0 border-0 mb-3 bg-transparent <?=($n==1)?'':'ctad'?>">
													<div class="card-body p-0 position-relative">
														<i class="fw-bold font-36 line-height-1 <?=($n==1)?'bg-dark':'bg-info'?> d-inline-block py-1 ms-4 ps-2 pe-3 position-relative">Step <?=$n?></i>
													</div>
												</div>
												<p class="h4 fw-normal line-height-1"><?=$value?></p>
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