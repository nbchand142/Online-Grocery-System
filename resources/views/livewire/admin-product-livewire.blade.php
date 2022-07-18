<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
            <a href="{{route('admin.product.add')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Product</a>
        </div>
    </x-slot>
    <table>
        <tr>
            <td>Product Name</td>
            <td>Product Price</td>
            <td>Product Description</td>
            <td>Product Stock</td>
            <td>Action</td>
        </tr>
        @foreach ($all_products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->stock}}</td>
                <td>Deactivate | <a href="{{route("admin.product.edit",$product->id)}}">Edit</a></td>
            </tr>
        @endforeach
    </table>
</div>

