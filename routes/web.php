<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[\App\Http\Controllers\Borsa::class,'anasayfa'])->name('anasayfa');
Route::get('hisse_getir',[\App\Http\Controllers\Borsa::class,'hisse_getir']);
Route::post('hisse_getir',[\App\Http\Controllers\Borsa::class,'hisse_getir'])->name('hisse_getir');
Route::get('/login',[\App\Http\Controllers\Front\Login::class,'giris'])->name('giris');
Route::post('/login',[\App\Http\Controllers\Front\Login::class,'girispost'])->name('giris.post');
Route::get('/logout',[\App\Http\Controllers\Front\Login::class,'logout'])->name('logout');
Route::get('/kayit',[\App\Http\Controllers\Front\Login::class,'kayit'])->name('kayit');
Route::post('/kayit',[\App\Http\Controllers\Front\Login::class,'kayitpost'])->name('kayit.post');
Route::prefix('user')->middleware('isUser')->group(function (){
    Route::get('portfoy',[\App\Http\Controllers\Borsa::class,'portfoy'])->name('portfoy');
    Route::get('order',[\App\Http\Controllers\Front\Portfoy::class,'order'])->name('order');
    Route::post('order',[\App\Http\Controllers\Front\Portfoy::class,'orderpost'])->name('order.post');
    Route::get('stocks',[\App\Http\Controllers\Borsa::class,'stocks'])->name('stocks');

    Route::post('cashorder',[\App\Http\Controllers\Front\Portfoy::class,'cashpost'])->name('cash.post');

});
Route::get('stockvalues',[\App\Http\Controllers\Borsa::class,'stock_value'])->name('stockvalues');
Route::get('getorder',[\App\Http\Controllers\Front\Portfoy::class,'getorder'])->name('getorder');
Route::get('getportfoy',[\App\Http\Controllers\Front\Portfoy::class,'getportfoy'])->name('getportfoy');
Route::get('getcash',[\App\Http\Controllers\Front\Portfoy::class,'getcash'])->name('getcash');
Route::get('test',[\App\Http\Controllers\Api\Api::class,'getorders']);



