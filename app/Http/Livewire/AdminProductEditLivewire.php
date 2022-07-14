<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminProductEditLivewire extends Component
{
    
    
    public $product_id;
function mount($product_id){

        $this->product_id = $product_id;
    }
    function save(){}
    
    public function render()
    {
        return view('livewire.admin-product-edit-livewire');
    }
}
