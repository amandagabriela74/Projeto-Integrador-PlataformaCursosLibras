<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="py-12 bg-sky-400">
        <h1 class="flex justify-center py-2">Quiz: {{ $quiz->title }}</h1>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center ">
            <div class="overflow-hidden shadow-sm sm:rounded-lg w-3/5  ">
                <div class="p-6 ">
                    <section class="flex flex-col justify-center items-center  ">
                        <form method="POST" action="{{ route('test-store') }}" class="w-full " x-data="{question: 0}">
                            @csrf
                            <input type="hidden" name="quizId" value="{{ $quiz->id }}">
                            <section id="" class=" text-center">
                                <div>
                                    @foreach ($quiz->questions as $i => $question)
                                    
                                  <x-quiz-question :i="$i" :question="$question" :quiz="$quiz" />
                                    
                                    @endforeach
                                </div>
                            </section>




                            {{-- <div class="flex flex-col">
            <x-text-input type="submit" name="submit" value="Enviar"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4" />
        </div> --}}
                            {{-- <h2 id="">Resultado:</h2>
        <h2 id="">Pontos:</h2> --}}

                        </form>

                    </section>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>