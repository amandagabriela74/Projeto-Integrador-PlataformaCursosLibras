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
        //
        $alternatives = Alternative::all();

        return view('quiz.alternatives.index', compact('alternatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('quiz.alternatives.create');
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
        // dd($request); 
        Alternative::create([
            'alternative' => $request->alternative,
            'correct' => $request->correct,
            'question_id' => $request->question
        ]);

        return redirect('alternatives');
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
    public function edit(Alternative $alternative): View
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
        //dd($request);
        //dd($alternative);
        $data = [
            'alternative'=> $request->alternative,
            'correct'=> $request->correct,
            'question_id'=> $request->question,
          ];
          // Course::where('id', $id)->update($data); //Para atualizar no banco , com o MOdel onde o id seja igual a variavel id, passa um update na variavel data
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
                return redirect()->route('alternatives.index');
    }
}
