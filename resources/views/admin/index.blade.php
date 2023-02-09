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
                            <x-sub-title>Dados da Conta</x-sub-title>
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-36 content-center pt-5">
                                <div class="h-48 w-full ">
                                    <div
                                        class=" h-40 w-40 flex justify-center items-center rounded-full  bg-gradient-to-r from-cyan-500 to-blue-500">
                                        <h1
                                            class="  font-extrabold leading-none tracking-tigh md:text-5xl lg:text-6xl text-white">
                                            {{$users->count()}}</h1>
                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        Alunos cadastrados </h6>
                                    <a href="#" class="">ver detalhes</a>
                                </div>
                                <div class="h-48 w-full ">
                                    <div
                                        class="h-40 w-40 flex justify-center items-center rounded-full  bg-gradient-to-r from-cyan-500 to-blue-500">
                                        <h1
                                            class="font-extrabold leading-none tracking-tigh md:text-5xl lg:text-6xl text-white">
                                            {{$modules->count() }}</h1>
                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        Módulos criados  </h6>
                                </div>
                                <div class="h-48 w-full ">
                                    <div
                                        class=" h-40 w-40 flex justify-center items-center rounded-full  bg-gradient-to-r from-cyan-500 to-blue-500">
                                        <h1
                                            class="font-extrabold leading-none tracking-tigh md:text-5xl lg:text-6xl text-white">
                                            {{$courses  }}</h1>
                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        Cursos disponiveis</h6>
                                </div>
                                <div class="h-48 w-full ">
                                    <div
                                        class=" h-40 w-40 flex justify-center items-center rounded-full  bg-gradient-to-r from-cyan-500 to-blue-500">
                                        <h1
                                            class="font-extrabold leading-none tracking-tigh md:text-5xl lg:text-6xl text-white">
                                           {{$quizzes}}</h1>
                                    </div>
                                    <h6
                                        class="flex justify-center pt-2 text-lg font-bold text-gray-900 dark:text-white ">
                                        Questionários</h6>
                                </div>
                                
                            </div>
                            <div class="h-24"></div>
                        </div>
                    </div>
                    <div class="h-96 w-full flex flex-row justify-between ">
                        <div class=" border-gray-200  h-full w-1/2 flex  ">
                            <div class="bg-white h-full w-full  rounded-lg">
                                <x-sub-title>TOP 5 - Módulos mais populares</x-sub-title>
                                <table class=" w-full">
                                    <thead class="border-b border-black/50">
                                        <tr class="">
                                            <th ></th>
                                            <th class="py-2">Inscrições</th>
                                            <th>Em andamentos</th>
                                            <th>Concluídos</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($modules as $module)
                                        <tr class="border-b border-black/50 ">
                                            <td class="text-left pl-4 py-2">{{$module->title}}</td>
                                            <td class="text-center">{{$module->subscriptions->count()}}</td>
                                            <td class="text-center">1</td>
                                            <td class="text-center">2</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="  h-full w-1/2 pl-2">
                            <div class="bg-white rounded-lg h-full w-full">
                                <x-sub-title>TOP 5 - Alunos mais frequentes</x-sub-title>
                                    <table class=" w-full">
                                        <thead class="">
                                            <tr class="border-b border-black/50">
                                                <th ></th>
                                                <th class="py-2">Módulos concluídos</th>
                                                <th>Cursos concluídos</th>
                                                <th>Quiz feitos</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            @foreach ($frequentUsers as $user)
                                            <tr class="border-b border-black/50">
                                                <td class="text-left pl-4 py-2">{{$user->name}}</td>
                                                <td class="text-center">{{$user->subscriptions->count()}}</td>
                                                <td class="text-center">{{$user->subscriptionsCourses->count()}}</td>
                                                <td class="text-center">{{$user->subscriptionsQuizzes->count()}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
