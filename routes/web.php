<?php

use App\Models\City;
use App\Models\Museum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCityController;
use App\Http\Controllers\DashboardMuseumController;

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
    return view('page.home', [
        "index" => "Home"
    ]);
});

Route::get('/museums', [MuseumController::class,'index']);
Route::get('/museums/{museum:slug}', [MuseumController::class,'show']);

Route::get('/cities', [CityController::class,'index']);
Route::get('/cities/{city:slug}', [CityController::class,'show']);

Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'create'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('admin');

Route::resource('/dashboard/museums', DashboardMuseumController::class)->middleware('auth');
Route::resource('/dashboard/cities', AdminCityController::class)->except('show')->middleware('auth');