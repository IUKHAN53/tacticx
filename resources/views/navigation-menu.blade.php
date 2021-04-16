<header class="bg-white shadow-sm lg:static lg:overflow-y-visible" x-state:on="Menu open" x-state:off="Menu closed"
    :class="{ 'fixed inset-0 z-40 overflow-y-auto': open }" x-data="Components.popover({ open: false, focus: false })"
    x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-8">
            <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{route('dashboard')}}">
                        <img class="block h-8 w-auto"
                            src="https://tailwindui.com/img/logos/workflow-mark.svg?color=gray&amp;shade=500"
                            alt="Workflow">
                    </a>
                </div>
            </div>
            <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
                <div class="flex items-center px-6 py-4 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
                    <div class="w-full">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/search"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input id="search" name="search"
                                class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-gray-500 focus:border-gray-500 sm:text-sm"
                                placeholder="Search" type="search">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center md:absolute md:right-0 md:inset-y-0 lg:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                    class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500"
                    @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                    :aria-expanded="open.toString()">
                    <span class="sr-only">Open menu</span>
                    <svg x-description="Icon when menu is closed.

Heroicon name: outline/menu" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6"
                        :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-description="Icon when menu is open.

Heroicon name: outline/x" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6"
                        :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                <a href="#" class="text-sm font-medium text-gray-900 hover:underline">
                    Go Premium
                </a>
                <a href="#"
                    class="ml-5 flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                        </path>
                    </svg>
                </a>

                <!-- Profile dropdown -->
                <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                    class="flex-shrink-0 relative ml-5">
                    <div>
                        <button type="button"
                            class="bg-white rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                            id="user-menu" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="{{auth()->user()->profile_photo_url}}"alt="">
                        </button>
                    </div>

                    <div x-description="Dropdown menu, show/hide based on menu state." x-show="open"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu" style="display: none;">

                        <a href="{{route('profile.show')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                            Profile</a>

                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Settings</a>

                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                            out</a>

                    </div>

                </div>

                <a href="{{route('editor-add-post')}}"
                    class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium
                    rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    New Post
                </a>
            </div>
        </div>
    </div>

    <nav x-description="Mobile menu, show/hide based on menu state." class="lg:hidden" aria-label="Global" x-ref="panel"
        x-show="open" @click.away="open = false" style="display: none;">
        <div class="max-w-3xl mx-auto px-2 pt-2 pb-3 space-y-1 sm:px-4">

            <a href="#" aria-current="page"
                class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium text-gray-900"
                x-state:on="Current" x-state:off="Default"
                x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;hover:bg-gray-50&quot;">Home</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium text-gray-900"
                x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;hover:bg-gray-50&quot;">Popular</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium text-gray-900"
                x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;hover:bg-gray-50&quot;">Communities</a>

            <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium text-gray-900"
                x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;hover:bg-gray-50&quot;">Trending</a>

        </div>
        <div class="border-t border-gray-200 pt-4 pb-3">
            <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixqx=FLYCBl6NlW&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                    <div class="text-sm font-medium text-gray-500">chelseahagon@example.com</div>
                </div>
                <button type="button"
                    class="ml-auto flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">

                <a href="#"
                    class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your
                    Profile</a>

                <a href="#"
                    class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Settings</a>

                <a href="#"
                    class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Sign
                    out</a>

            </div>
        </div>
    </nav>
</header>
