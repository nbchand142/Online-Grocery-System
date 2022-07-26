<div>
    @foreach($products as $product)
        {{$product->name}} was sold {{$quantity[$product->id]}} times<br/>
    @endforeach

    Rs {{$order_total->all_total}} total sales today!
</div>
