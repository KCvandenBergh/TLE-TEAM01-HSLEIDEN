<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\ScenarioController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\TestController;
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

Route::get('/', [StoryController::class, 'index'])->name('home');

// login routes.
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn') ->name('login');
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn')->name('register');
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn')->name('dashboard');
Route::post('/logout',[CustomAuthController::class,'logout'])->name('logout');

// admin routes.
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/stories/{story}', [AdminController::class, 'story'])->name('admin.stories.show');

// resource routes.
Route::resource('scenarios', ScenarioController::class);
Route::resource('stories', StoryController::class);
Route::resource('choices', ChoiceController::class);
Route::resource('saves', SaveController::class);

//view results.blade.php without saving to db, or as guest
Route::get('/stories/{story}/results', [StoryController::class, 'result'])->name('stories.results');
Route::get('/download/{story}/results/{save?}', [PdfController::class, 'download'])->name('download.pdf');

//View scenario route.
Route::get('/stories/{story}/scenarios/{scenario}/{madeChoice?}', [ScenarioController::class, 'show'])->name('scenario.show');










