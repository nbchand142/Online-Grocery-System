<?php

namespace App\Http\Livewire;
use App\Models\Category;

use App\Models\Product;
use Livewire\Component;

class HomepageLivewire extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.homepage-livewire',["products"=>$products])->layout('layouts.storefront');
        
        
        $categories = Category::all();
        return view('livewire.homepage-livewire',["categories"=>$categories])->layout('layouts.storefront');
     
        
    }
}
