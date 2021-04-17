<div>
    <x-post-breadcrumb/>
    <div class="py-10">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
{{--            <x-dashboard-leftside/>--}}
            <x-post-content :post="$post" :comments="$comments"/>
{{--            <x-post-rightside/>--}}
        </div>
    </div>
</div>
