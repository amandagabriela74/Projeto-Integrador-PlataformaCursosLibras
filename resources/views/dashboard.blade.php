<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row  gap-2 columns-2 md:columns-3 lg:columns-4" x-data="{titulo: 'mundo'}">
                        <h1 x-text="titulo"></h1>
                        <button x-on:click="titulo += 'a'">+</button>
                        <h2 x-text="titulo.split('').reverse().join('')"></h2>
                        @foreach (\App\Models\Module::all() as $module)
                        <div class="border-2 border-black box-content h-90 w-42  p-4 " x-data="{open:false}">
                            <h1 class="uppercase font-mono">{{$module->title}}</h1>
                            <a href="{{ route('course-module', $module->id) }}">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mb-3">Inscrever-se</button>
                            </a>
                            <a href="{{ route('test-module', $module->id) }}">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Quiz</button>
                            </a>
                                <button @click="open = ! open" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Histórico</button>
                            <div x-show="open">
                            @foreach (Auth::user()->answers as $answer)
                            @if($answer->quiz->module_id == $module->id)
                                {{$answer->created_at}}
                                {{$answer->score}}
                            @endif
                            @endforeach
                            </div>

                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
