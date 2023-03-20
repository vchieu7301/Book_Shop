<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\UserController;
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

Route::post('/login', [PassportController::class, 'login']);
Route::post('/register', [PassportController::class, 'register']);
Route::post('/unauthenticated', [PassportController::class, 'unauthenticated']);
Route::middleware(['cors','auth:api'])->group(function () {
  Route::post('user/updatePassword', [UserController::class, 'updatePassword'])->name('users.updatePassword');
  Route::resource('/users', UserController::class)->only(['index','show','store','update','destroy']);
  Route::resource('/customers', CustomerController::class)->only(['index','show','store','update','destroy']);
  Route::post('/logout', [PassportController::class, 'logout']);
});
