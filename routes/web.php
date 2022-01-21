<?php

use App\Http\Controllers\Applications;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\login;
use App\Http\Controllers\Auth\logout;
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
Route::get('logout', [logout::class, 'logout'])->name('logout');

// Dashboard

Route::get('dashboard', [Dashboard::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('dashboard/calendar', [Dashboard::class, 'calendar'])->middleware('auth')->name('calendar');
Route::post('dashboard/promotion', [Dashboard::class, 'promo_page'])->middleware('auth')->name('promo_page');

// add staff
Route::get('dashboard/add_staff', [Dashboard::class, 'add_staff_index'])->middleware('auth')->name('add_staff');
Route::post('dashboard/add_staff', [Dashboard::class, 'add_staff_action'])->middleware('auth');

//view active academic staff
Route::get('dashboard/academic_staff',[Dashboard::class, 'view_active_academic_staff_index'])->middleware('auth')->name('view_active_academic_staff');

//view non active academic staff    un_active_staff
Route::get('dashboard/non_academic_staff',[Dashboard::class, 'view_active_non_academic_staff_index'])->middleware('auth')->name('view_non_active_academic_staff');


//view un_active staff 
Route::get('dashboard/non_active_staff',[Dashboard::class, 'un_active_staff_index'])->middleware('auth')->name('un_active_staff');


// update staff
Route::post('dashboard/update_staff',[Dashboard::class, 'update_staff'])->middleware('auth')->name('update_staff_record');

// staff status
Route::post('dashboard/staff_status',[Dashboard::class, 'staff_status'])->middleware('auth')->name('staff_status');



//application
Route::get('application',[Applications::class, 'application_index'])->name('application');
Route::post('application',[Applications::class, 'application_action']);
Route::get('dashboard/applied_staff', [Applications::class, 'applied'])->middleware('auth')->name('applied');

Route::get('dashboard/accepted_staff', [Applications::class, 'accept'])->middleware('auth')->name('accept');

Route::post('dashboard/reject', [Applications::class, 'reject_app'])->middleware('auth')->name('reject_app');
Route::post('dashboard/accept', [Applications::class, 'accept_app'])->middleware('auth')->name('accept_app');




