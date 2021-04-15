<div>
    <x-post-breadcrumb/>
    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <x-dashboard-leftside/>
            <x-post-content :post="$post" :comments="$comments"/>
            <x-post-rightside/>
        </div>
    </div>
</div>
