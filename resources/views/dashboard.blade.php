<x-app-layout>
    <div class="container-fluid flex flex-row">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">
            <div class="flex flex-col justify-center">
                <x-primary-title>Cátalogo de Cursos</x-primary-title>
                <div class=" grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-12 justify-items-center ">
                    @foreach ($modules as $module)
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-lg h-48 w-72 shadow-md dark:bg-gray-800 dark:border-gray-700">

                            <div class="p-5">
                                <div class="flex flex-row justify-between">
                                    <h6 class="mb-1 text-lg font-bold text-gray-900 dark:text-white">
                                        {{ $module['title'] }}
                                    </h6>
                                    @if ($module['isSubscribedModule'])
                                        <p
                                            class="flex items-center  text-blue-700 text-center border border-blue-700/50 rounded-full px-2 ">
                                            inscrito</p>
                                    @endif
                                </div>
                                <p class="mb-3 font-ligth border-b border-black/50 text-gray-700 dark:text-gray-400">
                                    Neste
                                    curso você vai conhencer as principais girias no mundo de libras....</p>
                                <div class="flex flex-row justify-center">
                                    @if ($module['isSubscribedModule'])
                                        <a href="{{ route('course-module', $module['id']) }}"
                                            class="w-24 inline-flex items-center justify-center px-3 py-2 mx-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                            Continuar

                                        </a>
                                    @else
                                        <form method="POST" action="{{ route('inscricao.store') }}">
                                            @csrf
                                            <input type="hidden" name="moduleId" value="{{ $module['id'] }}">
                                            <button type="submit"
                                                class="w-24 inline-flex items-center justify-center px-3 py-2 mx-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Iniciar
                                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>

                                            </button>
                                        </form>
                                    @endif


                                    <a href="{{ route('test-module', $module['id']) }}"
                                        class=" w-24 inline-flex items-center justify-center py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
</x-app-layout>
