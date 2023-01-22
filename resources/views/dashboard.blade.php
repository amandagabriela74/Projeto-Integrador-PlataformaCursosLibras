<x-app-layout>
    
    <div class="flex flex-row flex-wrap justify-around gap-2 columns-2 md:columns-3 lg:columns-4" x-data="{titulo: 'mundo'}">
        @foreach (\App\Models\Module::all() as $module)
            <x-module :module="$module" />
        @endforeach
    </div>
</x-app-layout>