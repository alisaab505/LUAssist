<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizEventController;
use App\Http\Controllers\TakeQuizController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ContactController;

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

Auth::routes(); // Authentication routes, predefined by Laravel

Route::get('/', [QuizController::class, 'Home']); // Returns the home page

Route::get('/contactus', function () { // Returns the about us page
    return view('contactus');
});

Route::get('/panel', [QuizController::class, 'RedirectToAppropriatePanel']); // Redirect to appropriate panel

Route::resource('quiz', QuizEventController::class)->only([ // Quiz Events
    'create', 'store', 'show', 'update'
]);

Route::resource('take', TakeQuizController::class)->only([ // Related to taking of quiz
    'store', 'show'
]);

Route::resource('class', ClassController::class)->only([ // Class
    'store', 'show', 'destroy'
]);

Route::resource('question', QuestionController::class)->only([ // Question
    'store', 'update', 'destroy',
]);

Route::resource('subjects', SubjectController::class)->only([ // Subject
    'index', 'store', 'update', 'destroy'
]);

Route::resource('teachers', TeacherController::class)->only([ // Teacher list
    'index'
]);

Route::resource('account', AccountController::class)->only([ // Account management
    'store', 'update', 'destroy'
]);

Route::resource('questionnaire', QuestionnaireController::class)->only([ // Questionnaire
    'show',
]);

Route::post('join', [QuizController::class, 'JoinClass']);

Route::post('/contact', [ContactController::class, 'submitForm']);
