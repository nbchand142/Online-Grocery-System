<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
            <a href="{{route('admin.product.add')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Product</a>
        </div>
    </x-slot>
                 
    <table class="border-double border border-slate-400 ...">
        <thead>
            <tr>
            <th class="border bg-blue-400 border-slate-500 ...">S.N.</th>
            <th class="border bg-blue-400 border-slate-500 ...">Name</th>
            <th class="border bg-blue-400 border-slate-500 ...">Category</th>
            <th class="border bg-blue-400 border-slate-500 ...">Price</th>
            <th class="border bg-blue-400 border-slate-500 ...">Description</th>
            <th class="border bg-blue-400 border-slate-500 ...">Stock</th>
            <th class="border bg-blue-400 border-slate-500 ..." colspan="2">Action</th>

            </tr>
        </thead>
        <tbody>
             @foreach ($all_products as $product)
            <tr>
            <td class="border border-slate-300 ...">{{$product->id}}</td>
            <td class="border border-slate-300 ...">{{$product->name}}</td>
            <td class="border border-slate-300 ...">{{$product->category_id}}</td>
            <td class="border border-slate-300 ...">{{$product->price}}</td>
            <td class="border border-slate-300 ...">{{$product->description}}</td>
            <td class="border border-slate-300 ...">{{$product->stock}}</td>
            <td class="border border-slate-300 ...">Deactivate </td>
            <td class="border border-slate-300 ..."> <a href="{{route("admin.product.edit",$product->id)}}">Edit</a></td>

             </tr>
            @endforeach
        </tbody>
    </table>
</div>