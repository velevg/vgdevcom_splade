<div class="min-h-screen bg-gray-100 dark:bg-slate-900">
    <x-navigation />

    <!-- Page Heading -->
    {{-- x-slot --}}
    @if(isset($header))
        <header class="bg-white dark:bg-slate-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-slate-300 leading-tight">
                    {{ $header }}
                </h2>
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
