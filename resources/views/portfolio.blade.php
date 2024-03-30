<x-layout>
    <x-slot name="header">
        {{ __('Portfolio') }}
    </x-slot>

    {{-- <x-project-card :project="$project" /> --}}

    <x-panel>
        <x-project-card />
    </x-panel>

</x-layout>