<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Model
{

	 function get_api($url){
		// $base_url=$this->base_url;
		// $url=$base_url.$endpoint;	
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		// curl_setopt($ch,CURLOPT_HTTPHEADER,array("X-API-KEY:$this->api_key"));
		$resp=curl_exec($ch);
		if($e =curl_error($ch)){
			return $e;
		}else{
		//    return json_decode($resp,true);
		return $resp;
		}		
		}


		public function post_api($url,$resp){
			
			$ch=curl_init();
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch,CURLOPT_POST,true);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$resp);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

		  
			$result=curl_exec($ch);
			if($e =curl_error($ch)){
				return $e;
			}else{
			   return $result;
		
			}

			
			}
			public function sp_api($url){
			
				$ch=curl_init();
				curl_setopt($ch,CURLOPT_URL,$url);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch,CURLOPT_POST,true);
				// curl_setopt($ch,CURLOPT_POSTFIELDS,$resp);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	
			  
				$result=curl_exec($ch);
				if($e =curl_error($ch)){
					return $e;
				}else{
				   return $result;
			
				}
				
				}

}
