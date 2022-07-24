<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('orders') }}
            </h2>
        
        </div>
    </x-slot>
                 
        <table class="border-double border border-slate-400 ...">
        <thead>
            <tr>
            <th class="border bg-blue-400 border-slate-500 ...">S.N.</th>
            <th class="border bg-blue-400 border-slate-500 ...">User</th>
            <th class="border bg-blue-400 border-slate-500 ...">Subtotal</th>
            <th class="border bg-blue-400  border-slate-500 ...">Delivery_Charge</th>
            <th class="border bg-blue-400  border-slate-500 ...">Tax</th>
            <th class="border bg-blue-400  border-slate-500 ...">Discount</th>
            <th class="border bg-blue-400  border-slate-500 ...">Total</th>
            <th class="border bg-blue-400  border-slate-500 ...">Status</th>
            <th class="border bg-blue-400  border-slate-500 ...">Ordre_Note</th>
            <th class="border bg-blue-400  border-slate-500 ...">Financial_status</th>
            <th class="border bg-blue-400  border-slate-500 ..." colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>
             @foreach ($all_orders as $order)
            <tr>
            <td class="border border-slate-300 ...">{{$order->id}}</td>
            <td class="border border-slate-300 ...">{{\App\Models\User::find($order->user_id)->name}}</td>
            <td class="border border-slate-300 ...">{{$order->subtotal}}</td>
            <td class="border border-slate-300 ...">{{$order->delivery_charge}}</td>
            <td class="border border-slate-300 ...">{{$order->tax}}</td>
            <td class="border border-slate-300 ...">{{$order->discount}}</td>
            <td class="border border-slate-300 ...">{{$order->total}}</td>
            <td class="border border-slate-300 ...">{{$order->status}}</td>
            <td class="border border-slate-300 ...">{{$order->order_note}}</td>
            <td class="border border-slate-300 ...">{{$order->financial_status}}</td>
            <td class="border border-slate-300 ...">Deactivate</td>
            <td class="border border-slate-300 ..."><a href="{{route("admin.order.edit",$order->id)}}">Edit</a></td>

             </tr>
            @endforeach
        </tbody>
    </table>
</div>