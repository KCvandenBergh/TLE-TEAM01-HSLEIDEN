<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\ScenarioController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomAuthController;
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

//View scenario route.
Route::get('/stories/{story}/scenarios/{scenario}', [ScenarioController::class, 'show'])->name('scenario.show');

//Route::get('/filter', '\App\Http\Controllers\StoryController@filter');

//Search route.
Route::get('/search', '\App\Http\Controllers\StoryController@search');

//Route::get('/', [StoryController::class, 'search'])->name('home');



Route::get('/', function () {
    dd(request('search'));

    return view('show', [
        'story'->Post::latest()->get(),
        'categories'-> Category::all()
    ]);
})->name('show');




