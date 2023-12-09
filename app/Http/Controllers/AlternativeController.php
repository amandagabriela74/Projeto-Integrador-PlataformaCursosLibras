<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();
        return view('quiz.alternatives.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alternative::create([

            'alternative' => $request->input('alternative'),
            'correct' => $request->input('correct'),
            'question_id' => $request->questionId,
        ]);

        return redirect()->route('quizzes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function show(Alternative $alternative)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternative $alternative)
    {
        $questions = Question::all()->pluck('question', 'id');

        return view('quiz.alternatives.edit', compact('alternative', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternative $alternative)
    {
        $data = [
            'alternative' => $request->alternative,
            'correct' => $request->correct,
            'question_id' => $request->question,
        ];

        $alternative->update($data);
        return redirect()->route('alternatives.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternative  $alternative
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                //dd($id);
                Alternative::where('id',$id)->delete();
                return back();
    }
}
