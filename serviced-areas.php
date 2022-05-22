<?php
$title = 'Serviced Areas';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'areas';

$banner = 'Proudly Servicing <br class="d-one d-xxl-block">All of ' . $global_city;
$bheading = 'Find the ComfyFirst team nearest to you!';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';

$areas = [
	'Melbourne' => [
		'Abbotsford', 'Aberfeldie', 'Aintree', 'Airport West', 'Albanvale', 'Albert Park', 'Albion', 'Alphington', 'Altona Meadows', 'Altona North', 'Altona', 'Ardeer', 'Armadale', 'Arthurs Seat', 'Ascot Vale', 'Ashburton', 'Ashwood', 'Aspendale Gardens', 'Aspendale', 'Attwood', 'Auburn', 'Aurora', 'Avondale Heights', 'Balaclava', 'Balwyn North', 'Balwyn', 'Bayswater North', 'Bayswater', 'Beaconsfield', 'Beaumaris', 'Belgrave Heights', 'Belgrave South', 'Belgrave', 'Bellfield', 'Bentleigh East', 'Bentleigh', 'Berwick', 'Bittern', 'Black Rock', 'Blackburn North', 'Blackburn South', 'Blackburn', 'Blairgowrie', 'Bonbeach', 'Bonnie Brook', 'Boronia', 'Box Hill North', 'Box Hill South', 'Box Hill', 'Braeside', 'Braybrook', 'Briar Hill', 'Brighton East', 'Brighton', 'Broadmeadows', 'Brookfield', 'Brooklyn', 'Brunswick East', 'Brunswick West', 'Brunswick', 'Bulleen', 'Bundoora', 'Burnley', 'Burnside Heights', 'Burnside', 'Burwood East', 'Burwood', 'Cairnlea', 'Calder Park', 'Camberwell', 'Campbellfield', 'Canterbury', 'Capel Sound', 'Carlton North', 'Carlton', 'Carnegie', 'Caroline Springs', 'Carrum Downs', 'Carrum', 'Caulfield East', 'Caulfield North', 'Caulfield South', 'Caulfield', 'Chadstone', 'Chelsea Heights', 'Chelsea', 'Cheltenham', 'Chirnside Park', 'Clarinda', 'Clayton South', 'Clayton', 'Clifton Hill', 'Cobblebank', 'Coburg North', 'Coburg', 'Collingwood', 'Coolaroo', 'Craigieburn', 'Cranbourne East', 'Cranbourne North', 'Cranbourne West', 'Cranbourne', 'Cremorne', 'Crib Point', 'Croydon Hills', 'Croydon North', 'Croydon South', 'Croydon', 'Dallas', 'Dandenong North', 'Dandenong South', 'Dandenong', 'Deanside', 'Deepdene', 'Deer Park', 'Delahey', 'Derrimut', 'Diamond Creek', 'Diggers Rest', 'Dingley Village', 'Docklands', 'Doncaster East', 'Doncaster', 'Donvale', 'Doreen', 'Doveton', 'Dromana', 'Eaglemont', 'East Melbourne', 'Edithvale', 'Elsternwick', 'Eltham North', 'Eltham', 'Elwood', 'Emerald', 'Endeavour Hills', 'Epping', 'Essendon Fields', 'Essendon North', 'Essendon West', 'Essendon', 'Eumemmerring', 'Eynesbury', 'Fairfield', 'Fawkner', 'Ferntree Gully', 'Fieldstone', 'Fitzroy North', 'Fitzroy', 'Flemington', 'Footscray', 'Forest Hill', 'Frankston North', 'Frankston South', 'Frankston', 'Fraser Rise', 'Garden City', 'Gardenvale', 'Gladstone Park', 'Glen Huntly', 'Glen Iris', 'Glen Waverley', 'Glenroy', 'Gowanbrae', 'Grangefields', 'Greensborough', 'Greenvale', 'Hadfield', 'Hallam', 'Hampton East', 'Hampton Park', 'Hampton', 'Harkness', 'Hastings', 'Hawthorn East', 'Hawthorn', 'Heatherton', 'Heathmont', 'Heidelberg Heights', 'Heidelberg West', 'Heidelberg', 'Highett', 'Hillside', 'Hoppers Crossing', 'Hughesdale', 'Huntingdale', 'Hurstbridge', 'Ivanhoe East', 'Ivanhoe', 'Jacana', 'Junction Village', 'Kealba', 'Keilor Downs', 'Keilor East', 'Keilor Lodge', 'Keilor North', 'Keilor Park', 'Keilor', 'Kensington', 'Kew East', 'Kew', 'Keysborough', 'Kilsyth South', 'Kilsyth', 'Kings Park', 'Kingsbury', 'Kingsville', 'Knoxfield', 'Kooyong', 'Kurunjang', 'Lalor', 'Langwarrin', 'Laverton North', 'Laverton', 'Lilydale', 'Lower Plenty', 'Lynbrook', 'Lyndhurst', 'Lysterfield', 'McCrae', 'McKinnon', 'Macleod', 'Maidstone', 'Malvern East', 'Malvern', 'Manor Lakes', 'Maribyrnong', 'Meadow Heights', 'Melbourne Airport', 'Melton', 'Melton South', 'Melton West', 'Melton', 'Mentone', 'Mernda', 'Middle Park', 'Mill Park', 'Mitcham', 'Monbulk', 'Mont Albert North', 'Mont Albert', 'Montmorency', 'Montrose', 'Moonee Ponds', 'Moorabbin Airport', 'Moorabbin', 'Moorooduc', 'Mooroolbark', 'Mordialloc', 'Mornington', 'Mount Eliza', 'Mount Evelyn', 'Mount Martha', 'Mount Waverley', 'Mulgrave', 'Murrumbeena', 'Narre Warren East', 'Narre Warren North', 'Narre Warren South', 'Narre Warren', 'Newport', 'Niddrie', 'Noble Park North', 'Noble Park', 'North Melbourne', 'North Warrandyte', 'Northcote', 'Notting Hill', 'Nunawading', 'Oak Park', 'Oaklands Junction', 'Oakleigh East', 'Oakleigh South', 'Oakleigh', 'Officer', 'Olinda', 'Ormond', 'Pakenham', 'Park Orchards', 'Parkdale', 'Parkville', 'Pascoe Vale South', 'Pascoe Vale', 'The Patch', 'Patterson Lakes', 'Pearcedale', 'Plumpton', 'Point Cook', 'Port Melbourne', 'Portsea', 'Prahran', 'Preston', 'Princes Hill', 'Research', 'Reservoir', 'Richmond', 'Ringwood East', 'Ringwood North', 'Ringwood', 'Ripponlea', 'Rockbank', 'Rosanna', 'Rosebud', 'Rowville', 'Roxburgh Park', 'Rye', 'Safety Beach', 'St Albans', 'St Andrews Beach', 'St Helena', 'St Kilda East', 'St Kilda West', 'St Kilda', 'Sandhurst', 'Sandringham', 'Scoresby', 'Seabrook', 'Seaford', 'Seaholme', 'Seddon', 'Selby', 'Skye', 'Somerton', 'Somerville', 'Sorrento', 'South Kingsville', 'South Melbourne', 'South Morang', 'South Wharf', 'South Yarra', 'Southbank', 'Spotswood', 'Springvale South', 'Springvale', 'Strathmore Heights', 'Strathmore', 'Strathtulloh', 'Sunbury', 'Sunshine North', 'Sunshine West', 'Sunshine', 'Surrey Hills', 'Sydenham', 'Tarneit', 'Taylors Hill', 'Taylors Lakes', 'Tecoma', 'Templestowe Lower', 'Templestowe', 'The Basin', 'Thomastown', 'Thornbury', 'Thornhill Park', 'Toorak', 'Tootgarook', 'Tottenham', 'Travancore', 'Truganina', 'Tullamarine', 'Tyabb', 'Upfield', 'Upper Ferntree Gully', 'Upwey', 'Vermont South', 'Vermont', 'Viewbank', 'Wantirna South', 'Wantirna', 'Warrandyte', 'Warranwood', 'Waterways', 'Watsonia North', 'Watsonia', 'Wattle Glen', 'Waverley Park', 'Weir Views', 'Werribee South', 'Werribee', 'West Footscray', 'West Melbourne', 'Western Suburbs	', 'Westmeadows', 'Wheelers Hill', 'Williams Landing', 'Williamstown North', 'Williamstown', 'Windsor', 'Wollert', 'Wyndham Vale', 'Yallambie', 'Yarraville'
	],
];
?>

<section class="bg-light py-3 py-xxl-5 text-dark">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9 text-center">
				<p class="h4 mb-0 fw-normal">ComfyFirst provides rapid, on-time service for all your electrical, hot water and drain needs across the entire <?= $global_city ?> metropolitan area 24 hours, 7 days. You can read about our commitment to great service <u class="fw-bold">here</u>, and from our other happy ComfyFirst customers <u class="fw-bold">here</u></p>
			</div>
		</div>
	</div>
</section>

<section class="py-3 py-xxl-5 faq">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center text-dark display-2 fw-bold mb-xxl-5">Find your nearest ComfyFirst team</p>
				<input list='suburb' type="text" class="form-control mb-xxl-5 rounded-0 py-xxl-3 mb-3" id="spost" placeholder="Enter your Suburb">
				<datalist id="suburb">
					<?php foreach ($areas as $key => $value) {
						foreach ($value as $k => $v) {
					?>
							<option value="<?= $v ?>"><?= $v ?></option>
					<?php
						}
					} ?>
				</datalist>
				<div class="btn-toolbar d-none d-xl-flex justify-content-center mb-5 ">
					<?php
					$n = 0;
					foreach ($areas as $key => $value) {
						$n++;
						$k = strtolower(str_replace(" ", "-", $key));
						$k = str_replace("&", "", $k);
					?>
						<a href="javascript:;" key="<?= $k ?>" class="border-0 col-xl-auto rounded-0 quote-book-request-btn btn btn-dark <?= $n == 1 ? 'active' : '' ?> mx-2 mb-3 py-2 line-height-1--2"><span class="h6 font-weight-600"><?= $key ?></span></a>
					<?php
					}
					?>
				</div>
				<select class="form-select select-tab h5 fw-bold mb-4 d-xl-none">
					<!-- <option disabled="" selected="">Select a Region</option> -->
					<?php
					foreach ($areas as $key => $value) {
						$k = strtolower(str_replace(" ", "-", $key));
						$k = str_replace("&", "", $k);
					?>
						<option key="<?= $k ?>"><?= $key ?></option>
					<?php
					}
					?>
				</select>

				<?php
				$l = 0;
				foreach ($areas as $key => $value) {
					$l++;
					$k = strtolower(str_replace(" ", "-", $key));
					$k = str_replace("&", "", $k);
				?>
					<div class="bcontent <?= $l == 1 ? '' : 'd-none' ?>" key="<?= $k ?>">
						<div class="row align-items-center mb-5">
							<div class="col-auto">
								<p class="h5 text-dark mb-0"><?= count($value); ?> results found</p>
							</div>
							<div class="col">
								<hr>
							</div>
						</div>
						<div class="row">
							<?php
							$n = 0;
							foreach ($value as $k => $v) {
								$slug = str_replace(' ', '-', strtolower($v));
								$n++;
							?>
								<div class="col-xxl-3 col-lg-4 col-md-6 mb-3">
									<a href="<?= $domain ?>/plumber-<?= $slug ?>/" class="btn btn-outline-light w-100 text-dark fw-normal py-xxl-3"><?= $v ?></a>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				<?php
				}
				?>

				<div class="bcontent d-none" key="search">
					<div class="row align-items-center mb-xxl-5 mb-3">
						<div class="col-auto">
							<p class="h5 text-dark mb-0"><span id="res"></span> results found</p>
						</div>
						<div class="col">
							<hr>
						</div>
					</div>
					<div class="row all-locations">

						<?php
						$n = 0;
						foreach ($areas as $key => $value) {
							foreach ($value as $k => $v) {
								$slug = str_replace(' ', '-', strtolower($v));
								$n++;
						?>
								<div class="col-xxl-3 col-lg-4 col-md-6 mb-3 col-btn">
									<a href="<?= $domain ?>/plumber-<?= $slug ?>/" class="btn btn-outline-light w-100 text-dark fw-normal py-xxl-3"><?= $v ?></a>
								</div>
						<?php
							}
						}
						?>
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