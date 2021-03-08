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

Route::get('/', function () {
    return view('welcome');
});

//HOME ROUTES
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//TEAM ROUTE
Route::get('/ons-team', [App\Http\Controllers\TeamController::class, 'index']);

//CONTACT ROUTE
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'createForm']);
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contactUs'])->name('contact.store');