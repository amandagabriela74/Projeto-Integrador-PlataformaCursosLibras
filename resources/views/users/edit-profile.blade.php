<x-app-layout>

    <body>
        <div class="h-screen ">
            <div class="flex justify-center max-screen h-screen mx-auto sm:px-6 lg:px-8">
                <div class="bg-white h-5/6 w-4/6 overflow-hidden shadow-sm sm:rounded-lg my-20 py-8 px-24 ">
                    <div class="p-6 sm:p-0 border-gray-200">
                        <h1 class="mb-2">Meus Dados - {{ $user->name }}</h1>
                        <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class=" mb-6 ">
                                <div class="flex flex-row items-center">
                                    <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}"
                                        class="object-cover h-24 w-24 rounded-full">

                                    <input type="file" name="image"
                                        class="pl-2 block w-full mb-5 text-xs text-gray-900
                                        rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400
                                        focus:outline-none dark:bg-gray-700 dark:border-gray-600
                                        dark:placeholder-gray-400">
                                </div>
                                <div>
                                    <label for="name"
                                        class="block text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                    <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}"
                                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="">
                                    <label for="email"
                                        class="block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}"
                                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="">
                                    <label for="password"
                                        class="block text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                                    <input type="password" name="password"
                                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••">
                                </div>
                                <div class="mb-6">
                                    <label for="confirm_password"
                                        class="block text-sm font-medium text-gray-900 dark:text-white">Confirm
                                        password</label>
                                    <input type="password" id="confirm_password"
                                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="•••••••••">
                                </div>
                            </div>
                            <div class="flex justify-end ">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

</x-app-layout>
