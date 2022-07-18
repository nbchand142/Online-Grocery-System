<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class AdminProductEditLivewire extends Component
{
    public $product_id, $name, $category_id, $price, $description, $stock;
    function mount($product_id){
        $this->product_id = $product_id;
        $product = Product::find($this->product_id);
        $this->name = $product->name;
        $this->category_id = $product->category_id;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->stock = $product->stock;
    }
    function save(){
        $product = Product::find($this->product_id);
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
        return view('livewire.admin-product-edit-livewire');
    }
}
