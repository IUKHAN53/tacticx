<main class="lg:col-span-9 xl:col-span-6">
    <div>
        <ul class="space-y-4" x-max="1">

            <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                <article aria-labelledby="question-title-81614">
                    <div>
                        <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixqx=FLYCBl6NlW&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="">
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-gray-900">
                                    <a href="#" class="hover:underline">Dries Vincent</a>
                                </p>
                                <p class="text-sm text-gray-500">
                                    <a href="#" class="hover:underline">
                                        <time datetime="2020-12-09T11:43:00">December 9 at 11:43 AM</time>
                                    </a>
                                </p>
                            </div>
                            <div class="flex-shrink-0 self-center flex">
                                <div x-data="{ open: false }" @keydown.escape.stop="open = false"
                                    @click.away="open = false" class="relative inline-block text-left">
                                    <div>
                                        <button type="button"
                                            class="-m-2 p-2 rounded-full flex items-center text-gray-400 hover:text-gray-600"
                                            id="options-menu-0" @click="open = !open" aria-haspopup="true"
                                            x-bind:aria-expanded="open">
                                            <span class="sr-only">Open options</span>
                                            <svg class="h-5 w-5" x-description="Heroicon name: solid/dots-vertical"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>


                                    <div x-show="open" x-description="Dropdown menu, show/hide based on menu state."
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-95"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100"
                                        x-transition:leave-end="transform opacity-0 scale-95"
                                        class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0"
                                        style="display: none;">
                                        <div class="py-1" role="none">
                                            <a href="#"
                                                class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                role="menuitem">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <span>Edit</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <h2 id="" class="mt-4 text-base font-medium text-gray-900">
                            <span class="font-semibold">ADABTC</span>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full bg-gray-50 text-sm font-medium text-gray-700 hover:bg-gray-100">Volume</span>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full bg-gray-50 text-sm font-medium text-gray-700 hover:bg-gray-100">Elliott
                                Wave</span>
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full bg-green-50 text-sm font-medium text-green-700 hover:bg-green-100">LONG</span>
                        </h2>
                    </div>
                    <div class="py-5">
                        <img src="https://www.tradingview.com/x/0JdD6arQ/" alt="" class="rounded">
                    </div>
                    <div class="py-6 my-2 border-t border-b border-gray-200 text-sm text-gray-700 space-y-4 ">

                        <p>
                            Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year
                            mission: to explore strange
                            new worlds, to seek out new life and new civilizations, to boldly go where no man has gone
                            before.
                        </p>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so
                            beguiled and demoralized by the
                            charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain
                            and trouble that are bound to
                            ensue; and equal blame belongs to those who fail in their duty through weakness of will,
                            which is the same as saying
                            through shrinking from toil and pain. These cases are perfectly simple and easy to
                            distinguish.
                        </p>
                        <div class="px-5 py-5 bg-gray-100 rounded-md">
                            <h3 class="font-bold">
                                Disclaimer
                            </h3>
                            <p>
                                Space, the final frontier. These are the voyages of the Starship Enterprise. Its
                                five-year
                                mission: to explore strange
                                new worlds, to seek out new life and new civilizations, to boldly go where no man has
                                gone
                                before.
                            </p>
                        </div>
                    </div>
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Status
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                Active
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Time Frame
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                Mid Term
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">
                                Chart Link
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                $120,000
                            </dd>
                        </div>

                    </dl>
                    <div class="border-b border-gray-200 py-6 space-y-8">
                        <div>
                            <h2 class="text-sm font-medium text-gray-500">Tags</h2>
                            <ul class="mt-2 leading-8">
                                <li class="inline">
                                    <a href="#"
                                        class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                        <div class="absolute flex-shrink-0 flex items-center justify-center">
                                            <span class="h-1.5 w-1.5 rounded-full bg-indigo-500"
                                                aria-hidden="true"></span>
                                        </div>
                                        <div class="ml-3.5 text-sm font-medium text-gray-900">Elliot Wave</div>
                                    </a>
                                    <!-- space -->
                                </li>
                                <li class="inline">
                                    <a href="#"
                                        class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                        <div class="absolute flex-shrink-0 flex items-center justify-center">
                                            <span class="h-1.5 w-1.5 rounded-full bg-indigo-500"
                                                aria-hidden="true"></span>
                                        </div>
                                        <div class="ml-3.5 text-sm font-medium text-gray-900">Volume</div>
                                    </a>
                                    <!-- space -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-6 flex justify-between space-x-8">
                        <div class="flex space-x-6">

                            <span class="inline-flex items-center text-sm">
                                <button class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/chat-alt"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium text-gray-900">11</span>
                                    <span class="sr-only">replies</span>
                                </button>
                            </span>
                            <span class="inline-flex items-center text-sm">
                                <button class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                    <svg class="h-5 w-5" x-description="Heroicon name: solid/eye"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="font-medium text-gray-900">2.7k</span>
                                    <span class="sr-only">views</span>
                                </button>
                            </span>
                        </div>
                        <div class="flex text-sm">
                            <span class="inline-flex items-center text-sm">
                                <button class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="font-bold text-gray-900">Pro</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </article>
            </li>

        </ul>
        <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden mt-5">
            <div class="divide-y divide-gray-200">
                <div class="px-4 py-5 sm:px-6">
                    <h2 id="notes-title" class="text-lg font-medium text-gray-900">Comments</h2>
                </div>
                <div class="px-4 py-6 sm:px-6">
                    <ul class="space-y-8">

                        <li>
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixqx=FLYCBl6NlW&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>
                                <div>
                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-gray-900">Leslie Alexander</a>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Ducimus quas delectus ad maxime totam doloribus reiciendis ex. Tempore
                                            dolorem
                                            maiores. Similique voluptatibus tempore non ut.</p>
                                    </div>
                                    <div class="mt-2 text-sm space-x-2">
                                        <span class="text-gray-500 font-medium">4d ago</span>
                                        <!-- space -->
                                        <span class="text-gray-500 font-medium">·</span>
                                        <!-- space -->
                                        <button type="button" class="text-gray-900 font-medium">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&amp;ixqx=FLYCBl6NlW&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>
                                <div>
                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-gray-900">Michael Foster</a>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Et ut autem. Voluptatem eum dolores sint necessitatibus quos. Quis eum qui
                                            dolorem
                                            accusantium voluptas voluptatem ipsum. Quo facere iusto quia accusamus
                                            veniam id
                                            explicabo et aut.</p>
                                    </div>
                                    <div class="mt-2 text-sm space-x-2">
                                        <span class="text-gray-500 font-medium">4d ago</span>
                                        <!-- space -->
                                        <span class="text-gray-500 font-medium">·</span>
                                        <!-- space -->
                                        <button type="button" class="text-gray-900 font-medium">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixqx=FLYCBl6NlW&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>
                                <div>
                                    <div class="text-sm">
                                        <a href="#" class="font-medium text-gray-900">Dries Vincent</a>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700">
                                        <p>Expedita consequatur sit ea voluptas quo ipsam recusandae. Ab sint et
                                            voluptatem
                                            repudiandae voluptatem et eveniet. Nihil quas consequatur autem. Perferendis
                                            rerum
                                            et.</p>
                                    </div>
                                    <div class="mt-2 text-sm space-x-2">
                                        <span class="text-gray-500 font-medium">4d ago</span>
                                        <!-- space -->
                                        <span class="text-gray-500 font-medium">·</span>
                                        <!-- space -->
                                        <button type="button" class="text-gray-900 font-medium">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-6 sm:px-6">
                <div class="flex space-x-3">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                            alt="">
                    </div>
                    <div class="min-w-0 flex-1">
                        <form action="#">
                            <div>
                                <label for="comment" class="sr-only">About</label>
                                <textarea id="comment" name="comment" rows="3"
                                    class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-gray-300 rounded-md"
                                    placeholder="Add a note"></textarea>
                            </div>
                            <div class="mt-3 flex items-center justify-between">
                                <a href="#"
                                    class="group inline-flex items-start text-sm space-x-2 text-gray-500 hover:text-gray-900">
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                        x-description="Heroicon name: solid/question-mark-circle"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>
                                        Some HTML is okay.
                                    </span>
                                </a>
                                <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Comment
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
