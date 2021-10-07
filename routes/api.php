<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodingTestController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/convert', [CodingTestController::class, 'convert'])->name('convert');
Route::get('/palindrome', [CodingTestController::class, 'palindromeChecker'])->name('palindrome');
Route::get('/query-get-data', [CodingTestController::class, 'query'])->name('query');
