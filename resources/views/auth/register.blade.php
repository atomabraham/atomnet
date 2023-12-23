{{-- register page --}}

<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/Register.css') }}">

    {{-- all content of register page --}}
    <div class="blockRegister">

        {{-- block for opacity  --}}
        <div class="opacityBlockRegister">
            <div class="content">

                {{-- block left register page --}}
                <div class="column-6 blockLeftRegister">
                    <p class="font-bold welcomeTitleRegister">Bienvenue sur ATOMNET, votre réseau social avec plus
                        de 10 millions d'utilisateurs
                    </p>
                    <p class="welcomeTextRegister">Rejoignez notre réseau social dynamique, et découvrez une communauté
                        passionnante où vous pouvez partager, créer et vous connecter de manière authentique. Exprimez
                        vos réflexions les plus profondes, écrivez des articles de blog captivants et partagez vos
                        passions!
                    </p>
                </div>

                {{-- block right register page --}}
                <div class="column-6 mt-4 ml-2 blockRightRegister">
                    <div class="blockFormRegister">

                        {{-- logo --}}
                        {{-- <x-slot name="logo">
                            <x-authentication-card-logo />
                        </x-slot> --}}


                        <x-validation-errors class="mb-4" />

                        {{-- form register --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="blockLogoRegister">
                                <img class="logoRegister" src="{{ asset('img/logo1.png') }}" alt="ATOMNET" />
                                <p>INSCRIPTION</p>
                            </div>

                            <div class="d-flex blockName">
                                <div class="mt-5 nameRegister">
                                    <x-label for="name" value="{{ __('Nom *') }}" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('Nom')" required autofocus autocomplete="name" />
                                </div>

                                <div class="mt-5">
                                    <x-label for="secondname" value="{{ __('Prénom *') }}" />
                                    <x-input id="secondname" class="block mt-1 w-full" type="text" name="secondname"
                                        :value="old('secondname')" required autofocus autocomplete="secondname" />
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-label for="email" value="{{ __('Email *') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="email" />
                            </div>

                            <div class="mt-4">
                                <x-label for="birthday" value="{{ __('Date de naissance (facultatif)') }}" />
                                <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday"
                                    :value="old('email')" required autocomplete="birthday" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Mot de passe *') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password_confirmation"
                                    value="{{ __('Confirmer votre mot de passe *') }}" />
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms" required />

                                            <div class="ms-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' =>
                                                        '<a target="_blank" href="' .
                                                        route('terms.show') .
                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                        __('Terms of Service') .
                                                        '</a>',
                                                    'privacy_policy' =>
                                                        '<a target="_blank" href="' .
                                                        route('policy.show') .
                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                        __('Privacy Policy') .
                                                        '</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4 mb-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('login') }}">
                                    {{ __('Déja inscris?') }}
                                </a>

                                <x-button class="ms-4 submitRegister">
                                    {{ __("s'inscrire") }}
                                </x-button>
                            </div>
                        </form>
                        {{-- </x-authentication-card> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
