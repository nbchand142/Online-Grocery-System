<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    @foreach ($all_products as $product)
        {{$product->name}}
    @endforeach
    
</div>
