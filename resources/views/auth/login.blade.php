
<x-guest-layout>
<div class="relative ">
    <x-auth-card class="">
        <x-slot name="logo">
            <div class="flex justify-between absolute inset-x-20 top-20" href="/">
                <div class="px-1"><x-application-logo class="w-5 h-5 fill-current text-gray-500" /></div>
                <div class="text-4xl font-sans font-bold"><p>Student Activity</p><p>Management System</p></div>
               
</div>
                <!-- <div class="border-8 border-gray-100"></div>
                <div class="border-2 border-gray-100"></div>
                <div class="border border-gray-300"></div>
                <div class="border-8 border-gray-100"></div> -->
        </x-slot>
        

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3 ">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    </div>
</x-guest-layout>
