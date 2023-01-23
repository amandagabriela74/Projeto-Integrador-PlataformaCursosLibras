<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class=" w-72">


        </div>
        <div class="h-screen w-full ">
            <div class="  items-center h-full  ">

                <div class="h-full px-24 py-">
                    {{-- Quero fazer um circulo de progresso --}}
                    <div class="   py-5  ">
                        <div class="h-96 w-full bg-white rounded-lg flex flex-col justify-center items-center">
                            <h4 class="pb-3 text-2xl font-bold text-gray-900 dark:text-white"> 
                            Resumo das atividades</h4>
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-36 content-center">
                                <div class="h-48 w-full  ">
                                    <div class="h-48 w-48 rounded-full border border-black/50"></div>
                                    <h6 class="pt-2 text-lg font-bold text-gray-900 dark:text-white ">Certificados</h6>
                                </div>
                                <div class="h-48 w-full ">
                                    <div class="h-48 w-48 rounded-full border border-black/50"></div>
                                    <h6 class="pt-2 text-lg font-bold text-gray-900 dark:text-white ">Questionários</h6>
                                </div>
                                <div class="h-48 w-full">
                                    <div class="h-48 w-48 rounded-full border border-black/50"></div>
                                    <h6 class="pt-2 text-lg font-bold text-gray-900 dark:text-white ">Progresso</h6>
                                </div>
                                <div class="h-48 w-full ">
                                    <div class="h-48 w-48 rounded-full border border-black/50"></div>
                                    <h6 class="pt-2 text-lg font-bold text-gray-900 dark:text-white ">...</h6>
                                </div>
                            </div>
                            <div class="h-24"></div>
                        </div>
                    </div>
                    <div class="h-96 w-full flex flex-row justify-between">
                        <div class=" border-gray-200  h-full w-1/2 ">
                            <div class="bg-white h-full w-full pr-2 rounded-lg" >
                                <h4 class="py-3 text-2xl font-bold text-gray-900 dark:text-white border-b"> Curso em Andamento
                                </h4>
    
                                <ul class="">
                                    @forelse ($user->subscriptions as $item)
                                    <div class="mb-3 x-2 font-ligth flex flex-row justify-between border-b border-black/50 text-gray-800 dark:text-gray-400">                                       
                                        <li class="">{{ $item->module->title }}</li>
                                       
                                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 ">
                                            
                                            <svg class="w-6 h-4  " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
                                <h4 class="py-3 text-2xl font-bold text-gray-900 dark:text-white border-b">
                                Meus Certificados</h4>
                                <ul class="">
                                    
                                        <li>Nenhum certificado para mostrar</li>
                                    
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
    </div>
</x-app-layout>
