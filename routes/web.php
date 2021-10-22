<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect(route('login'));
});
Route::middleware(['middleware' => 'PreventBackHistory'])->group(function () {
    // Auth::routes([
    //     'register' => false
    // ]);
    Auth::routes();
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'super_admin', 'middleware'=>['isSuperAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[SuperAdminController::class,'index'])->name('super_admin.dashboard');
    Route::get('profile',[SuperAdminController::class,'profile'])->name('super_admin.profile');
    Route::get('settings',[SuperAdminController::class,'settings'])->name('super_admin.settings');
    
});

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    
});

Route::group(['prefix'=>'sales', 'middleware'=>['isSales','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[SalesController::class,'index'])->name('sales.dashboard');
    Route::get('profile',[SalesController::class,'profile'])->name('sales.profile');
    Route::get('settings',[SalesController::class,'settings'])->name('sales.settings');
});
