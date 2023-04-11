<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xt text-grey-800 dark:text-grey-200 leading-tight">
            {{_('dashboard')}}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-grey-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-wellcom />
            </div>
        </div>
    </div>
</x-app-layout>