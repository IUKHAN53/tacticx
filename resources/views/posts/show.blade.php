<x-app-layout>
    @component('components.post-breadcrumb')

    @endcomponent
    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            @component('components.dashboard-leftside')

            @endcomponent
            @component('components.post-content')

            @endcomponent
            @component('components.post-rightside')

            @endcomponent
        </div>
    </div>
</x-app-layout>
