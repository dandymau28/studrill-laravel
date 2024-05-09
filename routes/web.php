<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'doRegister'])->name('register.post');
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'doLogin'])->name('login.post');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', [AdminController::class, 'login']);
    Route::post('/login', [AdminController::class, 'doLogin'])->name('admin.login.post');

    //need admin middleware here
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/student', [StudentController::class, 'index'])->name('admin.student');
});
