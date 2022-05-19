<?php
$global_city = 'Melbourne';
$site = "ComfyFirst " . $global_city;
$phone = '1300 775 634';
$email = 'info@comfyfirst.com.au';
$address = 'Unit 6, 8 Jullian Close, Banksmeadow, NSW 2019';

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$domain = "http://$_SERVER[HTTP_HOST]/projects/cf";

$site_key = '6LfKepUUAAAAAA5yachgCAPVFrUR1rXk036Hqf8r';
$secret = '6LfKepUUAAAAAPhqp_QISjkeMBcg75dZtXfHI4n9';

$alts = ['Fast Plumbers', 'All Plumbing Needs', 'Professional Plumbers', 'Great Service', 'Plumbers' . $global_city, 'Hot Water', 'Bathroom Plumbing'];

date_default_timezone_set('Australia/Sydney');

/* lazyload webp */
function lazyImg($src, $alt, $class, $width = "auto", $height = "auto")
{
  global $domain;
  $ti = __DIR__;
  $srcwebp = preg_replace('/(?:jpg|png|gif)$/i', 'webp', $src);
  $webp_file = $ti . '/assets/images/' . $srcwebp;
  $img_file = $ti . '/assets/images/' . $src;

  if (file_exists($img_file)) {
    if (!file_exists($webp_file)) {
      if (exif_imagetype($img_file) == IMAGETYPE_JPEG) {
        $img = imagecreatefromjpeg($img_file);
      } elseif (exif_imagetype($img_file) == IMAGETYPE_GIF) {
        $img = imagecreatefromgif($img_file);
      } else {
        $img = imagecreatefrompng($img_file);
      }
      imagepalettetotruecolor($img);
      imagewebp($img, $webp_file);
    }
    $html = sprintf('<picture class="%3$s mw-100 loadall"><source type="image/webp" data-srcset="' . $domain . '/assets/images/%1$s">', $srcwebp, $alt, $class);
    $html .= sprintf('<img alt="%2$s" class="lazy loadall" data-src="' . $domain . '/assets/images/%1$s" width="%4$s" height="%5$s">', $src, $alt, $class, $width, $height);
    //src="'.$domain.'/assets/images/pl.jpg" 
    $html .= '</picture>';
  } else {
    $html = 'Missing: ' . $src;
  }
  return $html;
}


function randalts($alts)
{
  $key = array_rand($alts, 1);
  $alt = $alts[$key];
  return $alt;
}

function star($count)
{
  $html = '';
  for ($i = 0; $i < $count; $i++) {
    $html .= '<small class="fas fa-star "></small>';
  }
  return $html;
}

$menu = [
  'Discover ComfyFirst' => 'discover-comfyfirst',
  'Heating Services' => [],
  'Cooling Services' => [],
  'Air Con Types' => [],
  'Finance' => 'finance',
  'DIY' => 'diy',
  'Contact' => 'contact',
];

$heating_services = [
  'Gas Ducted Heating' => 'service-gas-ducted-heating',
  'Ducted Heating' => 'service-ducted-heating',
  'Wall Furnaces' => '', // waiting-on-content
  'Gas Log Fires' => '', // waiting-on-content
  'Hydronic Heating' => 'service-hydronic-heating',
  'Space Heaters' => '', // waiting-on-content
  'Room Sealed Appliances' => '', // waiting-on-content
  'Duct Work Replacement Repairs Heating &amp; Cooling' => '', // waiting-on-content
  'Corrosion Protection' => 'corrosion-protection',
  'Split System Installation' => 'installation',
  'Split System Maintenance' => 'maintenance-tune-up',
  'Repairs' => 'repairs',
  'Replacement' => 'replacement',
  'Rejuvenation Eco Clean' => 'rejuvenation-eco-clean',
  'Recharge & Leak Repairs' => 'recharge-leak-repairs',
  'Home Automation' => 'home-automation',
];

$cooling_services = [
  'Split System' => 'split-system',
  'Ducted Heating &amp; Cooling' => 'service-ducted-heating-and-cooling',
  'Regas' => '', // waiting-on-content
  'Multi Head Split Systems' => '', // waiting-on-content
  'Evaporative Cooling' => 'evaporative-cooling', // waiting-on-content
  'Duct Work Replacement Repairs Heating &amp; Cooling' => '', // waiting-on-content
  'Corrosion Protection' => 'corrosion-protection',
  'Ducted System Installation' => 'installation',
  'Recharge & Leak Repairs' => 'recharge-leak-repairs',
  'Ducted System Maintenance' => 'maintenance-tune-up',
  'Rejuvenation Eco Clean' => 'rejuvenation-eco-clean',
  'Ducted System Repairs' => 'repairs',
];

$air_con_types = [
  'Split System' => 'split-system',
  'Ducted System' => 'ducted-system',
  'Cooling' => 'gas-heating-and-cooling-system',
  'Multi system' => 'multi-system',
  'Bulk Head AC Units' => 'bulkhead',
  'Floor Heating System' => 'floor-system',
  'Package Air Conditioning unit' => 'package-units',
  'Ceiling Cassette' => 'ceiling-cassette',
  'Suspended Casette' => 'suspended-cassette',
  'VRV System' => 'vrv-system', //smart-controls
  'Window Wall AC System' => 'window-wall-system', //bonaire-evaporative-cooling-systems
'Evaporative Cooling' => 'evaporative-cooling', //evaporative-cooling-systems
  'Multi-Air System' => 'multi-split-system',
  'Central Gas Heating System' => 'central-gas-heating-system',
  'Ducted Split Units' => 'ducted-split-units',
  'Gas Heating And Cooling System' => 'gas-heating-and-cooling-system',
  'Multi Split System' => 'multi-split-system',
  'Split Wall System' => 'split-wall',
  'Water Cool Units' => 'water-cool-units',
];

$air_con_brands = [
  'Daikin' => 'daikin',
  'Fujitsu' => 'fujitsu',
  'Brivis' => 'brivis',
  'Actron' => 'actron',
  'Temperzone' => 'temperzone',
  'Kelvinator' => 'kelvinator',
];

$commercial_air_con = [
  'Commercial Air Conditioning' => 'commercial-airconditioning',
  'Commercial Range Hood' => 'commercial-range-hood',
  'Fabric Duct Systems' => 'fabric-duct-systems',
  'Fabric Ductwork / Fabric Ducting' => 'fabric-ductwork-fabric-ducting',
  'Indoor Pool Ventilation' => 'indoor-pool-ventilation',
  'Commercial Exhaust Fans Installation' => 'commercial-exhaust-fans-installation',
  'Pool Package Air Conditioning' => 'pool-package-air-conditioning',
  'Make-Up Air Supply Ventilator' => 'make-up-air-supply-ventilator',
  'Car Park Supply Systems' => 'car-park-supply-systems',
  'Stair Pressurisation System' => 'stair-pressurisation-system',
  'Stair Pressurisation systems' => 'stair-pressurisation-systems',
  'Jet Fan Installation' => 'jet-fan-installation',
  'Commercial Ventilation' => 'commercial-ventilation',
  'Mechanical Ventilation' => 'mechanical-ventilation',
];

$fmenu = [
  'Quick Links' => [
    'Home' => '/',
    'Discover ComfyFirst' => 'discover-comfyfirst',
    'Serviced Areas' => 'serviced-areas',
    'DIY' => 'diy',
    'Contact Us' => 'contact',
  ],
  'Heating' => $heating_services,
  'Cooling' => $cooling_services,
  'Types' => [
    'Split Wall' => 'split-wall',
    'Ducted System' => 'ducted-system',
    'Multi System' => 'multi-system',
    'Bulk Head' => 'bulkhead', //air-conditioning-zoning
    'Floor System' => 'floor-system',
    'Package Units' => 'package-units',
    'Ceiling Cassette' => 'ceiling-cassette',
    'Suspended Casette' => 'suspended-cassette',
    'VRV System' => 'vrv-system', //smart-controls
    'Window Wall System' => 'window-wall-system', //bonaire-evaporative-cooling-systems
    'Evaporative Cooling' => 'evaporative-cooling', //evaporative-cooling-systems
    'Central Gas Heating System' => 'central-gas-heating-system',
    'Ducted Split Units' => 'ducted-split-units',
    'Gas Heating And Cooling System' => 'gas-heating-and-cooling-system',
    'Multi Split System' => 'multi-split-system',
    'Split System' => 'split-system',
    'Split Wall System' => 'split-wall',
    'Water Cool Units' => 'water-cool-units',
  ],
  'Support' => [
    'Finance' => 'finance',
    'FAQ' => 'faq',
    'Awards' => 'awards',
    'Reviews' => 'reviews',
    'Working with Us' => 'careers',
    'Book Online' => 'book-online',
    'Terms & Privacy' => 'assets/termsconditions.pdf',
  ],
];

$services_menu = [
  'PlumbFirst' => [],
  'ElecFirst' => [],
  'ComfyFirst' => [
    'Heating Services' => $heating_services,
    'Cooling Services' => $cooling_services,
    'Air Con Types' => $air_con_types,
    'Air Conditioning Brands' => $air_con_brands,
    'Commercial Air Conditioning' => $commercial_air_con,
  ],
];

$services = [
  'PlumbFirst' => [],
  'ElecFirst' => [],
  'ComfyFirst' => [
    'Heating Services' => $heating_services,
    'Hydronic Heating' => [
      'Under Floor Heating' => 'service-under-floor-heating',
      'Boilers' => 'service-boilers',
      'Combi Boilers' => 'service-combi-boilers',
      'Heated Towel Rails' => 'service-heated-towel-rails',
      'Panel Power Flush' => 'service-panel-power-flush',
    ],
    'Air Conditioning Types' => $air_con_types,
    'Air Conditioning Brands' => $air_con_brands,
    'Commercial Air Conditioning' => $commercial_air_con,
  ],
];

/*
$reviews=[
  [
    'star'=>'5.0',
    'heading'=>'Service.com.au',
    'content'=>'Consistent & real customer feedback',
    'testi'=>'Excellent reviews from our loyal customers',
    'total'=>'13',
  ],
  [
    'star'=>'4.9',
    'heading'=>'Google Reviews',
    'content'=>'Over 99 excellent customer reviews',
    'testi'=>'Over 150 outstanding reviews',
    'total'=>'158',
    'url'=>'https://www.google.com/search?rlz=1C1CHBF_en-GBAU887AU887&sxsrf=ALeKk027cyZnSCpP18gVj98QlaESUybOcg%3A1612913128261&ei=6BkjYPOzD9TTz7sP48-z8AE&q=mr+splash+plumbing&oq=mr+splash&gs_lcp=CgZwc3ktYWIQARgAMgkIIxAnEBMQiwMyBwgjECcQiwMyBwgjECcQiwMyBQgAEMsBMgYIABAHEB4yBggAEAcQHjIFCAAQywEyBggAEAcQHjIGCAAQBxAeMgUIABDLAToKCAAQsAMQChDLAToJCAAQsAMQChAeOgcIABCwAxANOgkIABCwAxANEB46DQgAELADEA0QBRAKEB46BQgmELADUNNFWNNFYJ9VaAFwAHgAgAHVAYgB7gKSAQUwLjEuMZgBAKABAaoBB2d3cy13aXrIAQq4AQHAAQE&sclient=psy-ab#lrd=0x6b12bfdcb0b33ebb:0xb76d7432f2895b1a,1,,,',
  ],
];*/
