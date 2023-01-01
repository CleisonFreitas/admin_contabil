<?php

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\Gerenciador\GroupUserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('fornecedor', FornecedorController::class);
Route::apiResource('role',        GroupUserController::class);
Route::post('role/{role}/permission/{permission}',                           [GroupUserController::class, 'givePermission']);
Route::delete('role/{role}/permission/{permission}',                         [GroupUserController::class, 'revokePermission']);
