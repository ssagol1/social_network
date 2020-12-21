<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TownController;
use App\Http\Controllers\WorkplaceController;

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

// ::post, ::put, ::patch, ::delete
Route::resource('companies', CompanyController::class);
Route::resource('jobapplications', JobApplicationController::class);
Route::resource('messages', MessageController::class);
Route::resource('roles', RoleController::class);
Route::resource('towns', TownController::class);
Route::resource('workplaces', WorkplaceController::class);
Route::resource('users', UserController::class);