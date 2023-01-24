<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">
            <div class="  items-center h-full  ">

                <div class="h-full px-24 py-">
                    {{-- Quero fazer um circulo de progresso --}}
                    <div class="   py-5  ">
                        <div class="h-96 w-full bg-white rounded-lg flex flex-col justify-center items-center">
                            <h4 class="pb-3 text-2xl font-bold text-gray-700 dark:text-white">
                                Resumo das atividades</h4>
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-36 content-center">
                                <div class="h-48 w-full ">
                                    <div
                                        class=" h-40 w-40 flex justify-center items-center rounded-full border border-black/50">
                                        <h1
                                            class=" text-4xl font-extrabold leading-none tracking-tigh md:text-5xl lg:text-6xl text-blue-600 dark:text-blue-500">
                                            {{ $user->subscriptionsCourses->count() }}/{{ $courses->count() }}</h1>

                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        Certificados</h6>
                                </div>
                                <div class="h-48 w-full ">
                                    <div
                                        class="h-40 w-40 flex justify-center items-center rounded-full border border-black/50">
                                        <h1
                                            class=" text-4xl font-extrabold leading-none tracking-tigh md:text-5xl lg:text-6xl text-blue-600 dark:text-blue-500">
                                            {{ $user->subscriptionsQuizzes->count() }}/{{ $quizzes->count() }}</h1>
                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        Questionários</h6>
                                </div>
                                <div class="h-48 w-full">
                                    <div
                                        class="h-40 w-40 flex justify-center items-center rounded-full border border-black/50">
                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        Progresso</h6>
                                </div>
                                <div class="h-48 w-full ">
                                    <div
                                        class="h-40 w-40 flex justify-center items-center rounded-full border border-black/50">
                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        ...</h6>
                                </div>
                            </div>
                            <div class="h-24"></div>
                        </div>
                    </div>
                    <div class="h-96 w-full flex flex-row justify-between ">
                        <div class=" border-gray-200  h-full w-1/2 flex  ">
                            <div class="bg-white h-full w-full pr-2 rounded-lg">
                                <h4
                                    class="py-3 text-2xl flex justify-center items-center font-bold text-gray-700 dark:text-white border-b">
                                    Cursos em
                                    Andamento
                                </h4>

                                <ul class="">
                                    @forelse ($user->subscriptions as $item)
                                        <div
                                            class="px-4 mb-3 x-2 font-ligth flex flex-row justify-between border-b border-black/50 text-gray-800 dark:text-gray-400">
                                            <li class="">{{ $item->module->title }}</li>

                                            <a href="{{ route('course-module', $item->module->id) }}"
                                                class="inline-flex items-center justify-center px-5 py-3  "
                                                {{-- class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 " --}}>

                                                {{-- <svg class="w-6 h-4  " fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path> --}}
                                                </svg>
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path fill-rule="evenodd"
                                                        d="M334.5 414c8.8 3.8 19 2 26-4.6l144-136c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22l0 88L32 208c-17.7 0-32 14.3-32 32l0 32c0 17.7 14.3 32 32 32l288 0 0 88c0 9.6 5.7 18.2 14.5 22z"
                                                        clip-rule="evenodd"></path>
                                                </svg>

                                            </a>

                                        </div>

                                    @empty
                                        <li>Sem cursos em andamento</li>
                                    @endforelse
                                </ul>

                            </div>
                        </div>
                        <div class="  h-full w-1/2 pl-2">
                            <div class="bg-white rounded-lg h-full w-full">
                                <h4
                                    class="py-3 text-2xl flex justify-center items-center font-bold text-gray-700 dark:text-white border-b">
                                    Meus Certificados</h4>


                                <ul class=" grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1  gap-x-8">
                                    @forelse ($user->subscriptionsCourses as $item)
                                        <div
                                            class=" font-ligth flex flex-row justify-between border-b border-black/50 text-gray-800 dark:text-gray-400">
                                            <li class="px-4">{{ $item->course->titulo }}</li>

                                            <a href="{{ route('user.pdf') }}"
                                                class="inline-flex items-center justify-center px-5 py-3  ">

                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zM432 456c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24z" />
                                                </svg>
                                            </a>

                                        </div>

                                    @empty
                                        <li>Nenhum certificado para mostrar</li>
                                    @endforelse



                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
</x-app-layout>
