<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Models\Quiz;
use App\Models\Result;

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
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $data =['countQuiz'=>Quiz::count(),'countTopic'=>Category::count(), 'result'=>Result::all() ];
    return view('dashboard', $data);
})->name('dashboard');


Route::get('/about_us', function () {
    return view('about_us');
})->name('about.us');

Route::get('/topics/topic',function(){
    return view('topics/topic')->with('topic',Category::all());
})->name('topic');

Route::get('/topics/create', function(){
    return view('topics/create');
})->name('topics.create');

Route::post('/add/topic', [CategoryController::class ,'store'])->name('topics.store');

Route::get('/deleteTopic/{id}', [CategoryController::class ,'deleteTopic']);

// Route::get('/editTopic/{id}', [CategoryController::class ,'editTopic']);

// Route::get('/quiz/show_quiz', function () {
//     return view('/quiz/show_quiz');
// })->name('quiz.show');

Route::get('/quiz/show_quiz',function(){
    $data =['quiz_show'=>Quiz::all(),'topic'=>Category::all()];
    return view('/quiz/show_quiz', $data);
})->name('quiz.show');

Route::get('/delete/quiz/{id}', [QuizController::class ,'deleteQuiz']);

// Route::get('/quiz/create_quiz',function(){
//     return view('quiz.create_quiz');
// })->name('quiz.ceate_quiz');

Route::get('/quiz/create_quiz', [QuizController::class ,'create'])->name('quiz.create');
// Route::get('quiz/add_quiz', 'QuestionController@store')->name('quiz.add_quiz');
Route::post('/quiz/add', [QuizController::class ,'store'])->name('quiz.add');
Route::post('/updateQuiz/{id}', [QuizController::class ,'updateQuiz']);
Route::post('/passQuiz/{id}', [QuizController::class ,'passQuiz']);


// Route::get('redirects','App\Http\Controllers\HomeController@index');

Route::get('/students/dashboard', function () {
    return view('/students.dashboard')->with('quiz',Quiz::all());
    
})->name('students.dashboard');

// Route::post('redirects', [HomeController::class ,'index'])->name('students.dashboard');