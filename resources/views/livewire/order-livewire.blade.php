<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xxl text-gray-800 leading-tight">
                {{ __('Orders') }}
            </h2>

        </div>
    </x-slot>
    

    <table class="border border-double border-black mx-auto mt-10 w-8/12">
        <thead>
            <tr>
            <th class="border-double border-2 bg-blue-600 border-black text-white">S.N.</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Customer Name</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Subtotal</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Tax</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Discount</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Total</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Status</th>





            </tr>
        </thead>
        <tbody class=" text-center">
             @foreach ($all_orders as $order)
                <tr>
                    <td class="border-double border-2 border-black">{{$order->id}}</td>
                    <td class="border-double border-2 border-black">{{\App\Models\User::find($order->user_id)->name}}</td>
                    <td class="border-double border-2 border-black">{{$order->subtotal}}</td>
                    <td class="border-double border-2 border-black">{{$order->tax}}</td>
                    <td class="border-double border-2 border-black">{{$order->discount}}</td>
                    <td class="border-double border-2 border-black">{{$order->total}}</td>
                    <td class="border-double border-2 border-black">{{$order->status}}</td>
                </tr>
                @foreach ($order->line_item()->get() as $line_item)
                <tr>
                    <td class="border-double border-2 border-black"></td>
                    <td class="border-double border-2 border-black">{{\App\Models\Product::find($line_item->product_id)->name}}</td>
                    <td class="border-double border-2 border-black">{{$line_item->total}}</td>
                </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>

</div>
