<x-guest-layout>
    <div class="bg-sky-400 min-h-screen">
        <header class="flex justify-between items-center bg-white p-5">
            <h1 class="text-sky-400 text-3xl ml-10">Logo</h1>  
            @if (Route::has('login'))
                <div class="mr-10">
                    @auth
                        @else
                        <a class="text-sky-400 p-6" href="{{ route('login') }}">Entrar</a>
                        @if (Route::has('register'))
                        <a class="text-sky-400 p-6" href="{{ route('register') }}">Cadastre-se</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>

        <section>
            <div class="max-w-screen-2xl h-[500px] mx-auto sm:px-6 lg:px-20 flex justify-center items-center">
                <div>
                    <h2 class="text-5xl text-white w-1/2">Torne-se um apaixonado por linguagem de sinais</h2>
                    
                    <a class="inline-block mt-5 rounded-xl text-white bg-[#21DF40] p-2 px-14" href="">Embarque</a>
                </div>
                <div class="bg-slate-100 w-80 h-60 rounded-xl">AQUI TERA UM CARD</div>
            </div>
        </section>
    </div>
</x-guest-layout>