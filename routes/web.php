<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use App\Models\Answer;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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
    return view(' index');
});

//a rota jogos, chama o controller CursosController, na puclic function index
//Route::get('/painel-admin', [CursosController::class, 'index']);

//todas as rotas dentro desse grupo de rotas terão o mesmo prefixo 'painel-admin'
Route::group(['prefix' => 'admin'], function () {
    //Route::get('/', [CourseController::class, 'index'])->name('course-index');   //rota listagem dos cursos
    Route::get('/', function () {
        return view('painel-admin');
    })->name('admin');

    //CREATE
    Route::get('/create-course', [CourseController::class, 'create'])->name('course-create');   //rota criação dos cursos
    Route::post('/', [CourseController::class, 'store'])->name('course-store');   //rota armazenar os cursos criados

    //UPDATE
    Route::put('/{course}', [CourseController::class, 'update'])->where('id', '[0-9]+')->name('course-update');

    //DELETE
});

Route::resource('/inscricao', SubscriptionController::class);



Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/coursesUser', function () {
    return view('users.courses');
})->middleware(['auth'])->name('coursesUser');

//Route::get('/course', function () { return view('course');});
Route::get('course/module/{module}', [CourseController::class, 'show'])->name('course-module');


// Route::resource('answers', AnswerController::class);
Route::get('test/module/{module}', [AnswerController::class, 'index'])->name('test-module');
Route::post('test/store', [AnswerController::class, 'store'])->name('test-store');



Route::post('choice', [ChoiceController::class, 'store'])->name('choice-store');

//answers
Route::resource('answers', \App\Http\Controllers\AnswerController::class);
Route::get('result/{id}', [AnswerController::class, 'show'])->name('result-show');

//modules
Route::resource('modules', \App\Http\Controllers\ModuleController::class);

//quiz
Route::resource('quizzes', \App\Http\Controllers\QuizController::class);

//questions
Route::resource('questions', \App\Http\Controllers\QuestionController::class);

//alternatives
Route::resource('alternatives', \App\Http\Controllers\AlternativeController::class);

//courses
Route::resource('courses', \App\Http\Controllers\CourseController::class);

Route::resource('comments', \App\Http\Controllers\CommentController::class);

Route::resource('users', UserController::class);

Route::get('certificados/{id}', [UserController::class, 'showCertificate'])->name('certificates');
Route::get('generatePDF', [UserController::class, 'generatePDF'])->name('user.pdf');

Route::get('meusCursos/{id}', [UserController::class, 'showCourses'])->name('coursesUser');

Route::get('/support', function () { 
    return view('support');})->name('support');

Route::resource('admin', AdminController::class);
Route::get('/users', [AdminController::class, 'showUsers'])->name('users');

//quando tiver algum erro referente a rota, mostra na tela esse return
Route::fallback(function () {
    return "Erro na rota";
});

require __DIR__ . '/auth.php';
