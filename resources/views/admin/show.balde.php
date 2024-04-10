<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900">
                    <h1>Order ID: {{ $order->id }}</h1>
                    <p>Customer Name: {{ $order->customer->name }}</p>
                    <!-- Voeg hier andere details van de order toe -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

