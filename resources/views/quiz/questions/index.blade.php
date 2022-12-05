<x-app-layout>
    @if (Auth::user()->is_admin)
        <section class="flex justify-center">
        <x-menu></x-menu>
            <div x-show="open" class="w-3/4 flex flex-row justify-center gap-2">
                fvrsdfv
            </div>



        </section>
    @endif
</x-app-layout>
