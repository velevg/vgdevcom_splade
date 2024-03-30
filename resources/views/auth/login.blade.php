<x-layout>
    <x-slot name="header">
        {{ __('Login') }}
    </x-slot>

    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" />

        <x-splade-form action="{{ route('login') }}" class="space-y-4">
            @csrf
            <!-- Email Address -->
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus>
                <x-slot name="label">
                    <label for="email" class="dark:text-slate-300">{{ __('Email') }}</label>
                </x-slot>
            </x-splade-input>
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required
                autocomplete="current-password">
                <x-slot name="label">
                    <label for="password" class="dark:text-slate-300">{{ __('Password') }}</label>
                </x-slot>
            </x-splade-input>
            <x-splade-checkbox class="dark:text-slate-400" id="remember_me" name="remember" :label="__('Remember me')" />

            <div class="flex items-center justify-end">
                @if (Route::has('password.request'))
                    <Link
                        class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-slate-400 hover:dark:text-white"
                        href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                    </Link>
                @endif

                <x-splade-submit class="ml-3" :label="__('Log in')" />
            </div>
        </x-splade-form>
    </x-auth-card>

</x-layout>
