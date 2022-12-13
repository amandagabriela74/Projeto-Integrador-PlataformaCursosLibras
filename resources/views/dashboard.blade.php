<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-row flex-wrap justify-around gap-2 columns-2 md:columns-3 lg:columns-4" x-data="{titulo: 'mundo'}">
        @foreach (\App\Models\Module::all() as $module)
            <x-module :module="$module" />
        @endforeach
    </div>
</x-app-layout>