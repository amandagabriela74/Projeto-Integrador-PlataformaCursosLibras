<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">
            <a href="{{ route('dashboard') }}"
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Voltar para o curso
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>

            <div class="py-12 bg-sky-400 ">
                <h2 class="flex justify-center py-2 text-4xl font-extrabold dark:text-white">Quiz: {{ $quiz->title }}
                </h2>

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
