<x-app-layout>
    
    <body>
        <h1>Listagem do meu usuário {{$user->name}}</h1>
        
        <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="text" name="name" placeholder="Nome:" value="{{$user->name}}">
            <input type="email" name="email" placeholder="Email" value="{{$user->email}}">
            <input type="password" name="password" placeholder="Senha:">
            <input type="file" name="image" >
        
            <button type="submit">
                Enviar
            </button>
        </form>  
    </body>

</x-app-layout>