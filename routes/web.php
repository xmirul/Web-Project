<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LeadDeveloperController;


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
    return view('layout');
});

Route::get('/login', function () {
    return view('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/developers', DeveloperController::class);
    Route::resource('/managers', ManagerController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/LeadDeveloper', LeadDeveloperController::class);
});





// Route::resource('projects', ProjectController::class)->middleware('can:isAdmin');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
