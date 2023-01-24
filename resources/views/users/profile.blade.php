<x-app-layout>
    <div class="container-fluid flex flex-row ">
        <div class="">
            <x-menu-user></x-menu-user>

        </div>
        <div class="h-screen w-full ">
            <div class="flex justify-center max-screen h-screen mx-auto sm:px-6 lg:px-8">
                <div class="bg-white h-4/5 w-4/6 overflow-hidden shadow-sm sm:rounded-lg my-20 py-8 px-24 ">
                    <div class="p-6 sm:p-0 border-gray-200">
                        <h1>Listagem do meu usuário {{ $user->name }}</h1>
                        <ul>
                            @if ($user->image)
                                <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}"
                                    class="object-cover w-20">
                            @else
                                <img src="{{ url('images/101.jpg') }}" alt="">
                            @endif
                            <li>

                                {{ $user->name }} -
                                {{ $user->email }}
                                <a href="{{ route('users.edit', '$user->id') }}">Editar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
