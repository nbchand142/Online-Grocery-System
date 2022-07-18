<div>
name:<input type="text"name="name"><br><br>
    category_id:<input type="text"name="category_id"><br><br>
    price:<input type="text"name="price"><br><br>
    description:<input type="text"name="description"><br><br>
    stock:<input type="text"name="stock"><br><br>
    active:<input type="text"name="active"><br><br>
   

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    @foreach ($all_products as $product)
        {{$product->name}}
    @endforeach
</div>
