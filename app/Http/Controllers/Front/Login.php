<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function kayit(){
        return view('kayitol');
    }
    public  function  kayitpost(Request $request){
        $rules = Validator::make($request->all(),
            [
                'username' => 'required  | min:3',
                'tc' => 'required |min:11 | max:11 | unique:users,tc',
                'password' => 'required | min:6 | confirmed',
                'phonenumber' => 'required | unique:users,phone_number',
            ]);
        if ($rules->fails()) {
            return redirect()->back();
        }
        $user = new User();
        $user->name = $request->username;
        $user->tc = $request->tc;
        $user->phone_number = $request->phonenumber;
        $user->password = bcrypt($request->password);
        $user->membership_type = 0;
        $user->total_cash_balance = 0;
        $user->save();
        return $this->giris();
    }
    public function giris(){
        return view('Giris');
    }
    public function girispost(Request $request){
        $user = User::where('tc',$request->tc)->first();
        if ($user == null){
            $rules = 'Tc yanlış';
            return  redirect()->back()->withErrors($rules);
        }
        if(Auth::attempt(['tc'=>$request->tc ,'password'=>$request->password])){
             return redirect()->route('portfoy');
        }
        $rules = 'Sifreniz yanlış';
        return redirect()->back()->withErrors($rules)->withInput();
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('anasayfa');
    }
}
