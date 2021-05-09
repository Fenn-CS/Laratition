<?php

use App\Http\Controllers\CompetitionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/competitions', [CompetitionController::class, 'competitions']);
Route::middleware('auth:sanctum')->post('/competition/create', [CompetitionController::class, 'createCompetition']);
Route::middleware('auth:sanctum')->post('/competitions/update', [CompetitionController::class, 'createCompetition']);
