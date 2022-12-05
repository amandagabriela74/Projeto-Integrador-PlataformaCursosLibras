<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Answer;
use App\Models\Choice;
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
        return view('quiz.quiz', ['quizzes' => $quizzes]);
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
        $corrects = 0;

        foreach ($alternatives as $alternative) {
            if ($alternative->correct == 1) {
                $corrects++;
            }
        }

        $createdAnswers = Answer::create([
            'user_id' => $userId,
            'quiz_id' => $quizId,
            'score' => 10 * $corrects / sizeof($alternatives),
        ]);


        foreach ($alternatives as $alternative) {
            Choice::create([
                'answer_id' => $createdAnswers->id,
                'alternative_id' => $alternative->id,
            ]);
        }

        return redirect()->route('result-show', $alternative->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */

    public function show($id){
        $result = Answer::findOrFail($id);
        if ($result){
            //no segundo parametro da função view estou passando o array informando o nome da variavel que será criada na view e o valor dela
            return view('results', [
                'resultAnswers'=> $result
            ]);
        } else{
            return view('results')->with('msg', 'Resultado não encontrado');
        }
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
