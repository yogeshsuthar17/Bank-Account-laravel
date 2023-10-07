<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\IncomeController;
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
    return view('auth.register');
});

// Route::resource('form', FormController::class);

Route::get("register", [FormController::class, "index"]);

Route::post("register-user", [FormController::class, "registerUser"]);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'login'])->name('login.post'); 
Route::get('registration', [RegisterController::class, 'index']);
Route::post('post-registration', [RegisterController::class, 'register'])->name('register.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('welcome');
//     });
// });

Route::resource('bank-account', BankAccountController::class);
Route::resource('income', IncomeController::class);