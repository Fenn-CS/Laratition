<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Routing\RouteGroup;

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

/* Authentication Routes */

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('competitions', [PublicController::class, 'competitions'])->name('competitions');
Route::get('competition', [PublicController::class, 'competition'])->name('competition');
Route::get('submissions', [PublicController::class, 'submissions'])->name('submissions');
Route::get('submissions/{id}', [PublicController::class, 'submission'])->name('submission');
Route::get('leaderboad', [PublicController::class, 'leaderboard'])->name('leaderboard');
Route::get('mentors', [PublicController::class, 'mentors'])->name('mentors');
Route::get('mentors/{id}', [PublicController::class, 'mentors'])->name('mentor');
Route::get('community', [PublicController::class, 'community'])->name('community');
