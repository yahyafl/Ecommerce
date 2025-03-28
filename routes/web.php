<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/view_catagory',[AdminController::class,'view_catagory']);

Route::post('/add_catagory',[AdminController::class,'add_catagory']);

Route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);
Route::get('/view_product',[AdminController::class,'view_product']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('/show_product',[AdminController::class,'show_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

Route::get('/edit_product/{id}',[AdminController::class,'edit_product']);
Route::post('/edit_product_conf/{id}',[AdminController::class,'edit_product_conf']);
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
