<x-app-layout>
    @if (Auth::user()->is_admin)
        <section class="flex flex-row">
            <x-menu></x-menu>
            <div class="">
                <div class="">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem dos modulos</h1>
                            <div class="w-full divide-y divide-gray-200">
                                <table class="w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-200">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                                scope="col">id</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                                scope="col" scope="col">Módulo</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                                scope="col" scope="col">Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 ">
                                        @foreach ($modules as $module)
                                            <tr class="">
                                                <th
                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                    {{ $module->id }} </th>
                                                <th
                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                    {{ $module->title }}</th>
                                                <th
                                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">

                                                    <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded"
                                                        href="{{ route('modules.edit', [$module->id]) }}">Editar</a>
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
        </section>
    @endif
</x-app-layout>
