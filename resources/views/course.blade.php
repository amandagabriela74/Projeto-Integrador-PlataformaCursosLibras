<x-app-layout>
    {{--   <x-slot name=header>

    </x-slot>
     --}}

    <body>
        <section x-data="{ open: {{ $moduleCourses[0]->id ?? 'false' }} }" class="flex justify-center bg-scrool  ">

            <div
                class="w-2/5 h-screen flex flex-col justify-start items-center pt-6 bg-scroll overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-sky-500">

                <div class=" h-16 overflow-hidden shadow-sm ">
                    <div class=" border-gray-200">
                        <a href="{{ route('dashboard') }}"
                            class="  inline-flex items-center px-3 w-64  mx-2 text-2xl font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="w-12 h-12 px-4  ml-2 -mr-1" fill="currentColor">
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>
                            Dashboard
                        </a>
                    </div>
                </div>


                @foreach ($moduleCourses as $courses)
                    <div x-on:click="open = {{ $courses->id }}"
                        class=" h-16  w-full bg-black/20  hover:bg-blue-500 text-center rounded-md cursor-pointer border-b-2">
                        <h2 class="text-3xl text-white">{{ $courses->titulo }}</h2>
                    </div>
                @endforeach
            </div>

            <div class="w-full">

                {{-- PLAY CURSO E COMENTÁRIOS --}}
                @foreach ($moduleCourses as $courses)
                    <div x-show="open == {{ $courses->id }}"
                        class="w-full h-screen flex flex-col justify-center  px-24 bg-gray-50  ">
                        <div class=" flex flex-col spcace-y-4 justify-center items-center  w-full h-full py-5">

                            <div class="flex flex-row w-full justify-between py-6 ">
                                <h2 class="text-4xl font-extrabold dark:text-white h-14 flex-initial w-96 ">Curso:
                                    {{ $courses->titulo }}
                                </h2>
                                <a href="#"
                                    class="  inline-flex justify-center items-center  w-64  mx-2 text-2xl font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Próximo
                                    <svg aria-hidden="true" class="w-12 h-12 px-4  ml-2 -mr-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <iframe class=" w-full h-full {{-- w-full aspect-video --}}" src="{{ $courses->embed }}"
                                title="{{ $courses->titulo }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>

                        {{-- Publicar comentário --}}
                        <div class=" ">
                            <div class="text-center">
                                <form action="{{ route('comments.store', $courses->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="courseId" value="{{ $courses->id }}">
                                    <p class=" mt-6 mb-2 texto-2xl text-left text-black dark:text-white">
                                        {{ $courses->comments->count() }}
                                        Comentários</p>
                                    <textarea name="comment" rows="4"
                                        class="block p-2.5  w-full text-sm text-gray-900 bg-gray- rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Escreva seu comentário.."></textarea>

                                    <div class="flex justify-end px-3 py-2 ">
                                        <button type="submit"
                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                            Publicar postagem
                                        </button>
                                    </div>
                                </form>
                            </div>

                            {{-- Listagem dos comentários --}}
                            <ul>
                                @forelse ($courses->comments as $comment)
                                    <li>
                                        <div class="bg-gray-100/50 rounded-lg">
                                            <div>
                                                <div class="flex flex-row items-center border-b border-black/50 pb-2 ">
                                                    {{-- IMAGEMM --}}
                                                    <div
                                                        class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 border border-black/50">
                                                        <svg class="absolute w-12 h-12 text-gray-400 -left-1"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                        {{-- @if ($user->image)
                                                    <img src="{{ url("storage/{$user->image}") }}"
                                                        alt="{{ $user->name }}" class="absolute w-12 h-12 text-gray-400 -left-1">
                                                @else
                                                <svg class="absolute w-12 h-12 text-gray-400 -left-1"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                                @endif --}}


                                                    </div>
                                                    {{-- Nome do usuário e seu comentário --}}
                                                    <div
                                                        class="flex flex-col font-light text-gray-500 dark:text-gray-400 p-2  w-10/12">
                                                        <p
                                                            class="font-semibold text-gray-900 dark:text-white decoration-indigo-500 ">
                                                            {{ $comment->user->name }} </p> {{ $comment->comment }}
                                                    </div>

                                                    {{-- Opção editar e deletar --}}
                                                    @if (auth()->user()->id === $comment->user->id)
                                                        <div class="pl-20 ">
                                                            <x-dropdown align="right" width="48">
                                                                <x-slot name="trigger">
                                                                    <button
                                                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                                        <div class="ml-1">
                                                                            <svg class="w-6 h-6" aria-hidden="true"
                                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </button>
                                                                </x-slot>

                                                                <x-slot name="content">
                                                                    <form
                                                                        action="{{ route('comments.destroy', $comment->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded w-full">Editar</button><br>
                                                                        <button type="submit"
                                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded w-full">Excluir</button>

                                                                    </form>
                                                                </x-slot>
                                                            </x-dropdown>
                                                        </div>
                                                    @endif
                                                </div>


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
                    </div>
                @endforeach
            </div>


        </section>

    </body>

</x-app-layout>
