<x-splade-form action="{{ route('contact') }}" class="space-y-4">
    @csrf
    <x-splade-input id="email" type="email" name="email" :label="__('Email')" required autofocus>
        <x-slot name="label">
            <label for="name" class="dark:text-slate-300">{{ __('Email') }}</label>
        </x-slot>
    </x-splade-input>
    <x-splade-textarea name="message" :label="__('Message')" autosize required>
        <x-slot name="label">
            <label for="message" class="dark:text-slate-300 my-label-class">{{ __('Message') }}</label>
        </x-slot>
    </x-splade-textarea>

    <div class="flex items-center justify-end">
        <x-splade-submit class="ml-3" :label="__('Submit')" />
    </div>
</x-splade-form>
