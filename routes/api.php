<?php

use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ScoreController;
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


//auth --

// Route::get('/', ['QuizController@index']);
Route::get('/', [QuizController::class, 'get_quizzes_published']);
Route::get('/admin', [QuizController::class, 'get_all_quizzes']);

Route::get('/scores', [ScoreController::class, 'get_scores']);

Route::post('/take-quiz/{id}', [QuizController::class, 'take_quiz']);
Route::post('/admin/new-quiz', [QuizController::class, 'take_quiz']);
Route::put('/admin/edit-quiz/{id}', [QuizController::class, 'take_quiz']);

// Route::apiResource('quiz', 'QuizController');

// Route::apiResource('question', 'QuestionController');
// Route::apiResource('choice', 'ChoiceController');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});
