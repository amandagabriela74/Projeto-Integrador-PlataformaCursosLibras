<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Question::all();

        return view('quiz.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('quiz.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Question::create([
            'question' => $request->question,
            'quiz_id' => $request->quiz,
        ]);

        return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question): View
    {
        $quizzes = Quiz::all()->pluck('title', 'id');

        return view('quiz.questions.edit', compact('question', 'quizzes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Question $question){
        //dd($request);
        //dd($question);
        $data = [
          'question'=> $request->question,
          'quiz_id'=> $request->quiz,
        ];
        // Course::where('id', $id)->update($data); //Para atualizar no banco , com o MOdel onde o id seja igual a variavel id, passa um update na variavel data
        $question->update($data);
        return redirect()->route('questions');
  
      } 
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //dd($id);
        Question::where('id',$id)->delete();
        return redirect()->route('questions.index');
      }
}
