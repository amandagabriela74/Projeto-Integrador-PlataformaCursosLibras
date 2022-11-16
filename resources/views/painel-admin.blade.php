
<x-app-layout>
    <x-slot name="header">

    <div>
      <a href="{{ route('course-create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-32 "> Adicionar novo curso</a>
    </div> 

    </x-slot>
<!--
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem dos cursos</h1>
                  <div class="w-full divide-y divide-gray-200">
                  <table class="w-full divide-y divide-gray-200">
                      <thead class="bg-gray-200">
                        <tr>
                             
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Título</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Tópico</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Embed</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Descrição</th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200 ">
                          @foreach(\App\Models\Course::all() as $course)
                        <tr class="">
                           
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap  ">{{$course->titulo}}</th>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$course->topico}}</th>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$course->embed}}</th>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$course->descricao}}</th>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                  
                                <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded" href="{{route('course-edit',['id'=>$course->id])}}">Editar</a>  
                                <form action="{{route('course-destroy',['id'=>$course->id])}}" method="POST">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Deletar</button>
                                </form>
                              </th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
  -->
  <section class="flex justify-center ">
    <div
        class="w-1/4 flex flex-col justify-start items-center py-3 gap-2 bg-scroll h-screen overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-gray-800">

        <div
            class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
            <a href="painel-admin">
            <h1>Curso</h1>
          </a>
        </div>
        <div
            class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
            <h1>Quiz</h1>
        </div>

                <div
                    class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                   <a href="questions">
                    <h3 >Questões</h3>
                  </a>
                </div>
                <div
                    class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                    <a href="alternatives">
                    <h3>Alternativas</h3>
                  </a>
                </div>


    </div>
    <div x-show="open" class="w-3/4 flex flex-row justify-center gap-2">
        fvrsdfv
    </div>



</section>
</x-app-layout>
