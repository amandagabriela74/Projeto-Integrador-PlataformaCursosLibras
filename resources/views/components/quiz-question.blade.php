@props(['quiz', 'question', 'i'])

<div class=" bg-white mb-2 rounded-xl" x-show="question == {{ $i }}">
    <div class=" rounded-md py-8">
        <h1 id="" class="py-2 text-2xl font-semibold">
            {{ $question->question }}
        </h1>
        
    </div>
    <div class="pb-5 flex flex-col items-center ">

        @foreach ($question->alternatives as $alternative)
            <div
                class="flex flex-row items-center border border-blue-500 border-solid py-2 my-2 rounded-xl w-4/5 hover:bg-sky-200 cursor-pointer">
                <input class="ml-2" id="alternative-{{ $alternative->id }}" type="radio"
                    name="questions[{{ $question->id }}]" value="{{ $alternative->id }}">
                <label class="form-check-label pl-3" for="alternative-{{ $alternative->id }}">
                    {{ $alternative->alternative }}
                </label>
            </div>
        @endforeach
        <div class="">
            @if ($i == sizeof($quiz->questions) - 1)
                <x-text-input type="submit" name="submit" value="Enviar"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mb-4 mr-4" />
            @else
                <x-text-input value="Próxima" x-on:click="question++"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mb-4 mr-4" />
            @endif
        </div>
    </div>
</div>
