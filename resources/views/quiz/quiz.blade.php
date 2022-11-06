<x-app-layout>
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
                @foreach (\App\Models\Question::all() as $question)
                <section id="" class="w-9/12 text-center">
                    <div class=" border border-black border-solid rounded-md">
                        <h1 id="" class="py-6 text-2xl font-semibold"> {{$question->question}}</h1> <!--pergunta-->
                    </div>
                    <div class="pb-5">
                        @foreach (\App\Models\Question::find(1)->alternatives as $alternative)
                    <ul>
                        <li class="py-2  font-semibold my-2 rounded-md bg-gray-900 hover:bg-gray-800 text-white cursor-pointer">{{$alternative->alternative}}</li> <!--alternativas-->
                    </ul>
                        @endforeach
                    </div>
                </section>
                @endforeach
                <h2 id="">Resultado:</h2>
                <h2 id="">Pontos:</h2>
    
            </section>

            </section>


            </div>
        </div>
    </div>
 </div>
    
</x-app-layout>

