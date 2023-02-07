<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProjectController;
use App\Http\Controllers\Front\CityController;
use App\Http\Controllers\Front\TypeController;
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

Route::get('/', [HomeController::class, 'index'])->name('main');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/cities', [CityController::class, 'index'])->name('cities');
Route::get('/cities/{id}', [CityController::class, 'show'])->name('city.show');
Route::get('/types/{id}', [TypeController::class, 'show'])->name('type.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
