<x-app-layout>
    <x-slot name="header">



    </x-slot>
    <x-menu></x-menu>

    <h1>Crie um novo curso</h1>
    <form action="{{ route('course-store') }}" method="POST">
        @csrf
        <div class="">
            <div class="flex flex-col">
                <label for="titulo">Título:</label>
                <x-text-input type="text" class="form-control" name="titulo" placeholder="Digite um titulo.." />
            </div>
            <div class="flex flex-col">
                <label for="topico">Tópico:</label>
                <x-text-input type="text" class="form-control" name="topico" placeholder="Digite um tópico.." />
            </div>
            <div class="flex flex-col">
                <label for="embed">Embed:</label>
                <x-text-input type="text" class="form-control" name="embed" placeholder="Digite a URL no seu vídeo.." />
            </div>
            <div class="flex flex-col">
                <label for="descricao">Descrição:</label>
                <x-text-input type="text" class="form-control" name="descricao" placeholder="Digite uma descrição.." />
            </div>
            <div class="flex flex-col">
                <x-text-input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4" type="submit" name="submit" />
            </div>
        </div>
    </form>


</x-app-layout>