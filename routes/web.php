<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/pastevents', [IndexController::class, 'pastEvents'])->name('pastevents');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/subscribe/{id}', [UserController::class, 'subscribe'])->name('subscribe')->middleware('user');
Route::get('/unsubscribe/{id}', [UserController::class, 'unsubscribe'])->name('unsubscribe')->middleware('user');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('adminDashboard')->middleware('admin');
Route::get('/admin/event/delete/{id}', [\App\Http\Controllers\AdminController::class, 'delete'])->name('destroyEvent')->middleware('admin');
Route::get('/admin/event/create', [\App\Http\Controllers\AdminController::class, 'create'])->name('createEvent')->middleware('admin');
Route::post('/admin', [\App\Http\Controllers\EventController::class, 'store'])->name('storeEvent')->middleware('admin');

