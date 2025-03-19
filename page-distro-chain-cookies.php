<?php
/* 
Template Name: Distro Chain Cookies
Template Post Type: page
*/ 
get_header();
?>
<style>
	main {
		display: grid;
		justify-content: center;
		padding: 100px 40px;
		/* height: calc(100vh - 100px); */
		min-height: 800px
	}
	table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
</style>
	<main id="primary" class="site-main">
	<section class="distribution-chain">
		<table>
    <caption>PetalFast Distribution Chain and points of intended sale</caption>
			<thead>
				<tr>
					<th scope="col">Dispensary</th>
					<th scope="col">License# </th>
				</tr>
			</thead>
			<?php 
			    $json = '[
            {
              "Record ID": 25491742322,
              "Company name": "Svaccha, LLC dba Nirvana Center AJ (1985 Apache Trail)",
              "License #": "00000137DCOF00188324"
            },
            {
              "Record ID": 23295804829,
              "Company name": "Nirvana Cannabis - Tucson",
              "License #": "0000170ESTVQ68678199"
            },
            {
              "Record ID": 22990028118,
              "Company name": "Ponderosa Chandler",
              "License #": "00000109ESVM44878444"
            },
            {
              "Record ID": 22274382747,
              "Company name": "JARS - Arcadia",
              "License #": ""
            },
            {
              "Record ID": 22268075631,
              "Company name": "Along Comes Mari",
              "License #": "00000067ESBS89254298"
            },
            {
              "Record ID": 22251491971,
              "Company name": "Curaleaf Queen Creek",
              "License #": "00000049DCRR00713151"
            },
            {
              "Record ID": 22249866041,
              "Company name": "Non Profit Patient Center  Inc.",
              "License #": "00000037ESIX56363099"
            },
            {
              "Record ID": 21691195663,
              "Company name": "The Phoenix Cannabis Company",
              "License #": "00000103ESEK38100955"
            },
            {
              "Record ID": 21691166814,
              "Company name": "All greens Dispensary - Quartzsite",
              "License #": "00000142ESIL74759395"
            },
            {
              "Record ID": 21225333158,
              "Company name": "Yilo - Arcadia",
              "License #": "00000030DCLQ00844256"
            },
            {
              "Record ID": 20322657151,
              "Company name": "Phoenix Cannabis Co.",
              "License #": "00000051DSCYH00987523"
            },
            {
              "Record ID": 20321076327,
              "Company name": "Ponderosa Releaf",
              "License #": "00000100ESEC12878172"
            },
            {
              "Record ID": 20322405768,
              "Company name": "Sol Flower - University",
              "License #": "000000118DCKD00426097"
            },
            {
              "Record ID": 20322421083,
              "Company name": "The Good Dispensary",
              "License #": "00000048DCKJ00945635"
            },
            {
              "Record ID": 20320921718,
              "Company name": "Ponderosa Relief Florence",
              "License #": "0000154ESTQI31348041"
            },
            {
              "Record ID": 20322745398,
              "Company name": "Zen Leaf Chandler",
              "License #": "000000126DCSO00060479"
            },
            {
              "Record ID": 20322421082,
              "Company name": "Nirvana Distro Hub",
              "License #": "0000156ESTDP70697204"
            },
            {
              "Record ID": 20322444544,
              "Company name": "Nature Wonder Grand",
              "License #": "00000037ESIX563633099"
            },
            {
              "Record ID": 20322327809,
              "Company name": "Nirvana Distro",
              "License #": "21508094"
            },
            {
              "Record ID": 20322846530,
              "Company name": "Zen Leaf/Local Joint - University",
              "License #": "00000086ESQZ01367420"
            },
            {
              "Record ID": 20322381689,
              "Company name": "Zen Leaf Dunlap",
              "License #": "00000033DCCK00134006"
            },
            {
              "Record ID": 20322676075,
              "Company name": "The Mint Dispensary Tempe",
              "License #": "0000161ESTOJ23023764"
            },
            {
              "Record ID": 20322555139,
              "Company name": "Zen Leaf Mesa",
              "License #": "00000037DCDM00904008"
            },
            {
              "Record ID": 20322421081,
              "Company name": "Zen Leaf Gilbert",
              "License #": "000000112DCLK00614860"
            },
            {
              "Record ID": 20322405767,
              "Company name": "Ponderosa Relief Glendale",
              "License #": "00000062DCAY00861940"
            },
            {
              "Record ID": 20321168140,
              "Company name": "Zen Leaf - Mesa",
              "License #": "00000037DCDM00904008"
            },
            {
              "Record ID": 20322467612,
              "Company name": "Emerald Dispensary",
              "License #": "00000033DCCK00134006"
            },
            {
              "Record ID": 20322614421,
              "Company name": "Zen Leaf/Territory - Chandler",
              "License #": "000000126DCSO00060479"
            },
            {
              "Record ID": 20322657149,
              "Company name": "Apache County Dispensary (Elevate)",
              "License #": "00000133ESGJ79432018"
            },
            {
              "Record ID": 20320939615,
              "Company name": "Clifton Bakery Dispensary",
              "License #": "00000140ESDP54259308"
            },
            {
              "Record ID": 20320921717,
              "Company name": "The Green Halo",
              "License #": "00000026DCOM00244803"
            },
            {
              "Record ID": 20322712321,
              "Company name": "Zen Leaf/Territory - Gilbert",
              "License #": "000000112DCLK00614860"
            },
            {
              "Record ID": 20322846529,
              "Company name": "Local Joint Powered By Zen Leaf",
              "License #": "00000091DCWY00555666"
            },
            {
              "Record ID": 20322629522,
              "Company name": "Local Joint by Zen Leaf",
              "License #": "00000091DCWY00555666"
            },
            {
              "Record ID": 19257783952,
              "Company name": "Trulieve AJ",
              "License #": "00000011ESVC04035599"
            },
            {
              "Record ID": 18658582436,
              "Company name": "JARS - Mesa",
              "License #": ""
            },
            {
              "Record ID": 18658549905,
              "Company name": "JARS - Kingman",
              "License #": ""
            },
            {
              "Record ID": 18655220525,
              "Company name": "JARS - El Mirage",
              "License #": ""
            },
            {
              "Record ID": 18592715928,
              "Company name": "Harvest 2",
              "License #": "***************"
            },
            {
              "Record ID": 18593240658,
              "Company name": "Jamestown Center 2",
              "License #": "00000031DCPP00603866"
            },
            {
              "Record ID": 18285740381,
              "Company name": "Story - Chandler North",
              "License #": "00000021ESQX24132908"
            },
            {
              "Record ID": 18285715213,
              "Company name": "Story - McDowell",
              "License #": "00000092ESKW00353670"
            },
            {
              "Record ID": 18285765483,
              "Company name": "Story - Grand Ave",
              "License #": "00000090ESFB63917979"
            },
            {
              "Record ID": 18126380851,
              "Company name": "Sunday Goods Tempe",
              "License #": "00000114DCPD00232092"
            },
            {
              "Record ID": 18126271401,
              "Company name": "Story Cannabis Williams",
              "License #": "0000158ESTLH17620655"
            },
            {
              "Record ID": 18126256720,
              "Company name": "Sol Flower Casa Nobles",
              "License #": "0000152ESTNJ52349435"
            },
            {
              "Record ID": 18033241199,
              "Company name": "Noble Herb (Route 66)",
              "License #": "NA"
            },
            {
              "Record ID": 17896394756,
              "Company name": "Story Cannabis Bullhead City",
              "License #": "0000147ESTXX54706468"
            },
            {
              "Record ID": 17896303726,
              "Company name": "Sol Flower North Tucson",
              "License #": "0000171ESTSC03605413"
            },
            {
              "Record ID": 17892652346,
              "Company name": "Sol Flower Foothills Tucson",
              "License #": "0000166ESTNU15027116"
            },
            {
              "Record ID": 17896601867,
              "Company name": "Sol Flower South Tuscon",
              "License #": "0000163ESTSO81819209"
            },
            {
              "Record ID": 17723022885,
              "Company name": "Nirvana Cottonwood",
              "License #": "TBD"
            },
            {
              "Record ID": 17723043948,
              "Company name": "Nirvana - Florence (Pinal)",
              "License #": "TBD"
            },
            {
              "Record ID": 17723022638,
              "Company name": "Nirvana Cannabis - Florence",
              "License #": "0000160ESTDY36165846"
            },
            {
              "Record ID": 17723022485,
              "Company name": "Nirvana  7th St.",
              "License #": "00000111ESTX14447382"
            },
            {
              "Record ID": 17414613927,
              "Company name": "Harvest - Hayden",
              "License #": "TBD"
            },
            {
              "Record ID": 17414609185,
              "Company name": "Harvest Avondale",
              "License #": "TBD"
            },
            {
              "Record ID": 17414545768,
              "Company name": "Harvest - Peoria",
              "License #": "TBD"
            },
            {
              "Record ID": 17414480958,
              "Company name": "Harvest - Alhambra",
              "License #": "TBD"
            },
            {
              "Record ID": 17414463109,
              "Company name": "Harvest - Cottonwood",
              "License #": "TBD"
            },
            {
              "Record ID": 17414603145,
              "Company name": "JARS - Somerton",
              "License #": "TBD"
            },
            {
              "Record ID": 17414550389,
              "Company name": "JARS - Bullhead City",
              "License #": "TBD"
            },
            {
              "Record ID": 17414535450,
              "Company name": "Curaleaf - Sedona",
              "License #": "TBD"
            },
            {
              "Record ID": 17414518115,
              "Company name": "Trulieve Tatum & Bell",
              "License #": "TBD"
            },
            {
              "Record ID": 17301626161,
              "Company name": "JARS Distribution Center/ Legacy & Co (Rec)",
              "License #": "00000079ESTS64678211"
            },
            {
              "Record ID": 17187398296,
              "Company name": "Story Hub",
              "License #": "00000100DCWU00857159"
            },
            {
              "Record ID": 22251503967,
              "Company name": "Story Cannabis Havasu",
              "License #": "0000155ESTWD37312465"
            },
            {
              "Record ID": 16803911242,
              "Company name": "OASIS",
              "License #": "TBD"
            },
            {
              "Record ID": 16776965015,
              "Company name": "Deeply Rooted",
              "License #": "0000153ESTXW47689762"
            },
            {
              "Record ID": 16732625979,
              "Company name": "NAZM",
              "License #": "TBD"
            },
            {
              "Record ID": 16732150127,
              "Company name": "THE MINT",
              "License #": "TBD"
            },
            {
              "Record ID": 16732149867,
              "Company name": "NIRVANA",
              "License #": "TBD"
            },
            {
              "Record ID": 16732149625,
              "Company name": "SOL",
              "License #": "TBD"
            },
            {
              "Record ID": 16195499188,
              "Company name": "Jars Safford",
              "License #": "00000138ESOA91816349"
            },
            {
              "Record ID": 16195449249,
              "Company name": "Jars Globe",
              "License #": "00000136ESTJ56415147"
            },
            {
              "Record ID": 15898643993,
              "Company name": "Tru Med Dispensary",
              "License #": "00000079DCUU00478781"
            },
            {
              "Record ID": 15898599580,
              "Company name": "Jars Cave Creek",
              "License #": "00000107ESVJ79465811"
            },
            {
              "Record ID": 15898641423,
              "Company name": "AZ Global",
              "License #": "0000165ESTJX05511145"
            },
            {
              "Record ID": 15838028468,
              "Company name": "Trulieve Sierra Vista",
              "License #": "TBD"
            },
            {
              "Record ID": 15837963792,
              "Company name": "The Mint 75th AVE",
              "License #": "TBD"
            },
            {
              "Record ID": 15837941088,
              "Company name": "Trulieve Roosevelt",
              "License #": "TBD"
            },
            {
              "Record ID": 15837327412,
              "Company name": "Harvest Tucson on Swan",
              "License #": "TBD"
            },
            {
              "Record ID": 15609338474,
              "Company name": "LunchBox",
              "License #": "00000143ESKB17654619"
            },
            {
              "Record ID": 15134808683,
              "Company name": "HEALTH FOR LIFE",
              "License #": "TBD"
            },
            {
              "Record ID": 15135358223,
              "Company name": "HARVEST AZ",
              "License #": "TBD"
            },
            {
              "Record ID": 15066009450,
              "Company name": "CURALEAF",
              "License #": "TBD"
            },
            {
              "Record ID": 14942880111,
              "Company name": "Nature Wonder Phoenix",
              "License #": "00000089ESLW87335751"
            },
            {
              "Record ID": 11517625004,
              "Company name": "Jars Somerton",
              "License #": "00000145ESNP12373673"
            },
            {
              "Record ID": 10922142282,
              "Company name": "VERANO",
              "License #": "TBD"
            },
            {
              "Record ID": 15135483232,
              "Company name": "JARS",
              "License #": "TBD"
            },
            {
              "Record ID": 10541526863,
              "Company name": "The Mint Dispensary Northern",
              "License #": "00000034ESEZ92106085"
            },
            {
              "Record ID": 15134808167,
              "Company name": "DEBBIE\'S",
              "License #": "TBD"
            },
            {
              "Record ID": 10288750144,
              "Company name": "NAZM - Tolleson",
              "License #": "00000055DCDA00381095"
            },
            {
              "Record ID": 10274460001,
              "Company name": "Yilo",
              "License #": "0000067dct00463260"
            },
            {
              "Record ID": 10274446990,
              "Company name": "Nature\'s Healing Center Inc. - The Flower Shop PHX HUB",
              "License #": "00000041ESLU31226658"
            },
            {
              "Record ID": 10274313325,
              "Company name": "Jars Payson",
              "License #": "00000137ESPF58509627"
            },
            {
              "Record ID": 10274260386,
              "Company name": "Arizona Wellness Collective 3, Inc. (Nova)",
              "License #": "00000044ESZW01555573"
            },
            {
              "Record ID": 10274260385,
              "Company name": "Giving Tree Dispensary",
              "License #": "000000021DCLU00461342"
            },
            {
              "Record ID": 10274224743,
              "Company name": "Curaleaf Scottsdale",
              "License #": "00000064DCTS00268592"
            },
            {
              "Record ID": 10272567185,
              "Company name": "Debbies Mesa",
              "License #": "00000098esaa47054477"
            },
            {
              "Record ID": 9929067923,
              "Company name": "Wickenburg Alternative Medicine LLC",
              "License #": "00000061DCMK00381513"
            },
            {
              "Record ID": 9929061216,
              "Company name": "White Mountain Health Center INC",
              "License #": "00000103DCDR00369521"
            },
            {
              "Record ID": 9929053722,
              "Company name": "YiLo Superstore",
              "License #": "00000073ESED95493026"
            },
            {
              "Record ID": 9929044268,
              "Company name": "TruMedDispensary",
              "License #": "00000079DCUU00478781"
            },
            {
              "Record ID": 9928801460,
              "Company name": "Valley of the Sun Medical Dispensary",
              "License #": "00000083DCYO00463840"
            },
            {
              "Record ID": 9929103904,
              "Company name": "Downtown Dispensary",
              "License #": "00000057DCHF00477864"
            },
            {
              "Record ID": 9929103898,
              "Company name": "The Good Dispensary",
              "License #": "00000072ESRF58078256"
            },
            {
              "Record ID": 9929103889,
              "Company name": "Story Cannabis Bell",
              "License #": "00000109DCIT00443532"
            },
            {
              "Record ID": 9929099083,
              "Company name": "The Flower Shop - Phoenix",
              "License #": "00000046DCYJ00671222"
            },
            {
              "Record ID": 9929081672,
              "Company name": "SWC Prescott",
              "License #": "00000074DCGW00540313"
            },
            {
              "Record ID": 9929081665,
              "Company name": "The Mint Dispensary Bell RD",
              "License #": "TBD"
            },
            {
              "Record ID": 9929076629,
              "Company name": "Sol Flower Sun City",
              "License #": "00000063DCTB00283389"
            },
            {
              "Record ID": 9929067931,
              "Company name": "The Green Halo",
              "License #": "00000026DCOM00244603"
            },
            {
              "Record ID": 9929061219,
              "Company name": "Sol Flower Deer Valley",
              "License #": "\t00000028DCGV00174888"
            },
            {
              "Record ID": 9929061214,
              "Company name": "Sol Flower McClintock",
              "License #": "00000019DCGM00234427"
            },
            {
              "Record ID": 9929053715,
              "Company name": "The Prime Leaf - University (W)",
              "License #": "00000025DCPT00084389"
            },
            {
              "Record ID": 9929053700,
              "Company name": "Territory Chandler (Zen Leaf Chandler)",
              "License #": "00000040ESDX57445071"
            },
            {
              "Record ID": 9929053624,
              "Company name": "The Prime Leaf - Midtown (W)",
              "License #": "00000039DCVR00320237"
            },
            {
              "Record ID": 9929044257,
              "Company name": "Reef Dispensaries Queen Creek",
              "License #": "00000053ESYR15319850"
            },
            {
              "Record ID": 9929039910,
              "Company name": "D2 Dispensary",
              "License #": "000000116DCJL00597353"
            },
            {
              "Record ID": 9929039899,
              "Company name": "Sunnyside Cannabis Dispensary",
              "License #": "00000080DCQI00709964"
            },
            {
              "Record ID": 9929033343,
              "Company name": "Curaleaf NW Phoenix",
              "License #": "00000042DCSI00109560"
            },
            {
              "Record ID": 9929033339,
              "Company name": "Sticky Saguaro",
              "License #": "00000108DCVB00423429"
            },
            {
              "Record ID": 9929033331,
              "Company name": "The Giving Tree Wellness CenterOf North Phoenix Inc.",
              "License #": "00000021DCLU00461342"
            },
            {
              "Record ID": 9929024945,
              "Company name": "Phoenix Relief Center Inc",
              "License #": "00000095DCVW00172644"
            },
            {
              "Record ID": 9928842105,
              "Company name": "Tucson Saints Dispensary",
              "License #": "00000071DCCX00288765"
            },
            {
              "Record ID": 9928834886,
              "Company name": "Ponderosa ReLeaf",
              "License #": "00000066DCBO00410690"
            },
            {
              "Record ID": 9928825988,
              "Company name": "Tru Bliss",
              "License #": "00000113DCUX00454549"
            },
            {
              "Record ID": 9928825987,
              "Company name": "The Superior Dispensary",
              "License #": "00000065DCLV00799347"
            },
            {
              "Record ID": 9928825968,
              "Company name": "The Flower Shop - Ahwatukee",
              "License #": "000000133DCEJ00283862"
            },
            {
              "Record ID": 9928820136,
              "Company name": "Story Tolleson",
              "License #": "00000104ESDH57805022"
            },
            {
              "Record ID": 9928814972,
              "Company name": "Territory Mesa (Zen Leaf Mesa)",
              "License #": "00000084ESFH12297246"
            },
            {
              "Record ID": 9928814948,
              "Company name": "The Mint Dispensary Mesa",
              "License #": "00000036ESXU42814428"
            },
            {
              "Record ID": 9928814946,
              "Company name": "Story Cannabis South",
              "License #": "00000036DCOP00819772"
            },
            {
              "Record ID": 9928814938,
              "Company name": "The Flower Shop - Mesa",
              "License #": "00000132DCYB00654510"
            },
            {
              "Record ID": 9928807567,
              "Company name": "Sol Flower Scottsdale Air Park",
              "License #": "00000008DCJJ00257791"
            },
            {
              "Record ID": 9928796340,
              "Company name": "Territory Gilbert (Zen Leaf Gilbert)",
              "License #": "00000112DCLK00614860"
            },
            {
              "Record ID": 9928789591,
              "Company name": "Cannabist Tempe (formerly SWC)",
              "License #": "00000097DCGK00454998"
            },
            {
              "Record ID": 9928781920,
              "Company name": "The Mint Tempe (Hub)",
              "License #": "00000128DCNB00202967"
            },
            {
              "Record ID": 9928781911,
              "Company name": "Sunday Goods Phoenix",
              "License #": "00000099ESVM28064808"
            },
            {
              "Record ID": 9929103909,
              "Company name": "Health For Life - Cave Creek",
              "License #": "00000075DCPP00704676"
            },
            {
              "Record ID": 9929103908,
              "Company name": "Nirvana Apache Junction",
              "License #": "0000148ESTMY68096274"
            },
            {
              "Record ID": 9929103895,
              "Company name": "Story Cannabis North",
              "License #": "000000100DCWU00857159"
            },
            {
              "Record ID": 9929099089,
              "Company name": "Medusa Farms Dispensary",
              "License #": "00000089DCQY00546716"
            },
            {
              "Record ID": 9929091734,
              "Company name": "Nirvana Center Phoenix",
              "License #": "00000032DCOW00232310"
            },
            {
              "Record ID": 9929091717,
              "Company name": "Nature Wonder Apache Junction",
              "License #": "00000035DCCB00049778"
            },
            {
              "Record ID": 9929091714,
              "Company name": "Medmen Scottsdale",
              "License #": "00000072DCMU00762354"
            },
            {
              "Record ID": 9929076631,
              "Company name": "Nirvana Tempe",
              "License #": "00000015DCGC00626237"
            },
            {
              "Record ID": 9929076627,
              "Company name": "Zen Leaf - Arcadia",
              "License #": "00000091DCWY00555666"
            },
            {
              "Record ID": 9929061212,
              "Company name": "Jars on 24th St",
              "License #": "000000073DCSV00210732"
            },
            {
              "Record ID": 9929053725,
              "Company name": "JARS Cannabis - Metrocenter",
              "License #": "00000073DCSV00210732"
            },
            {
              "Record ID": 9929053724,
              "Company name": "High Mountain Health",
              "License #": "00000087ESWR93327597"
            },
            {
              "Record ID": 9929053716,
              "Company name": "Story Phoenix",
              "License #": "00000088DCXB00897085"
            },
            {
              "Record ID": 9929044267,
              "Company name": "Story Cannabis Glendale",
              "License #": "00000014DCHT00564851"
            },
            {
              "Record ID": 9929044265,
              "Company name": "Nova Dispensary",
              "License #": "00000119DCKO00583347"
            },
            {
              "Record ID": 9929044262,
              "Company name": "Jamestown Center",
              "License #": "00000031DCPP0060366"
            },
            {
              "Record ID": 9929039893,
              "Company name": "JARS (Untamed Herbs)",
              "License #": "00000024DCTZ00479209"
            },
            {
              "Record ID": 9928842128,
              "Company name": "Consume Cannabis",
              "License #": "00000068DCJU00476804"
            },
            {
              "Record ID": 9928842108,
              "Company name": "Story Dunlap",
              "License #": "00000013DCOU00042197"
            },
            {
              "Record ID": 9928834889,
              "Company name": "Curaleaf Scottsdale",
              "License #": "00000125ESMC92036121"
            },
            {
              "Record ID": 9928814975,
              "Company name": "JARS New River",
              "License #": "00000006DCDX00478035"
            },
            {
              "Record ID": 9928814940,
              "Company name": "Herbal Wellness Center North",
              "License #": "00000052DCLI00194777"
            },
            {
              "Record ID": 9928807547,
              "Company name": "Nirvana Center West Phoenix",
              "License #": "00000012DCJT00224887"
            },
            {
              "Record ID": 9928801461,
              "Company name": "Zen Leaf Cave Creek",
              "License #": "00000105DCOU00194638"
            },
            {
              "Record ID": 9928789595,
              "Company name": "Nature Med Tucson",
              "License #": "00000077DCPS00216601"
            },
            {
              "Record ID": 9928789592,
              "Company name": "BEST Dispensary",
              "License #": "00000032DCOW00232310"
            },
            {
              "Record ID": 9928789590,
              "Company name": "Herbal Wellness Center South",
              "License #": "00000086DCKR00375578"
            },
            {
              "Record ID": 9928781918,
              "Company name": "Nirvana Center Prescott Valley",
              "License #": "00000009DCYP00763819"
            },
            {
              "Record ID": 9928781913,
              "Company name": "Kind Meds",
              "License #": "00000078DCBK00628996"
            },
            {
              "Record ID": 9928781902,
              "Company name": "Health For Life - Ellsworth",
              "License #": "00000093DCBC00293679"
            },
            {
              "Record ID": 9928776962,
              "Company name": "Health for Life - Crismon",
              "License #": "00000041DCEN00861221"
            },
            {
              "Record ID": 9928762891,
              "Company name": "Marigold",
              "License #": "00000106DCQV00747138"
            },
            {
              "Record ID": 18125265714,
              "Company name": "Story Cannabis Bisbee",
              "License #": "0000159ESTFT57497963"
            },
            {
              "Record ID": 9929103903,
              "Company name": "Harvest of Casa Grande",
              "License #": "00000044DCCJ00900645"
            },
            {
              "Record ID": 9929103886,
              "Company name": "Harvest of Menlo Park",
              "License #": "00000056DCLD00291476"
            },
            {
              "Record ID": 9929091713,
              "Company name": "Harvest of North Mountain",
              "License #": "00000125DCWD00787544"
            },
            {
              "Record ID": 9929076632,
              "Company name": "Arizona Natural Selections Scottsdale",
              "License #": "00000022DCRX00190936"
            },
            {
              "Record ID": 9929067945,
              "Company name": "Harvest of North Mesa",
              "License #": "00000004ESAN63639048"
            },
            {
              "Record ID": 9929061195,
              "Company name": "Noble Herb",
              "License #": "00000069DCFG00710475"
            },
            {
              "Record ID": 9929053726,
              "Company name": "Harvest HOC Scottsdale",
              "License #": "00000054dcov00321891"
            },
            {
              "Record ID": 9929044266,
              "Company name": "Harvest of Peoria",
              "License #": "00000023DCAK00675039"
            },
            {
              "Record ID": 9929044263,
              "Company name": "Harvest of Alhambra",
              "License #": "00000092DCEG00124317"
            },
            {
              "Record ID": 9929044240,
              "Company name": "Harvest of Tucson",
              "License #": "000000127DCSS00185167"
            },
            {
              "Record ID": 9929025031,
              "Company name": "Harvest of Tempe",
              "License #": "00000120DCEQ005788528"
            },
            {
              "Record ID": 9929024944,
              "Company name": "Health for Life - McDowell",
              "License #": "00000094DCTJ00667966"
            },
            {
              "Record ID": 9928842124,
              "Company name": "Harvest Baseline",
              "License #": "00000018DCST00941489"
            },
            {
              "Record ID": 9928834869,
              "Company name": "Harvest Distribution HUB",
              "License #": "00000081ESLT56066782"
            },
            {
              "Record ID": 9928834867,
              "Company name": "Story Williams",
              "License #": "00000051DCYH00987523"
            },
            {
              "Record ID": 9928825990,
              "Company name": "Hana Green Valley",
              "License #": "00000096DCXQ00231932"
            },
            {
              "Record ID": 9928820116,
              "Company name": "Harvest of Cottonwood",
              "License #": "000000124DCKQ00697385"
            },
            {
              "Record ID": 9928807568,
              "Company name": "Harvest of Glendale",
              "License #": "00000129DCKL00602472"
            },
            {
              "Record ID": 9928807565,
              "Company name": "Green Med Wellness Center",
              "License #": "00000017DCEX00412883"
            },
            {
              "Record ID": 9928807561,
              "Company name": "Greenpharms Dispensary Flagstaff",
              "License #": "00000038DCAL00224416"
            },
            {
              "Record ID": 9928796341,
              "Company name": "Harvest of Avondale",
              "License #": "00000007DCWH00607422"
            },
            {
              "Record ID": 9928796322,
              "Company name": "Hana Meds Tempe",
              "License #": "00000003DCOU00038157"
            },
            {
              "Record ID": 9928781921,
              "Company name": "Harvest Chandler",
              "License #": "00000135DCSM00130984"
            },
            {
              "Record ID": 9928781919,
              "Company name": "Harvest Of South Mesa",
              "License #": "00000084DXCM00601985"
            },
            {
              "Record ID": 9928776966,
              "Company name": "Greenpharms Dispensary Mesa",
              "License #": "00000004DCKF00438872"
            },
            {
              "Record ID": 9928776885,
              "Company name": "Harvest of Havasu",
              "License #": "00000005dcmv00766195"
            },
            {
              "Record ID": 10558874370,
              "Company name": "Farm Fresh",
              "License #": "000000DCBC051544644"
            },
            {
              "Record ID": 9929099102,
              "Company name": "Curaleaf Glendale",
              "License #": "00000050ESTO08528992"
            },
            {
              "Record ID": 9929099087,
              "Company name": "Curaleaf Bell",
              "License #": "00000107DCFT00824215"
            },
            {
              "Record ID": 9929081674,
              "Company name": "Jars Peoria",
              "License #": "TBD"
            },
            {
              "Record ID": 9929081660,
              "Company name": "Curaleaf Pavilions",
              "License #": "00000029DCRV00169614"
            },
            {
              "Record ID": 9929076647,
              "Company name": "Curaleaf Youngtown",
              "License #": "00000029ESAA16670843"
            },
            {
              "Record ID": 9929067922,
              "Company name": "Earth\'s Healing South",
              "License #": "00000027DCPI00457346"
            },
            {
              "Record ID": 9929061196,
              "Company name": "Earth\'s Healing North",
              "License #": "00000045DCYU00647140"
            },
            {
              "Record ID": 9929053623,
              "Company name": "Curaleaf Camelback",
              "License #": "00000047DCOU00565305"
            },
            {
              "Record ID": 9929039894,
              "Company name": "Jars North Phoenix",
              "License #": "00000133DCEJ00283862"
            },
            {
              "Record ID": 9929025033,
              "Company name": "Curaleaf Central",
              "License #": "00000053DCXB00858835"
            },
            {
              "Record ID": 9928842112,
              "Company name": "Curaleaf 48th St",
              "License #": "00000117DCBN00282429"
            },
            {
              "Record ID": 9928834880,
              "Company name": "Arizona Organix",
              "License #": "00000099DCPL00826691"
            },
            {
              "Record ID": 9928834865,
              "Company name": "Curaleaf Sedona",
              "License #": "00000082DCYU00561946"
            },
            {
              "Record ID": 9928825991,
              "Company name": "Zen Leaf PHX/Dunlap (Emerald PHX)",
              "License #": "00000105ESDR54985961"
            },
            {
              "Record ID": 9928825971,
              "Company name": "Curaleaf Tucson",
              "License #": "00000054ESDU93884651"
            },
            {
              "Record ID": 9928820118,
              "Company name": "Curaleaf Midtown",
              "License #": "00000025ESOX62486193"
            },
            {
              "Record ID": 9928820115,
              "Company name": "Arizona Natural Remedies Inc",
              "License #": "00000028DCGV00174888"
            },
            {
              "Record ID": 9928807566,
              "Company name": "Curaleaf Gilbert",
              "License #": "00000034DCOD00007550"
            },
            {
              "Record ID": 9928801465,
              "Company name": "Curaleaf Phoenix Airport",
              "License #": "00000024ESUV84524312"
            },
            {
              "Record ID": 9928789584,
              "Company name": "Nature Wonder Cave Creek",
              "License #": "0000001DCQP00496571"
            },
            {
              "Record ID": 9928789578,
              "Company name": "Jars Bullhead",
              "License #": "00000002DCJK00811479"
            },
            {
              "Record ID": 9928781912,
              "Company name": "Curaleaf Peoria",
              "License #": "00000059ESZW76539792"
            },
            {
              "Record ID": 9928762885,
              "Company name": "Botanica",
              "License #": "00000058DCQU00115543"
            },
            {
              "Record ID": 9928762805,
              "Company name": "Desert BloomReleaf Center",
              "License #": "00000081DCPK00962019"
            },
            {
              "Record ID": 9929076628,
              "Company name": "Arizona Cannabis Society",
              "License #": "00000090DCYT00194857"
            },
            {
              "Record ID": 9928825978,
              "Company name": "Arizona MMJ Trading Company",
              "License #": "00000060DCIS00424661"
            },
            {
              "Record ID": 9928807563,
              "Company name": "All Green Dispensary",
              "License #": "00000011DCMZ00182361"
            },
            {
              "Record ID": 9928776967,
              "Company name": "Arizona Natural Concepts",
              "License #": "00000131DCYO00924714"
            }
          ]';
          $license_array = json_decode( $json, true );
          foreach($license_array as $dispo):
            $license_name = $dispo['Company name'];
            $license_number = $dispo['License #'];
        
        ?>
            <tr>
              <td data-label="Dispensary"><?= $license_name ?></td>
              <td data-label="License #"><?= $license_number ?></td>
            </tr>
      <?php
      endforeach;
        ?>
		</table>
	</section>
	</main><!-- #main -->

<?php
get_footer();
