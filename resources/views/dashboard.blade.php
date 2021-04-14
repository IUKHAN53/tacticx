<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            @component('components.dashboard-leftside')

            @endcomponent
            @component('components.dashboard-content')

            @endcomponent
            @component('components.dashboard-rightside')

            @endcomponent
        </div>
    </div>
</x-app-layout>
