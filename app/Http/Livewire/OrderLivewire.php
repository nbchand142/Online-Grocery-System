<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderLivewire extends Component
{
    public $id;
    function cancel($id){

            $this->id = $id;
        }

    public function render()
    {
        return view('livewire.order-livewire');
    }
}
