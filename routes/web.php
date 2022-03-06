<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\SizeController;
use \App\Http\Controllers\ColorController;

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
    return view('welcome');
});
Auth::routes();
Route::post('/registration/store',[UserController::class,'userRegistration'])->name('user.registration');

Route::group(['middleware'=>['auth']], function (){
    Route::get('dashboard',function (){
        $data['title'] = 'Dashboard';
        return view('admin.dashboard',$data);
    })->name('dashboard');
    Route::resource('user',UserController::class);
    Route::resource('product',ProductController::class);
    Route::resource('product-size',SizeController::class);
    Route::resource('product-color',ColorController::class);
});

