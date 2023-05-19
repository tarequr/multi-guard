<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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

Route::get('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('user/create', [UserController::class, 'userCreate'])->name('user.create');
Route::get('user/login', [UserController::class, 'showUserLoginForm'])->name('user.login.view');
Route::post('user/login', [UserController::class, 'login'])->name('user.login');
Route::post('user/logout', [UserController::class, 'logout'])->name('user.logout');

// Route::middleware('auth')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
// });

Route::get('admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
