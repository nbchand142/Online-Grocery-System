<?php

namespace App\Http\Livewire;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CategoriesLivewire extends Component
{
    public $category_id;
     function mount($category_id)
     {
          $this->category_id = $category_id;
    }

    public function render()
    {
        $products = Product::where('category_id',$this->category_id)->get();
        $category = Category::find($this->category_id);
        return view('livewire.categories-livewire',[
            'category'=>$category,
            'products'=>$products,
            ])->layout('layouts.storefront');
    }
}
