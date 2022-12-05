<x-app-layout>

    <section class="flex justify-between ">
    <x-menu></x-menu>

        <div class="py-12 w-full pl-28">
            <div class="p-6 bg-white border-b rounded-lg w-4/5 h-96 content-center">
                <div class=" flex flex-row justify-center gap-2">
                    <div class="flex flex-col ">
                        <form action="{{ route('questions.store') }}" method="POST">
                            @csrf
                            <div class="flex flex-col">
                                <label for="question">{{ __('question') }}</label>
                                <x-text-input type="text" placeholder="{{ __('Digite uma questão') }}"
                                    name="question" class="w-96" />
                                <p>Quiz</p>
                                <select name="quiz">
                                    @foreach (\App\Models\Quiz::all() as $item)
                                        <option value={{ $item->id }}>{{ $item->title }}</option>
                                    @endforeach
                                </select>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
