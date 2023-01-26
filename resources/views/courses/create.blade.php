<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <section class="flex justify-center ">
        <x-menu></x-menu>
        <div class="py-12 w-full pl-28">
            titulo
            topico
            embed
            descricao
            module_id
            <div class="p-6 bg-white border-b rounded-lg w-4/5 h-96 content-center">
                <div class=" flex flex-row justify-center gap-2">
                    <div class="flex flex-col ">
                        <form action="{{ route('courses.store') }}" method="POST">
                            @csrf
                            <div class="flex flex-col">
                                <label for="titulo">{{ __('Titulo') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite uma questão') }}" name="titulo"
                                    class="" />
                                <label for="topico">{{ __('Tópico') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite um tópico') }}" name="topico"
                                    class="" />
                                <label for="embed">{{ __('URL') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite a URL do seu vídeo do youtube') }}" name="embed"
                                    class="" />
                                    <label for="descricao">{{ __('Descrição') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite uma descricão') }}"
                                    name="descricao" class="" />

                                <label for="question">{{ __('Essa alternativa é de qual modulo?') }}</label>
                                <select name="module_id">
                                    @foreach (\App\Models\Module::all() as $item)
                                        <option value={{ $item->id }}>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </section>
</x-app-layout>
