<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductEditLivewire extends Component
{
    public $order_id;
function mount ($order_id){
        $this->order_id = $order_id;
    }
    function save(){}
    public function render()
    {
        return view('livewire.product-edit-livewire');
    }
}
