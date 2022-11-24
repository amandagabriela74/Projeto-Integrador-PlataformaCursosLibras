<div class="flex w-full h-screen">

    <div class="bg-sky-400 w-5/12 h-scren text-center flex flex-col justify-center items-center">
        <h1 class="text-white text-5xl">Libras Intergrador</h1>
        <p class="text-white p-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium voluptatum atque recusandae aut, fuga amet repel</p>
        
    </div>
        
    <div class="min-h-screen w-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>
    
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-100 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
</div>
