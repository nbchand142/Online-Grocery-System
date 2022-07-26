<?php

namespace App\Http\Livewire;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class AdminProductLivewire extends Component
{
    public $product_id;
    function toggleActivation($product_id){
        $product = Product::find($product_id);
        $product->active = $product->active==1 ? 0 : 1;
        $product->save();
    }

    public function render()
    {
        $all_products = Product::all();
        $categories = Category::all();

        return view('livewire.admin-product-livewire',
        ['all_products'=>$all_products ,
        'categories'=>$categories
    ]);

    }
}
