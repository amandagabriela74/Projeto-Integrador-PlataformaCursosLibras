<x-app-layout class="">
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">  
        <div class="py-12">
            <x-primary-title>Parabéns! Você completou o teste!</x-primary-title>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center ">              
                <div class=" overflow-hidden shadow-sm sm:rounded-lg w-4/5  bg-white ">
                    <div class="p-6 ">
                        <section class="flex flex-col justify-center items-center  ">
                            @if (isset($msg))
                                <h2 style="color: red">Não encontrado!</h2>
                            @else
                                {{-- senão, mostra os daddos --}}
                                <div x-data="{ open: false }" class="flex flex-col items-center">
                                    <h3 class="mb-8 text-2xl">Você acertou <b> 2 </b> de <b>
                                            {{ sizeof($resultAnswers->quiz->questions) }} </b></h3>
                                    <p class="text-2xl pb-5">Pontuação:  {{ $resultAnswers->score }} </p>
                                    <a href="">
                                        <x-text-input type="submit" name="submit" value="Refazer Quiz"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer  mb-4 mr-4" />
                                    </a>
                                </div>
                            @endif
                        </section>   
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
