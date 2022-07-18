<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>
    @foreach($all_orders as $order)
        {{$order->name}}
    @endforeach
</div>
