<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
Route::get('/profile', function (){return view('pages.profile');})->middleware(['auth']);
Route::get('/csgo', [\App\Http\Controllers\ReviewController::class, 'showReview']);
Route::get('/addOffer', function (){return view('pages.addOffer');})->middleware(['auth']);
Route::get('/', function (){return redirect()->intended('/csgo');});
Route::get('/addEvent', function (){return view('pages.addEvent');})->middleware(['auth', 'moderator']);
Route::get('/news', [App\Http\Controllers\EventController::class, 'renderEvent']);

Route::view('/serverMap', 'pages.serverMap');
Route::view('/staff', 'pages.staff');
Route::view('/stock', 'pages.stock')->middleware(['auth']);
Route::view('/partnership', 'pages.partnership');


Route::post('/changeAvatar', [UserController::class, 'changeAvatar'])->middleware(['auth']);
Route::post('/changeUserData', [UserController::class, 'changeUserData'])->middleware(['auth']);
Route::post('/addReview', [\App\Http\Controllers\ReviewController::class, 'addReview'])->middleware(['auth']);
Route::post('/addOffer', [App\Http\Controllers\OfferController::class, 'addOffer'])->middleware(['auth']);
Route::post('/addEvent', [App\Http\Controllers\EventController::class, 'addEvent'])->middleware(['auth', 'moderator']);

require __DIR__.'/auth.php';



