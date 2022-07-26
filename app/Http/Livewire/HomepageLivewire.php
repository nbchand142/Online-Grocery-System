<?php

namespace App\Http\Livewire;
use App\Models\Category;

use App\Models\Product;
use Livewire\Component;

class HomepageLivewire extends Component
{
    public function render()
    {
        $products = Product::where('active','1')->get();
        $categories = Category::all();
        return view('livewire.homepage-livewire',[
            "categories"=>$categories,
            "products"=>$products
        ])->layout('layouts.storefront');


    }
}
