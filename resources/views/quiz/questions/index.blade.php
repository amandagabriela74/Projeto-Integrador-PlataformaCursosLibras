<x-app-layout>
    <x-slot name="header">

        <div>
            <a href="{{ route('questions.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-32 ">
                Adicionar nova questão</a>
        </div>

    </x-slot>
    @if (Auth::user()->is_admin)
        <section class="flex justify-center ">
        <x-menu></x-menu>
            <div x-show="open" class="w-3/4 flex flex-row justify-center gap-2">
                fvrsdfv
            </div>



        </section>
    @endif
</x-app-layout>
