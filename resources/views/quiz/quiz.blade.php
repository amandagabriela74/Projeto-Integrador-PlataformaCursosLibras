<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>
        </div>
        <div class="h-screen w-full ">
            <div class="py-1 ">
                <x-primary-title>Quiz: {{ $quiz->title }}</x-primary-title>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-center ">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg w-3/5  ">
                        <div class="p-6 ">
                            <section class="flex flex-col justify-center items-center  ">
                                <form method="POST" action="{{ route('test-store') }}" class="w-full "
                                    x-data="{ question: 0 }">
                                    @csrf
                                    <input type="hidden" name="quizId" value="{{ $quiz->id }}">
                                    <section id="" class=" text-center">
                                        <div>
                                            @foreach ($quiz->questions as $i => $question)
                                                <x-quiz-question :i="$i" :question="$question"
                                                    :quiz="$quiz" />
                                            @endforeach
                                        </div>
                                    </section>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
