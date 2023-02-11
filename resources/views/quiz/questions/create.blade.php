<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">
            <div class="flex justify-center max-screen  mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  w-4/6 overflow-hidden shadow-sm sm:rounded-lg my-20 py-8 px-24 ">
                    <div class="p-6 sm:p-0 border-gray-200">
                        <x-sub-title>Criação da Pergunta</x-sub-title>
                        <form action="{{ route('questions.store') }}" method="post">
                            @csrf

                            <div class="flex flex-col">
                                <label for="question">{{ __('question') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite uma questão') }}"
                                    name="question" class="w-96" />
                                <p>Quiz</p>
                                <select name="quiz">
                                    @foreach ($quizzes as $item)
                                        <option value={{ $item->id }}>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4">{{ __('Salvar') }}</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
