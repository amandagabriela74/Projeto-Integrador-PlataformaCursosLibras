<x-app-layout>

        <section class="flex justify-center ">
        <x-menu></x-menu>
        <div class="">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem das alternativas</h1>
                    <div class="w-full divide-y divide-gray-200">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col">Módulo</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">Questão</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">Alternativa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"
                                        scope="col" scope="col">Descrição</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($alternatives as $alternative)
                                    <tr class="">
                                        <th
                                            class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $alternative->question->quiz->title}} </th>
                                        <th
                                            class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $alternative->question->question}}</th>
                                        <th
                                            class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $alternative->alternative }}</th>
                                        <th
                                            class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">

                                            <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded"
                                                href="{{ route('alternatives.edit', [$alternative->id]) }}">Editar</a>

                                            <form action="{{ route('alternatives.destroy', [$alternative->id])}}"
                                                method="POST">
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
