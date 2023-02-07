<?php

use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(
   [
      'prefix' => 'dashboard',
      'middleware' => ['auth']
   ],
   function () {
      Route::get('/', function () {
         return view('admin.index');
      })->name('dashboard');

      Route::resource('/projects', ProjectsController::class);
      Route::resource('/cities', CityController::class);
      Route::resource('/types', TypeController::class);

      Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
      Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

//       Route::get('/project_data_remove', [ProjectsController::class, 'project_data_remove'])->name('project.project_data_remove');
   }
);

Auth::routes();
