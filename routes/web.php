<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\aboutController;
use App\Http\Controllers\dashboard\workCategoryController;
use App\Http\Controllers\dashboard\serviceController;
use App\Http\Controllers\dashboard\educationController;
use App\Http\Controllers\dashboard\experianceController;
 

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

Route::get('/',[welcomeController::class,'index']);

Auth::routes();




// ========================================
// backend
// ========================================
 Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::get('/',[dashboardController::class,'index'])->name('dashboard');
    
    Route::get('/about',[aboutController::class,'index'])->name('about');
    Route::post('about/update',[aboutController::class,'update'])->name('about_update');

    Route::get('project/category',[workCategoryController::class,'index'])->name('project_category');
    Route::get('/project/category/create',[workCategoryController::class,'create'])->name('project_category_create');
    Route::post('project/category/store',[workCategoryController::class,'store'])->name('project_category_store');
    Route::get('project/category/edit/{id}',[workCategoryController::class,'edit'])->name('project_category_edit');
    Route::put('project/category/update/{id}',[workCategoryController::class,'update'])->name('project_category_update');
    Route::get('project/category/delete/{id}',[workCategoryController::class,'destroy'])->name('project_category_delete');
    Route::get('project/category/status/{id}',[workCategoryController::class,'status']);

    Route::get('service',[serviceController::class,'index'])->name('service');
    Route::get('service/create',[serviceController::class,'create'])->name('service_create');
    Route::post('service/store',[serviceController::class,'store'])->name('service_store');
    Route::get('service/edit/{id}',[serviceController::class,'edit'])->name('service_edit');
    Route::put('service/update/{id}',[serviceController::class,'update'])->name('service_update');
    Route::get('service/delete/{id}',[serviceController::class,'destroy']);
    Route::get('service/status/{id}',[serviceController::class,'status']);

   //  Education
    Route::get('education',[educationController::class,'index'])->name('education');
    Route::get('education/create',[educationController::class,'create'])->name('education_create');
    Route::post('education/store',[educationController::class,'store'])->name('education_store');
    Route::get('education/edit/{id}',[educationController::class,'edit'])->name('education_edit');
    Route::put('education/update/{id}',[educationController::class,'update'])->name('education_update');
    Route::get('education/delete/{id}',[educationController::class,'destroy']);



   //  Experiance
   Route::get('experiance',[experianceController::class,'index'])->name('experiance');
   Route::get('experiance/create',[experianceController::class,'create'])->name('experiance_create');
   Route::post('experiance/store',[experianceController::class,'store'])->name('experiance_store');
   Route::get('experiance/edit/{id}',[experianceController::class,'edit'])->name('experiance_edit');
   Route::put('experiance/update/{id}',[experianceController::class,'update'])->name('experiance_update');
   Route::get('experiance/delete/{id}',[experianceController::class,'destroy']);
   Route::get('experiance/status/{id}',[experianceController::class,'status']);
 });
;
