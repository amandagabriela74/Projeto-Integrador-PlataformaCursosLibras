<x-app-layout>
    <section class="container-fluid flex flex-row">
        <x-menu-user></x-menu-user>


        <div class="w-full border flex justify-center py-10">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-4/6 h-4/6">
                <div class="p-6 bg-white border-b border-gray-200  ">
                    <div class="flex flex-row justify-between pb-3 ">
                        <h4 class="text-2xl font-bold text-gray-700 dark:text-white">
                            Listagem dos modulos</h4>
                        <a href="{{ route('modules.store') }}"
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
                                        scope="col">Titulo</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col">Cursos</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($modules as $module)
                                    <tr class="">
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $module->title }} </th>
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            visualizar cursos </th>
                                        
                                        <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">

                                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded"
                                                href="{{ route('modules.edit', [$module->id]) }}">Editar</a>

                                            <form action="{{ route('modules.destroy', $module->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Excluir</button>
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
