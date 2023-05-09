<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SPController;

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

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'showdashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);

//Category
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::get('/all-product', [ProductController::class, 'allProduct']);
Route::post('/saveproduct', [ProductController::class, 'saveProduct']);

Route::get('/editproduct/{productid}', [ProductController::class, 'editProduct']);
Route::post('/updateproduct/{productid}', [ProductController::class, 'updateProduct']);

Route::get('/deleteproduct/{productid}', [ProductController::class, 'deleteProduct']);
Route::get('/showproduct/{productid}', [ProductController::class, 'showProduct']);
Route::get('/hideproduct/{productid}', [ProductController::class, 'hideProduct']);
// End Category

// Manufacturer
Route::get('/add-manu', [ManuController::class, 'addManu']);
Route::get('/all-manu', [ManuController::class, 'allManu']);
Route::post('/savemanu', [ManuController::class, 'saveManu']);

Route::get('/editmanu/{manuid}', [ManuController::class, 'editManu']);
Route::post('/updatemanu/{manutid}', [ManuController::class, 'updateManu']);

Route::get('/deletemanu/{manuid}', [ManuController::class, 'deleteManu']);
Route::get('/showmanu/{manuid}', [ManuController::class, 'showManu']);
Route::get('/hidemanu/{manuid}', [ManuController::class, 'hideManu']);
// End Manufacturer

// SP
Route::get('/add-sp', [SPController::class, 'addSP']);
Route::get('/all-sp', [SPController::class, 'allSP']);
Route::post('/savesp', [SPController::class, 'saveSP']);

Route::get('/editsp/{spid}', [SPController::class, 'editSP']);
Route::post('/updatesp/{sptid}', [SPController::class, 'updateSP']);

Route::get('/deletesp/{spid}', [SPController::class, 'deleteSP']);
Route::get('/showsp/{spid}', [SPController::class, 'showSP']);
Route::get('/hidesp/{spid}', [SPController::class, 'hideSP']);
// End SP
