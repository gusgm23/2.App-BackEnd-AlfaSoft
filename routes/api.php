<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API para roles
Route::get('obtenerRoles'               ,'\App\Http\Controllers\RolController@getRol');
Route::get('obtenerRolesId/{id}'        ,'\App\Http\Controllers\RolController@getRolId');
Route::post('crearRol'                  ,'\App\Http\Controllers\RolController@createRol');
Route::put('actualizarRol/{id}'         ,'\App\Http\Controllers\RolController@updateRol');
Route::get('obtenerRolesActivos'        ,'\App\Http\Controllers\RolController@getRolesActivos');