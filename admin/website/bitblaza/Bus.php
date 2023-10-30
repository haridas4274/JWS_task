<?php

namespace Bus;

require 'configuration.php';

class Bus
{
	private $url = URL;
	private $key = KEY;

	public function test_url()
	{
		return $this->url;
	}
	public function test_key()
	{
		return $this->key;
	}

	// ...........................BUS METHODS.....................................
	public function default($method, $endpoint,$type)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->url . $endpoint.'?api_key=' . $this->key,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $method,
		));

		$response = curl_exec($curl);

		curl_close($curl);
		// echo $response;
		if($type=="json"){
			return $response;
		}else{
			return json_decode($response,1);
		}
	}

	public function getCities(){
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->url.'gds/api/cities.json',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
			  'api-key: '.$this->key
			),
		  ));
		  
		  $response = curl_exec($curl);
		  
		  curl_close($curl);
		//   return json_encode($response);
		  $data=json_decode($response,1);
		   $data=$data['result'];
		//    $datas[]=json_encode($data)
		   foreach($data as $val){
			$res[]=$val;
		   }
		   return $res;
		//    for($i=1;$i <=count($res);$i++){
		// 	echo json_encode($res[$i]);
		//    }
// echo '<pre>';print_r($res);echo '</pre>';
		   
	}


	public function getschedules($origin_id,$destination_id,$travelDate){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url.'gds/api/schedules/'.$origin_id.'/'.$destination_id.'/'.$travelDate.'.json?api_key='.$this->key,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		return json_decode($response,1);
	}

	public function getschedules1($travel,$travelDate){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->url.'gds/api/operator_schedules/'.$travel.'/'.$travelDate.'.json?api_key='.$this->key,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		return json_decode($response,1);
	}

	public function getOperatorSchedules($scheduleID){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url.'gds/api/schedule/'.$scheduleID.'.json?api_key='.$this->key,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return json_decode($response,1);
	}
	
	public function getseatLayout($scheduleID){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url.'gds/api/availability/'.$scheduleID.'.json?api_key='.$this->key,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return json_decode($response,1);
	}

	public function blockSeat($schedule_id,$blockReqJson){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->url.'gds/api/tentative_booking/'.$schedule_id.'.json?api_key='.$this->key,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS =>$blockReqJson,
		  CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		  ),
		));
		
		$response = curl_exec($curl);
		//echo $response; exit;
		curl_close($curl);
		return json_decode($response,1);
	}

	public function confirmTicket($blockingId){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->url.'gds/api/confirm_booking/'.$blockingId.'.json?api_key='.$this->key,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_HTTPHEADER => array(
			'api-key: '.$this->key
		  ),
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		return json_decode($response,1);
	}

	public function getTicket($pnr){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url.'gds/api/booking_details.json?pnr_number='.$pnr.'&api_key='.$this->key,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
	}

	public function IsCancellable2($pnr,$seat){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url.'gds/api/can_cancel.json?ticket_number='.$pnr.'&seat_numbers='.$seat.'&api_key='.$this->key,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		return json_decode($response,1);
	}


	public function CancelTicket2($pnr,$seat){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url.'gds/api/cancel_booking.json?ticket_number='.$pnr.'&seat_numbers='.$seat.'&api_key='.$this->key,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));
		
		$response = curl_exec($curl);
		curl_close($curl);
		return json_decode($response,1);
	}

	public function translog($dates){
		$curl = curl_init();
    
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->url.'gds/api/transaction_log.json?trans_date='.$dates.'&api_key='.$this->key,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		return $response;
	}

	public function balance(){
		$curl = curl_init();
    
		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->url.'gds/api/get_balance.json?api_key='.$this->key,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		return $response;
	}

	// invalid methods not use now

	// public  function getCitiesPair(){
	// 	$curl = curl_init();

	// 	curl_setopt_array($curl, array(
	// 	  CURLOPT_URL => $this->url.'gds/api/city_pairs.json?api_key='.$this->key,
	// 	  CURLOPT_RETURNTRANSFER => true,
	// 	  CURLOPT_ENCODING => '',
	// 	  CURLOPT_MAXREDIRS => 10,
	// 	  CURLOPT_TIMEOUT => 0,
	// 	  CURLOPT_FOLLOWLOCATION => true,
	// 	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	// 	  CURLOPT_CUSTOMREQUEST => 'GET',
	// 	));
		
	// 	$response = curl_exec($curl);
	// 	echo $response; exit;
	// 	curl_close($curl);
	// 	return json_decode($response,1);
	// }


}
