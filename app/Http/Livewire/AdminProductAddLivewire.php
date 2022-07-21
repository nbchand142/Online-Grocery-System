<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminProductAddLivewire extends Component
{
    use WithFileUploads;

    public $name, $category_id, $price, $description, $stock, $images;
    function save(){

        $product = new Product();
        $product->name = $this->name;
        $product->category_id = $this->category_id;
        $product->price = $this->price;
        $product->description = $this->description;
        $product->stock = $this->stock;
        $product->active = 1;
        $product->save();

        foreach($this->images as $image){
            $uploaded = $image->store('product_image','public');

            // $img = new ProductImage();
            // $img->product_id = $product->id;
            // $img->img_src = 'storage/'.$uploaded;
            // $img->save();

            $product->image()->create(['img_src'=>'storage/'.$uploaded]);
        }

        return redirect(route('admin.products'));
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin-product-add-livewire',['categories'=>$categories]);
    }
}
