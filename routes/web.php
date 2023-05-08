<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'showdashboard']);
Route::post('/admin-dashboard',[AdminController::class, 'dashboard']);
Route::get('/logout',[AdminController::class, 'logout']);

//Product
Route::get('/add-product',[ProductController::class, 'addProduct']);
Route::get('/all-product',[ProductController::class, 'allProduct']);
Route::post('/saveproduct',[ProductController::class, 'saveProduct']);
// End Product
