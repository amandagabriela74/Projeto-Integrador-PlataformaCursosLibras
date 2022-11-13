<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CourseController;
use App\Models\Answer;
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
    return view(' index');
});

//a rota jogos, chama o controller CursosController, na puclic function index
//Route::get('/painel-admin', [CursosController::class, 'index']);

//todas as rotas dentro desse grupo de rotas terão o mesmo prefixo 'painel-admin'
Route::prefix('painel-admin')->group(function(){
    Route::get('/', [CourseController::class, 'index'])->name('course-index');   //rota listagem dos cursos
    
    
    //CREATE
    Route::get('/create-course', [CourseController::class, 'create'])->name('course-create');   //rota criação dos cursos
    Route::post('/', [CourseController::class, 'store'])->name('course-store');   //rota armazenar os cursos criados

    //UPDATE
    Route::get('/{id}/edit-course', [CourseController::class, 'edit'])->where('id', '[0-9]+')->name('course-edit');   //rota editar
    Route::put('/{id}', [CourseController::class, 'update'])->where('id', '[0-9]+')->name('course-update');   

    //DELETE
    Route::delete('/{id}', [CourseController::class, 'destroy'])->where('id', '[0-9]+')->name('course-destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/course', function () {
    return view('course');
});


// Route::resource('answers', AnswerController::class);
Route::get('test/module/{id}', [AnswerController::class, 'index'])->name('test-module');
Route::post('test/store', [AnswerController::class, 'store'])->name('test-store');

//quiz
Route::resource('quiz', \App\Http\Controllers\QuizController::class);

//questions
Route::resource('questions', \App\Http\Controllers\QuestionController::class);

//alternatives
Route::resource('alternatives', \App\Http\Controllers\AlternativeController::class);

//quando tiver algum erro referente a rota, mostra na tela esse return
Route::fallback(function(){
    return"Erro na rota";
});

require __DIR__.'/auth.php';
