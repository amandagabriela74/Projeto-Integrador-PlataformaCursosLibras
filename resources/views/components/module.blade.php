@props([
    'module'
])

<div class="border-2 rounded-lg border-black box-content h-90 w-42  p-4 " x-data="{open:false}">
    <h1 class="uppercase font-mono">{{$module->title}}</h1>
    <a href="{{ route('course-module', $module->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded m-1">
        Inscrever-se
    </a>
    <a href="{{ route('test-module', $module->id) }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Quiz</button>
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