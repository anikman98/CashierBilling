<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('single-charge', [HomeController::class, 'singleCharge'])->name('single.charge');

Route::get('plans', [PlanController::class, 'show'])->name('plans.all');
Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
Route::post('plans/store', [PlanController::class, 'store'])->name('plans.store');
