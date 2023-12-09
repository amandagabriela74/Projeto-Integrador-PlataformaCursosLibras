<div
    class="w-1/4 flex flex-col justify-start items-center py-3 gap-2 bg-scroll h-screen overflow-y-auto  font-sans text-lg font-semibold text-neutral-50 bg-sky-900">

    <div x-data="{ course: false }" class=" w-full text-center  cursor-pointer border-b-2 ">
        <h1 @click="course =! course" class="h-10 hover:bg-white/30 rounded-md">Cursos</h1>
        <div x-show="course">
            <a href="courses">
                <p x-show="course " class="bg-white/10 text-sm h-8 border-b-2 border-white/20">Visualizar Cursos</p>
            </a>
            <a href="{{ route('courses.create')}}">
                <p x-show="course " class="bg-white/10 text-sm  h-8 border-b-2 border-white/20">Criar Cursos</p>
            </a>
        </div>
    </div>
    <div x-data="{ module: false }" class=" w-full text-center  cursor-pointer border-b-2 ">
        <h1 @click="module =! module" class="h-10 hover:bg-white/30 rounded-md">Módulos</h1>
        <div x-show="module">
            <a href="modules">
                <p x-show="module " class="bg-white/10 text-sm h-8 border-b-2 border-white/20">Visualizar/Editar</p>
            </a>
        </div>
    </div>
    <div x-data="{ question: false }" class=" w-full   text-center  cursor-pointer border-b-2">
        <h1 @click="question =! question" class="h-10 hover:bg-white/30 rounded-md">Quiz</h1>
        <div>
            <a href="quizzes">
                <p x-show="question " class="bg-white/10 text-sm h-8 border-b-2 border-white/20">Visualizar/Editar</p>
            </a>
        </div>
    </div>

    <div x-data="{ question: false }" class=" w-full   text-center  cursor-pointer border-b-2">
        <h1 @click="question =! question" class="h-10 hover:bg-white/30 rounded-md">Questões</h1>
        <div>
            <a href="questions">
                <p x-show="question " class="bg-white/10 text-sm h-8 border-b-2 border-white/20">Visualizar/Editar</p>
            </a>
            <a href="{{ route('questions.create')}}">
                <p x-show="question " class="bg-white/10 text-sm  h-8 border-b-2 border-white/20">Criar Questões</p>
            </a>
        </div>
    </div>

    <div x-data="{ alternatives: false }" class=" w-full   text-center  cursor-pointer border-b-2">
        <h1 @click="alternatives =! alternatives" class="h-10 hover:bg-white/30 rounded-md">Alternativas</h1>
        <div>
            <a href="alternatives">
                <p x-show="alternatives " class="bg-white/10 text-sm h-8 border-b-2 border-white/20">Visualizar/Editar</p>
            </a>
            <a href="{{ route('alternatives.create')}}">
                <p x-show="alternatives " class="bg-white/10 text-sm  h-8 border-b-2 border-white/20">Criar Alternativas</p>
            </a>
        </div>
    </div>

</div>
