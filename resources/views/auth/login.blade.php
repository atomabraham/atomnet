<x-guest-layout>

    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">

    <div class="blockLogin">
        <div class="opacityBlockLogin">
            <div class="content">
                <div class="formLogin">
                    <div class="blockLogoLogin">
                        <img class="logoLogin" src="{{ asset('img/logo1.png') }}" alt="ATOMNET" />
                        <p>CONNEXION</p>
                    </div>

                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Mot de passe') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4 blockSumitLogin">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            @endif

                            <x-button class="ms-4">
                                {{ __('Se connecter') }}
                            </x-button>
                        </div>

                        <div class="blockIHaveAccount">
                            <a class="iHaveAccount" href="{{ route('register') }}">{{ __('J\'ai pas de compte') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</x-guest-layout>
