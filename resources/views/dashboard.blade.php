<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard : seed of change') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="text-gray-900">
                        <p class="text-lg mb-4">{{ __("Welcome to your Dashboard! : released by seed of change") }}</p>
                        <p class="mb-6">{{ __("You're logged in and ready to go.") }}</p>
                        <a href="index.html" target="myframe" style="display: block; text-align: center; margin: 0 auto; text-decoration: none;">
  <button style="background-color: green; border-radius: 10px; padding: 10px 20px; font-size: 18px; color: white;">Home</button>
</a>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
