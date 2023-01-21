<x-app-layout>
    <section>
        <div class="h-screen ">

            <div class="flex justify-center max-screen h-screen mx-auto sm:px-6 lg:px-8">
                <div class="bg-white h-4/5 w-4/6 overflow-hidden shadow-sm sm:rounded-lg my-20 py-8  ">
                    <div class=" sm:p-0 border-gray-200">
                        <h1 class="mb-2">Meus Certificados - {{ $user->name }}</h1>
                        <div>
                            <div>
                                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1  gap-2">

                                    @foreach ($courses as $course)
                                        <div class="p-5 flex flex-row justify-center border-b mx-9 border-black/50 w-fu">
                                            <div class="w-96 ">
                                                <a href="#">
                                                    <h6 class="mb-1 text-lg font-bold text-gray-900 dark:text-white">
                                                        {{ $course->titulo }}
                                                    </h6>
                                                </a>
                                                <p class="mb-3 font-ligth  text-gray-700 dark:text-gray-400">
                                                    Carga horária: 4h</p>

                                            </div>
                                            <div class="flex flex-row justify-end ">
                                                <a href="{{ route('user.pdf') }}"
                                                    class="w-34 h-12 inline-flex items-center justify-end px-3 py-2 mx-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Baixar certificado
                                                </a>

                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-app-layout>
