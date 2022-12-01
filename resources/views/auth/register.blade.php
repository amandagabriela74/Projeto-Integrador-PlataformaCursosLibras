<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                <img src="/images/101.jpg" alt="">
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="mb-8 bg-transparent block mt-1 w-full border-0 border-blue-400 border-b-2 border-blue-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-blue-400 text-blue-400 rounded-sm text-xl focus:outline-none focus:ring-blue-500 focus:border-opacity-0" type="name" name="name" :value="old('name')" placeholder="name" required autofocus />


                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="mb-8 bg-transparent block mt-1 w-full border-0 border-blue-400 border-b-2 border-blue-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-blue-400 text-blue-400 rounded-sm text-xl focus:outline-none focus:ring-blue-500 focus:border-opacity-0" type="email" name="email" :value="old('email')" placeholder="E-mail" required autofocus />


                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="Password" class="mb-8 bg-transparent block mt-1 w-full border-0 border-blue-400 border-b-2 border-blue-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-blue-400 text-blue-400 rounded-sm text-xl focus:outline-none focus:ring-blue-500 focus:border-opacity-0" type="Password" name="Password" :value="old('Password')" placeholder="Password" required autofocus />


                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="Password" class="mb-8 bg-transparent block mt-1 w-full border-0 border-blue-400 border-b-2 border-blue-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-blue-400 text-blue-400 rounded-sm text-xl focus:outline-none focus:ring-blue-500 focus:border-opacity-0" type="Password" name="Password" :value="old('Password')" placeholder="Password" required autofocus />
            

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4 justify-center text-white bg-blue-900 hover:bg-blue-400 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            {{ __('Finalizar') }}
                </x-primary-button>
            </div>
        </form>
        </div>
</div>
</div>
</div>
</div>
</div>

<div class="bg-blue-400">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-8 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-2xl tracking-tight text-white sm:text-lg">
      <span class="block"> © 2022 !Perfect Codes - PlataformaCursosLibras- Todos os direitos reservados</span>
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="ml-3 inline-flex rounded-full h-10 w-10 flex items-center justify-center shadow-none">
        <a href="https://github.com/amandagabriela74/Projeto-Integrador-PlataformaCursosLibras">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-xl text-white hover:text-blue-900 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
            <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>
    </x-auth-card>
</x-guest-layout>
