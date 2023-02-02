<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Home Controller
Route::get('/',[HomeController::class,'index']);

Route::get('/redirects',[HomeController::class,'redirects']);

Route::post('/addCart/{id}',[HomeController::class,'addCart']);

Route::get('/showCart/{id}',[HomeController::class,'showCart']);

Route::get('/removeFromCart/{id}',[HomeController::class,'removeFromCart']);

Route::post('/confirmOrder',[HomeController::class,'confirmOrder']);

//Admin controller
Route::get('/users',[AdminController::class,'user']);

Route::get('/deleteUser/{id}',[AdminController::class,'deleteUser']);

Route::get('/foodMenu',[AdminController::class,'foodMenu']);

Route::post('/uploadFood',[AdminController::class,'uploadFood']);

Route::get('/deleteMenu/{id}',[AdminController::class,'deleteMenu']);

Route::get('/updateView/{id}',[AdminController::class,'updateView']);

Route::post('/update/{id}',[AdminController::class,'update']);

Route::post('/reservation',[AdminController::class,'reservation']);

Route::get('/viewReservations',[AdminController::class,'viewReservations']);

Route::get('/viewChef',[AdminController::class,'viewChef']);

Route::post('/uploadChef',[AdminController::class,'uploadChef']);

Route::get('/deleteChef/{id}',[AdminController::class,'deleteChef']);

Route::get('/updateChef/{id}',[AdminController::class,'updateChef']);

Route::post('/updateCf/{id}',[AdminController::class,'updateCf']);

Route::get('/orders',[AdminController::class,'orders']);

Route::get('/search',[AdminController::class,'search']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
