<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Curso;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        //dd('Olá Mundo');
        $courses = Course::all();
        //dd($cursos);
      //  return view('painel-admin'); //exportar a variavel por parametro
        return view('painel-admin', ['courses'=> $courses]);
    }

    public function create(){
      return view('create-course');
    }


    public function store(Request $request){
     // dd($request);
     Course::create($request->all());
     return redirect()->route('course-index');   //após a criação retorna para o index

    }


    public function edit($id){
      $courses = Course::where('id',$id)->first();  //procurar na tabela jofos (model) onde o id seja igual ao id do parametro
      if(!empty($courses))//verificação: se a variação cursos (não encontrar o curso referente ao id) estiver vazia ele redireciona para a listagem
      {
        //dd($cursos);
        return view('edit-course', ['courses'=> $courses]);
    }
      else
      {
        return redirect()->route('course-index');
      }
    }

    public function update(Request $request, $id){
      //dd($request);
      //dd($id);
      $data = [
        'titulo'=> $request->titulo,
        'topico'=> $request->topico,
        'embed'=> $request->embed,
        'descricao'=> $request->descricao,
      ];
      Course::where('id', $id)->update($data); //Para atualizar no banco , com o MOdel onde o id seja igual a variavel id, passa um update na variavel data
      return redirect()->route('course-index');

    }


    public function destroy($id){
      //dd($id);
      Course::where('id',$id)->delete();
      return redirect()->route('course-index');
    }
/*
    public function destroy($id){
      Event::findOrFail($id)->delete();
      return redirect()->route('cursos-index');

    }
*/
}
