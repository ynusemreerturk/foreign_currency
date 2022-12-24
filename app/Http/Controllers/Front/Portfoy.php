<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\UserStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Exceptions\Exception;


class Portfoy extends Controller
{
    public function order(){
        return view('order');
    }
    public function cashpost(Request $request){
        $user = Auth::user();
        if($request->islem == 'deposit'){
            $user->total_cash_balance +=$request->cash;
            $user->save();
        }
        elseif ($request->islem == 'withdraw'){
            if($user->total_cash_balance >= $request->cash){
                $user->total_cash_balance -= $request->cash;
                $user->save();
            }
        }
    }
    public function orderpost(Request $request){
        $user = Auth::user();
        $fiyat = stock_value();
        $sembol = $request->sembol;
        $portfoy = UserStock::where('user_id','=',$user->id)->where('stock','=',$request->sembol)->first();
        if ($request->islem == 'buy'){
            if($user->total_cash_balance >= $request->price * $request->piece){
                $order = new Order();
                $order->user_id = $user->id;
                $order->stock = $request->sembol;
                $order->sell_buy = 0;
                $order->want_price = $request->price;
                $order->want_piece = $request->piece;
                if($request->price >= $fiyat->$sembol->alis){
                    $order->instant_status = 0;
                    if (isset($portfoy)){
                        $portfoy->cost = (($portfoy->piece*$portfoy->cost)+($request->piece*$fiyat->$sembol->alis))/($request->piece+$portfoy->piece);
                        $portfoy->piece += $request->piece;
                        $portfoy->save();
                    }
                    else{
                        $userstocks = new UserStock();
                        $userstocks->user_id = $user->id;
                        $userstocks->stock = $request->sembol;
                        $userstocks->piece = $request->piece;
                        $userstocks->cost = $fiyat->$sembol->alis;
                        $userstocks->save();
                    }
                    $user->total_cash_balance -= $fiyat->$sembol->alis*$request->piece;
                    $user->save();
                    $order->save();
                }
                else{
                    $order->instant_status = 1;
                    $order->save();
                }

            }
        }
        elseif ($request->islem == 'sell'){
            if (isset($portfoy)){
                if($portfoy->piece >= $request->piece){
                    $order = new Order();
                    $order->user_id = $user->id;
                    $order->stock = $request->sembol;
                    $order->sell_buy = 1;
                    $order->want_price = $request->price;
                    $order->want_piece = $request->piece;
                    if($request->price <= $fiyat->$sembol->satis){
                        $order->instant_status = 0;
                        $portfoy->piece -= $request->piece;
                        if ($portfoy->piece == 0){
                            $portfoy->delete();
                        }
                        else{
                            $portfoy->save();
                        }
                        $user->total_cash_balance += $fiyat->$sembol->alis*$request->piece;
                        $user->save();
                        $order->save();
                    }
                    else{
                        $order->instant_status = 1;
                        $order->save();
                    }
                }
            }
        }
        return $this->getorder();
    }
    /**
     * @throws Exception
     */
    public function getorder(){
        $user_id = Auth::id();
        $order = Order::find($user_id)->get();
        return response()->json($order);
    }
    public function getportfoy(){
        $user_id = Auth::id();
        $order = UserStock::where('user_id','=',$user_id)->get();
        return response()->json($order);
    }
    public function getcash(){
        $user_id = Auth::id();
        $order = User::find($user_id)->first();
        return response()->json($order);
    }
}

