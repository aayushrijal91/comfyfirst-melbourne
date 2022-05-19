<?php
$title = 'Get in Touch With Us';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'contact';

$banner = 'Get in Touch <br>with ComfyFirst';
$bheading = 'Call Us Today on <a href="tel:'.$phone.'" class="text-white">'.$phone.'</a> or <a href="'.$domain.'/book-online" class="text-white">Book Online</a>!';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';
?>

<section class="bg-light py-3 py-xxl-5">
	<div class="container-fluid text-white position-relative z-1 py-xl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row justify-content-center">
					<div class="col-md-6 col-xxl-4 text-center mb-4">
						<div class="card bg-dark h-100">
							<?= lazyImg("$imgfolder/c1.png", randalts($alts), "mt-xxl-n4") ?>
							<div class="card-body p-xxl-4">
								<p class="text-white font-36 fw-bold"><i>Call <a href="tel:<?=$phone?>" class="text-white"><?=$phone?></a></i></p>
								<p class="text-grey">We are available to answer your calls 24/7</p>
								<a href="tel:<?=$phone?>" class="btn-danger btn w-100 py-3">Call Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xxl-4 text-center mb-4">
						<div class="card bg-dark h-100">
							<?= lazyImg("$imgfolder/c2.png", randalts($alts), "mt-xxl-n4") ?>
							<div class="card-body p-xxl-4">
								<p class="text-white font-36 fw-bold"><i>Send a Message</i></p>
								<p class="text-grey"><?=$email?></p>
								<a href="#form" class="btn-danger btn w-100 py-3">Email Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xxl-4 text-center mb-4">
						<div class="card bg-dark h-100">
							<?= lazyImg("$imgfolder/c3.png", randalts($alts), "mt-xxl-n4") ?>
							<div class="card-body p-xxl-4">
								<p class="text-white font-36 fw-bold"><i>Visit Our Office</i></p>
								<p class="text-grey"><?=$address?></p>
								<a href="https://www.google.com/maps/dir//6%2F8+Jullian+Cl,+Banksmeadow+NSW+2019/@-33.9487333,151.2205998,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x6b12b165e305e303:0x348e3c8303b31274!2m2!1d151.2227885!2d-33.9487333!3e0" class="btn-danger btn w-100 py-3">Get Directions</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="form" class="py-3 py-xxl-5 text-dark">
	<div class="container-fluid ">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="display-2 fw-bold text-center">Enquire Today</p>
				<p class="text-center h4 mb-5">Simply fill in the form below & we’ll get back to you ASAP</p>
				<form id="book" class="needs-validation contact_form" action="<?=$domain?>/form-contact.php"  method="POST" name="MyForm" novalidate>
					<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">
					<div class="row">
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="name" class="form-label h6">Full Name</label>
								<input type="text" class="form-control " id="name" name="name" placeholder="Eg: John Doe" required>
							</div>
						</div>	
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="phone" class="form-label h6">Phone Number</label>
								<input type="tel" class="form-control " id="phone" name="phone" placeholder="Eg: 0400 000 000" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="email" class="form-label h6">Email Address</label>
								<input type="email" id="email" class="form-control " name="email" placeholder="Eg: email@example.com" required>
							</div>
						</div>	
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="yourservice" class="form-label h6">Service Required</label>
								<select class="form-select" id="yourservice" name="service" required>
									<option selected disabled value="">Please select a service</option>
									<?php foreach ($services['ComfyFirst'] as $key => $value) { ?>
										<optgroup label="<?=$key?>">
											<?php foreach ($value as $k => $v): ?>
												<option><?=$k?></option>
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
							<div class="form-group mb-4">
								<label for="detail" class="form-label h6">Further Information / Message</label>
								<textarea class="form-control" id="detail" name="detail" placeholder="Add any details that may help us with your problem" ></textarea>
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
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>