<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TownController;
use App\Http\Controllers\WorkplaceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChangePasswordController;

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

/* change password */
Route::get('change_password/{user}', [ChangePasswordController::class, 'edit'])
    ->name('change_password.edit');

Route::post('change_password/{user}', [ChangePasswordController::class, 'update'])
    ->name('change_password.update');

    /* ovo su rute gdje korisnik MORA biti prijavljen da bi im pristupio */
Route::middleware(['auth'])->group(function () {

    /* homepage, primjetiti ->name('home') na kraju */
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
    /* ::post, ::put, ::patch, ::delete */
    Route::resource('towns', TownController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('workplaces', WorkplaceController::class);
    Route::resource('messages', MessageController::class);
    Route::resource('users', UserController::class);
});

/* ovdje su rute za login, registraciju, change password, itd. */
require __DIR__.'/auth.php';