<?php

namespace App\Http\Livewire;
use App\Models\Category;

use App\Models\Product;
use Livewire\Component;

class HomepageLivewire extends Component
{
    public function render()
    {
        $product = Product::where('active','1')->get();
        $categories = Category::all();
        return view('livewire.homepage-livewire',[
            "categories"=>$categories,
            "product"=>$product
        ])->layout('layouts.storefront');


    }
}
