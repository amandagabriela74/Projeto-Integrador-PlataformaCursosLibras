<x-guest-layout>
    <x-slot name="header">
        Adicionar curso
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Quiz</h1>
                    <section class="flex flex-col justify-center items-center">
                        <article class='' id=''>
                            Leia a questão e clique na resposta correta
                        </article>
                        <!-- Module::find(1)-> quizzes[0]->questions -->
                        <!--  foreach (\App\Models\Question::all() as $question) -->

                        <form method="POST" action="{{ route('quiz-store') }}" class="w-full">
                            @foreach (\App\Models\Quiz::all() as $quiz)
                                <section id="" class="w-9/12 text-center">
                                    <div>
                                        <h1 id="" class="py-6 text-2xl font-semibold"> {{ $quiz->title }}</h1>
                                        @foreach ($quiz->questions as $question)
                                            <div>
                                                <div class=" border border-black border-solid rounded-md">
                                                    <h1 id="" class="py-6 text-2xl font-semibold">
                                                        {{ $question->question }}</h1>
                                                    <!--pergunta-->
                                                </div>
                                                <div class="pb-5">
                                                    <!-- Module::find(1)-> quizzes[0]->questions[0]->alternatives -->
                                                    @foreach ($question->alternatives as $alternative)
                                                        <div class="flex flex-row">
                                                            <input class="" type="radio"
                                                                name="{{ $question->id }}" id=""
                                                                value="">
                                                            <label class="form-check-label"
                                                                for="{{ $alternative->id }}">
                                                                {{ $alternative->alternative }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </section>
                            @endforeach
                            <div class="flex flex-col">
                                <x-text-input type="submit" name="submit" value="Enviar"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4" />
                            </div>
                            <h2 id="">Resultado:</h2>
                            <h2 id="">Pontos:</h2>

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

</x-guest-layout>
