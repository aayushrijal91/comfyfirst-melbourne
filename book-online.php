<?php
$title = 'Book Online';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'book';

$banner = 'Online Booking';
$bheading = 'On-Time Guarantee or We Pay You $100!*';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';
?>

<section class="inner-banner banner bg-primary text-white position-relative banner-<?=$imgfolder?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row z-2 position-relative align-items-center g-0">
					<div class="col-xxl-7 col-md-6">
						<div class="py-xxl-5 my-xxl-4 my-4">
							<p class="display-1x fw-bold line-height-1 mb-xxl-5"><?=$banner?></p>	
							<p class="font-weight-500 font-36 mb-xxl-5 line-height-1 me-xxl-n5"><?=$bheading?></p>
							<?php $bctas = [
								'Pricing by the job, not by the hour'=>'No matter how long the job ends up taking us, you still pay the same price',
								'Professional & Tidy Technicians'=>'Our Technicians are presentable, polite and keep your home clean & tidy',
							]; 
							$n=0;
							foreach ($bctas as $key => $value) {
								$n++;
								?>
								<div class="d-flex mb-4">
									<?= lazyImg("banner/cd$n.png", randalts($alts), "",85,58) ?>
									<div>
										<p class="font-36 font-weight-500 mb-0 ms-3 line-height-1"><i><?=$key?></i></p>
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
							<div class="review py-1 card position-absolute bg-dgreen border-0 rounded-0">
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
	<?= lazyImg('banner/badge.png', randalts($alts), "badge position-absolute ms-2 mt-2 z-2",114) ?>
</section>

<section class=" text-dark">
	<form id="book" class="needs-validation contact_form" action="<?=$domain?>/form-book.php" enctype="multipart/form-data" method="POST" name="MyForm" novalidate>
		<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">
		
		<div class="container-fluid py-3 py-xxl-5">
			<div class="row justify-content-center">
				<div class="col-xl-9">
					<p class="fw-bold display-2 line-height-1 mb-md-5 mb-4">Firstly, let us <br>get to know you <span class="text-danger">.</span></p>
					<div class="row">
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="firstname" class="form-label h6">What is your first name?</label>
								<input type="text" class="form-control " id="firstname" name="firstname" placeholder="Eg: John" required>
							</div>
						</div>	
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="surname" class="form-label h6">What is your surname?</label>
								<input type="text" class="form-control " id="surname" name="surname" placeholder="Eg: Doe" required>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="email" class="form-label h6">What is your email address?</label>
								<input type="email" class="form-control " id="email" name="email" placeholder="example@email.com" required>
							</div>
						</div>	
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="phone" class="form-label h6">What is your phone number?</label>
								<input type="tel" class="form-control " id="phone" name="phone" placeholder="Eg: 0400 000 000" required>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container-fluid py-3 py-xxl-5">
			<div class="row justify-content-center">
				<div class="col-xl-9">
					<p class="fw-bold display-2 line-height-1 mb-md-5 mb-4">Next, where do we <br>send our team?<span class="text-danger">.</span></p>
					<div class="row">
						<div class="col">
							<div class="mb-4">
								<label for="address" class="form-label h6">What is your home / property address?</label>
								<input type="text" class="form-control " id="address" name="address" placeholder="Enter street address here" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="date" class="form-label h6">What date would you like our team to service you?</label>
								<input type="date" class="form-control " id="date" name="date" placeholder="Please select a date" required>
							</div>
						</div>	
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="time" class="form-label h6">What time do you prefer our team to be there?</label>
								<input type="time" class="form-control " id="time" name="time" placeholder="Please select a time preference" required>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container-fluid py-3 py-xxl-5 pb-5">
			<div class="row justify-content-center">
				<div class="col-xl-9">
					<p class="fw-bold display-2 line-height-1 mb-md-5 mb-4">Now, let’s solve your <br>air conditioning problem<span class="text-danger">.</span></p>
					<div class="row align-items-end">
						<div class="col-xxl-6">
							<div class="mb-4">
								<label for="yourservice" class="form-label h6">What type of air conditioning service do you require?</label>
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
						<div class="col-xxl-6">
							<div class="mb-4">
								<a href="tel:<?=$phone?>" class="btn btn-light w-100 py-2 rounded-0"><span class="fw-normal py-1 d-block">Don’t know what your air conditioning problem is? <b>Call us now on <?=$phone?></b></span></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group mb-4">
								<label for="detail" class="form-label h6">Please describe your air conditioning issue</label>
								<textarea class="form-control" id="detail" name="detail" placeholder="Enter description here (optional)" ></textarea>
							</div>
						</div>
					</div>

					<div class="files" id="files1">
						<div class="card mb-4 bg-dark text-white rounded-0">
							<div class="card-body">
								<div class="row align-items-center">
									<div class="col-md-auto" >
										<label class="btn btn-light py-1 px-3 px-xxl-5 text-center mb-2 mb-md-0" for="file">
											<p class="text-dark mb-0 line-height-1 mx-xxl-4">Attach Files</p>
											<small class="line-height-1 small fw-normal">Max 10mb total</small>
											<input type="file" id="file" name="file[]" accept="image/png, image/jpeg" lang="en" class="d-none" multiple>
										</label>

									</div>
									<div class="col-md">
										<p class="mb-0">(Optional) if possible include any photos of your air conditioning problem that you feel may assist us further</p>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-5">
							<p class="fw-bold d-none" id="uheading">Attached Files:</p>
							<div class="filelist"></div>
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
							<button type="submit" class="btn btn-danger py-3 w-100 px-xxl-5">Submit Booking</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>