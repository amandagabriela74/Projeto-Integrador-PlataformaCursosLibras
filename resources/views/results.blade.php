<x-app-layout class="">
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">
            <a href="{{ route('dashboard') }}"
            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Dashboard
            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center ">
                <div class=" overflow-hidden shadow-sm sm:rounded-lg w-4/5  bg-white ">
                    <div class="p-6 ">
                        <section class="flex flex-col justify-center items-center  ">
                            @if (isset($msg))
                                <h2 style="color: red">Não encontrado!</h2>
                            @else
                                {{-- senão, mostra os daddos --}}
                                <div x-data="{ open: false }" class="flex flex-col items-center">
                                    <h2 class="text-lg font-semibold">Parabéns! Você completou o teste!</h2>
                                    <h3 class="mb-8 text-lg">Você acertou <b> X </b> de <b>
                                            {{ sizeof($resultAnswers->quiz->questions) }} </b></h3>
                                    <p><strong>Pontuação:</strong> {{ $resultAnswers->score }} </p>
                                    <a href="">
                                        <x-text-input type="submit" name="submit" value="Refazer Quiz"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer  mb-4 mr-4" />
                                    </a>
                                    <p @click="open =! open" class="cursor-pointer text-sm">Clique aqui para ver suas
                                        respostas erradas</p>
                                    <div x-show="open">
                                        respostas erradas
                                    </div>
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
