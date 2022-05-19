<?php
$title = 'Working with ComfyFirst';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'career';

$banner = 'Working With ComfyFirst';
$bheading = 'Leading & fastest growing company in <br class="d-none d-xxl-block">the air conditioning industry';
$bch = 'Best Rates for Professionals';
$bcc = 'We value talented, committed & licensed Electricians';

include __DIR__ . '/src/banner.php';

?>

<section class="bg-light py-3 py-xxl-5 ">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-8 text-center">
				<p class="display-2 line-height-1 text-dark text-center fw-bold mb-5">A Career with ComfyFirst</p>
				<p class="h4 fw-normal line-height-1 text-dark">As one of <?= $global_city ?>'s leading and fastest growing air conditioning companies, ComfyFirst is always on the lookout for experienced and professional licensed Electricians with a commitment to providing the best in customer service and care.</p>
			</div>
		</div>
	</div>
</section>

<section class="py-3 py-xxl-5 ">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<p class="h2 line-height-1 text-dark mb-xxl-5 mb-4">Opportunities & Positions Available:</p>
				<?php $oppo = ['Experienced Electricians', 'Drain & Sewer Specialists', 'Hydronic Heating & Ducted Engineers',]; ?>
				<div class="row g-0">
					<?php foreach ($oppo as $key => $value) {
					?>
						<div class="col-xxl-4 mb-3 col-lg-6">
							<div class="card rounded-0 border-0">
								<?= lazyImg("career/obg.png", randalts($alts), "card-img") ?>
								<div class="card-img-overlay d-flex py-0">
									<p class=" ms-5 fw-bold text-dark ps-xxl-4 my-auto"><i class=""><?= $value ?></i></p>
								</div>
							</div>
						</div>
					<?php
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-3 py-xxl-5">
	<div class="container-fluid pb-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="h2 line-height-1 text-dark mb-xxl-5 mb-4">Excellent Prospects & Remuneration including:</p>
				<div class="card border-0 rounded-0 mb-4 mb-xxl-5 bg-g-primary">
					<div class="card-body p-xxl-5">
						<div class="row">
							<?php $whyus = [
								[
									'heading' => 'Top Rates',
									'content' => "Offering the best pay rates in the industry",
								],
								[
									'heading' => 'Company Vehicle',
									'content' => 'Teams are provided with strong & reliable vehicles',
								],
								[
									'heading' => 'Immediate Start',
									'content' => 'Once on-board, you can start immediately',
								],
							];
							$n = 0;
							foreach ($whyus as $key => $value) {
								$n++;
							?>
								<div class="col-xxl-4 text-center mb-4">
									<p><?= lazyImg("$imgfolder/w$n.png", randalts($alts), "") ?></p>
									<p class="text-white h2"><i><?= $value['heading'] ?></i></p>
									<hr class="hr-h hr-info">
									<p class="text-tlblue"><?= $value['content'] ?></p>
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

<section class="bg-info text-white car">
	<div class="container-fluid px-xxl-0">
		<div class="row justify-content-center align-items-center">
			<div class="col-xxl-6">
				<div class="row justify-content-center">
					<div class="col-xxl-9 py-3 py-xxl-5">
						<div class="fw-bold display-2 line-height-1">Become a member of the ComfyFirst Team</div>
						<hr class="hr-h hr-white">
						<?php $cta = ['Work with one of the biggest air conditioning companies in Australia', 'Professional, friendly & rewarding team'];
						foreach ($cta as $key => $value) {
						?>
							<div class="h4 d-flex"><i class="fas fa-check fw-normal me-2 "></i> <i><?= $value ?></i></div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="w-100 h-100">
					<?= lazyImg("career/car.png", randalts($alts), "w-100 car") ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-3 py-xxl-5 text-dark">
	<div class="container-fluid py-3 py-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="card shadow border-0 rounded-0">
					<div class="card-body px-0 pt-xxl-5 pt-4 pb-5">
						<p class="fw-bold display-2 line-height-1 mb-md-5 mb-4 text-center">Submit Your Application Online</p>
						<form id="book" class="needs-validation contact_form" action="<?= $domain ?>/form-book.php" enctype="multipart/form-data" method="POST" name="MyForm" novalidate>
							<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">
							<div class="px-3 px-xxl-4">
								<div class="row">
									<div class="col-xxl-6">
										<div class="mb-4">
											<label for="firstname" class="form-label h6 ">Your First Name</label>
											<input type="text" class="form-control " id="firstname" name="firstname" placeholder="Eg: John" required>
										</div>
									</div>
									<div class="col-xxl-6">
										<div class="mb-4">
											<label for="surname" class="form-label h6">Your Surname</label>
											<input type="text" class="form-control " id="surname" name="surname" placeholder="Eg: Doe" required>
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
											<label for="email" class="form-label h6">Your Email Address</label>
											<input type="email" class="form-control " id="email" name="email" placeholder="Eg: name@example.com" required>
										</div>
									</div>
								</div>
							</div>
							<div class="files" id="files1">
								<div class="card mb-4 bg-dark text-white rounded-0">
									<div class="card-body px-3 px-xxl-4">
										<div class="row align-items-center">
											<div class="col-md-auto">
												<label class="btn btn-light py-1 px-3 px-xxl-5 text-center mb-2 mb-md-0" for="file">
													<p class="text-dark mb-0 line-height-1 mx-xxl-4">Attach Files</p>
													<small class="line-height-1 small fw-normal">Max 10mb total</small>
													<input type="file" id="file" name="file1" accept="image/*,.pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" lang="en" class="d-none" multiple>
												</label>

											</div>
											<div class="col-md">
												<p class="mb-0">(Optional) Send your resume to us via the upload link</p>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-5 px-3 px-xxl-4">
									<p class="fw-bold d-none" id="uheading">Attached Files:</p>
									<div class="filelist"></div>
								</div>
							</div>
							<div class="px-3 px-xxl-4">
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
										<button type="submit" class="btn btn-danger py-3 w-100 px-xxl-5">Submit Application</button>
									</div>
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