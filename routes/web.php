<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomeTypeController;
use App\Http\Controllers\TypeExpenseController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::resource('type_expense', TypeExpenseController::class)->middleware('auth');
Route::resource('income_type', IncomeTypeController::class)->middleware('auth');