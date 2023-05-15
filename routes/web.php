<?php

use App\Http\Controllers\ProsesController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/template', function () {
    return view('Sailor.index');
});

Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('auth.register');
Route::post('/register',[RegisterController::class,'register']);

Route::get('/transaksi',[TransaksiController::class, 'index'])->name("transaksi.index")->middleware('auth');
Route::any('/transaksi/store',[TransaksiController::class,'store'])->name("transaksi.store")->middleware('auth');
Route::any('/transaksi/simpan',[TransaksiController::class,'simpan'])->name("transaksi.simpan")->middleware('auth');
Route::any('/transaksi/quality_check/{last_id}',[TransaksiController::class,'show_quality_check'])->name("transaksi.quality_check")->middleware('auth');
Route::get('/login',function(){
    Auth::logout();
    return redirect('/');
})->name('login');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    // Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('voyager.logout');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('voyager.logout');

    Route::get('/userlogin',[ProsesController::class,'index']);
    // Route::get('/transaksi/create',[TransaksiController::class, 'create'])->name("voyager.transaksi.create");
});
