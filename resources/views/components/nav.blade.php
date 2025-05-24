<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.svg') }}"
                             height="30" width="40" alt="">
                        <span class="text-primary-600 text-2xl font-bold">Craftify</span>
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    @auth
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/tutorial" :active="request()->is('tutorial')">Tutorial</x-nav-link>
                        <x-nav-link href="/recommendation" :active="request()->is('recommendation')">Recommendation
                        </x-nav-link>
                    @endauth
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                @guest
                    <a href="/register"
                       class="text-primary-600 hover:text-primary-800 px-3 py-2 rounded-md text-sm font-medium">Sign
                        Up</a>
                    <a href="/login"
                       class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded-md text-sm font-medium">Log
                        In</a>
                @endguest

                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        @method('delete')
                        <button class="cursor-pointer text-red-900 px-4 py-2 rounded-md text-sm font-medium">
                            Log Out
                        </button>
                    </form>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="sm:hidden mt-3">
                <input type="checkbox" id="mobile-menu-toggle" class="hidden peer">
                <label for="mobile-menu-toggle"
                       class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500 cursor-pointer">
                    <span class="sr-only">Open main menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                         fill="#e3e3e3">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
                    </svg>
                </label>

                <!-- Mobile menu -->
                <div class="hidden peer-checked:block absolute top-16 inset-x-0 bg-white shadow-md z-10">
                    <div class="pt-2 pb-3 space-y-1">
                        @auth
                            <x-nav-link href="/" device="mobile" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/tutorial" device="mobile" :active="request()->is('tutorial')">Tutorials
                            </x-nav-link>
                            <x-nav-link href="/recommendation" device="mobile" :active="request()->is('recommendation')">
                                Recommendation
                            </x-nav-link>
                        @endauth
                    </div>
                    <div class="pt-4 pb-3 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            @guest
                                <a href="/register"
                                   class="text-primary-600 hover:text-primary-800 block px-3 py-2 rounded-md text-base font-medium">Sign
                                    Up</a>
                                <a href="/login"
                                   class="bg-primary-500 hover:bg-primary-600 text-white block px-4 py-2 rounded-md text-base font-medium ml-2">Log
                                    In</a>
                            @endguest
                            @auth
                                <form action="/logout" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="bg-red-500 hover:bg-red-600 text-white block px-4 py-2 rounded-md text-base font-medium ml-2">
                                        Log Out
                                    </button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
