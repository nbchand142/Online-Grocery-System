<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class AdminProductAddLivewire extends Component
{
    public $name, $category_id, $price, $description, $stock;
    function save(){
        $product = new Product();
        $product->name = $this->name;
        $product->category_id = $this->category_id;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->stock = $this->stock;
        $product->active = 1;
        $product->save();
        return redirect(route('admin.products'));
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin-product-add-livewire',['categories'=>$categories]);
    }
}
