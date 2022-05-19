<?php
$title = 'Membership';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'member';

$bheading = 'The Best Plumbing, Electrical, Heating & <br class="d-none d-xxl-block">Cooling Memberships in All of Australia';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';
?>

<section class="inner-banner banner bg-info text-white position-relative banner-<?=$imgfolder?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row z-2 position-relative align-items-center g-0">
					<div class="col-xxl-7 col-md-6">
						<div class="py-xxl-5 my-xxl-4 my-4">
							<?= lazyImg("home/pftag.png", randalts($alts), "mb-xxl-5 mb-4") ?>

							<p class="font-weight-500 font-36 mb-xxl-5 line-height-1 me-xxl-n5"><?=$bheading?></p>
							<?php $bctas = [
								'Pricing by the job, not by the hour'=>'No matter how long the job ends up taking us, you still pay the same price',
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

							<div class="p-r position-absolute">
								<div class="promo py-1 card position-relative bg-primary border-0 rounded-0 mb-3">
									<div class="card-body px-0 ">
										<div class="d-flex align-items-center">
											<p class="h6 me-3"><i>Now <br>Only</i></p>
											<p class="display-1x line-height-1 mb-0">$99</p>
										</div>
										<p class="h4 fw-normal ms-n4 position-relative z-1 text-danger">Promotional Offer</p>	
									</div>
								</div>
								<div class="review py-1 card position-relative bg-dgreen border-0 rounded-0">
									<div class="card-body px-0 ">
										<div class="d-flex align-items-center">
											<p class="display-1x line-height-1 mb-0">4.5</p>
											<?= lazyImg("home/cstar.png", randalts($alts), "") ?>
										</div>
										<p class="h4 fw-normal ms-n4 position-relative z-1">Over 3200 Reviews</p>	
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
	<div class="container-fluid py-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="card bg-g-primary text-white rounded-0 border-0 mb-5">
					<div class="row g-0 align-items-center">
						<div class="col-xxl-5 order-2 order-xxl-1">
							<?= lazyImg("$imgfolder/m1.png", randalts($alts), "mt-xxl-n5 w-100") ?>
						</div>
						<div class="col-xxl-7 order-1 order-xxl-2">
							<div class="card-body p-xxl-5">
								<p class="display-2 line-height-1 fw-bold">We know how to <br class="d-none d-xxl-block">protect the things <br class="d-none d-xxl-block">you care about</p>
								<hr class="hr-h hr-white my-4">
								<p class="font-36 font-coolvetica line-height-1 fw-bold">You, your family & your property are all important & we ensure our plan covers you, even when you move houses! (no additional fees for moving)</p>
								<hr class="hr-h hr-white my-4">
								<p class="text-tlblue">We are home owners as well, so we understand the need for flexibility and change, but we also highly value our relationship with you. Feel comfortable and at peace working with our ElecFirst team.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card bg-gc-dark text-white rounded-0 border-0">
					<div class="row g-0 align-items-center">
						<div class="col-xxl-7">
							<div class="card-body p-xxl-5">
								<p class="display-2 line-height-1 fw-bold">We cover all air conditioning heating & cooling for your home</p>
								<hr class="hr-h hr-white my-4">
								<p class="font-36 font-coolvetica line-height-1 fw-bold">Unlike other plans, our membership offers outstanding cover in all things plumbing, electrical, heating and cooling!</p>
								<hr class="hr-h hr-white my-4">
								<p class="text-tlblue">No need to pay for multiple trade memberships when you can have them all for the price of one. Benefit from all trade service discounts, condition reports (for each trade) and coverage, all at once!</p>
							</div>
						</div>
						<div class="col-xxl-5">
							<?= lazyImg("$imgfolder/m2.png", randalts($alts), " w-100") ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-3 py-xxl-5 position-relative text-dark member">
	<div class="container-fluid py-xxl-5 my-xxl-5 position-relative z-1">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row justify-content-end">
					<div class="col-lg-6">
						<p class="display-2 fw-bold">Members Receive a</p>
						<?= lazyImg("$imgfolder/perm.png", randalts($alts), "mb-3") ?>
						<p class="display-2 fw-bold line-height-1">on All Trade Services</p>
						<hr class="hr-h hr-dark">
						<div class="row">
							<div class="col-auto">
								<div class="d-flex align-items-center">
									<i class="fas fa-check text-danger me-3"></i>
									<i class="h4 mb-0">FREE Inspections for All Trades</i>
								</div>
							</div>
							<div class="col-auto">
								<div class="d-flex align-items-center">
									<i class="fas fa-check text-danger me-3"></i>
									<i class="h4 mb-0">Regular VIP Special Deals</i>
								</div>
							</div>
						</div>
						<hr class="hr-h hr-dark">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?= lazyImg("$imgfolder/pbg.jpg", randalts($alts), "object-fit  bg") ?>
</section>

<section class="benefits py-3 py-xxl-5 ">
	<div class="container-fluid py-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center display-2 fw-bold text-dark line-height-1">Membership Benefits & Inclusions</p>
				<p class="text-center mb-5">Our First Action Membership offers the best cover for you, your family and your home. Becoming a First Action Membership member will entitle you to the following benefits and discounts</p>
				<?php $benefits=[
					'Permanent 15% Discount on All Our Services'=>'Enjoy a 15% discount on all our services for the duration of your membership',
					'Standardised Up Front Pricing'=>'You will receive guaranteed prices on all work before the job begins. These prices are standardised in our pricing books so everyone gets the same honest pricing',
					'Priority Phone Number'=>'As a valued Home Protection Plan member, you skip to the front of the queue every time you call',
					'Condition Reports for All Trade Services'=>'Complimentary condition report on all of your home plumbing, electrical, heating and cooling by a licensed plumber or technician. If you need any work done, book it on this visit and pay no travel fee',
					'Inspection for All Trade Services'=>'Complimentary visual safety inspection of all your plumbing, electrical, heating and cooling – value over $500. If you need any electrical work done, book it on this visit and pay no travel fee.',
					'VIP Discount Vouchers'=>'Receive VIP-exclusive special vouchers and deals worth over $1,000 on a range of all our services... for life!',
				];
				foreach ($benefits as $key => $value) {
					?>
					<div class="card rounded-0 mb-3 shadow-sm">
						<div class="card-body d-flex"> 
							<div class="row align-items-center w-100">
								<div class="col-xxl-4">
									<p class="mb-xxl-0 text-dark font-36 font-weight-500 line-height-1"><i><?=$key?></i></p>
								</div>
								<div class="col-xxl-7 col-9">
									<p class="mb-xxl-0 "><?=$value?></p>
								</div>
								<div class="col-auto ms-auto">
									<i class="fas fa-check-circle fa-2x text-success"></i>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>

<section class="py-3 py-xxl-5 bg-light">
	<div class="container-fluid py-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center display-2 fw-bold text-dark mb-5">One Plan. Zero Call Out Fees for Life!</p>
				<?php $plan=[
					'Plumbing'=>'<span class="text-white font-weight-500">Unlimited</span> plumbing call outs with PlumbFirst, for plumbing, drains, and hot water <span class="text-white font-weight-500">FOR LIFE</span>',
					'Electrical'=>'<span class="text-white font-weight-500">Unlimited</span> electrical call outs with ElecFirst, for or all electrical work, lighting and switchboards <span class="text-white font-weight-500">FOR LIFE</span>',
					'Heating & Cooling'=>'<span class="text-white font-weight-500">Unlimited</span> heating & AC call outs with ComfyFirst, for heating and air conditioning <span class="text-white font-weight-500">FOR LIFE</span>',
					'Renovation'=>'<span class="text-white font-weight-500">Unlimited</span> home renovation call outs with RenoFirst, for any new bathroom or kitchen <span class="text-white font-weight-500">FOR LIFE</span>',
					'Hydronic'=>'<span class="text-white font-weight-500">Unlimited</span> hydronic call outs with HydronicFirst, for hydronic heating or hot water <span class="text-white font-weight-500">FOR LIFE</span>',
					'Solar'=>'<span class="text-white font-weight-500">Unlimited</span> solar call outs with SolarFirst, for your solar electric & solar hot water <span class="text-white font-weight-500">FOR LIFE</span>',
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
								<div class="card-body p-xxl-4">
									<p class="text-white font-36 fw-bold"><i><?=$key?></i></p>
									<hr class="hr-h hr-info">
									<p class=""><?=$value?></p>
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

<section class="py-3 py-xxl-5 bg-dgrey text-dark position-relative member">
	<div class="container-fluid py-xxl-5 my-xxl-5 position-relative z-1">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row">
					<div class="col-lg-6">
						<p class="display-2 fw-bold line-height-1 mb-4">Become a Member Today & Save $50 Off Your Membership</p>
						<?= lazyImg("$imgfolder/promo.png", randalts($alts), "mb-3") ?>
						<hr class="hr-h hr-dark">
						<div class="row">
							<div class="col-auto">
								<div class="d-flex align-items-center mb-3">
									<i class="fas fa-check text-danger me-3"></i>
									<i class="h4 mb-0">One-Time Payment; No Recurring Fees</i>
								</div>
							</div>
							<div class="col-auto">
								<div class="d-flex align-items-center mb-3">
									<i class="fas fa-check text-danger me-3"></i>
									<i class="h4 mb-0">Lasts for a Lifetime</i>
								</div>
							</div>
							<div class="col-auto">
								<div class="d-flex align-items-center mb-3">
									<i class="fas fa-check text-danger me-3"></i>
									<i class="h4 mb-0">Covers Your Home, even if you Move Houses</i>
								</div>
							</div>
						</div>
						<hr class="hr-h hr-dark">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?= lazyImg("$imgfolder/bbg.jpg", randalts($alts), "object-fit  bg") ?>
</section>

<section class="py-3 pb-xxl-5 bg-dgrey text-dark ">
	<div class="container-fluid pb-xxl-5 mb-xxl-5 ">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="card shadow rounded-0 border-0">
					<div class="card-body p-xxl-4">
						<p class="display-2 line-height-1 fw-bold text-center mb-5">Complete Our Form & We’ll Be in Touch <br class="d-none d-xxl-block">as soon as possible</p>
						<form id="book" class="needs-validation contact_form" action="<?=$domain?>/form.php"  method="POST" name="MyForm" novalidate>
							<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">
							<div class="row">
								<div class="col-xxl-6">
									<div class="mb-4">
										<label for="firstname" class="form-label h6">Your First Name</label>
										<input type="text" class="form-control " id="firstname" name="firstname" placeholder="Eg: John" required>
									</div>
								</div>	
								<div class="col-xxl-6">
									<div class="mb-4">
										<label for="lastname" class="form-label h6">Your Surname</label>
										<input type="text" class="form-control " id="lastname" name="lastname" placeholder="Eg: Doe" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xxl-6">
									<div class="mb-4">
										<label for="phone" class="form-label h6">Your Phone Number</label>
										<input type="tel" class="form-control " id="phone" name="phone" placeholder="Eg: 0400 000 000" required>
									</div>
								</div>
								<div class="col-xxl-6">
									<div class="mb-4">
										<label for="email" class="form-label h6">Email Address</label>
										<input type="email" id="email" class="form-control " name="email" placeholder="Eg: email@example.com" required>
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-xxl-6">
									<div class="mb-4">
										<label for="address" class="form-label h6">Your Address</label>
										<input type="text" id="address" class="form-control " name="address" placeholder="Enter street address here" required>
									</div>
								</div>	
								<div class="col-xxl-6">
									<div class="mb-4">
										<label for="city" class="form-label h6">Your City / Postcode</label>
										<input type="text" id="city" class="form-control " name="city" placeholder="Eg: <?= $global_city ?> / 2000 " required>
									</div>
								</div>	
							</div>
							<div class="row align-items-center text-light justify-content-xxl-between">
								<div class="col-xxl-auto">
									<div class="d-flex align-items-center mb-4">
										<span class="fa-stack fa-sm me-2 px-3">
											<i class="fas fa-shield fa-stack-2x"></i>
											<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
										</span>
										<div>
											<p class="font-14 mb-0 fw-bold">Your Privacy is Our Priority | <span class=" mb-0 fw-normal">Your information will remain private & secure</span></p>
										</div>
									</div>
								</div>
								<div class="col-xxl-3">
									<button type="submit" class="btn btn-danger py-3 w-100 px-xxl-5">Submit Enquiry</button>
								</div>
							</div>
						</form>
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