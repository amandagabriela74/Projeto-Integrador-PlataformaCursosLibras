@props([
    'module'
])

<div class="border-2 bg-white rounded-lg  box-content h-72 w-48" x-data="{open:false}">
    <h1 class="flex justify-center pt-4 text-2xl font-extrabold">{{$module->title}}</h1>

    <div class="flex flex-col justify-center gap-5 items-center h-5/6">

        
        <a href="{{ route('course-module', $module->id) }}" class="bg-sky-400 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded-xl">
            Inscrever-se
        </a>

        <a  href="{{ route('test-module', $module->id) }}" class="bg-sky-400 hover:bg-sky-500  text-white font-bold py-2 px-11 rounded-xl">
            Quiz
        </a>
        
        <button @click="open = ! open"  class="bg-sky-400 hover:bg-sky-500 text-white font-bold py-2 px-7 rounded-xl">Histórico</button>
{{-- 
        <div x-show="open">
            @foreach (Auth::user()->answers as $answer)
            @if($answer->quiz->module_id == $module->id)
            {{$answer->created_at}}
            {{$answer->score}}
            @endif
            @endforeach
        </div>
    </div>
--}}
</div>