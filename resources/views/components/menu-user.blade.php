<aside class="w-72 " aria-label="Sidebar">
    <div class="h-screen px-3 py-4 overflow-y-auto rounded bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <x-nav-menu-user :href="route('inscricao.show', [Auth::user()->id])" :active="request()->routeIs('inscricao.show', [Auth::user()->id])">
                    <svg aria-hidden="true"
                        class="fill-blue-600 m-3 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    {{ __(' Painel Inicial') }}
                </x-nav-menu-user>
            </li>
            <li>
                <x-nav-menu-user :href="route('coursesUser', [Auth::user()->id])" :active="request()->routeIs('coursesUser', [Auth::user()->id])" >
                    <svg aria-hidden="true"
                        class="fill-blue-600 m-3 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    {{ __('Meus Cursos') }}
                </x-nav-menu-user>
            </li>
            <li>
                <x-nav-menu-user :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <svg aria-hidden="true"
                        class="fill-blue-600 m-3 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    {{ __(' Catálogo de Cursos') }}
                </x-nav-menu-user>
            </li>
            <li>
                <x-nav-menu-user :href="route('certificates',[Auth::user()->id])" :active="request()->routeIs('certificates',[Auth::user()->id])">
                    <svg aria-hidden="true"
                        class="fill-blue-600 m-3 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    {{ __(' Meus certificados') }}
                </x-nav-menu-user>
            </li>
            <li>
                <x-nav-menu-user :href="route('users.show',[Auth::user()->id])" :active="request()->routeIs('users.show',[Auth::user()->id])">
                    <svg aria-hidden="true"
                    class="fill-blue-600 m-3 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd"></path>
                </svg>
                    {{ __(' Meu Perfil') }}
                </x-nav-menu-user>
                
            </li>

        </ul>
        <ul class="pt-4 mt-4 space-y-2 border-t-2 border-gray-200 dark:border-gray-700">
            <li class="">
                <x-nav-menu-user :href="route('support')" :active="request()->routeIs(route('support'))">
                <svg aria-hidden="true"
                        class="fill-blue-600 m-3 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{ __('Perguntas Frequentes') }}
                </x-nav-menu-user>
                
            </li>

        </ul>
    </div>
</aside>
