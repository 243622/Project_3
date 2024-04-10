<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-200">
                    <h1>Customer Name: {{ $order->customer->firstname }} {{ $order->customer->lastname }}</h1>
                    @foreach($order->pizzas as $pizza)
                        <p>{{ $pizza->pizzaName }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>