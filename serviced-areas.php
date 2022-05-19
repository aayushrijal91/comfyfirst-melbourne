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
	'Canterbury Bankstown' => [
		'Bankstown', 'Bass Hill', 'Belfield', 'Belmore', 'Birrong', 'Campsie', 'Canterbury', 'Chester Hill', 'Chullora', 'Clemton Park', 'Condell Park', 'Croydon Park', 'Earlwood', 'Georges Hall', 'Greenacre', 'Kingsgrove', 'Lakemba', 'Lansdowne', 'Leightonfield', 'Milperra', 'Mount Lewis', 'Narwee', 'Padstow', 'Padstow Heights', 'Panania', 'Picnic Point', 'Potts Hill', 'Punchbowl', 'Regents Park', 'Revesby', 'Revesby Heights', 'Riverwood', 'Roselands', 'Sefton', 'Villawood', 'Wiley Park', 'Yagoona',
	],
	'Hills District' => [
		'Annangrove', 'Baulkham Hills', 'Beaumont Hills', 'Bella Vista', 'Box Hill', 'Carlingford', 'Castle Hill', 'Cattai', 'Dural', 'Glenhaven', 'Glenorie', 'Kellyville', 'Kenthurst', 'Leets Vale', 'Lower Portland', 'Maraylya', 'Maroota', 'Middle Dural', 'Nelson', 'North Rocks', 'Rouse Hill', 'Sackville North', 'South Maroota', 'West Pennant Hills', 'Winston Hills', 'Wisemans Ferry',
	],
	'Inner West' => [
		'Abbotsford', 'Annandale', 'Ashfield', 'Balmain', 'Birchgrove', 'Breakfast Point', 'Burwood', 'Burwood Heights', 'Cabarita', 'Canada Bay', 'Chiswick', 'Cockatoo Island', 'Concord', 'Croydon', 'Croydon Park', 'Drummoyne', 'Dulwich Hill', 'Enfield', 'Enmore', 'Five Dock', 'Haberfield', 'Homebush', 'Leichhardt', 'Lewisham', 'Liberty Grove', 'Lilyfield', 'Marrickville', 'Mortlake', 'Petersham', 'Rhodes', 'Rodd Point', 'Rozelle', 'Russell Lea', 'St Peters', 'Stanmore', 'Strathfield', 'Summer Hill', 'Sydenham', 'Tempe', 'Wareemba',
	],
	'Macarthur' => [
		'Airds', 'Ambarvale', 'Blair Athol', 'Blairmount', 'Bow Bowing', 'Bradbury', 'Campbelltown', 'Claymore', 'Denham Court', 'Eagle Vale', 'Englorie Park', 'Eschol Park', 'Gilead', 'Glen Alpine', 'Glenfield', 'Ingleburn', 'Kearns', 'Kentlyn', 'Leumeah', 'Long Point', 'Macquarie Fields', 'Macquarie Links', 'Menangle Park', 'Minto', 'Minto Heights', 'Raby', 'Rosemeadow', 'Ruse', 'St Andrews', 'St Helens Park', 'Varroville', 'Wedderburn', 'Woodbine', 'Bickley Vale', 'Camden', 'Camden South', 'Cobbitty', 'Currans Hill', 'Elderslie', 'Ellis Lane', 'Grasmere', 'Gregory Hills', 'Harrington Park', 'Kirkham', 'Leppington', 'Mount Annan', 'Narellan', 'Narellan Vale', 'Oran Park', 'Spring Farm',
	],
	'Northern Beaches' => [
		'Allambie Heights', 'Avalon', 'Balgowlah', 'Balgowlah Heights', 'Bayview', 'Beacon Hill', 'Belrose', 'Bilgola', 'Bilgola Plateau', 'Brookvale', 'Careel Bay', 'Church Point', 'Clareville', 'Clontarf', 'Coasters Retreat', 'Collaroy', 'Collaroy Plateau', 'Cottage Point', 'Curl Curl', 'Davidson', 'Dee Why', 'Duffys Forest', 'Duffys Forest', 'Elanora Heights', 'Elvina Bay', 'Fairlight', 'Forestville', 'Frenchs Forest', 'Freshwater', 'Ingleside', 'Killarney Heights', 'Lovett Bay', 'Mackerel Beach', 'Manly', 'Manly Vale', 'Mona Vale', 'Morning Bay', 'Narrabeen', 'Narrabeen North', 'Narraweena', 'Newport', 'North Balgowlah', 'North Curl Curl', 'North Manly', 'Oxford Falls', 'Palm Beach', 'Queenscliff', 'Scotland Island', 'Seaforth', 'Terrey Hills', 'Warriewood', 'Whale Beach', 'Wheeler Heights',
	],
	'Eastern Suburbs' => [
		'Alexandria', 'Bellevue Hill', 'Bondi', 'Bondi Beach', 'Bondi Junction', 'Bondi North', 'Botany', 'Bronte', 'Centennial Park', 'Chifley', 'Clovelly', 'Coogee', 'Darling Point', 'Darlinghurst', 'Double Bay', 'Dover Heights', 'Edgecliff', 'Hillsdale', 'Kensington', 'Kingsford', 'La Perouse', 'Little Bay', 'Malabar', 'Maroubra', 'Mascot', 'Matraville', 'Paddington', 'Pagewood', 'Phillip Bay', 'Point Piper', 'Port Botany', 'Queens Park', 'Randwick', 'Redfern', 'Rose Bay', 'Rosebery', 'South Coogee', 'Tamarama', 'Vaucluse', 'Waterloo', 'Watsons Bay', 'Waverley', 'Woollahra',
	],
	'North Shore' => [
		'Artarmon', 'Asquith', 'Berowra', 'Berowra Heights', 'Berowra Waters', 'Brooklyn', 'Cammeray', 'Castle Cove', 'Castlecrag', 'Chatswood', 'Chatswood West', 'Cowan', 'Cremorne', 'Cremorne Point', 'Crows Nest', 'East Killara', 'East Lindfield', 'East Willoughby', 'Gordon', 'Greenwich', 'Hunters Hill', 'Killara', 'Kirribilli', 'Lane Cove North', 'Lane Cove West', 'Lavender Bay', 'Lindfield', 'Longueville', 'McMahons Point', 'Middle Cove', 'Milsons Point', 'Mosman', 'Mount Kuring gai', 'Naremburn', 'Neutral Bay', 'North Sydney', 'North Turramurra', 'North Wahroonga', 'North Willoughby', 'Northbridge', 'Northwood', 'Pymble', 'Roseville', 'Roseville Chase', 'South Turramurra', 'St Ives', 'St Ives Chase', 'Turramurra', 'Wahroonga', 'Waitara', 'Warrawee', 'Waverton', 'West Pymble', 'Willoughby', 'Wollstonecraft',
	],
	'Northern Suburbs' => [
		'Beecroft', 'Cheltenham', 'Cherrybrook', 'Denistone', 'Dundas', 'Dundas Valley', 'East Ryde', 'Eastwood', 'Epping', 'Galston', 'Gladesville', 'Macquarie Park', 'Marsfield', 'Meadowbank', 'Melrose', 'Normanhurst', 'North Epping', 'North Ryde', 'Pennant Hills', 'Ryde', 'Tennyson Point', 'Thornleigh', 'West Ryde', 'Westleigh',
	],
	'St George' => [
		'Allawah', 'Arncliffe', 'Banksia', 'Bardwell Park', 'Bardwell Valley', 'Beverley Park', 'Beverly Hills', 'Bexley', 'Bexley North', 'Blakehurst', 'Brighton Le Sands', 'Carlton', 'Carss Park', 'Connells Point', 'Dolls Point', 'Hurstville', 'Hurstville Grove', 'Kogarah', 'Kogarah Bay', 'Kyeemagh', 'Allawah', 'Arncliffe', 'Banksia', 'Bardwell Park', 'Bardwell Valley', 'Bexley', 'Bexley North', 'Beverley Park', 'Beverly Hills', 'Blakehurst', 'Brighton-Le-Sands', 'Carlton', 'Carss Park', 'Connells Point', 'Hurstville', 'Hurstville Grove', 'Kingsgrove', 'Kogarah', 'Kogarah Bay', 'Kyeemagh', 'Kyle Bay', 'Lugarno', 'Monterey', 'Mortdale', 'Narwee', 'Oatley', 'Peakhurst', 'Peakhurst Heights', 'Penshurst', 'Ramsgate', 'Ramsgate Beach', 'Riverwood', 'Rockdale', 'Sandringham', 'Sans Souci', 'South Hurstville', 'Sydney Airport', 'Turrella', 'Wolli Creek',
	],
	'Sutherland Shire' => [
		'Alfords Point', 'Bangor', 'Barden Ridge', 'Bonnet Bay', 'Bundeena', 'Burraneer', 'Caringbah', 'Caringbah South', 'Como', 'Cronulla', 'Dolans Bay', 'Engadine', 'Grays Point', 'Greenhills Beach', 'Gymea', 'Gymea Bay', 'Heathcote', 'Illawong', 'Jannali', 'Kangaroo Point', 'Kareela', 'Kirrawee', 'Kurnell', 'Lilli Pilli', 'Loftus', 'Lucas Heights', 'Maianbar', 'Menai', 'Miranda', 'Oyster Bay', 'Port Hacking', 'Sandy Point', 'Sutherland', 'Sylvania', 'Sylvania Waters', 'Taren Point', 'Waterfall', 'Woolooware', 'Woronora', 'Woronora Heights', 'Yarrawarrah', 'Yowie Bay',
	],
	'Sydney CBD' => [
		'Annandale', 'Barangaroo', 'Beaconsfield', 'Broadway', 'Camperdown', 'Centennial Park', 'Central', 'Central Park', 'Chinatown', 'Chippendale', 'Circular Quay', 'Darling Harbour', 'Darlinghurst', 'Darlington', 'Dawes Point', 'East Sydney', 'Elizabeth Bay', 'Erskineville', 'Eveleigh', 'Forest Lodge', 'Garden Island', 'Glebe', 'Goat Island', 'Green Square', 'Haymarket', 'Kings Cross', 'Macdonaldtown', 'Millers Point', 'Moore Park', 'Newtown', 'Paddington', 'Potts Point', 'Pyrmont', 'Railway Square', 'Redfern', 'Rosebery ', 'Rushcutters Bay', 'Strawberry Hills', 'Surry Hills', 'The Domain', 'The Rocks', 'Ultimo', 'Waterloo', 'Woolloomooloo', 'Wynyard', 'Edmondson Park', 'Zetland',
	],
	'Western Suburbs' => [
		'Abbotsbury', 'Acacia Gardens', 'Agnes Banks ', 'Arndell Park', 'Ashbury ', 'Ashcroft', 'Auburn', 'Austral', 'Badgerys Creek ', 'Berala', 'Berkshire Park', 'Bidwill', 'Blackett', 'Blacktown', 'Bonnyrigg', 'Bonnyrigg Heights', 'Bossley Park', 'Bringelly ', 'Bungarribee', 'Busby', 'Cabramatta', 'Cabramatta West', 'Cambridge Gardens', 'Cambridge Park', 'Canley Heights', 'Canley Vale', 'Carnes Hill', 'Carramar', 'Cartwright', 'Casula', 'Cecil Park  ', 'Chipping Norton', 'Claremont Meadows', 'Clyde', 'Colebee', 'Colyton', 'Constitution Hill', 'Cranebrook', 'Dean Park', 'Denham Court  ', 'Dharruk', 'Doonside', 'East Hills', 'Eastern Creek', 'Edensor Park', 'Emerton', 'Emu Heights', 'Emu Plains', 'Ermington', 'Erskine Park', 'Fairfield', 'Fairfield East', 'Fairfield Heights', 'Girraween', 'Glendenning', 'Glenmore Park', 'Glenwood', 'Granville', 'Green Valley', 'Greendale', 'Greenfield Park', 'Greystanes', 'Guildford', 'Guildford East', 'Guildford North', 'Guildford West', 'Hammondville', 'Harris Park ', 'Hassall Grove', 'Hebersham', 'Heckenberg', 'Hinchinbrook', 'Holroyd', 'Holsworthy', 'Horningsea Park', 'Horsley Park', 'Hoxton Park', 'Huntingwood', 'Hurlstone Park', 'Jamisontown', 'Jordan Springs', 'Kellyville Ridge', 'Kemps Creek  ', 'Kings Langley', 'Kings Park', 'Kingsdene', 'Kingswood', 'Kingswood Park', 'Lalor Park', 'Lansvale', 'Leonay', 'Lethbridge Park', 'Lidcombe', 'Liverpool', 'Llandilo', 'Londonderry', 'Luddenham  ', 'Lurnea', 'Manahan', 'Marayong', 'Marsden Park', 'Mays Hill', 'Merrylands', 'Merrylands West', 'Middleton Grange', 'Miller', 'Minchinbury', 'Moorebank', 'Mount Druitt', 'Mount Pritchard', 'Mount Vernon', 'Mulgoa', 'Newington', 'North Parramatta  ', 'North St Marys', 'Northmead', 'Oakhurst', 'Oatlands', 'Old Guildford', 'Old Toongabbie', 'One Tree Point', 'Orchard Hills', 'Oxley Park', 'Parklea', 'Parramatta', 'Pemulwuy', 'Pendle Hill', 'Penrith', 'Pleasure Point', 'Plumpton', 'Prairiewood', 'Prestons', 'Prospect', 'Quakers Hill', 'Regentville', 'Riverstone', 'Rookwood', 'Rooty Hill', 'Ropes Crossing', 'Rosehill', 'Rossmore  ', 'Rydalmere', 'Sadleir', 'Schofields', 'Seven Hills', 'Shalvey', 'Shanes Park', 'Silverwater', 'Smithfield', 'South Penrith', 'South Wentworthville', 'St Clair', 'St Johns Park', 'St Marys', 'Stanhope Gardens', 'Telopea', 'The Ponds', 'Toongabbie', 'Tregear', 'Vineyard', 'Voyager Point', 'Wakeley', 'Wallacia ', 'Warwick Farm', 'Wattle Grove', 'Wentworth Point', 'Wentworthville  ', 'Werrington', 'Werrington Downs', 'West Hoxton', 'Westmead', 'Wetherill Park', 'Whalan', 'Willmot', 'Woodcroft', 'Woodpark', 'Yennora',
	],
	/*
	'Sydney City'=>[
		'Annandale','Barangaroo','Beaconsfield','Broadway','Camperdown','Centennial Park','Central','Central Park','Chinatown','Chippendale','Circular Quay','Darling Harbour','Darlinghurst','Darlington','Dawes Point','East Sydney','Elizabeth Bay','Erskineville','Eveleigh','Forest Lodge','Garden Island','Glebe','Goat Island','Green Square','Haymarket','Kings Cross','Macdonaldtown','Millers Point','Moore Park','Newtown','Paddington','Potts Point','Pyrmont','Railway Square','Redfern','Rosebery','Rushcutters Bay','Strawberry Hills','Surry Hills','The Domain','The Rocks','Ultimo','Waterloo','Woolloomooloo','Wynyard','Edmondson Park','Zetland',
	],
	'Eastern Suburbs'=>[
		'Alexandria','Bellevue Hill','Bondi','Bondi Beach','Bondi Junction','Bondi North','Bronte','Centennial Park','Chifley','Clovelly','coogee','Darling Point','Darlinghurst','Double Bay','Dover Heights','Edgecliff','Hillsdale','Kensington','Kingsford','La Perouse','Little Bay','Malabar','Maroubra','Matraville','Paddington','Pagewood','Phillip Bay','Point Piper','Port Botany','Queens Park','Randwick','Rose Bay','South Coogee','Tamarama','Vaucluse','Waterloo','Watsons Bay','Waverley','Woollahra',
	],
	'Western Suburbs'=>[
		'Abbotsbury','Acacia Gardens','Agnes Banks','Arndell Park','Ashbury','Ashcroft','Auburn','Austral','Badgerys Creek','Berala','Berkshire Park','Bidwill','Blackett','Blacktown','Bonnyrigg','Bonnyrigg Heights','Bossley Park','Bringelly','Bungarribee','Busby','Cabramatta','Cabramatta West','Cambridge Gardens','Cambridge Park','Canley Heights','Canley Vale','Carnes Hill','Carramar','Cartwright','Casula','Cecil Park','Chipping Norton','Claremont Meadows','Clyde','Colebee','Colyton','Constitution Hill','Cranebrook','Dean Park','Denham Court','Dharruk','Doonside','East Hills','Eastern Creek','Edensor Park','Emerton','Emu Heights','Emu Plains','Ermington','Erskine Park','Fairfield','Fairfield East','Fairfield Heights','Girraween','Glendenning','Glenmore Park','Glenwood','Granville','Green Valley','Greendale','Greenfield Park','Greystanes','Guildford','Guildford East','Guildford North','Guildford West','Hammondville','Harris Park','Hassall Grove','Hebersham','Heckenberg','Hinchinbrook','Holroyd','Holsworthy','Horningsea Park','Horsley Park','Hoxton Park','Huntingwood','Hurlstone Park','Jamisontown','Jordan Springs','Kellyville Ridge','Kemps Creek','Kings Langley','Kings Park','Kingsdene','Kingswood','Kingswood Park','Lalor Park','Lansvale','Leonay','Lethbridge Park','Lidcombe','Liverpool','Llandilo','Londonderry','Luddenham','Lurnea','Manahan','Marayong','Marsden Park','Mays Hill','Merrylands','Merrylands West','Middleton Grange','Miller','Minchinbury','Moorebank','Mount Druitt','Mount Pritchard','Mount Vernon','Mulgoa','Newington','North Parramatta','North St Marys','Northmead','Oakhurst','Oatlands','Old Guildford','Old Toongabbie','One Tree Point','Orchard Hills','Oxley Park','Parklea','Parramatta','Pemulwuy','Pendle Hill','Penrith','Pleasure Point','Plumpton','Prairiewood','Prestons','Prospect','Quakers Hill','Regentville','Riverstone','Rookwood','Rooty Hill','Ropes Crossing','Rosehill','Rossmore','Rydalmere','Sadleir','Schofields','Seven Hills','Shalvey','Shanes Park','Silverwater','Smithfield','South Penrith','South Wentworthville','St Clair','St Johns Park','St Marys','Stanhope Gardens','Telopea','The Ponds','Toongabbie','Tregear','Vineyard','Voyager Point','Wakeley','Wallacia','Warwick Farm','Wattle Grove','Wentworth Point','Wentworthville','Werrington','Werrington Downs','West Hoxton','Westmead','Wetherill Park','Whalan','Willmot','Woodcroft','Woodpark','Yennora',
	],
	'North Sydney'=>[
		'Artarmon','Asquith','Berowra','Berowra Heights','Berowra Waters','Brooklyn','Cammeray','Castle Cove','Castlecrag','Chatswood','Chatswood West','Cowan','Cremorne','Cremorne Point','Crows Nest','East Killara','East Lindfield','East Willoughby','Gordon','Greenwich','Hunters Hill','Killara','Kirribilli','Lane Cove North','Lane Cove West','Lavender Bay','Lindfield','Longueville','McMahons Point','Middle Cove','Milsons Point','Mosman','Mount Kuring gai','Naremburn','Neutral Bay','North Sydney','North Turramurra','North Wahroonga','North Willoughby','Northbridge','Northwood','Pymble','Roseville','Roseville Chase','South Turramurra','St Ives','St Ives Chase','Turramurra','Wahroonga','Waitara','Warrawee','Waverton','West Pymble','Willoughby','Wollstonecraft',
	],
	'Hills Region'=>[
		'Annangrove','Baulkham Hills','Beaumont Hills','Bella Vista','Box Hill','Carlingford','Castle Hill','Cattai','Dural','Glenhaven','Glenorie','Kellyville','Kenthurst','Leets Vale','Lower Portland','Maraylya','Maroota','Middle Dural','Nelson','North Rocks','Rouse Hill','Sackville North','South Maroota','West Pennant Hills','Winston Hills','Wisemans Ferry',
	],
	'Inner West'=>[
		'Abbotsford','Annandale','Ashfield','Balmain','Birchgrove','Breakfast Point','Burwood','Burwood Heights','Cabarita','Canada Bay','Chiswick','Cockatoo Island','Concord','Croydon','Croydon Park','Drummoyne','Dulwich Hill','Enfield','Enmore','Five Dock','Haberfield','Homebush','Leichhardt','Lewisham','Liberty Grove','Lilyfield','Marrickville','Mortlake','Petersham','Rhodes','Rodd Point','Rozelle','Russell Lea','St Peters','Stanmore','Strathfield','Summer Hill','Sydenham','Tempe','Wareemba',
	],*/
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