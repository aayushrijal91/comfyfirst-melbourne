<?php
$title = 'FAQ';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'faq';

$banner = 'FAQ - Frequently Asked Questions';
$bheading = 'Browse our most common questions & answers';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';

$faqs = [
	'Air Conditioning' => [
		'What is ducted air conditioning?' => '<p>Ducted air conditioning is an air conditioning setup particularly found in large buildings. You are more likely to find these systems in commercial buildings, such as shopping centres and office complexes. However, many homeowners in ' . $global_city . ' are also installing these systems in their residences. A ducted air conditioning system typically consists of an outdoor condensing unit, an indoor unit with a fan coil and a network of ducts. The cooling unit treats the air and decreases its temperature to the desired level. The fans installed in the duct system blow the cooled air through the ducts. The outlets of the ducts are placed on the walls of all the rooms and areas that require cooling, usually near the ceiling. </p>
		<p>Therefore, a ducted air conditioning system can cool multiple areas simultaneously. The cost-effectiveness, however, would depend on the type of building where you install the system. Installing ducted air conditioning requires extensive work, such as the installation of the ducts, the vents and the air conditioning unit itself. If the ducts already exist in a building, however, the costs would be lower. On the other hand, it would be more expensive to install separate units in every room in a large building than installing a single ducted air conditioning system. </p>',

		'What is split system air conditioning?' => '<p>Split system air conditioning systems have earned their name from the fact that they are split into two units. Insulated refrigerant lines connect these two units in the form of pipes. The outdoor unit in such a system usually includes the compressor and the condenser. The indoor unit, also known as the ‘wall-hung unit’, contains the evaporator coil. As the condenser unit of the AC remains outside, the conditioned space is mostly free from the noise caused by its functioning. In ' . $global_city . ', these air conditioning systems are quite popular in residences and commercial establishments alike. </p>
		<p>While purchasing a split air conditioning system, you may either go for a regular AC that only performs the cooling function or choose an inverter AC. The inverter air conditioners are capable of heating or cooling a room as per requirements. In this case, the air conditioning system would be useful in summer as well as winter. Most of the split systems are designed to cool only one room. However, the size of the room would vary with the capacity of the AC. If you require cooling in multiple rooms, you may also opt for a multi-split system. In these systems, a single outdoor unit connects to several indoor units in different rooms. </p>',

		'What does reverse cycle mean?' => '<p>Reverse cycle air conditioning is simply a technology that allows air conditioners to heat as well as cool the air. These systems are particularly useful in the countries where the seasons differ significantly from each other. For instance, in ' . $global_city . ' you might need a cooling system and a heating system for your home in summer and winter respectively. Now, a device that can only either heat or cool the air would be inadequate. On the other hand, two separate devices, such as a regular AC and a heater would take up extra space and cost additional expenses. </p>
		<p>This is why, reverse cycle air conditioners are so popular. Irrespective of the season or weather, these ACs can maintain the temperature in your home at comfortable levels. Whether you need warm air or cool air, reverse cycle technology can cater to your needs. The sophisticated air conditioners with this technology can also improve the quality of air in your home by filtering and dehumidifying it. It functions by absorbing the heat from the air outside and releasing it into the air inside a space. A refrigerant flows through an external coil to collect this heat and then transport the heat to the fan coil. </p>',

		'What other types of air conditioning are there?' => '<p>Ducted air conditioning is suitable for rather large buildings in ' . $global_city . ' that have plenty of rooms, corridors or other spaces that require cooling. To cool relatively smaller areas, such as a regular home, one can go for the other options. These are:</p>
		<ul>
		<li>Split ACs: These air conditioning system remains split into two units, an indoor unit and an outdoor one. The outdoor unit consists of the compressor and the condenser. As it stays outside the room, the air conditioner can operate quietly. The evaporator stays inside the room and circulates the air using a free flow fan. </li>
		<li>Window ACs: The window systems are relatively older and often considered outdated compared to split ACs. In these systems, all the components remain within a single box-like unit. The reason why these units are known as window systems is that they are usually fit into a square opening cut into a window. </li>
		<li>Portable ACs: The portable air conditioners are suitable for applications where multiple rooms require cooling. As these systems stay mounted on wheels, you may move them around from one room to another. However, you may not be able to use a portable AC to cool two or more rooms at once as they often struggle to cool even a single room entirely. </li>
		</ul>',

	],

	'Installation' => [
		'How long does it take to install ducted air conditioner to my home?' => '<p>This is a rather complex question as a number of steps go into the process of installing a ducted air conditioning system. Generally, it takes us less than a day to install such a system in a home. This, however, is considering that no additional work has to be done to arrange for the power supply. If that is not the case, the installation and the electric supply work may together take a while longer. The time necessary to prepare your home for the installation is an important factor to consider as well. If you wish, you might want to cover up the furniture, artwork and other items beforehand to speed up the preparation stage. </p>
		<p>Once you hire us for the installation, our experts in ' . $global_city . ' would first inspect your home to determine several variables. This plays an important role in deciding the location where we would install the various components would. The factors to consider include the positioning of the existing wiring, the thickness of the walls and the best place to install the outdoor unit. The various steps that the installation process consists of include cutting the holes for the vents and fitting them, running all the ducts and return air ducts. </p>',

		'How long does it take to install a split system air conditioner to my home?' => '<p>Just like ducted air conditioning, the time taken to install a split air conditioner varies too. However, chances are high that the installation would not take more than a day. In case of a single split system, the job might be done within a few hours. However, multi-split air conditioning systems would take relatively longer. While it does not take as long as ducted systems, installing a multi split system still involves a number of complex steps. Some of the factors that can potentially delay the installation are:</p>
		<ul>
		<li>Large areas: In case of a large home, the installation would naturally take longer. Apart from moving around, it would also take longer to ensure that all the components are safely installed. </li>
		<li>Complex electrics: In case the electrical connections in your home are rather complex or it is an old building with outdated components, the installation may face delays. This is because it would take longer to install all the power lines, breakers, etc. </li>
		<li>Upper levels: It is necessary to consider the floor where the installation is taking place. Typically, it is easier to install an air conditioning system on the lower floors. </li>
		</ul>
		<p>An expert in ' . $global_city . ' would be able to give you a more accurate estimate of the time upon checking out your home and the existing connections. </p>',

		'Can I choose where the ducted vents go?' => '<p>Several factors come into play while determining the positioning of the vents in a ducted air conditioning system. Generally, it is advisable to install the vents diagonal to the door in a room. You may, of course, let our professionals know of any personal preferences that you may have. For instance, you might want the vents positioned near the seating areas in a room to enjoy the cooling the most. Our team in ' . $global_city . ' would try their best to install the vents in your preferred spots. However, it may not always be possible due to technical reasons. </p>
		<p>For instance, the internal building structure of your home may prevent the installation of the vents and ducts in certain locations. Apart from the positioning of the vents, we would also have to consider the possibility of installing the ducts nearby. It would only make sense to install the vents in locations where the ducts can easily transport the cool or warm air.</p> 
		<p>We would also have to ensure that the installation does not hamper any components of the existing electrical connections, such as the power lines and the joiners. By considering all these factors, our experts would advise you on whether the position you suggest is viable or optimal.</p>',

		'Can I choose where the split air con goes?' => '<p>Being the homeowner, you reserve the right to choose where to install your split air conditioning unit. However, it’s recommended to consult the professional installers, as they can help you optimize the performance of the unit by advising you about the right positioning. In general, you can install split ACs centrally in your room. This ensures that it would balance the overall airflow, controlling the heat or coldness in your interiors.</p>
		<p>When you reach out to us, you may convey any of your preferred spots to us. Our technicians would try to install the unit accordingly. However, if we detect any better spot in your room, we will recommend you getting it installed there. Most people in ' . $global_city . ' prefer installing their split AC units in their bedrooms. In this case, we would advise not to install it over the bed directly. This might give you a sore throat when you wake up. Rather, you might choose the spot somewhere on the wall behind the head of your bed. In case of living rooms, we recommend split AC installations in a position that would direct the air to the sitting zone. Besides, you must install the unit higher on the walls, given that the cooler air would sink naturally.</p>',

	],

	'Maintenance' => [
		'How often should I service my aircon?' => '<p>As a thumb rule, you should service your aircon at least once a year. However, we recommend periodic inspections every three to four months to keep the unit running in proper health. It’s always wise to hire a certified company in ' . $global_city . ' to inspect your AC. The frequency of servicing your AC depends on several factors, including the system usage, size and age. In general, we inspect your device and recommend a customized service plan, that eventually suits every budget. This implies that your AC unit would remain smoothly running throughout the year.</p>
		<p>Well, we recommend our clients to get their system inspected at an interval of six months, even if there are no noticeable defects. This ensures that the unit would not lack its preventive maintenance.</p>
		<p>However, if you notice any of these signs, reach out to the professionals immediately for an inspection.</p>
		<ul>
		<li>In case your AC unit turns out to be louder than usual, the filters might have clogs.</li>
		<li>If you notice that the unit is taking a longer time to cool your room down, it might indicate a low coolant level.</li>
		<li>Your energy bill might shoot up, indicating that you need to get it inspected for proper functioning immediately.</li>
		</ul>',

		'How often should I clean my aircon?' => '<p>All the sophisticated air conditioning systems in ' . $global_city . ' come with filters attached. These filters play a key role in ensuring clean and healthy air. However, you must clean the filters on a regular basis in order to keep them functioning properly. It is generally advisable to clean them once in three months. However, this would also vary according to the air quality in your home. For instance, in a space where the air is contaminated with large amounts of dust, the filters would get dirty more often. If you are unsure or have newly installed an aircon system, you may consult a professional for advice. </p>
		<p>The cleanliness of the filters plays a significant role in the performance of an air conditioner. Once dirt clogs up the filter, the AC would struggle to push out the cool or warm air effectively. This would cause it to work harder, putting more strain on the components. The higher efforts required by the unit also result in higher power consumption, which would reflect in expensive electricity bills. </p>
		<p>The filter traps various particles in the air, such as those from smoke, grease, dust, pollens, etc. By doing so, it helps to protect the health of the occupants in the room. Not cleaning the filters timely may also result in health complications. </p>',

		'Why is my aircon leaking?' => '<p>It isn’t really uncommon to find small droplets of water forming on your AC and dripping off. This is simply a result of condensation as a result of the dehumidifying process. However, if water is constantly leaking out or pooling under the AC, you may have a more serious problem. There are a number of reasons that can cause such a leak </p>
		<ul>
		<li>A clogged drainage line: Over time, dust, dirt, mold and sludge build up inside the drain lines of an air conditioning system. As a result, the passage clogs up and prevents the water from flowing out. The water would then try to find another way out and start leaking. </li>
		<li>Improper installation: If you didn’t hire experienced professionals in ' . $global_city . ' to install your AC, chances are that the installation may have been faulty. In such a case, it is quite possible for water leakage to occur. </li>
		<li>Broken condenser pump: In case of an AC installed in the basement level, it would need a condenser pump to pump out the water. If this pump starts to malfunction, the water would remain inside and start to leak. </li>
		</ul>
		<p>In case your aircon is leaking water, you may hire a professional to take a look at it. It would ensure a quick detection of the cause. </p>',

		'How can I ensure that my air conditioning unit lasts as long as possible?' => '<p>For any machine, the key to a long lifespan is adequate care. The same applies to air conditioners too, whether at a residence or at an office. By taking the necessary care of the system, you would be able to have it running without any issues for an extended period of time. Some of the best ways to go about it are:</p>
		<ul>	
		<li>Regular servicing: It is crucial to have your air conditioning unit serviced and cleaned by a professional in ' . $global_city . ' at regular intervals. By getting the system inspected every six months, you would be able to avoid major snags from building up. </li>
		<li>Keep the rooms cool: For sure, the function of your air conditioner is to cool the rooms. However, the higher the temperatures are, the harder would your AC have to work. You might want to use curtains on your windows, especially the ones that face the West or the South. </li>
		<li>Keep the surroundings clean: Do not allow debris or leaves to collect around your outdoor unit. They can potentially clog up your system and cause internal damage. </li>
		</ul>
		<p>You might also want to ensure that your furniture, carpeting solutions, etc., do not block the vents of the system. Following these steps would protect your air conditioning unit and grant it a long lifespan. </p>',

	],


];
?>

<section class="bg-light py-3 py-xxl-5 faq">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center text-dark font-36 font-weight-500 mb-5">If you have any further questions, feel free to <a href="tel:<?= $phone ?>" class="text-grey"><u>call us</u></a> or complete our <a href="<?= $domain ?>/contact" class="text-grey"><u>enquiry form</u></a></p>

				<div class="btn-toolbar d-none d-xl-flex justify-content-center mb-5">
					<?php
					$n = 0;
					foreach ($faqs as $key => $value) {
						$n++;
						$k = strtolower(str_replace(" ", "-", $key));
						$k = str_replace("&", "", $k);
					?>
						<a href="javascript:;" key="<?= $k ?>" class="border-0 col-xl rounded-0 quote-book-request-btn btn btn-dark <?= $n == 1 ? 'active' : '' ?> mx-2 w-100 py-2"><span class="h6 font-weight-600"><?= $key ?></span></a>
					<?php
					}
					?>
				</div>

				<select class="form-select select-tab h5 fw-bold mb-4 d-xl-none">
					<!-- <option disabled="" selected="">Select a Region</option> -->
					<?php
					foreach ($faqs as $key => $value) {
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
				foreach ($faqs as $key => $value) {
					$l++;
					$k = strtolower(str_replace(" ", "-", $key));
					$k = str_replace("&", "", $k);
				?>
					<div class="bcontent <?= $l == 1 ? '' : 'd-none' ?>" key="<?= $k ?>">
						<div class="accordion mb-3" id="qa<?= $l ?>">
							<?php
							$n = 0;
							foreach ($value as $k => $v) {
								$n++;
							?>
								<div class="card bg-white mb-3 border-0 rounded-0">
									<div class="card-header bg-white border-0 h4 p-0" id="heading<?= $l ?><?= $n ?>">
										<button class="border-0 p-0 btn btn-link btn-block text-left text-decoration-none align-items-center d-flex position-relative collapsed rounded-0 w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $l ?><?= $n ?>" aria-expanded="false" aria-controls="collapse<?= $l ?><?= $n ?>">
											<span class="h4 mb-0 fw-normal text-dark p-3 py-xxl-4 px-xxl-4"><?= $k ?></span>
										</button>
									</div>
									<div id="collapse<?= $l ?><?= $n ?>" class="collapse ">
										<div class="card-body line-height-1--5 px-4 border-top position-relative">
											<div><?= $v ?></div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>