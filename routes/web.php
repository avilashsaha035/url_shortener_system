<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'UrlController@index');
// Route::post('/shorten', 'UrlController@shorten');
// Route::get('/{code}', 'UrlController@redirect');


Route::get('/', [UrlController::class, 'index']);
Route::post('/shorten', [UrlController::class, 'shorten'])->name('shorten');
Route::get('/{short_url}', [UrlController::class, 'redirect'])->name('redirect');
