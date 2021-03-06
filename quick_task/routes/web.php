<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LanguagesController;


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

Route::get('lang/{locale}', [LanguagesController::class, 'language'])->name('languages');

Route::resource('staffs', StaffsController::class);

Route::resource('departments', DepartmentController::class);
