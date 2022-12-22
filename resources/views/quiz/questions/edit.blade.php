<x-app-layout>

    <section class="flex justify-between ">
    <x-menu></x-menu>

        <div class="py-12 w-full pl-28">
            <div class="p-6 bg-white border-b rounded-lg w-4/5 h-96 content-center">
                <div class=" flex flex-row justify-center gap-2">
                    <div class="flex flex-col ">
                       

                        
                        <div class="card-body">
                            <form action="{{ route('questions.update',[$question->id]) }}" method="POST">
                                @csrf
                                @method('put')

                                <div class="flex flex-col">
                                    <label for="question">Texto da pergunta</label>
                                    <x-text-input type="text" class="form-control" id="question" name="question" value="{{ old('question', $question->question) }}"/>
                                </div>

                                <div class="flex flex-col">
                                    <label for="category">{{ __('Category') }}</label>
                                    <select class="form-control"  name="quiz_id" id="quiz">
                                        @foreach($quizzes as $id => $quiz)
                                            <option {{ $id == $question->quiz->id ? 'selected' : null }} value="{{ $id }}">{{ $quiz }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex flex-col">
                                    <x-text-input type="submit" name="submit" value="Atualizar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4"/>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
