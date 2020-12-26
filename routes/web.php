<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

/* Verification Routes */
Route::get('/email/verify', [RegisterController::class, 'verification_notice'])
    ->middleware(['auth'])
    ->name('verification.notice');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('sent', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard')->with('verified', 'You have been successifully verified');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/dashboard', [DashBoardController::class, 'index']);
Route::get('competitions', [PublicController::class, 'competitions'])->name('competitions');
Route::get('competition', [PublicController::class, 'competition'])->name('competition');
Route::get('submissions', [PublicController::class, 'submissions'])->name('submissions');
Route::get('submissions/{id}', [PublicController::class, 'submission'])->name('submission');
Route::get('leaderboad', [PublicController::class, 'leaderboard'])->name('leaderboard');
Route::get('mentors', [PublicController::class, 'mentors'])->name('mentors');
Route::get('mentors/{id}', [PublicController::class, 'mentors'])->name('mentor');
Route::get('community', [PublicController::class, 'community'])->name('community');
