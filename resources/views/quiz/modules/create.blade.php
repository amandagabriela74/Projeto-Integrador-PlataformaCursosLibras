<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <section class="flex justify-center ">
        <x-menu></x-menu>
        <div class="py-12 w-full pl-28">
            <div class="p-6 bg-white border-b rounded-lg w-4/5 h-96 content-center">
                <div class=" flex flex-row justify-center gap-2">
                    <div class="flex flex-col ">
                        <form action="{{ route('modules.store') }}" method="POST">
                            @csrf
                            <div class="flex flex-col">
                                <label for="title">{{ __('Titulo') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite o título') }}" name="titulo"
                                    class="" />
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4">{{ __('Salvar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </section>
</x-app-layout>
