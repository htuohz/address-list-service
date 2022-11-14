<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;

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
    return ['Laravel' => app()->version()];
});

Route::resource('addresses', AddressController::class)
    ->only(['index', 'store','update', 'destroy'])
    ->middleware(['auth', 'verified']);

// Route::put('addresses/{id}', [AddressController::class, 'update']);


require __DIR__.'/auth.php';