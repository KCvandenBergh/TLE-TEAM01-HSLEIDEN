<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\ScenarioController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\AdminController;
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

Route::get('admin/index', [AdminController::class, 'index'])->name('index');

Route::get('admin/story/{story}', [AdminController::class, 'story'])->name('story');

Route::resource('scenarios', ScenarioController::class);
Route::resource('stories', StoryController::class);
Route::resource('choices', ChoiceController::class);


Route::get('/stories/{story}/scenarios/{scenario}', [ScenarioController::class, 'show'])->name('scenario.show');
