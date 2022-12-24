<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Database\Seeders\stocksdb;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client as GuzzleHttpClient;
class Borsa extends Controller
{
    public function anasayfa(){

        return view('anasayfa');
    }
    public function hisse_getir(Request $request){

    }
    public function portfoy(){

        return view('portfoy');
    }
    public function stocks(){
        return view('stocks');
    }
    function stock_value(){
        $client = new GuzzleHttpClient();
        $apiRequest = $client->request('get', 'https://api.genelpara.com/embed/borsa.json');
        $response = json_decode($apiRequest->getBody(),true);
        return response()->json($response);
    }
}

