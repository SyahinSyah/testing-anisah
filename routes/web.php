<?php

use App\Http\Controllers\ItemController;
use App\Models\Item;
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

Route::get('items', [ItemController::class,'index']);
Route::get('/items/create', [ItemController::class,'create']);
Route::post('/items', [ItemController::class,'store']);
Route::get('/items/{id}', [ItemController::class, 'show']);
Route::get('/items/{id}/edit' , [ItemController::class ,'update']);
Route::patch('items/{id}', [ItemController::class, 'edit']);
Route::delete('items/{id}', [ItemController::class, 'destroy']);




// Route::get('/', function () {
//     return view('welcome');
// });