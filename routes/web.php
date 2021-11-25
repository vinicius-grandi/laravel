<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StoreController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/store', [StoreController::class, 'product']);


// Route::get('/store', function () {
//     $busca = request('search');
//     return view('store', ['busca'=>$busca]);
// });

// Route::get('/store/{id}', function ($id) {
//     return view('product', ['id'=>$id]);
// });

