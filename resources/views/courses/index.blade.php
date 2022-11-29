<x-app-layout>
    <x-slot name="header">

        <div>
            <a href="{{ route('course-create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-32 ">
                Adicionar nova alternativa</a>
        </div>

    </x-slot>
        <section class="flex justify-center ">
<x-menu></x-menu>
            <div x-show="open" class="w-3/4 flex flex-row justify-center gap-2">
                course index
            </div>



        </section>
</x-app-layout>
