<?php 
/* 
Template Name: Test Page 2/27/24
Template Post Type: page
*/ 

function checkIDCase () {
	if(!empty($_GET['ID'])) {
		$lab_id = $_GET['ID'];
	} elseif(!empty($_GET['id'])) {
		$lab_id = $_GET['id'];
	} else {
		$lab_id = "";
	}
	return $lab_id;
}

$lab_id = checkIDCase();

if(!empty(checkIDCase())){
	get_header( null, ['lab_id' => checkIDCase()] );
} else {
	get_header();
}
// API KEY AND QUERY PARAMS
$key = get_option('api_key');
if(!empty(checkIDCase())){
	$lab_id = htmlspecialchars(checkIDCase());
}
if(!empty($_GET['st'])){
	$state = htmlspecialchars($_GET["st"] );
} else {
	$state = null;
}
if(!empty($_GET['br'])){
	$brand = htmlspecialchars($_GET["br"] );
} else {
	$brand = null;
}

function ccApiCall($lab_id, $key) {
	if(!empty(checkIDCase())){
				// API CALL
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, 'https://api.confidentcannabis.com/v0/clients/sample/'.$lab_id);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					"X-ConfidentCannabis-Timestamp:". microtime(true),
					"X-ConfidentCannabis-APIKey:". $key
				));
	
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
				$result = curl_exec($ch);
	
				if (curl_errno($ch)) {
						print "Error: " . curl_error($ch);
						exit();
				}
	
				curl_close($ch);
				$json = json_decode($result, true);
				return $json;
	}
}


	global $wpdb;
	$exists = $wpdb->get_var( 
		"SELECT COUNT(*) FROM {$wpdb->prefix}lab_data WHERE lab_id = '$lab_id'",
	 );
	
	if ( ! $exists && $lab_id != "" ) {
		$data = ccApiCall($lab_id, $key);
		// $lab_id = checkIDCase();
		$batch_id = str_replace(' ', '', $data['sample']['batch_id']);
		$coa_url = $data['sample']['public_url'];
		$strain_name = $data['sample']['strain_name'];
		$total_cann = number_format($data['sample']['lab_data']['cannabinoid_total'], 2);
		$total_terps = number_format($data['sample']['lab_data']['terpene_total'], 2);
		$harvest_date = decodeBatchID($batch_id)[0];
		$manufacture_date = decodeBatchID($batch_id)[1];
		$extraction_method = $data['sample']['production_method_name'];
		qr_lab_add_data($lab_id, $data);
	} elseif ( $lab_id != "" ) {
		$data = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}lab_data WHERE lab_id = '$lab_id'");
		$lab_id = $data->lab_id;
		$batch_id = str_replace(' ', '', $data->batch_id);
		$coa_url = $data->coa_url;
		$strain_name = $data->strain_name;
		$total_cann = $data->total_cann;
		$total_terps = $data->total_terps;
		$harvest_date = $data->harvest_date;
		$manufacture_date = $data->manufacture_date;
		$extraction_method = $data->extraction_method;
	}




function qr_lab_add_data($lab_id, $data){
	global $wpdb;

	$table_name = $wpdb->prefix . 'lab_data';

	$wpdb->insert(
			$table_name,
			array(
					'lab_id' => $lab_id,
					'batch_id' => $data['sample']['batch_id'],
					'coa_url' => $data['sample']['public_url'],
					'strain_name' => $data['sample']['strain_name'],
					'harvest_date' => decodeBatchID($data['sample']['batch_id'])[0],
					'manufacture_date' => decodeBatchID($data['sample']['batch_id'])[1],
					'extraction_method' => $data['sample']['production_method_name'],
					'total_cann' => number_format($data['sample']['lab_data']['cannabinoid_total'], 2),
					'total_terps' => number_format($data['sample']['lab_data']['terpene_total'], 2)
			)
	);
}


switch ($brand) {
	case "a":
			$brand_display_name = "Aeriz";
			$brand_link = "https://aeriz.com";
			break;
	case "d":
			$brand_display_name = "Daze Off";
			$brand_link = "https://dazeoff.com";
			break;
	case "9":
			$brand_display_name = "93 Boyz";
			$brand_link = "https://93boyz.com";
			break;
	case "u":
			$brand_display_name = "UpNorth";
			$brand_link = "https://upnorthhumboldt.com";
			break;
	case "f":
			$brand_display_name = "Fig Farms";
			$brand_link = "https://www.figfarms.com/store-finder";
			break;
}

function decodeBatchID($batchID) {
	// Check if batch is concentrate
	if(str_contains(strtoupper($batchID), "XD")) {
		$is_concentrate = true;
		$is_mfg = false;
	} elseif(str_contains(strtoupper($batchID), "MFG")) {
		$is_mfg = true;
		$is_concentrate = true;
	} else {
		$is_concentrate = false;
		$is_mfg = false;
		$formattedXD = null;
	}

  // If batchID contains 2 date strings, but isn't a concentrate... 
  if(preg_match_all('/[0-9]{8}/', $batchID) > 1 && $is_concentrate == false) {
    preg_match_all('/[0-9]{8}/', $batchID, $match);
    $unformattedHD0 = substr($match[0][0], 0, 8);
    $yearHD0 = substr($unformattedHD0, 0, 4);
    $monthHD0 = substr($unformattedHD0, 4, 2);
    $dayHD0 = substr($unformattedHD0, 6, 2);
    $formattedHD0 = $monthHD0 . "/" . $dayHD0 . "/" . $yearHD0;
    
    $unformattedHD1 = substr($match[0][1], 0, 8);
    $yearHD1 = substr($unformattedHD1, 0, 4);
    $monthHD1 = substr($unformattedHD1, 4, 2);
    $dayHD1 = substr($unformattedHD1, 6, 2);
    $formattedHD1 = $monthHD1 . "/" . $dayHD1 . "/" . $yearHD1;

    $formattedHD = $formattedHD0 . " | " . $formattedHD1;

		//if batchID contains 2 HD strings and is a MFG
  } elseif(preg_match_all('/[0-9]{8}/', $batchID) > 1 && $is_mfg == true) {
    preg_match_all('/[0-9]{8}/', $batchID, $match);
    $unformattedHD0 = substr($match[0][0], 0, 8);
    $yearHD0 = substr($unformattedHD0, 0, 4);
    $monthHD0 = substr($unformattedHD0, 4, 2);
    $dayHD0 = substr($unformattedHD0, 6, 2);
    $formattedHD0 = $monthHD0 . "/" . $dayHD0 . "/" . $yearHD0;
    
    $unformattedHD1 = substr($match[0][1], 0, 8);
    $yearHD1 = substr($unformattedHD1, 0, 4);
    $monthHD1 = substr($unformattedHD1, 4, 2);
    $dayHD1 = substr($unformattedHD1, 6, 2);
    $formattedHD1 = $monthHD1 . "/" . $dayHD1 . "/" . $yearHD1;

    $formattedHD = $formattedHD0 . " | " . $formattedHD1;
  } else {
    // pull harvest date from batch ID and reformat
    $unformattedHD = substr($batchID, 0, 8);
    $yearHD = substr($unformattedHD, 0, 4);
    $monthHD = substr($unformattedHD, 4, 2);
    $dayHD = substr($unformattedHD, 6, 2);
    $formattedHD = $monthHD . "/" . $dayHD . "/" . $yearHD;
  }

	
	if($is_concentrate) {
		// pull extraction date from batch ID and reformat if batch is extract
		
		// Pull everything from XD: onward, so we can check if XD has hyphenated date
		if(!$is_mfg) { 
			$xdSub = substr($batchID, strpos(strtoupper($batchID), "XD"));
		} else {
			$xdSub = substr($batchID, strpos(strtoupper($batchID), "MFG"));
		}
		// If XD has hyphenated date, pull different substring for manufacture date
		if(str_contains( $xdSub, "-" )) {
			$unformattedXD = substr($xdSub, 3, 8);
		} else { 
			$unformattedXD = substr($batchID, -8);
		}
		$yearXD = substr($unformattedXD, 0, 4);
		$monthXD = substr($unformattedXD, 4, 2);
		$dayXD = substr($unformattedXD, 6, 2);
		$formattedXD = $monthXD . "/" . $dayXD . "/" . $yearXD;

	}

	return array($formattedHD, $formattedXD, $is_concentrate);
}


?>

<!-- STYLES -->
<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;700&display=swap');


	/* Font Styles */
	html{font-size: 62.5%}
	body {
		font-family: "Roboto-Mono", monospace;
		font-size: 2rem;
	}
	h1 {
		font-size: 3.6rem;
		font-weight: 700;
		line-height: 1;
		margin-top: 0;
	}
	h1 span {
		font-weight: 300;
	}
	h2 {
		font-size: 2.4rem;
		margin:0;
	}
	p {
		font-weight: 700;
	}
	p span, h2 span {
		font-weight: 300;
	}
	.strain-container {
		font-size: 2.4rem;
	}
	.strain-detail-container {
		font-size: 2rem;
	}
	.information-container p {
		margin: 0;
	}

	/* Layout */
	main {
		display: grid;
		place-content: center;
		padding: 100px 40px;
		/* height: calc(100vh - 100px); */
		min-height: 800px
	}

	section.qrlab-info {
		display: grid;
		grid-gap: 40px;
		grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
	}

	@media only screen and (max-width: 400px) {
		section.qrlab-info {
		grid-template-columns: repeat(auto-fit, minmax(86vw, 1fr));
	}
	}

	.information-container {
		display: grid;
    	grid-gap: 40px;
	}

	.iframe-container {
		min-height: 600px;
	}

	#pdf_iframe {
		height: 100%;
		width: 100%;
	}

	.links {
		display: flex;
		flex-wrap: wrap;
	}

	.links a {
    text-decoration: none;
    color: white;
    background: grey;
    padding: 20px;
    border-radius: 4px;
		margin-right: 40px;
		margin-bottom: 40px;
}

</style>
<!-- END STYLES -->
<?php if(!empty(checkIDCase())){ ?>
<main class="main">
	<section class="qrlab-info">
		<div class="information-container">
			<div class="strain-container">
				<h1>Strain: <span><?= $strain_name  ?></span></h1>
			</div>

			<div class="strain-detail-container">
				<p>Batch ID: <span class="batch-id"><?= $batch_id  ?></span></p>
				<?php //if(!$manufacture_date){ ?>
				<p>Harvest Date: <span class="harvest-date"><?= $harvest_date ?></span></p>
				<?php //}
				if($manufacture_date) { ?>
				<p>Manufacture Date: <span><?= $manufacture_date ?></span></p>
				<p>Extraction Method: <span><?= $extraction_method ?></span></p>
				<?php } ?>
			</div>
			
			<div class="cultivation-container">
				<p>Cultivated by Greens Goddess Products, Inc.</p>
				<p>Establishment License Number: <span>00000106DCQV00747138</span></p>
			</div>
			
			<div class="disclaimer-container">
				<p>Using marijuana during pregnancy could cause birth defects or other health issues to your unborn child.</p>
			</div>
			<div class="links">
				<a target="_blank" href="<?= $coa_url ?>" class="download-btn">View COA</a>
				<?php if(!empty($brand_link)) { ?>
					<a target="_blank" href="<?=$brand_link ?>" class="brand-button">Shop <?= $brand_display_name ?></a>
				<?php } ?>
				<a href="/distribution">Distribution Chain</a>
			</div>
		</div>
		<div class="iframe-container">
			<iframe
				id="pdf_iframe"
				src="<?= $coa_url ?>"
			></iframe>
		</div>	
	</section>
</main>
<?php } else { ?>
<main class="main">
		<p>Please scan the QR code on your product to look up product information.</p>
</main>
	

	<?php }


// function qrlab_create_table() {
// 	global $wpdb;

// 	$table_name = $wpdb->prefix . 'lab_data';

// 	$charset_collate = $wpdb->get_charset_collate();

// 	$sql = "CREATE TABLE $table_name (
// 			lab_id VARCHAR(30) NOT NULL,
// 			batch_id VARCHAR(50) NOT NULL,
// 			coa_url VARCHAR(10000),
// 			strain_name VARCHAR(50),
// 			harvest_date VARCHAR(50),
// 			manufacture_date VARCHAR(50),
// 			extraction_method VARCHAR(50),
// 			total_cann VARCHAR(50),
// 			total_terps VARCHAR(50),
// 			PRIMARY KEY  (lab_id),
// 			KEY batch_key (batch_id)
// 			-- KEY lab_key (lab_id)
// 	) $charset_collate;";

// 	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
// 	dbDelta( $sql );
// }

// qrlab_create_table();

get_footer();
