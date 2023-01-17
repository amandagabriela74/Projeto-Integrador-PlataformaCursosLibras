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
                    @foreach (\App\Models\Course::all() as $courses)
<div class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                        <h2>{{ $courses->titulo }}</h2>
                    </div>
@endforeach
                    <a href="#">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer">Quiz</button>
                    </a>
                </div>
            </div>
        </section>
    -->
        <section x-data="{ open: {{ $moduleCourses[0]->id ?? 'false' }} }" class="flex justify-center ">
            <div
                class="w-1/4 flex flex-col justify-start items-center py-3 gap-2 bg-scroll h-screen overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-gray-800">
                @foreach ($moduleCourses as $courses)
                    <div x-on:click="open = {{ $courses->id }}"
                        class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                        <h2>{{ $courses->titulo }}</h2>
                    </div>
                @endforeach
            </div>

            @foreach ($moduleCourses as $courses)
                <div x-show="open == {{ $courses->id }}" class="w-3/4 flex flex-col  justify-center gap-2">
                    <div class=" w-4/5 h-3/4 pb-4">
                        <h1>Curso: {{ $courses->titulo }}</h1>
                        <iframe class=" w-full h-full" src="{{ $courses->embed }}" title="{{ $courses->titulo }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    {{ $courses->comments->count() }} Comentários
                    <div class="text-center">
                        <form action="{{ route('comments.store', $courses->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="courseId" value="{{ $courses->id }}">
                            <label for="message" ></textarea>
                            
                            <div  >
                                <button type="submit" >
                                    Publicar postagem
                                </button>
                            </div>
                        </form>
                    </div>

                    <ul>
                        @forelse ($courses->comments as $comment)
                            <li>
                                <div >
                                    <div >
                                        <img src="" alt="foto"
                                            class=" w-14 h-14 rounded-full border border-black border-solid">
                                       <div class="flex flex-col">
                                            <p>{{ $comment->user->name }} <br>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                            @if (auth()->user()->id === $comment->user->id)
                                                <form action="{{ route('comments.destroy', $comment->id) }}"
                                                    method="POST" class="pl-96">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        >Deletar</button>
                                                    <button type="submit"
                                                        >Editar</button>

                                                </form>
                                            @endif
                                    </div>
                                    <div>
                                        <p>Responder</p>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li>Nenhum comentário para esse curso</li>
                        @endforelse

                    </ul>
                </div>
            @endforeach



        </section>

    </body>

</x-app-layout>
