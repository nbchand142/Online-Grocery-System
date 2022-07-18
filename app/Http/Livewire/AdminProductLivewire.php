<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminProductLivewire extends Component
{
    public $product_id;
    function activate($product_id){
        $this->product_id = $product_id;
    }

    function deactivate($product_id){
        $this->product_id = $product_id;
    }

    public function render()
    {
        $all_products = Product::all();
        return view('livewire.admin-prouct-livewire',['all_products'=>$all_products]);
    }
}
