<x-layout>
    <x-slot name="header">
        {{ __('Register') }}
    </x-slot>

    <x-auth-card>
        <x-splade-form action="{{ route('register') }}" class="space-y-4">
            @csrf
            <x-splade-input id="name" type="text" name="name" :label="__('Name')" required autofocus>
                <x-slot name="label">
                    <label for="name" class="dark:text-slate-300">{{ __('Name') }}</label>
                </x-slot>
            </x-splade-input>
            <x-splade-input id="email" type="email" name="email" :label="__('Email')" required>
                <x-slot name="label">
                    <label for="email" class="dark:text-slate-300">{{ __('Email') }}</label>
                </x-slot>
            </x-splade-input>
            <x-splade-input id="password" type="password" name="password" :label="__('Password')" required
                autocomplete="new-password">
                <x-slot name="label">
                    <label for="password" class="dark:text-slate-300">{{ __('Password') }}</label>
                </x-slot>
            </x-splade-input>
            <x-splade-input id="password_confirmation" type="password" name="password_confirmation" :label="__('Confirm Password')"
                required>
                <x-slot name="label">
                    <label for="password_confirmation" class="dark:text-slate-300">{{ __('Confirm Password') }}</label>
                </x-slot>
            </x-splade-input>

            <div class="flex items-center justify-end">
                <Link
                    class="underline text-sm text-gray-600 hover:text-gray-900 dark:text-slate-400 hover:dark:text-white"
                    href="{{ route('login') }}">
                {{ __('Already registered?') }}
                </Link>

                <x-splade-submit class="ml-4" :label="__('Register')" />
            </div>
        </x-splade-form>
    </x-auth-card>

</x-layout>
