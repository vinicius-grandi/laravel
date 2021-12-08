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
use App\Http\Controllers\TesteController;

Route::get('/', [EventController::class, 'index']);

Route::get('/teste', function() {


    Tools::printData([1, 2, 3]);
});

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

// Rotas inúteis só para exercitar
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/store', [StoreController::class, 'product']);


// Route::get('/store', function () {
//     $busca = request('search');
//     return view('store', ['busca'=>$busca]);
// });

// Route::get('/store/{id}', function ($id) {
//     return view('product', ['id'=>$id]);
// });

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
