<?php

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

use App\Http\Controllers\AddressController;
use App\Http\Controllers\GoldController;
use App\Http\Controllers\GoldTransactionController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('gold', GoldController::class);
Route::resource('user', UserController::class);
Route::resource('address', AddressController::class);
Route::resource('inventory', InventoryController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('goldtransaction', GoldTransactionController::class);
