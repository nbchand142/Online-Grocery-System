<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminOrderLivewire extends Component
{
    public $id;
    function cancel($id){
        $this->id = $id;
    }
        function dispatch($id){
            $this->id = $id;
        }
        
        function delivered($id){
            $this->id = $id;

        }


    public function render()
    {
        return view('livewire.admin-order-livewire');
    }
}
