<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full">
            <div class="flex justify-center max-screen h-screen mx-auto sm:px-6 lg:px-8">
                <div class="bg-white h-4/5 w-4/6 overflow-hidden shadow-sm sm:rounded-lg my-20   ">
                    <div class=" sm:p-0 border-gray-200">
                        <x-sub-title>Meus Certificados - {{ $user->name }}</x-sub-title>
                        <div>
                            <div>
                                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1  gap-2">

                                    @foreach ($certificates as $certificate)
                                        <div class="p-5 flex flex-row justify-center border-b mx-9 border-black/50 w-fu">
                                            <div class="w-96 ">
                                                    <h6 class="mb-1 text-lg font-bold text-gray-900 dark:text-white">
                                                        {{ $certificate->course->titulo }}
                                                    </h6>
                                                <p class="mb-3 font-ligth  text-gray-700 dark:text-gray-400">
                                                    Carga horária: 4h</p>

                                            </div>
                                            <div class="flex flex-row justify-end ">
                                                <a href="{{ route('user.pdf', [$certificate->course->id]) }}"
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
</x-app-layout>
