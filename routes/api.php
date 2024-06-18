<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WisataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('review',ReviewController::class);
Route::get('review/{wisata}/',[ReviewController::class,'index']);
Route::resource('wisata',WisataController::class)->only(['store','index']);
// Route::resource('review',ReviewController::class)->only(['store']);
