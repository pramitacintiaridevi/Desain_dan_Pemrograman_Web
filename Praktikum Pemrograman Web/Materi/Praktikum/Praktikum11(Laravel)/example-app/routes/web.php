<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\StudentController;
use Illuminate\Routing\Route as RoutingRoute;

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

//ketika kita mengakses url / beranda dengan method GET
//Maka kita diarahkan ke controller dengan
//nama classnya adalah myController dan
//methodnya adalah index

//laravel 7
//Route::get('beranda', 'myController@index');

//laraver
Route::get('/beranda',  [myController::class, 'index']);

//Route::view('/beranda', 'beranda');

Route::get('/mahasiswa',[StudentController::class, 'index']);
Route::get('/mahasiswa/create',[StudentController::class, 'create']);
Route::post('/mahasiswa/create',[StudentController::class, 'store']);
Route::get('/mahasiswa/{id}/edit',[StudentController::class, 'edit']);
Route::put('/mahasiswa/{id}/edit',[StudentController::class, 'update']);
Route::delete('/mahasiswa/hapus/{id}',[StudentController::class, 'destroy']);
