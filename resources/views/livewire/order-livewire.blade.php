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
            <th class="border bg-blue-100 border-slate-300 ...">S.N.</th>
            <th class="border bg-blue-100 border-slate-300 ...">User_id</th>
            <th class="border bg-blue-100 border-slate-300 ...">Subtotal</th>
            <th class="border bg-blue-100  border-slate-300 ...">Delivery_Charge</th>
            <th class="border bg-blue-100  border-slate-300 ...">Tax</th>
            <th class="border bg-blue-100  border-slate-300 ...">Discount</th>
            <th class="border bg-blue-100  border-slate-300 ...">Total</th>
            <th class="border bg-blue-100  border-slate-300 ...">Status</th>
            <th class="border bg-blue-100  border-slate-300 ...">Ordre_Note</th>
            <th class="border bg-blue-100  border-slate-300 ...">Financial_status</th>
            <th class="border bg-blue-100  border-slate-300 ..." colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>
             @foreach ($all_orders as $order)
            <tr>
            <th class="border border-slate-300 ...">{{$order->id}}</th>
            <th class="border border-slate-300 ...">{{$order->user_id}}</th>
            <th class="border border-slate-300 ...">{{$order->subtotal}}</th>
            <th class="border border-slate-300 ...">{{$order->delivery_charge}}</th>
            <th class="border border-slate-300 ...">{{$order->tax}}</th>
            <th class="border border-slate-300 ...">{{$order->discount}}</th>
            <th class="border border-slate-300 ...">{{$order->total}}</th>
            <th class="border border-slate-300 ...">{{$order->status}}</th>
            <th class="border border-slate-300 ...">{{$order->order_note}}</th>
            <th class="border border-slate-300 ...">{{$order->financial_status}}</th>
            <th class="border border-slate-300 ...">Deactivate</th>
            <th class="border border-slate-300 ..."><a href="{{route("admin.order.edit",$order->id)}}">Edit</a></th>

             </tr>
            @endforeach
        </tbody>
    </table>
</div>
