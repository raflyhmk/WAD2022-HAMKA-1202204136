<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShowroomController;

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

Route::get('/LoginHamka', [AuthController::class, 'LoginHamka'])->name('login')->middleware('guest');
Route::post('/LoginHamka', [AuthController::class, 'cekLogin'])->middleware('guest');
Route::get('/Logout', [AuthController::class, 'Logout'])->middleware('auth');

Route::get('/RegisterHamka', [AuthController::class, 'RegisterHamka']);
Route::post('/RegisterHamka', [ShowroomController::class, 'CreateRegister']);

Route::get('/HomeHamka', [ShowroomController::class, 'HomeHamka'])->middleware('auth');
Route::get('/AddCarHamka', [ShowroomController::class, 'AddCarHamka'])->middleware('auth');
Route::post('/AddCarHamka', [ShowroomController::class, 'InsertCar'])->middleware('auth');
Route::get('/ListCarHamka', [ShowroomController::class, 'ListCarHamka'])->middleware('auth');
Route::delete('/ListCarHamka/{id}', [ShowroomController::class, 'DeleteCar'])->middleware('auth');
Route::get('/DetailHamka/{id}', [ShowroomController::class, 'DetailHamka'])->middleware('auth');
Route::put('/DetailHamka/edit/{id}', [ShowroomController::class, 'EditCar'])->middleware('auth');
Route::get('/ProfileHamka', [ShowroomController::class, 'ProfileHamka'])->middleware('auth');
Route::put('/ProfileHamka/edit', [ShowroomController::class, 'EditProfile'])->middleware('auth');



