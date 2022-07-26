<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
            <a href="{{route('admin.product.add')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Product</a>
        </div>
    </x-slot>

    <table class="border border-double border-black mx-auto mt-10 w-8/12">
        <thead>
            <tr>
            <th class="border-double border-2 bg-blue-600 border-black text-white">S.N.</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Name</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Category</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Price</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Description</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white">Stock</th>
            <th class="border-double border-2 bg-blue-600 border-black text-white" colspan="2">Action</th>

            </tr>
        </thead>
        <tbody class=" text-center">
             @foreach ($all_products as $product)
            <tr>
            <td class="border-double border-2 border-black">{{$product->id}}</td>
            <td class="border-double border-2 border-black">{{$product->name}}</td>
           <td class="border-double border-2 border-black">{{\App\Models\Category::find($product->category_id)->name}}</td>
            <td class="border-double border-2 border-black">{{$product->price}}</td>
            <td class="border-double border-2 border-black">{{$product->description}}</td>
            <td class="border-double border-2 border-black">{{$product->stock}}</td>
            <td class="border-double border-2 border-black"> <a class="text-white bg-green-600 hover:bg-blue-800 rounded-lg text-l px-5 py-0.5 dark:bg-green-600 dark:hover:bg-blue-700" href="{{route("admin.product.edit",$product->id)}}">Edit</a></td>
            <td class="border-double border-2 border-black"> <button class="text-white {{$product->active == '1' ? " dark:bg-red-500 dark:hover:bg-red-700 bg-red-700 hover:bg-red-800" : " dark:bg-green-500 dark:hover:bg-green-700 bg-green-700 hover:bg-green-800"}} rounded-lg text-l px-5 py-0.5" wire:click='toggleActivation({{$product->id}})'>{{$product->active == '1' ? "Deactivate" : "Activate"}}</button> </td>

             </tr>
            @endforeach
        </tbody>
    </table>
</div>
