<x-app-layout>
    <x-slot name="header">
        <div>
            <a href="{{ route('questions.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-32 ">
                Adicionar nova questão</a>
        </div>
    </x-slot>
    <section class="flex justify-between ">
        <div
            class="w-1/4 flex flex-col justify-start items-center py-3 gap-2 bg-scroll h-screen overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-gray-800">

            <div
                class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                <h1>Curso</h1>
            </div>
            <div
                class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                <h1>Quiz</h1>
            </div>

            <div
                class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                <a href="questions">
                    <h3>Questões</h3>
                </a>
            </div>
            <div
                class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                <a href="alternatives">
                    <h3>Alternativas</h3>
                </a>
            </div>
        </div>

        <div class="py-12 w-full pl-28">
            <div class="p-6 bg-white border-b border-gray-200 w-4/5 h-96 content-center">
                <div class=" flex flex-row justify-center gap-2">
                    <div class="flex flex-col ">
                        <form action="{{ route('questions.store') }}" method="POST">
                            @csrf
                            <div class="flex flex-col">
                                <label for="question">{{ __('question') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite uma questão') }}"
                                    name="question" class="w-96" />
                                <p>Quiz</p>
                                <select name="quiz">
                                    @foreach (\App\Models\Quiz::all() as $item)
                                        <option value={{ $item->id }}>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
