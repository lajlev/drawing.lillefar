<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrawingController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/drawings/create', [DrawingController::class, 'create']);
Route::post('/drawings', [DrawingController::class, 'store']);
Route::get('/drawings', [DrawingController::class, 'index']);
Route::get('/drawings/{id}', [DrawingController::class, 'show']);
