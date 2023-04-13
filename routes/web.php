<?php

use App\Http\Controllers\ProsesController;
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
});

Route::get('/template', function () {
    return view('Sailor.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::get('/userlogin',[ProsesController::class,'index']);
});
