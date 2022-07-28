<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Orders') }}
            </h2>

        </div>
    </x-slot>

    <table class="border border-soild border-black mx-auto mt-10 w-8/12">
        <thead>
            <tr>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >S.N.</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >User</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Subtotal</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Delivery Charge</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Tax</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Discount</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Total</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Status</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Ordre Note</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Financial Status</th>
            <th class="border-soild border-2 bg-blue-600 border-black text-white" >Action</th>

            </tr>
        </thead>
        <tbody class=" text-center">
             @foreach ($all_orders as $order)
            <tr>
            <td class="border-soild border-2 border-black"> {{$order->id}}</td>
            <td class="border-soild border-2 border-black"> {{\App\Models\User::find($order->user_id)->name}}</td>
            <td class="border-soild border-2 border-black"> {{$order->subtotal}}</td>
            <td class="border-soild border-2 border-black"> {{$order->delivery_charge}}</td>
            <td class="border-soild border-2 border-black">{{$order->tax}}</td>
            <td class="border-soild border-2 border-black">{{$order->discount}}</td>
            <td class="border-soild border-2 border-black">{{$order->total}}</td>
            <td class="border-soild border-2 border-black">{{$order->status}}</td>
            <td class="border-soild border-2 border-black">{{$order->order_note}}</td>
            <td class="border-soild border-2 border-black">{{$order->financial_status}}</td>
            <td class="border-soild border-2 border-black"> <a class="text-white bg-green-600 hover:bg-blue-800 rounded-lg text-l px-5 py-0.5 dark:bg-green-600 dark:hover:bg-blue-700" href="{{route("admin.order.edit",$order->id)}}">Edit</a></td>

             </tr>
            @endforeach
        </tbody>
    </table>
</div>
