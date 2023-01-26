<x-app-layout>
    <section class="container-fluid flex flex-row">
        <x-menu-user></x-menu-user>


        <div class="h-4/5 w-4/5 flex justify-center pt-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                    <div class="flex flex-row justify-between pb-3 ">
                        <h4 class="text-2xl font-bold text-gray-700 dark:text-white">
                            Listagem dos cursos</h4>
                        <a href="{{route('courses.create')}}"
                            class="w-32 inline-flex items-center px-3 py-2 mx-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1 fill-white" 
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path 
                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg> 
                        <h1 class="pl-2 text-lg">Cursos </h1>
                            
                        </a>
                    </div>
                    <div class="w-full divide-y divide-gray-200">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-200 ">
                                <tr class="">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col">Módulo</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col">Título</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">Tópico</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">Embed</th>
                                    <th class=" px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">Descrição</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($courses as $course)
                                    <tr class="">
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $course->module->title }} </th>
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $course->titulo }} </th>
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $course->topico }}</th>
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $course->embed }}</th>
                                        <th
                                            class="break-normal w-96 px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $course->descricao }}</th>
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">

                                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded"
                                                href="{{ route('courses.edit', [$course->id]) }}">Editar</a>

                                            <form action="{{route('courses.destroy',$course->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Deletar</button>
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
    </section>
</x-app-layout>
