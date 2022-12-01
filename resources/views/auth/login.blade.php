<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-blue-500" />
            </a>
        </x-slot>
        
        <!-- Session Status -->
        <x-auth-session-status class="-mt-14" :status="session('status')" />  
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <input id="email" class="mb-8 bg-transparent block mt-1 w-full border-0 border-blue-400 border-b-2 border-blue-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-blue-400 text-blue-400 rounded-sm text-xl focus:outline-none focus:ring-blue-500 focus:border-opacity-0" type="email" name="email" :value="old('email')" placeholder="E-mail" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <input id="password" class="mb-8 bg-transparent block mt-1 w-full border-0 border-blue-400 border-b-2 border-blue-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-blue-400 text-blue-400 rounded-sm text-xl focus:outline-none focus:ring-blue-500 focus:border-opacity-0" name="password" type="password" autocomplete="current-password" required autocomplete="current-password" required class="block mt-1 w-full"  placeholder="Senha"/>

            </div>
            
                                    </div>          

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                          <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-transparent text-red-400 focus:ring-blue-500 border-blue-400 rounded">
                                          <label for="remember_me" class="ml-2 block text-sm text-blue-400">
                                             <span>{{ __('Lembre-me') }}</span>
                                         </label>

                                         </div>  
                                        <div class="text-sm">
                                          @if (Route::has('password.request'))
                                            <a class="underline text-sm text-blue-400 hover:text-white" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu a senha?') }}
                                            </a>
                                          @endif
                                        </div>
                                        </div>          

<div>
    <button type="submit" class="mb-12 shadow-2xl group relative w-full flex justify-center py-2 px-4 border border-transparent text-xl font-medium rounded-md text-blue-900 bg-blue-400 hover:bg-white hover:text-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
      <span class="absolute left-0 inset-y-0 flex items-center pl-3">
        <!-- Heroicon name: solid/lock-closed -->
        <svg class="h-5 w-5 text-blue-900 group-hover:text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
      </span>
        {{ __('Entrar') }}
    </button>
</div>      

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
