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
        return view('livewire.single-product-livewire',['product'=>$product])->layout('layouts.storefront');
    }
}
 