<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('orders') }}
        </h2>
    </x-slot>
    @foreach ($all_order as $order)
        {{$order->name}}
    @endforeach
</div>

