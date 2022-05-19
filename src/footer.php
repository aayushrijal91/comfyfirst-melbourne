<footer class="bg-dark text-white overflow-hidden">
	<div class="container-fluid pt-4">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center justify-content-center">
					<div class="col-auto">
						<p><a href="<?=$domain?>" title="<?=$site?>" rel="home" class="">
							<?= lazyImg('footer/fslogo.png', randalts($alts), "logo",226,51) ?>
						</a></p>
					</div>
					<div class="col-auto me-auto ms-xxl-5">
						<p class="h4"><i>On-time <?= $global_city ?> Technicians or We Pay You $100!*</i></p>
					</div>
					<div class="col-auto">
						<div class="row">
							<div class="col-auto">
								<p><a href="https://www.facebook.com/plumbfirst/" target="_blank" class="d-flex text-white align-items-center">
									<i class="fab fa-facebook-f text-danger me-3"></i>
									<span>@comfyfirst</span>
								</a></p>
							</div>
							<div class="col-auto">
								<p><a href="https://www.youtube.com/channel/UCBf-Ho05QfkfSLoMBVwM1cg" target="_blank" class="d-flex text-white align-items-center">
									<i class="fab fa-youtube text-danger me-3"></i>
									<span>@comfyfirst<?= strtolower($global_city) ?></span>
								</a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container-fluid py-3 py-xxl-4 footer-menu">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row">
					<?php 
					$n=0;
					foreach ($fmenu as $key => $value) {
						$n++;
						?>
						<div class="<?=$n==5?'col-xl-auto':'col-xl'?> col-md-4 col-6 mb-4">
							<p class="font-36 fw-bold"><?=$key?></p>
							<ul class="nav flex-column">
								<?php 
								$m=0;
								foreach ($value as $k => $v){
									$m++;
									?>
									<li class="nav-item <?=(($n==2||$n==3||$n==4)&&$m>5)?'d-none':''?>">
										<a class="text-grey mb-2" href="<?=$domain?>/<?=$v?>"><?=$k?></a>
									</li>
									<?php
								} ?>
								<?php if(($n==2||$n==3||$n==4)&&$m>5){ ?>
									<li class="nav-item">
										<a class="text-white mb-2 see-more" href="javascript:;">See More</a>
									</li>
								<?php } ?>
							</ul>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid px-0 f-logos mb-2">
		<div class="row g-0">
			<div class="col-xxl bg-fldark">
				<div class="row justify-content-end h-100 py-md-4 py-3">
					<div class="col-xxl-9 my-auto">
						<p class="fw-bold font-36 ps-xxl-0 ps-3">Accredited & Licensed Technicians</p>
					</div>
				</div>
			</div>
			
			<div class="col-xxl bg-frdark">
				<div class="row h-100 py-3 py-xxl-4">
					<div class="col-xxl-9 my-auto">
						<div class="slidera ps-xxl-0 ps-3 pe-3 pe-md-0">
							<?php for ($i=1; $i < 7; $i++) { 
								?>
								<div >
									<?= lazyImg("footer/ap$i.png", randalts($alts), randalts($alts)) ?>
								</div>
								<?php
							}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid px-0 f-logos f-logos-b">
		<div class="row g-0">
			<div class="col-xxl bg-fldark">
				<div class="row justify-content-end h-100 py-md-4 py-3">
					<div class="col-xxl-9 my-auto">
						<p class="fw-bold font-36 ps-xxl-0 ps-3">Award Winning Customer Services</p>
					</div>
				</div>
			</div>
			<div class="col-xxl bg-frdark ms-xxl-n5">
				<div class="row h-100 py-1">
					<div class="col-xxl-9 my-auto ms-xxl-5">
						<div class="row align-items-center flex-nowrap ps-xxl-0 ps-3 py-xxl-1 py-3">
							<div class="col">
								<?= lazyImg('footer/pr.png', randalts($alts), "pr") ?>
							</div>
							<div class="col offset-xxl-1">
								<div class="mx-xxl-3">
									<div class="d-flex align-items-center">
										<p class="display-2 line-height-1 mb-0">4.5</p>
										<?= lazyImg("footer/cstar.png", randalts($alts), "") ?>
									</div>
									<p class="h4 fw-normal">Customer Rating</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid py-3 py-xxl-5">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center justify-content-md-between justify-content-center">
					<div class="col-auto text-center text-md-left">
						<p class="small mb-xxl-0 text-grey">Copyright <?=date('Y')?> <i class="text-danger px-3">|</i> <?=$site?> <i class="text-danger px-3">|</i> All Rights Reserved</p>
					</div>
					<div class="col-auto">
						<p class="small mb-xxl-0"><a href="https://www.aiims.com.au/like-our-work/" target="_blank" rel="home" class=""><?= lazyImg('footer/aiims.png', 'AiiMS', 'footer-logo loadall') ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<a href="javascript:;" id="backtotop" class=" position-fixed z-9 text-danger"><i class="fas fa-chevron-circle-up fa-2x"></i></a>

<div class="modal fade modal-left" id="men" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg h-100" role="document">
		<div class="modal-content bg-transparent border-0 h-100">
			<div class="modal-body bg-dark h-100">
				<p class="text-center mb-5">
					<a href="<?=$domain?>" title="<?=$site?>" rel="home" class="">
						<?= lazyImg('footer/flogo.png', randalts($alts), randalts($alts)) ?>
					</a>
				</p>
				<p class="mb-4">
					<a href="tel:<?=$phone?>" class="font-weight-800 h5 text-white text-nowrap"><i class="fas fa-phone-alt mr-3 mb-0"></i> <?=$phone?></a>
				</p>
				<ul class="nav flex-column">                                                                                       
					<?php 
					$n=0;
					foreach ($menu as $key => $value) {
						$n++;
						if(is_array($value)){
							$value = 'services';
						}
						?>
						<li class="nav-item">
							<a class="text-white mb-2" href="<?=$domain?>/<?=$value?>"><?=$key?></a>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<script src="<?=$domain?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?=$domain?>/assets/bootstrap/js/bootstrap.bundle.min.js" defer></script>
<script src="<?=$domain?>/assets/js/masonry.pkgd.min.js" defer></script>
<script src="<?=$domain?>/assets/js/slick.min.js" defer></script>
<script src="<?=$domain?>/assets/js/lazyload.min.js" defer></script>
<script src="<?=$domain?>/assets/js/site.js" defer></script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		grecaptcha.ready(function() {
			grecaptcha.execute('<?=$site_key?>', { action: 'homepage' }).then(function(token) {
				var inputs = document.querySelectorAll('.g-recaptcha-response');
				inputs.forEach(function(input) {
					input.value = token;
				});
			});
		});
	});
</script>

</body>
</html>