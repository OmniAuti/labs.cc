<?php 
/* 
Template Name: RedirectQR
Template Post Type: page
*/ 
$user_agent = $_SERVER['HTTP_USER_AGENT']; //user browser
$ip_address = $_SERVER["REMOTE_ADDR"];     // user ip adderss
echo '</br>';
echo '</br>';
echo $user_agent;
echo '</br>';
echo '</br>';
echo $ip_address;
echo '</br>';
echo '</br>';

$id = 1;
$rep = $_GET['rep'];
$redirect = $_GET['url'];

$hostip = "35.209.78.196";
$dbname = "dbcouexxcsda7h";
$user = "uibsumbgrtmsj";
$password = "p0bubkgcdcbr";

$connection = new PDO("mysql:host=$hostip;dbname=$dbname", $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
//
// IF REP EXISTS WITH THIS ADD COUNT
// IF NOT REP ADD REP RECORD
// $results = $connection->query("SELECT * FROM bounce_check WHERE rep = '$rep'")->fetchAll();
// if (!empty($results)) {
// 	$count = $results[0]['visit'];
// 	$count = $count + 1;
// 	$connection->query("UPDATE bounce_check SET visit = $count WHERE qr_id = '$id' AND rep = '$rep'");
// 	header("location: https://www.aeriz.com");
// }  else {
// 	$connection->query("INSERT INTO bounce_check (count, rep) VALUES (1, '$rep')");
// 	header("location: https://www.aeriz.com");
// }
?>
