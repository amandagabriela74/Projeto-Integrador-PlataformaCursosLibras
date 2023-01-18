<x-app-layout>

    <body>
        <section x-data="{ open: {{ $moduleCourses[0]->id ?? 'false' }} }" class="flex justify-center bg-scrool ">
            <div
                class="w-2/5 h-screen flex flex-col justify-start items-center py-3 gap-2 bg-scroll overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-gray-800">
                <div class="h-20">Voltar</div>
                @foreach ($moduleCourses as $courses)
                    <div x-on:click="open = {{ $courses->id }}"
                        class="  h-16 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                        <h2 class="text-3xl text-white">{{ $courses->titulo }}</h2>
                    </div>
                @endforeach
            </div>

            {{-- PLAY CURSO E COMENTÁRIOS --}}
            @foreach ($moduleCourses as $courses)
                <div x-show="open == {{ $courses->id }}"
                    class="w-full h-screen flex flex-col justify-center  px-24 bg-gray-100 ">
                    <div class=" flex flex-col spcace-y-4 justify-center items-center  w-full h-full py-5">
                        <h4 class="text-2xl font-bold text-black dark:text-whitemb-2 h-14">Curso: {{ $courses->titulo }}
                        </h4>
                        <iframe class=" w-full h-full" src="{{ $courses->embed }}" title="{{ $courses->titulo }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                    {{-- Publicar comentário --}}
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
                                <div class="">
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
                                            </div>
                                            {{-- Nome do usuário e seu comentário --}}
                                            <div class="flex flex-col font-light text-gray-500 dark:text-gray-400 p-2  w-10/12">
                                                <p class="font-semibold text-gray-900 dark:text-white decoration-indigo-500 ">
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
            @endforeach



        </section>

    </body>

</x-app-layout>
