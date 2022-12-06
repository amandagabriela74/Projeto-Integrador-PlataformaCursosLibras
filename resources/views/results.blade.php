<x-app-layout class="">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center ">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg w-3/5  bg-white ">
                <div class="p-6 ">
                    <section class="flex flex-col justify-center items-center  ">
                        @if (isset($msg))
                            <h2 style="color: red">Não encontrado!</h2>
                        @else
                            {{-- senão, mostra os daddos --}}
                            <div x-data="{ open: false }" class="flex flex-col items-center">
                                <h2 class="text-lg font-semibold">Parabéns! Você completou o teste!</h2>
                                <h3 class="mb-8 text-lg">Você acertou <b> X </b> de <b> {{ sizeof($resultAnswers->quiz->questions) }} </b></h3>
                                <p><strong>Pontuação:</strong> {{ $resultAnswers->score }} </p>
                                <a href="">
                                    <x-text-input type="submit" name="submit" value="Refazer Quiz"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer  mb-4 mr-4" />
                                </a>
                                <p @click="open =! open" class="cursor-pointer text-sm">Clique aqui para ver suas respostas erradas</p>
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

</x-app-layout>
