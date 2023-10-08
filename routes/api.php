<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FacultadControlller;
use App\Http\Controllers\Api\UsuarioControlller;
use App\Http\Controllers\Api\TipoUsuarioControlller;
use App\Http\Controllers\Api\CarreraControlller;




/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::controller(ProductController::class)->group(function (){
    Route::get('/faculd', 'index');
    Route::post('/product', 'store');
    Route::get('/product/{id}', 'show');
    Route::put('/product/{id}', 'update');
    Route::delete('/product/{id}','destroy');

});*//*
Route::controller(FacultadController::class)->group(function (){
    Route::get('/facul', 'index');
   

});*/
Route::controller(UsuarioControlller::class)->group(function (){
    Route::get('/usr', 'index');
    Route::post('/usuario', 'store');
    Route::get('/usuario/{id}', 'show');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}','destroy');
   

});
Route::controller(TipoUsuarioControlller::class)->group(function (){
    Route::get('/tipo', 'index');
   

});

Route::controller(FacultadControlller::class)->group(function (){
    Route::get('/facul', 'index');
   

});

Route::controller(CarreraControlller::class)->group(function (){
    Route::get('/car', 'index');
    Route::post('/carrera', 'store');
    Route::get('/carrera/{id}', 'show');
    Route::put('/carrera/{id}', 'update');
    Route::delete('/carrera/{id}','destroy');

});


