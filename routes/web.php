<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [EmployeeController::class, 'dashboard'])->name('employee');

//Employee Sub Module Routes

Route::get('/employee/', [EmployeeController::class, 'dashboard'])->name('employee');
Route::get('/employee/details', [EmployeeController::class, 'details'])->name('employee.details');
Route::get('/employee/contracts', [EmployeeController::class, 'contract'])->name('employee.contracts');
Route::get('/employee/management', [EmployeeController::class, 'add'])->name('employee.management');
