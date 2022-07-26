<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xxl text-gray-800 leading-tight">
                {{ __('Bill') }}
            </h2>

        </div>
    </x-slot>


    <table class="border border-double border-black mx-auto mt-10 w-3/12 bg-yellow-200">
        <thead>
            <tr>
            <th class="border-double border-2 bg-yellow-600 border-black text-white">S.N.</th>
            <th class="border-double border-2 bg-yellow-600 border-black text-white">Particular</th>
            <th class="border-double border-2 bg-yellow-600 border-black text-white">Quantity</th>
            <th class="border-double border-2 bg-yellow-600 border-black text-white">Unit Price</th>
            <th class="border-double border-2 bg-yellow-600 border-black text-white">Total</th>
            </tr>
        </thead>
        <tbody class=" text-center">
                @php $i=0; @endphp
                @foreach ($order->line_item()->get() as $line_item)
                <tr>
                    <td class="border-double border-2 border-black">{{++$i}}</td>
                    <td class="border-double border-2 border-black">{{\App\Models\Product::find($line_item->product_id)->name}}</td>
                    <td class="border-double border-2 border-black">{{$line_item->quantity}}</td>
                    <td class="border-double border-2 border-black">{{$line_item->price_per_item}}</td>
                    <td class="border-double border-2 border-black">{{$line_item->total}}</td>
                </tr>
                @endforeach
                <tr>
                    <td class="border-double border-2 border-black" colspan="3"  rowspan="4"></td>
                    <td class="border-double border-2 border-black">Total</td>
                    <td class="border-double border-2 border-black">{{$order->subtotal}}</td>
                </tr>
                <tr>
                    <td class="border-double border-2 border-black">Discount</td>
                    <td class="border-double border-2 border-black">{{$order->discount}}</td>
                </tr>
                <tr>
                    <td class="border-double border-2 border-black">Tax</td>
                    <td class="border-double border-2 border-black">{{$order->tax}}</td>
                </tr>
                <tr>
                    <td class="border-double border-2 border-black">Grand Total</td>
                    <td class="border-double border-2 border-black">{{$order->total}}</td>
                </tr>
        </tbody>
    </table>

</div>
