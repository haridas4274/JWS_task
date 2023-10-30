<?php

require 'bitblaza/Bus.php';
require 'user/Userapi.php';

use User\Userapi;
use Bus\Bus;

$user=new Userapi();

///////////easyinfo bus api collections start/////////////
$api=new Bus;

$getCities =$api->getCities();
// $master =$api->default('GET','gds/api/masters.json','json');
// $getOperators =$api->default('GET','gds/api/operators.json','json');
// $getcitiesPair =$api->default('GET','gds/api/city_pairs.json','array');
// $getschedules =$api->getschedules($origin_id,$destination_id,$travelDate);  //(orginId,DestinationId,TravelDate)
// $getschedules1 =$api->getschedules1($travel,$travelDate);  //(travel,TravelDate)
// $getseatLayout =$api->getseatLayout($scheduleID);  //(schedule id)
// $blockSeat =$api->blockSeat($schedule_id,$blockReqJson);  //(schedule id,$blockReqJson)
// $getTicket =$api->getTicket($pnr);  //(pnr number)
// $IsCancellable2 =$api->IsCancellable2($pnr,$seat);  //(PNR,seat number)
// $translog=$api->translog($dates);
// $balance=$api->balance($dates);
///////////easyinfo bus api collections end/////////////


?>
