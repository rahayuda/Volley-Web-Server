<?php
// PHP program to get IP address of client
$IP = $_SERVER['REMOTE_ADDR'];

// $IP stores the ip address of client
//echo "IP Address: $IP";

$_SESSION['user'] = $IP;

// Print the ip address of client
?>

<?php
// PHP code to get the MAC address of Server
$MAC = exec('getmac');

// Storing 'getmac' value in $MAC
$MAC = strtok($MAC, ' ');

//echo "MAC Address: $MAC";
?>

<?php
//echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
?>

<?php
$array_browsers = ["OPR" => "Oper", "opera" => "Opera", "Edg" => "Microsoft Edge", "Chrome" => "Google Chrome", "Safari" => "Safari", "Firefox" => "Mozilla Firefox", "MSIE" => "Internet Explore", "Trident" => "Internet Explore", "Other" => "Unknown Browser"];

$agent = $_SERVER['HTTP_USER_AGENT'];

$jenis_browser="";

foreach ($array_browsers as $key => $value) {
 
  if (strpos($agent, $key) !== false) {
    $jenis_browser = $value;
    break;
  }   
  
}

//echo "Browser: ".$jenis_browser;
$browser = $jenis_browser;
?>

<?php
$awal  = strpos($agent, "(");
$akhir = strpos($agent, ")");
$awal = $awal + 1;
$akhir= $akhir - $awal;
$sub_kalimat = substr($agent,$awal,$akhir);
//echo "Sistem Operasi: " . $sub_kalimat;
?>

<?php
$awal  = strpos($agent, "(");
$akhir = strpos($agent, ";");
$awal = $awal + 1;
$akhir= $akhir - $awal;
$sub_kalimat = substr($agent,$awal,$akhir);
//echo "Sistem Operasi: " . $sub_kalimat;
$os = $sub_kalimat;
?>

<?php
$awal  = strpos($agent, ";");
$awal = $awal + 1;
$akhir = strpos($agent, ";",$awal);
$next = $akhir;
$akhir= $akhir - $awal;
$sub_kalimat = substr($agent,$awal,$akhir);
//echo "Sistem Operasi: " . $sub_kalimat;
$osv = $sub_kalimat;
?>

<?php
$awal  = strpos($agent, ";",$next);
$awal = $awal + 1;
$akhir = strpos($agent, "/");
$akhir= $akhir - $awal - 2;
$sub_kalimat = substr($agent,$awal,$akhir);
//echo "Perangkat: " . $sub_kalimat;
$device = $sub_kalimat;
?>
