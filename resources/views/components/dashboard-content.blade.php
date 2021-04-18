<main class="lg:col-span-9 xl:col-span-6">
    <div class="px-4 sm:px-0">
        <div class="sm:hidden">
            <label for="question-tabs" class="sr-only">Select a tab</label>
            <select id="question-tabs"
                    class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-gray-500 focus:ring-gray-500">

                <option {{$tab == 'Active'?'selected':''}}>Active</option>

                <option {{$tab == 'Closed'?'selected':''}}>Closed</option>

                <option {{$tab == 'Cancelled'?'selected':''}}>Cancelled</option>

            </select>
        </div>
        <div class="hidden sm:block">
            <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                <a href="#" wire:click="setTab('Active')"
                   class="text-gray-900 rounded-l-lg  group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6
                   text-sm font-medium text-center hover:bg-gray-50 focus:z-10"
                    <span>Active</span>
                    <span aria-hidden="true" class="{{$tab == 'Active'?'bg-gray-500':'bg-transparent'}} absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>

                <a href="#" wire:click="setTab('Closed')"
                   class="text-gray-500 hover:text-gray-700   group relative min-w-0 flex-1 overflow-hidden
                   bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10"
                    <span>Closed</span>
                    <span aria-hidden="true" class="{{$tab == 'Closed'?'bg-gray-500':'bg-transparent'}} absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>

                <a href="#" wire:click="setTab('Cancelled')"
                   class="text-gray-500 hover:text-gray-700  rounded-r-lg group relative min-w-0 flex-1
                   overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10"
                    <span>Cancelled</span>
                    <span aria-hidden="true" class="{{$tab == 'Cancelled'?'bg-gray-500':'bg-transparent'}} absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>
            </nav>
        </div>
    </div>
    <div class="mt-4">
        <ul class="space-y-4" x-max="1">
            @forelse($posts as $post)
                <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                    <article aria-labelledby="question-title-81614">
                        <div>
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="{{$post->user->profile_photo_url}}" alt="">
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#" class="hover:underline">{{$post->user->name}}</a>
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        <a href="#" class="hover:underline">
                                            <time datetime="2020-12-09T11:43:00">{{$post->published_at}}</time>
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
                                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                    </svg>
                                                    <span>Edit</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <h2 id="question-title-81614" class="mt-4 text-base font-medium text-gray-900">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        {{$post->pair->name}}
                                    </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        {{strtoupper(implode(', ',$post->tags->pluck('name')->toArray()))}}
                                </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        {{$post->strategy}}
                                    </span>
                            </h2>
                        </div>
                        <div class="mt-2 text-sm text-gray-700 space-y-4">
                            <p class="line-clamp-3">
                                {{$post->description}}
                            </p>
                            <div class="flex items-center justify-end">
                                <button type="button" wire:click="postDetails({{$post->id}})"
                                        class="inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs font-medium rounded text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    View details
                                </button>
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
                                    <span class="font-medium text-gray-900">{{$post->comments->count()}}</span>
                                    <span class="sr-only">replies</span>
                                </button>
                            </span>
                            </div>
                            <div class="flex text-sm">
                                @if($post->type == 'Pro')
                                    <span class="inline-flex items-center text-sm">
                                        <button class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <span class="font-bold text-gray-900">{{$post->type}}</span>
                                        </button>
                                    </span>
                                @else
                                    <span class="font-bold text-gray-900">{{$post->type}}</span>
                                @endif
                            </div>
                        </div>
                    </article>
                </li>
            @empty
                <p>No posts added in this criteria.</p>
            @endforelse
        </ul>
    </div>
</main>

