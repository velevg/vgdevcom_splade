<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-slate-300">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-slate-500">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <x-splade-form method="put" :action="route('password.update')" class="mt-6 space-y-6" preserve-scroll>
        <x-splade-input id="current_password" name="current_password" type="password" :label="__('Current Password')" autocomplete="current-password">
            <x-slot name="label">
                <label for="current_password" class="dark:text-slate-300">{{ __('Current Password') }}</label>
            </x-slot>
        </x-splade-input>
        <x-splade-input id="password" name="password" type="password" :label="__('New Password')" autocomplete="new-password">
            <x-slot name="label">
                <label for="password" class="dark:text-slate-300">{{ __('New Password') }}</label>
            </x-slot>
        </x-splade-input>
        <x-splade-input id="password_confirmation" name="password_confirmation" type="password" :label="__('Confirm Password')" autocomplete="new-password">
            <x-slot name="label">
                <label for="password_confirmation" class="dark:text-slate-300">{{ __('Confirm Password') }}</label>
            </x-slot>
        </x-splade-input>

        <div class="flex items-center gap-4">
            <x-splade-submit :label="__('Save')" />

            @if (session('status') === 'password-updated')
                <p class="text-sm text-green-800 dark:text-green-500">{{ __('Saved.') }}</p>
            @endif
        </div>
    </x-splade-form>
</section>
