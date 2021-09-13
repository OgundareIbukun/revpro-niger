<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Database;




class Firebase extends Controller{

	public function index(){
    	//CONNECT/INITIALIZE FIREBASE
    	$database = app('firebase.database');
    	$reference = $database->getReference('govData');
    
    	//VIEW DATA IN TAX ENTITIES SNAPSHOT: YOU CAN USE THIS TO CHECK IF THE DATA IS POSTED
    	//$snapshot = $reference->getSnapshot();
    	//print_r($snapshot->getValue());
    
    
    	//GET LGA REVENUE DATA
    	$realtime_revenue_data = $this->getLgaRevenue();
    	$month = intval(date('m'))-1;
    	$lgaRev = $realtime_revenue_data->monthRev[$month]->receipt ?? 0;
    	$prevMnt = $realtime_revenue_data->monthRev[$month-1]->receipt ?? 0;
    
    	$lga_revenue_data = $this->getLgaRevenueData();
    
    
    	//THIS UPDATES FIREBASE
    	$reference->update([
        	'realtime_revenue_map' => $realtime_revenue_data,
        	'lga_revenue_bar' => $lga_revenue_data,
        	'widgets/lgaRev' => $lgaRev,
            'widgets/prevMnt' => $prevMnt
        ]);
    }

	

	//HOW THE LGA DATA IS POPULATED FROM MY END
	function getLgaRevenue(){
        $headers = array(
            'Content-Type: application/json'
        );
        $response = array();
        $curl_data = curl_init();
        $url = "https://lga.bauchi.revenue.ng/api/v1/lga/revenue";
        $array = array(
            "api_token" => "ac29cdb2c3d14b4d442b0a76b3db59e3"
        );
        $payload = json_encode($array);
        curl_setopt_array($curl_data, array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $payload
        ));

        if( ! $response = curl_exec($curl_data))
        {
            trigger_error(curl_error($curl_data));
        }

        curl_close($curl_data);

        return json_decode($response);
    }

	private function getLgaRevenueData(){
        $headers = array(
            'Content-Type: application/json'
        );
        $response = array();
        $curl_data = curl_init();
        $url = "https://lga.bauchi.revenue.ng/api/v1/lga/last_txn";
        $array = array(
            "api_token" => "ac29cdb2c3d14b4d442b0a76b3db59e3",
            "last_txn_data" => json_encode([])
        );
        $payload = json_encode($array);
        curl_setopt_array($curl_data, array(
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $payload
        ));

        if( ! $response = curl_exec($curl_data))
        {
            trigger_error(curl_error($curl_data));
        }

        curl_close($curl_data);

        return $response;
    }
	
}