<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminOrderLivewire extends Component
{
    public$order_id;
    function cancel($order_id){
        $this->order_id = $order_id;
    }
        function dispatch($order_id){
            $this->id = $order_id;
        }
        
        function delivered($order_id){
            $this->order_id = $order_id;

        }


    public function render()
    {
        return view('livewire.admin-order-livewire');
    }
}
