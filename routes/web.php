<?php

use App\Http\Controllers\Applications;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\login;
use App\Http\Controllers\Dashboard;

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
 
// Auth
Route::get('/',[login::class, 'index_login'])->name('/');
Route::post('/',[login::class, 'login_action']);

// Dashboard

Route::get('dashboard', [Dashboard::class, 'index'])->middleware('auth')->name('dashboard');

// add staff
Route::get('dashboard/add_staff', [Dashboard::class, 'add_staff_index'])->middleware('auth')->name('add_staff');
Route::post('dashboard/add_staff', [Dashboard::class, 'add_staff_action'])->middleware('auth');

// view staff
Route::get('dashboard/view_staff',[Dashboard::class, 'view_staff_index'])->middleware('auth')->name('view_staff');


//application
Route::get('application',[Applications::class, 'application_index'])->middleware('auth')->name('application');
Route::post('application',[Applications::class, 'application_action'])->middleware('auth');