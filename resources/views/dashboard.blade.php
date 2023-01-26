<x-app-layout>
    <div class="container-fluid flex flex-row">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full">
            <div class="p-20">
                <div class=" grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-4">
                    @foreach ($modules as $module)
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg h-48 w-72 shadow-md dark:bg-gray-800 dark:border-gray-700">

                            <div class="p-5">
                                <a href="#">
                                    <h6 class="mb-1 text-lg font-bold text-gray-900 dark:text-white">
                                        {{ $module->title }}
                                    </h6>
                                </a>
                                <p class="mb-3 font-ligth border-b border-black/50 text-gray-700 dark:text-gray-400">
                                    Neste
                                    curso você vai conhencer as principais girias no mundo de libras....</p>
                                <div class="flex flex-row justify-center">


                                    
                                    

                                    
                                   {{--  @if (Auth::user()->id == $module->subscriptions->user_id) --}}
                                        <form method="POST" action="{{ route('inscricao.store') }}">
                                            @csrf
                                            <input type="hidden" name="moduleId" value="{{ $module->id }}">

                                            {{-- Auth::user()->subscriptions->count() == 1 --}}
                                           {{--  @if (Auth::user()->subscriptions->module->id == $module->id) --}}
                                            <button type="submit"
                                                class="w-24 inline-flex items-center px-3 py-2 mx-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                {{-- <a href="{{-- {{ route('course-module', $module->id) }}" --}}

                                                Iniciar
                                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>

                                            </button>
                                        </form>
                                        {{-- @else --}}
                                       
                                                <a href="{{ route('course-module', $module->id) }}" class="w-24 inline-flex items-center px-3 py-2 mx-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                                Continuar
                                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                </a>
                                                
                                   {{--  @endif --}}


                                    <a href="{{ route('test-module', $module->id) }}"
                                        class=" w-24 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Quiz
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


    </div>

    {{--     <div class="flex flex-row flex-wrap justify-around gap-2 columns-2 md:columns-3 lg:columns-4"
        x-data="{ titulo: 'mundo' }">
        @foreach (\App\Models\Module::all() as $module)
            <div class="border-2 bg-white rounded-lg  box-content h-72 w-48" x-data="{ open: false }">
                <h1 class="flex justify-center pt-4 text-2xl font-extrabold">{{ $module->title }}</h1>

                <div class="flex flex-col justify-center gap-5 items-center h-5/6">


                    <a href="{{ route('course-module', $module->id) }}"
                        class="bg-sky-400 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded-xl">
                        Inscrever-se
                    </a>

                    <a href="{{ route('test-module', $module->id) }}"
                        class="bg-sky-400 hover:bg-sky-500  text-white font-bold py-2 px-11 rounded-xl">
                        Quiz
                    </a>

                    <button @click="open = ! open"
                        class="bg-sky-400 hover:bg-sky-500 text-white font-bold py-2 px-7 rounded-xl">Histórico</button>
                    {{-- 
                <div x-show="open">
                    @foreach (Auth::user()->answers as $answer)
                    @if ($answer->quiz->module_id == $module->id)
                    {{$answer->created_at}}
                    {{$answer->score}}
                    @endif
                    @endforeach
                </div>
            </div>
        --
                </div>
        @endforeach
    </div> --}}
</x-app-layout>
