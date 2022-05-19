

<section class="banner bg-blue text-white pt-md-5 pt-3 position-relative overflow-hidden">
	<div class="container-fluid position-relative z-1">
		<div class="row justify-content-center">
			<div class="col-xl-11">
				<div class="row justify-content-between align-items-end">
					<div class="col-xl-6 col-lg-7">
						<div class="row">
							<div class="col-xl-11">
								<p class="display-3 font-weight-900 text-uppercase line-height-1 mb-xl-5 "><span class="text-primary">Bring Your Old Kitchen or bathroom</span> <span class="text-shadow">Back To Life with our expirenced process</span></p>
								<div class="row mb-md-5 mb-4">
									<div class="col">
										<p><a href="tel:<?=$phone?>" class="btn btn-primary w-100 py-2 py-md-3 py-lg-4"><span class="h5 text-uppercase font-weight-900">Call today</span></a></p>
									</div>
									<div class="col">
										<p><a href="#form" class="btn btn-dark w-100 py-2 py-md-3 py-lg-4"><span class="h5 text-uppercase font-weight-900">get a quote</span></a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-xl-12">
								<div class="row no-gutters">
									<?php $cta=['Durable & Long Lasting','High Quality Products','20+ Years’ Experience']; 
									foreach ($cta as $key => $value) {
										?>
										<div class="col mb-1 mb-md-0">
											<div class="bg-dark mr-1 p-3 px-md-4 py-md-4 h-100">
												<p class="text-uppercase font-weight-900 h3 line-height-1"><?=$value?></p>
											</div>
										</div>
										<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-xl-5 col-md-8">
						<div class="promo-slider position-relative">
							<?php $promo=[
								'Kitchen Resurfacing'=>'From only $1200<small>+GST</small>',
								'Bathroom Resurfacing'=>'From only $999<small>+GST</small>',
							]; 
							$n=0;
							foreach ($promo as $key => $value) {
								$n++;
								?>
								<div>
									<div class="card bg-dark text-white border-0 rounded-0 my-5 ml-xl-5 <?=($n==1?'active':'')?>">
										<div class="row no-gutters">
											<div class="col-5">
												<?= lazyImg("promo$n.png", randalts($alts), "$site position-absolute image-left") ?>
											</div>
											<div class="col-7">
												<div class="card-body">
													<p class="text-uppercase font-weight-900 h1 line-height-1 mb-1"><?=$key?></p>
													<p class="text-uppercase font-weight-bold h2 line-height-1 mb-3"><?=$value?></p>
													<p><a href="#form" class="text-white h5 font-weight-bold">GET STARTED <i class="fal fa-long-arrow-right ml-2"></i></a></p>
												</div>
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
			</div>
		</div>
	</div>
	<?= lazyImg("banner.jpg", randalts($alts), "object-fit") ?>
</section>

<section class="bg-dark text-white py-xl-5 py-4" id="form">
	<div class="container-fluid position-relative z-1">
		<div class="row justify-content-center">
			<div class="col-xl-11">
				<div class="row no-gutters">
					<div class="col-xl-6">
						<div class="pr-xl-5">
							<p class="font-weight-900 line-height-1 display-1 text-uppercase">Onsite Free Quotes</p>
							<p class="h5 font-weight-normal mb-xl-5 mb-4 ">we have extensive experience in structural remodelling, extensions and new level additions</p>
							<p class="h3 font-weight-bold">Quick Turn Around Time</p>
							<p class="h5 font-weight-400 mb-4 ">Our versatility also allows us to expertly renovate any existing area to the desired style, whether it be to original or ultra-modern minimalist design.</p>
						</div>
					</div>
					<div class="col-xl-6">
						<form class="needs-validation contact_form" action="<?=$domain?>/form.php"  method="POST" name="MyForm" novalidate>
							<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">


							<div class="form-row">
								<div class="col-md ">
									<div class="form-group">
										<input type="text" class="form-control rounded-0" id="name" name="name" placeholder="NAME" required="">
									</div>
								</div>
								<div class="col-md ">
									<div class="form-group">
										<input type="email" class="form-control rounded-0" id="email" name="email" placeholder="EMAIL ADDRESS" required="">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md ">
									<div class="form-group">
										<input type="tel" class="form-control rounded-0" id="phone" name="phone" placeholder="PHONE" required="">
									</div>
								</div>
								<div class="col-md ">
									<div class="form-group">
										<input type="date" class="form-control rounded-0" id="date" name="date" placeholder="PREFERRED DATE" required="">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md ">
									<div class="form-group">
										<input type="text" class="form-control rounded-0" id="postcode" name="postcode" placeholder="POSTCODE" required="">
									</div>
								</div>
								<div class="col-md ">
									<div class="form-group">
										<select class="custom-select" id="inlineFormCustomSelectPref" name="service">
											<option selected disabled>SERVICE</option>
											<option>Bathroom Resurfacing</option>
											<option>Kitchen Resurfacing </option>
											<option>Kitchen Cabinets Resurfacing</option>
											<option>Kitchen Benchtop Resurfacing</option>
											<option>Bathtub Resurfacing</option>
											<option>Shower Resurfacing</option>
											<option>Bathroom Tiles Resurfacing</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-row ">
								<div class="col">
									<div class="form-group">
										<textarea class="form-control rounded-0" id="detail" name="detail" placeholder="Comments (optional)"></textarea>
									</div>
								</div>
							</div>
							<div class="form-row align-items-center">
								<div class="col-md text-center ">
									<button type="submit" class="btn btn-primary w-100 py-3"><span class="h6 font-weight-500 text-uppercase">Get Free Quote</span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our-team py-xl-5 py-4 overflow-hidden">
	<div class="container-fluid pr-0">
		<div class="row justify-content-center">
			<div class="col-xl-12">
				<div class="row align-items-center">
					<div class="col-xl-5 z-1">
						<div class="left-content mx-xl-5">
							<p class="text-blue font-weight-900 text-uppercase display-1 line-height-1 heading">OUR TEAM HAS OVER <br>20 YEARS EXPERIENCE</p>
							<p class="text-dark font-weight-900 text-uppercase small line-height-1 mb-xl-5">Up to 10 Years Warranty on Kitchen <span class="mx-3">|</span> Up to 5 Years Warranty on Bathroom</p>
							<p class=" mb-xl-5">Our use of state-of-the-art and imported technology makes us a unique company in the resurfacing business.</p>
							<p class=" mb-xl-5">We have been providing this service for over a decade and have the experience and the necessary manpower to remodel your kitchen. We pride ourselves on a quick response and excellent service delivery. We understand the importance of time and deliver our services in the shortest duration possible.</p>
							<p><a href="#form" class="btn btn-blue px-5 py-3"><span class="font-weight-bold">Enquire Now</span></a></p>
						</div>
					</div>
					<div class="col-xl-7">
						<div class="team-slider">
							<?php for ($i=1; $i < 4; $i++) { 
								?>
								<div>
									<?= lazyImg("ot$i.jpg", randalts($alts), "w-100 px-3") ?>
								</div>
								<?php
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-xl-5 py-4 text-white bg-blue">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-11">
				<div class="row align-items-center justify-content-xl-between justify-content-center">
					<div class="col-xl-5 col-auto">
						<p class="font-weight-900 line-height-1 h1 text-uppercase mb-4 mb-xl-0">Up to 10 Years Warranty on Kitchen</p>
					</div>
					<div class="col-auto col-xl ml-xl-auto">
						<div class="row justify-content-xl-end align-items-center">
							<div class="col-auto">
								<p><a href="tel:<?=$phone?>" class="text-decoration-none text-white"><i class="far fa-phone-alt mr-2 fa-lg"></i><span class="font-weight-bold">Call <?=$phone?></span></a>
								</p>
							</div>
							<div class="col-auto">
								<p><a href="#form" class="btn btn-dark px-xl-5 py-xl-4 py-2"><span class="font-weight-bold">Enquire Now</span></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-xl-5 py-4">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-11">
				<p class="font-weight-900 text-uppercase display-4 text-dark"><span class="text-blue">Breathe Life</span> into your kitchen or bathroom</p>
				<p class="mb-xl-5 font-weight-normal h6 mb-4">We have been providing our services to clients of all types in Australia – houses, businesses, offices, hotels, restaurants, and others. Our outstanding service and happy clients have made us one of the most sought company for kitchen resurfacing solutions. Our kitchen resurfacing package includes – resurfacing the cabinet, splash back, and benchtops. </p>
				<div class="breathe-slider">
					<?php for ($i=1; $i < 4; $i++) { 
						?>
						<div>
							<?= lazyImg("b$i.jpg", randalts($alts), "w-100 px-3") ?>
						</div>
						<?php
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-xl-5 py-4 text-white bg-gradientblue ">
	<div class="container-fluid py-xl-5">
		<div class="row justify-content-center">
			<div class="col-xl-9 text-center">
				<p class="font-weight-900 text-uppercase display-4 line-height-1 mb-xl-5">Bring Your Old Kitchen Or Bathroom Back To Life</p>
				<p class="mb-xl-5 font-weight-normal h6 mb-4">g. Apart from our resurfacing services, we also provide painting services for the kitchen. The bathroom and kitchen of the house require a different process of painting. Our extended experience has allowed us access to top-quality materials for the bathroom.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-3">
				<div class="row">
					<div class="col">
						<p><a href="tel:<?=$phone?>" class="btn btn-outline-light w-100 py-xl-4 py-3"><span class="font-weight-500">Call Now</span></a></p>
					</div>
					<div class="col">
						<p><a href="#form" class="btn btn-light w-100 py-xl-4 py-3"><span class="text-blue font-weight-500">Enquire Now</span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-xl-5 py-4">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-11">
				<div class="row align-items-center justify-content-between">
					<div class="col-xl-5">
						<p class="font-weight-900 line-height-1 display-4 text-uppercase text-blue">Resurfacing Saves You Up to 75% </p>
						<p class="h6 font-weight-normal line-height-1--5">Our outstanding service and happy clients have made us one of the most sought company for kitchen resurfacing solutions. </p>
					</div>
					<div class="col-xl-6">
						<p class="h6 font-weight-normal mb-lg-4 line-height-1--5">Our use of state-of-the-art and imported technology makes us a unique company in the resurfacing business.</p>
						<p class="h6 font-weight-normal line-height-1--5 mb-4">We have been providing this service for over a decade and have the experience and the necessary manpower to remodel your kitchen. We pride ourselves on a quick response and excellent service delivery. We understand the importance of time and deliver our services in the shortest duration possible.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-xl-5 py-4">
	<div class="container-fluid">
		<div class="f-slider">
			<?php for ($i=1; $i < 3; $i++) { 
				?>
				<div>
					<?= lazyImg("f$i.jpg", randalts($alts), "w-100 px-3") ?>
				</div>
				<?php
			} ?>
		</div>
	</div>
</section>

<footer class="bg-blue pt-3 text-white">
	<div class="container-fluid">
		<div class="row justify-content-center ">
			<div class="col-xl-11">
				<div class="row align-items-center justify-content-xl-between justify-content-center">
					<div class="col-auto">
						<p class="small"><a href="https://www.aiims.com.au/like-our-work/" class="" target="_blank"><?=lazyImg("aiims.png", randalts($alts), "");?></a></p>
					</div>
					<div class="col-auto ml-lg-auto text-center text-xl-right">
						<p class="small">Copyright <?=date('Y')?> <span class="text-gold mx-4">|</span> <?=$site?> <span class="text-gold mx-4">|</span> All Right Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>