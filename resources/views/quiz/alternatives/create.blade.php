<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">
            <div class="flex justify-center max-screen  mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  w-4/6 overflow-hidden shadow-sm sm:rounded-lg my-20 py-8 px-24 ">
                    <div class="p-6 sm:p-0 border-gray-200">
                        <x-sub-title>Criação das alternativas</x-sub-title>
                        <form action="{{ route('alternatives.store') }}" method="post">
                            @csrf
                            <div class=" mb-6 ">
                                <div>
                                    <label for="alternative"
                                        class="block mb-1 text-lg font-medium text-gray-900 dark:text-white">{{ __('Alternativa') }}</label>
                                    <input type="text" name="alternative"
                                        placeholder="{{ __('Digite uma alternativa') }}"
                                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div>
                                    <label class="block mb-1 text-lg font-medium text-gray-900 dark:text-white"
                                        for="alternative">{{ __('A alternativa está correta?') }}</label>
                                    <select name="correct">
                                        <option value="1" name="true">Sim</option>
                                        <option value="0" name="false">Nao</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="questionId"
                                        class="block mb-1 text-lg font-medium text-gray-900 dark:text-white">{{ __('De qual questão é essa pergunta?') }}</label>
                                    <select name="questionId">
                                        @foreach ($questions as $question)
                                            <option value={{ $question->id }}>{{ $question->question }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="flex justify-end ">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
