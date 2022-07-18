<div>
user_id:<input type="text"name="user_id"><br><br>
    subtotal:<input type="text"name="subtotal"><br><br>
    delivery_charge:<input type="text"name="delevery_charge"><br><br>
    tax:<input type="text"name="tax"><br><br>
    discount:<input type="text"name="diacount"><br><br>
    total:<input type="text"name="total"><br><br>
    status:<input type="text"name="status"><br><br>
    order_note:<input type="text"name="order_dev"><br><br>
    financial_status:<input type="text"name="financial_status"><br><br>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('orders') }}
        </h2>
    </x-slot>
    @foreach ($all_order as $order)
        {{$order->name}}
    @endforeach
</div>

