<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class SingleProductLivewire extends Component
{
    public $product_id;
    public $cart;

    function mount($product_id){
        $this->product_id = $product_id;
        $this->cart = Cookie::get('cart');
        if($this->cart) $this->cart = json_decode($this->cart,true);
        else $this->cart=[];
    }

    public function addToCart(){
        $this->cart[] = $this->product_id;
        Cookie::queue("cart",json_encode($this->cart),36000);
    }

    public function removeFromCart(){
        $this->cart = array_diff($this->cart,[$this->product_id]);
        Cookie::queue("cart",json_encode($this->cart),36000);
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
