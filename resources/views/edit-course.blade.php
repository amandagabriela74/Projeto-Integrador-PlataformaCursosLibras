<x-app-layout>
    <x-slot name="header">
        Adicionar curso

        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Editar curso</h1>
                    <form action="{{ route('course-update',['id'=>$courses->id]) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="">
                          <div class="flex flex-col">
                              <label for="titulo">Título:</label>
                              <x-text-input type="text" class="form-control" name="titulo" value="{{$courses->titulo}}" placeholder="Digite um titulo.."/>
                          </div>
                          <div class="flex flex-col">
                              <label for="topico">Tópico:</label>
                              <x-text-input type="text" class="form-control" name="topico" value="{{$courses->topico}}" placeholder="Digite um tópico.."/>
                          </div>
                          <div class="flex flex-col">
                              <label for="embed">Embed:</label>
                              <x-text-input type="text" class="form-control" name="embed" value="{{$courses->embed}}" placeholder="Digite a URL no seu vídeo.."/>
                          </div>
                          <div class="flex flex-col">
                              <label for="descricao">Descrição:</label>
                              <x-text-input type="text" class="form-control" name="descricao" value="{{$courses->descricao}}" placeholder="Digite uma descrição.."/>
                          </div>
                          <div class="flex flex-col">
                              <x-text-input type="submit" name="submit" value="Atualizar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-24 mt-4"/>
                          </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>