<?php 
/* 
Template Name: Batch Decode
Template Post Type: page
*/ 

function decodeBatchID($batchID) {
	// Check if batch is concentrate
	if(str_contains($batchID, "XD")) {
		$is_concentrate = true;
	} else {
		$is_concentrate = false;
		$formattedXD = null;
	}

	// pull harvest date from batch ID and reformat
	$unformattedHD = substr($batchID, 0, 8);
	$yearHD = substr($unformattedHD, 0, 4);
	$monthHD = substr($unformattedHD, 4, 2);
	$dayHD = substr($unformattedHD, 6, 2);
	$formattedHD = $monthHD . "/" . $dayHD . "/" . $yearHD;
	
	if($is_concentrate) {
		// pull extraction date from batch ID and reformat if batch is extract
		
		// Pull everything from XD: onward, so we can check if XD has hyphenated date
		$xdSub = substr($batchID, strpos($batchID, "XD"));
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
<main>
</main>
	

	<?php


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
