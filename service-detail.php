<?php

$service_name_query = $_GET["s"];
$service_name = str_replace("-", " ", $service_name_query);
$service_name = str_replace("/", "", $service_name);
$service_name = ucwords($service_name);
$service_name_query_cleaned = str_replace("/", "", $service_name_query);

$title = $service_name;
include __DIR__ . '/src/header.php';
$description = 'Offering a wide range of Blocked Drains ' . $global_city . ' services. We are experts in unblocking drain treatments. Call us now on 1300 775 634 to discover more.';
$imgfolder = 'suburb';

$banner = $service_name;
$bheading = 'On-Time Guarantee or We Pay You $100!<span class="text-danger">*</span>';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';

$c1 = "";
$t2 = "";
$c2 = "";

switch ($service_name_query_cleaned) {
	case 'gas-ducted-heating':
		$c1 = "<p>If you're looking for a cooling and heating system for your home, you should consider an efficient gas heating and cooling system. Such products provide a superior solution for whole-house climate control at an extremely affordable price.</p>
		<p>These ducted technologies give you the option of heating/cooling as needed. This means convenience is available at the click of a button. It is a simple way to create a perfectly controlled, comfortable indoor environment throughout your home's rooms and spaces.</p><p>This all-in-one system provides refrigeration, cooling, and comfortable gas heating. Additionally, in some products you can install the heating system first before the cooling unit or both at the same time.</p>";
		$t2 = "The Advantages of a " . $service_name;
		$c2 = "<p>There are many advantages to choosing this type of aircon, including:</p>
		<ul>
			<li>A fully integrated solution for gas heating and refrigerated cooling that combines the perfect mix of functionality and comfort.</li>
			<li>Grills and ductwork are shared between the systems making installation easier.</li>
			<li>Cost savings on installation.</li>
			<li>You can convert it to a zoned airconditioning system or a whole-house system.</li>
			<li>Numerous leading brands incorporate advanced controller and zoning technology alternatives as well.</li>
		</ul>
		<p>Our team has the required credentials, skills, and licenses to setup gas heating &amp; cooling systems in accordance with manufacturer specifications. Our specialists will provide you with all of the information you need about a variety of leading makes and models so you can make the right choice. Additionally, we offer air conditioning repair, maintenance, and replacement services.</p>";

	case 'ducted-heating':
		$c1 = "<p>Ducted air conditioners are some of the most ecologically friendly, quiet, and energy-efficient ways to heat and cool your home or office. A ducted system utilises a heat exchanger component (located outdoors), powered by an inverter to maximise energy efficiency.</p>
		<p>The air conditioning system is often positioned underneath the flooring or within the roof cavity. This device generates filtered air to be distributed throughout your home via ductwork. This network of flexible, insulated cylinder tubes link the central air conditioner to each room's venting system.</p>
		<p>The ducting network returns air to the air conditioner via the return air panel, removing dust, pollen, and pollutants from the air in the room. Additionally, a ducted system can provide various temperature and comfort settings for sleeping, working and various other activities simultaneously.</p>
		<p>A single control system is used to adjust the comfort settings in all rooms. Due to technological advancements such as remote control and Wi-Fi capabilities, units also have delay and sleep features.</p>";
		$t2 = "Why Choose A Ducted System?";
		$c2 = "<p>The following are some of the benefits of choosing this system:</p>
		<ul>
			<li>Because ducted systems are concealed, they are less noticeable in your home.</li>
			<li>Capacity for uniformly dispersing pleasant air across a room or building.</li>
			<li>Have a recirculating system capable of filtering and cooling the air on a continuous basis.</li>
			<li>Energy- efficient and quiet operation.</li>
			<li>Individual rooms /spaces can be 'Zoned' or modified together to accommodate a range of different comfort levels.</li>
		</ul>
		<p>We provide customised ducted system AC services and guarantee all of our work. Our staff will give you all the facts you need on these technologies and will perform the installation in accordance with manufacturer specifications. Additionally, we provide exceptional replacement, repair, and maintenance services for these air conditioners.</p>";
}
?>

<section class="bg-light py-3 py-xxl-5 whyus">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center display-2 fw-bold text-dark mb-xxl-5 mb-4 line-height-1">Quality <?= $service_name ?></p>
				<div class="card mb-4 mb-xxl-5 shadow border-0 rounded-0">
					<div class="row g-0">
						<div class="col-xl-8">
							<div class="card-body p-xxl-5 p-4">
								<p class=" display-2 fw-bold text-dark mb-xxl-5 mb-4 line-height-1">What is a <?= $global_city ?> <br class="d-none d-xxl-block"><?= $service_name ?>?</p>
								<?= $c1 ?>
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
								<p class=" display-2 fw-bold text-dark mb-xxl-5 mb-4 line-height-1">
									<?= $t2 ?>
								</p>
								<?= $c2 ?>
								<p>For more details about our Ceiling Cassette installations and other services, please contact the expert team at Comfy First <?= $global_city ?> on- <?= $phone ?>. If you prefer to drop us a line, use this Contact Us form and one of our experts will call you shortly to discuss your project requirements.</p>
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
				<?php $plan = [
					'On-Time Guaranteed' => 'With ComfyFirst you always know the price BEFORE we start, for your complete peace of mind. And because you pay by the job, and not by the hour, no matter how long the job takes you still only pay the same price you agreed, which can help save you money',
					'Guaranteed Workmanship' => 'All of our workmanship is backed up by a signed, written guarantee. Have peace of mind knowing the job, your family and your home/property are all safe',
					'Pay by Job, not by Hour' => 'With ComfyFirst you always know the price <span class="text-white font-weight-500">BEFORE</span> we start, for your complete peace of mind. And because you pay by the job, and not by the hour, no matter how long the job takes you still only pay the same price you agreed, which can help save you money',
					'Smart & Friendly Technicians' => 'Our Technicians are smart, presentable and will keep your home clean and tidy. We have a considerate and cautious approach towards your home or property. We want your family to feel safe and at peace.',
					'Highly Professional' => 'Every plumber is fully licensed and insured for your Air Conditioning needs. Our Air Conditioning teams are fully trained and audited ensuring quality services, a positive and problem solving attitude and a get-it-done-right-the-first-time mentality.',
					'Around the Clock' => 'Available 24 hours a day, 7 days a week for all of your Air Conditioning emergencies. With over 150 teams in operation, we have increased coverage and likelihood of having a team close to your home',
				];
				$n = 0;
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
									<p class="text-white h3 fw-bold"><i><?= $key ?></i></p>
									<hr class="hr-h hr-orange">
									<p class="text-grey"><?= $value ?></p>
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

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>