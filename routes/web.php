<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\adminController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\PreventBackHistory;
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
Route::get('/PNCHome',[adminController::class,'displayHome']);


//Student
Route::get('/enrollment',[studentController::class,'displayForm']);

// Route::view('/add', 'Student.enrollmentForm');
// Route::post('/add',[studentController::class,'inputData']);
Route::post('/enrollment',[studentController::class,'inputData']);
//Admin
Route::get('/database',[adminController::class,'databaseDisplay'] );
Route::get('/database',[adminController::class,'showList']);
//View
Route::get('/view/{id}',[adminController::class,'viewStudent']);
//login
Route::post('/PNCHome',[adminController::class,'checklogin'])->middleware('prevent-back-history');
// Route::group(['middleware' => 'prevent-back-history'],function(){
// 	Auth::routes();
// 	Route::get('/PNCHome', [adminController::class,'checklogin']);
// });
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// PDF
Route::get('/exportPDF/{id}',[adminController::class,'generatePDF']);



