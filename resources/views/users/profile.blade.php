<x-app-layout>
    
    <body>
        <h1>Listagem do meu usuário {{$user->name}}</h1>
        
        <ul>
           @if ($user->image)
           
           <img src="{{ url("storage/{$user->image}") }}" alt="{{$user->name}}" class="object-cover w-20" >
           @else
           <img src="{{ url("images/101.jpg") }}" alt="">
           @endif
                <li>
                    
                    {{$user->name}} -
                    {{$user->email}}
                    <a href="{{route('users.edit', '$user->id')}}">Editar</a>
                </li>
            
        </ul>
        
    </body>

</x-app-layout>
