<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Order;


class Api extends Controller
{
    public function getorders(){
        $orders = Order::all();
        return response()->json($orders);
    }
}
