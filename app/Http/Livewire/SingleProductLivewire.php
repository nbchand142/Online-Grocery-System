<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SingleProductLivewire extends Component
{
    public $product_id;
    function mount($product_id){
        $this->product_id = $product_id;
    }
    public function render()
    {
        return view('livewire.single-product-livewire');
    }
}
 