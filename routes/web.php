<?php

use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

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
    return view('main');
});

Route::get(
    '/evaluation/{evaluationId}/question/{id}',
    [QuestionController::class, 'show']
)->name('questions')->middleware('auth');

Route::get(
    '/evaluation/{evaluationId}/finish',
    [EvaluationController::class, 'finish']
)->name('finish')->middleware('auth');

Route::post(
    '/evaluation/{evaluationId}/question/{id}',
    [QuestionController::class, 'saveAnswer']
)->name('saveAnswer')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
