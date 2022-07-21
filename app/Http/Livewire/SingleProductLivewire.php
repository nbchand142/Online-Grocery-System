<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class SingleProductLivewire extends Component
{
    public $product_id;
    function mount($product_id){
        $this->product_id = $product_id;
    }
    public function render()
    {
        $product = Product::find($this->product_id);
        $similar_products = Product::where('category_id',$product->category_id)->limit(5)->get();
        return view('livewire.single-product-livewire',[
            'product'=>$product,
            'similar_products'=>$similar_products,
        ])->layout('layouts.storefront');
    }
}
