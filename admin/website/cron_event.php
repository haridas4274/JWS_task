<?php
require 'bitblaza/Bus.php';
use Bus\Bus;

$api=new Bus;

$getCities =$api->getCities();

// print_r($getCities);
// exit();
// echo '<pre>';print_r($getCities);echo '</pre>';exit;
foreach($getCities as $val){
	echo '<pre>';print_r($val);echo '</pre>';
}
echo json_encode($getCities[1]);





?>
