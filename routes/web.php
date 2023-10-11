<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\HomeController;

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

Route::post('paypal/payment', [PaypalController::class, 'payment'])->name('paypal');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');

Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/editProfileUser', [HomeController::class,'editProfileUser'])->name('editProfileUser');
    Route::get('/editLinkcard', [HomeController::class,'editLinkcard'])->name('editLinkcard');
});

/* Route::get('/editProfileUser', [HomeController::class,'editProfileUser'])->name('editProfileUser');
Route::get('/editLinkcard', [HomeController::class,'editLinkcard'])->name('editLinkcard'); */

//END Normal Users Routes List

//Admin Users Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

//Manager Users Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function(){
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
