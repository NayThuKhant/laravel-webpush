<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Web Push to Authenticated User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-6">Running the following command or clicking the button should push a notification to
                        this browser</p>
                    <div class="bg-gray-100 p-4 rounded-md">
                        <code class="text-sm text-gray-800 font-mono">
                            php artisan push:notification
                        </code>
                    </div>
                    <p class="mt-5 font-semibold">OR</p>

                    <form method="POST" action="{{ route('send-notification') }}">
                        @csrf

                            <x-primary-button class="mt-3">
                                Send Notification
                            </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
