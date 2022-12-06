<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="py-12 bg-sky-400">
        @foreach ($quizzes as $quiz)
            <h1 class="flex justify-center py-2">Quiz: {{ $quiz->title }}</h1>
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center ">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg w-3/5  ">
                    <div class="p-6 ">
                        <section class="flex flex-col justify-center items-center  ">
                            <form method="POST" action="{{ route('test-store') }}" class="w-full " x-data="{question: 0}">
                                @csrf
                                <input type="hidden" name="quizId" value="{{ $quiz->id }}">
                                <section id="" class=" text-center">
                                    <div>
                                        @foreach ($quiz->questions as $i => $question)
                                            <div class=" bg-white mb-2 rounded-xl" x-show="question == {{$i}}">
                                                <div class=" rounded-md py-8">
                                                    <h1 id="" class="py-2 text-2xl font-semibold">
                                                        {{ $question->question }}</h1>  <!--pergunta-->
                                                </div>
                                                <div class="pb-5 flex flex-col items-center ">

                                                    <!-- Module::find(1)-> quizzes[0]->questions[0]->alternatives -->
                                                    @foreach ($question->alternatives as $alternative)
                                                        <div class="flex flex-row border border-blue-500 border-solid py-2 my-2 rounded-xl w-4/5 hover:bg-sky-200 cursor-pointer">
                                                            <input class="ml-2"
                                                                id="alternative-{{ $alternative->id }}"
                                                                type="radio" name="questions[{{ $question->id }}]"
                                                                value="{{ $alternative->id }}">
                                                            <label class="form-check-label pl-3"
                                                                for="alternative-{{ $alternative->id }}">
                                                                {{ $alternative->alternative }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                    <div class="">
                                                        @if ($i == sizeof($quiz->questions) - 1)
                                                        <x-text-input type="submit" name="submit" value="Enviar"
                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mb-4 mr-4" />
                                                        @else
                                                            <x-text-input value="Próxima" x-on:click="question++"
                                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mb-4 mr-4" />
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </section>

                               
                                                        
                                       
        @endforeach
        {{-- <div class="flex flex-col">
            <x-text-input type="submit" name="submit" value="Enviar"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4" />
        </div> --}}
        {{-- <h2 id="">Resultado:</h2>
        <h2 id="">Pontos:</h2> --}}

        </form>


        <!--
                foreach(\App\Models\Module::find(1)-> quizzes[0]->questions as $question)
                <section id="" class="w-9/12 text-center">
                    <div class=" border border-black border-solid rounded-md">
                        <h1 id="" class="py-6 text-2xl font-semibold"> {{ $question->question }}</h1> <!--pergunta
                    </div>
                    <div class="pb-5">
                       <!-- Module::find(1)-> quizzes[0]->questions[0]->alternatives
                        foreach (\App\Models\Question::find(1)->alternatives as $alternative)
                        
                    <ul>
                        <li class="py-2  font-semibold my-2 rounded-md bg-gray-900 hover:bg-gray-800 text-white cursor-pointer">{{ $alternative->alternative }}</li>
                    </ul>
                        endforeach
                    </div>
                </section>
                endforeach
    
            </section>
-->
        </section>


    </div>
    </div>
    </div>
    </div>

</x-app-layout>
