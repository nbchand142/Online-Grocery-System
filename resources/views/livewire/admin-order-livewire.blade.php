<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('orders') }}
            </h2>
            <a href="{{route('admin.order')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit order</a>
        </div>
    </x-slot>
                 
        <table class="border-double border border-slate-400 ...">
        <thead>
            <tr>
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
             @foreach ($all_order as $order)
            <tr>

            <th class="border border-slate-300 ...">{{$order->User_id}}</th>
            <th class="border border-slate-300 ...">{{$order->Subtotal}}</th>
            <th class="border border-slate-300 ...">{{$order->Delivery_Charge}}</th>
            <th class="border border-slate-300 ...">{{$order->Tax}}</th>
            <th class="border border-slate-300 ...">{{$order->Discount}}</th>
            <th class="border border-slate-300 ...">{{$order->Total}}</th>
            <th class="border border-slate-300 ...">{{$order->Status}}</th>
            <th class="border border-slate-300 ...">{{$order->Ordre_Note}}</th>
            <th class="border border-slate-300 ...">{{$order->Financial_status}}</th>
            <th class="border border-slate-300 ...">Deactivate</th>
            <th class="border border-slate-300 ..."><a href="{{route("admin.order.edit",$order->id)}}">Edit</a></th>

             </tr>
            @endforeach
        </tbody>
    </table>
</div>