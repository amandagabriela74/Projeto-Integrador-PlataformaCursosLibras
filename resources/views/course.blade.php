<x-app-layout>
<x-slot name="header">
        
     
</x-slot>
<body>
<!--
        <section class=" flex justify-center  ">
            <div class="w-3/4 h-3/5 flex flex-row justify-center gap-2  border border-black border-solid mt-11">
                <div class=" w-4/5 border border-black border-solid">
                    <iframe class=" w-full h-full" src="https://www.youtube.com/embed/sntDyFlilGE"
                    title="ALFABETO EM LIBRAS: Letras Passo a Passo (COMPLETO!)" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
                <div class="w-1/4 flex flex-col justify-center items-center py-3 gap-2 bg-scroll h-full overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-gray-800">
                    @foreach(\App\Models\Course::all() as $courses)
                    <div class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                        <h2>{{$courses->titulo}}</h2>
                    </div>
                    @endforeach
                    <a href="#">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer">Quiz</button>
                    </a>
                </div>
            </div>
        </section>
    -->
<section x-data="{open:false}" class="flex justify-center ">
    <div class="w-1/4 flex flex-col justify-start items-center py-3 gap-2 bg-scroll h-screen overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-gray-800">
        @foreach(\App\Models\Course::all() as $courses)
        <div x-on:click="open=true" class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
            <h2>{{$courses->titulo}}</h2>
        </div>
        
        <a href="quiz.quiz">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer">Quiz</button>
        </a>
    </div>
    <div x-show="open" class="w-3/4 flex flex-row justify-center gap-2">
        <div class=" w-4/5 h-3/4">
           <h1>Curso: {{$courses->titulo}}</h1>
            <iframe class=" w-full h-full" src="{{$courses->embed}}"
            title="{{$courses->titulo}}" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
    </div>
@endforeach


</section>

</body>
        
</x-app-layout>