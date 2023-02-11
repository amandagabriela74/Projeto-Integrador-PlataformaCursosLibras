<x-app-layout>
    <section class="container-fluid flex flex-row">
        <x-menu-user></x-menu-user>
        <div class="container w-full   mx-auto px-2">
            <div class="w-full h-4/5 py-12 sm:px-6 lg:px-8 flex justify-center">
                <div class=" w-1/2 py-10 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <x-sub-title>Editar curso : {{ $quizzes->title }}</x-sub-title>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form action="{{ route('quizzes.update', [$quizzes->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="">
                                <div class="flex flex-col">
                                    <label for="title">Título:</label>
                                    <x-text-input type="text" class="form-control" name="title"
                                        value="{{ $quizzes->title }}" placeholder="Digite um título.." />
                                </div>
                                <input type="hidden" name="module" value="{{ $quizzes->module->id }}">
                                
                                <div class="flex flex-col">
                                    <x-text-input type="submit" name="submit" value="Atualizar"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4" />
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>


</x-app-layout>
