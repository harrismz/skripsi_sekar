<?php

use App\Http\Controllers\ProsesController;
use App\Http\Controllers\TransaksiController;
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
    return view('layouts.app');
})->name('home');

Route::get('/template', function () {
    return view('Sailor.index');
});

Route::get('/register',[RegisterController::class,'showRegistrationForm'])->name('auth.register');
Route::post('/register',[RegisterController::class,'register']);

Route::get('/transaksi',[TransaksiController::class, 'create'])->name("transaksi.create");



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    // Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('voyager.logout');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('voyager.logout');

    Route::get('/userlogin',[ProsesController::class,'index']);
    Route::get('/transaksi/create',[TransaksiController::class, 'create'])->name("voyager.transaksi.create");
});
