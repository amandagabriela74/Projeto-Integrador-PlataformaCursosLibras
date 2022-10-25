<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row  gap-2 columns-2 md:columns-3 lg:columns-4">
                        <div class=" box-content h-90 w-40  p-4 border-4 ">
                            <h1>Módulo 1</h1>
                            <p>• Alfabeto</p>
                            <p>• Numerais</p>
                            <p>• Saudações</p>
                            <p>• Calendádio</p>
                            <a href="course">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Inscrever-se</button>
                ''         </a>
                        </div>
                        <div class=" box-content h-90 w-40  p-4 border-4 ">
                            <h3>Módulo 2</h3>
                            <p>• Cores</p>
                            <p>• Verbos</p>
                            <p>• Pronomes</p>
                            <p>• Família</p>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Inscrever-se</button>
                        </div>
                        <div class=" box-content h-90 w-40  p-4 border-4 ">
                            <h3>Módulo 3</h3>
                            <p>• Frutas</p>
                            <p>• Advérbio de Tempo</p>
                            <p>• Profissões</p>
                            <p>• Reino Animal</p>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">Inscrever-se</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
