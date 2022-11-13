<x-guest-layout>
Tela quiz index
<x-slot name="header">

    <div>
      <a href="{{ route('course-create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-32 "> Adicionar novo curso</a>
    </div>  
    </x-slot>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem dos cursos</h1>
                  <div class="w-full divide-y divide-gray-200">
                  <table class="w-full divide-y divide-gray-200">
                      <thead class="bg-gray-200">
                        <tr>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider">Módulo</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider">Título Quiz</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"">Descrição</th>
                        </tr>
                      </thead>


                      <tbody class="bg-white divide-y divide-gray-200 ">
                          @foreach(\App\Models\Module::all() as $module)
                        <tr class="">
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$module->module_id}}</th>
                              @foreach ($module->quizzes as $quiz)
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap ">{{$quiz->title}}</th>
                              @endforeach
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"></th>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                  
                                <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded" href="">Editar</a>  
                                <form action="" method="POST">
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
</x-guest-layout>