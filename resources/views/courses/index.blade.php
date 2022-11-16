<x-app-layout>
    <x-slot name="header">

        <div>
            <a href="{{ route('course-create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-32 ">
                Adicionar nova alternativa</a>
        </div>

    </x-slot>
        <section class="flex justify-center ">
            <div
                class="w-1/4 flex flex-col justify-start items-center py-3 gap-2 bg-scroll h-screen overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-gray-800">

                <div
                    class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                    <h1>Curso</h1>
                </div>
                <div
                    class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                    <h1>Quiz</h1>
                </div>
                <div
                    class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                    <a href="questions">
                        <h3>Questões</h3>
                    </a>
                </div>
                <div
                    class=" h-10 mb-2 w-4/5 bg-blue-500  hover:bg-blue-700 text-center rounded-md cursor-pointer content-center">
                    <a href="alternatives">
                        <h3>Alternativas</h3>
                    </a>
                </div>


            </div>
            <div x-show="open" class="w-3/4 flex flex-row justify-center gap-2">
                course index
            </div>



        </section>
</x-app-layout>
