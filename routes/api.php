<?php

use App\Http\Controllers\BootleQuestionController;
use App\Http\Controllers\MillionerQuestionController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::resource('millioner-questions', MillionerQuestionController::class)->only('index', 'store', 'update', 'destroy');
Route::resource('bootle-questions', BootleQuestionController::class)->only('index', 'store', 'update', 'destroy');
