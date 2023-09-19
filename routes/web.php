<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\DropdownController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout/home');
});

Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');


Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('admin/category',[CategoryController::class,'index']);
});

// contractor controller
Route::get('contractor',[ContractorController::class,'index']);
// Route::post('contractor',[ContractorController::class,'store']);
Route::get('register',[ContractorController::class,'register'])->name('register.form');

Route::group(['middleware'=>'contractor_auth'],function(){
    Route::get('contractor/dashboard',[ContractorController::class,'dashboard']);
});


// dropdown controller
Route::get('dependent-dropdown', [DropdownController::class,'index']);
Route::post('/dependent-dropdown',[ContractorController::class,'store'])->name('submitForm');


Route::post('api/fetch-states', [DropdownController::class, 'fetchState']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);




