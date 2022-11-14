<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Answer;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = 1;
        $quizId = 1;

        $answers = Answer::where('user_id', $userId)->where('quiz_id', $quizId)->get();
        //dd($answers);

        $moduleId = $request->id;
        $quizzes = Quiz::where('module_id', $moduleId)->get();
        return view('quiz/quiz', ['quizzes'=> $quizzes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $userId = Auth::user()->id;
        $quizId = $request->input('quizId');
        $alternatives = Alternative::find(array_values($request->input('questions')));

        foreach($alternatives as $alternative) {
            Answer::create([
                'user_id' => $userId,
                'quiz_id' => $quizId,
                'question_id' => $alternative->question_id,
                'alternative_id' => $alternative-> id
            ]);
        }

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
