<x-app-layout>
    <x-slot name="header">
        <div class="px-2">
            <div class="flex -mx-2">
                <div class="w-1/3 px-1" style="margin-left:35px;">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('add')">
                        {{ __('Add') }}
                    </x-nav-link>
                </div>
                <div class="w-1/3 px-1" style="margin-left:35px;">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('view')">
                        {{ __('View') }}
                    </x-nav-link>
                </div>
                <div class="w-1/3 px-1" style="margin-left:35px;">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('report')">
                        {{ __('Delete') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </x-slot>


</x-app-layout>
