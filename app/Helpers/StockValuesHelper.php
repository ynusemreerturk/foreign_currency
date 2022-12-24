<?php

use App\Models\Stock;
use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Support\Facades\Auth;

    function stock_value(){
        $client = new GuzzleHttpClient();
        $apiRequest = $client->request('get', 'https://api.genelpara.com/embed/borsa.json');
        $response = json_decode($apiRequest->getBody());
        $convert = json_encode($response);
        return $response;
    }
    function stock_value_str(){
        $convert = stock_value();
        $convertt = json_encode($convert);
        return $convertt;
    }
