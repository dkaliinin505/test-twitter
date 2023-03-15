<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TwitterController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('twitter');
})->name('main');

Route::get('/auth/twitter', [AuthController::class, 'redirectToTwitter'])->name('twitter.connect');
Route::get('/auth/twitter/callback', [AuthController::class, 'handleTwitterCallback']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/tweet', [TwitterController::class, 'index']);
    Route::post('/tweet', [TwitterController::class, 'sendTweet']);
});
