<x-splade-data default="{ open: false }">
    <nav class="bg-white dark:bg-slate-800 border-b border-gray-100 dark:border-slate-900">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link class="dark:text-slate-400 hover:dark:text-white" href="{{ route('home') }}"
                            :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>

                        <x-nav-link class="dark:text-slate-400 hover:dark:text-white" href="{{ route('about') }}"
                            :active="request()->routeIs('about')">
                            {{ __('About') }}
                        </x-nav-link>

                        <x-nav-link class="dark:text-slate-400 hover:dark:text-white" href="{{ route('portfolio') }}"
                            :active="request()->routeIs('portfolio')">
                            {{ __('Portfolio') }}
                        </x-nav-link>

                        <x-nav-link class="dark:text-slate-400 hover:dark:text-white" href="{{ route('contact') }}"
                            :active="request()->routeIs('contact')">
                            {{ __('Contact') }}
                        </x-nav-link>

                        <x-nav-link class="dark:text-slate-400 hover:dark:text-white" href="{{ route('docs') }}"
                            :active="request()->routeIs('docs')">
                            {{ __('Documentation') }}
                        </x-nav-link>

                        @if (Route::has('login'))
                            @auth
                                <!-- Settings Dropdown -->
                                <div class="hidden sm:flex sm:items-center sm:ml-6">
                                    <x-dropdown placement="bottom-end">
                                        <x-slot name="trigger">
                                            <button
                                                class="flex items-center text-sm font-medium text-gray-500 bg-white dark:bg-slate-800 hover:text-slate-400 dark:text-slate-400 hover:dark:text-white focus:outline-none transition duration-150 ease-in-out">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ml-1 ">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link
                                                class="dark:text-slate-400 hover:dark:text-white hover:dark:bg-slate-700"
                                                :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link
                                                    class="dark:text-slate-400 hover:dark:text-white hover:dark:bg-slate-700"
                                                    as="a" :href="route('logout')"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                                {{-- To add comments/reviews --}}
                            @else
                                <x-nav-link class="dark:text-slate-400 hover:dark:text-white" href="{{ route('login') }}"
                                    :active="request()->routeIs('login')">
                                    {{ __('Login') }}
                                </x-nav-link>
                                @if (Route::has('register'))
                                    <x-nav-link class="dark:text-slate-400 hover:dark:text-white"
                                        href="{{ route('register') }}" :active="request()->routeIs('register')">
                                        {{ __('Register') }}
                                    </x-nav-link>
                                @endif
                            @endauth
                        @endif

                        <div class="flex flex-col justify-center ml-3 damn">
                            <input type="checkbox" name="light-switch" class="light-switch sr-only" />
                            <label class="relative cursor-pointer p-2" for="light-switch">
                                <svg class="dark:hidden" width="16" height="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-slate-300"
                                        d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z" />
                                    <path class="fill-slate-400"
                                        d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z" />
                                </svg>
                                <svg class="hidden dark:block" width="16" height="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-slate-400"
                                        d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z" />
                                    <path class="fill-slate-500"
                                        d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z" />
                                </svg>
                                {{-- <span class="sr-only">Switch to light / dark version</span> --}}
                            </label>
                        </div>

                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden ">
                    <button @click="data.open = ! data.open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 dark:bg-slate-900 dark:text-slate-300 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path v-bind:class="{'hidden': data.open, 'inline-flex': ! data.open }"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path v-bind:class="{'hidden': ! data.open, 'inline-flex': data.open }"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div v-bind:class="{'block': data.open, 'hidden': ! data.open }" class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link
                    class="dark:text-slate-300 dark:bg-slate-800 focus:dark:bg-slate-950 hover:dark:bg-slate-900"
                    href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link class="dark:text-slate-300 hover:dark:bg-slate-900" href="{{ route('about') }}"
                    :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link class="dark:text-slate-300 hover:dark:bg-slate-900"
                    href="{{ route('portfolio') }}" :active="request()->routeIs('portfolio')">
                    {{ __('Portfolio') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link class="dark:text-slate-300 hover:dark:bg-slate-900"
                    href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link class="dark:text-slate-300 hover:dark:bg-slate-900" href="{{ route('docs') }}"
                    :active="request()->routeIs('docs')">
                    {{ __('Documentation') }}
                </x-responsive-nav-link>

                <!-- Authentication Links -->
                <div class="space-y-1">
                    @auth
                        <div
                            class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out dark:text-slate-300 hover:dark:bg-slate-900">
                            <!-- Settings Dropdown -->
                            <x-dropdown placement="bottom-end">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium">
                                        <div class="text-base">{{ Auth::user()->name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link class="dark:text-slate-300 hover:dark:bg-slate-900" :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link class="dark:text-slate-300 hover:dark:bg-slate-900 w-full text-start" as="button" :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <!-- Login/Register Links -->
                        <x-responsive-nav-link class="dark:text-slate-300 hover:dark:bg-slate-900" href="{{ route('login') }}" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-responsive-nav-link>
                        @if (Route::has('register'))
                            <x-responsive-nav-link class="dark:text-slate-300 hover:dark:bg-slate-900" href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                            </x-responsive-nav-link>
                        @endif
                    @endauth
                </div>

                <div class="damn block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out dark:text-slate-300 hover:dark:bg-slate-900">
                    <div class="flex flex-col justify-center ml-3 hover:dark:bg-slate-900">
                        <input type="checkbox" name="light-switch" class="light-switch sr-only" />
                        <label class="relative cursor-pointer p-1" for="light-switch">
                            <svg class="dark:hidden" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-slate-300"
                                    d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z" />
                                <path class="fill-slate-400" d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z" />
                            </svg>
                            <svg class="hidden dark:block" width="18" height="18"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-slate-400"
                                    d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z" />
                                <path class="fill-slate-500"
                                    d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z" />
                            </svg>
                            <span class="sr-only">Switch to light / dark version</span>
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</x-splade-data>