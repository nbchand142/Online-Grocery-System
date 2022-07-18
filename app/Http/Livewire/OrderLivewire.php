<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class OrderLivewire extends Component
{
    public $order_id;
    function cancel($order_id){

            $this->order_id = $order_id;
        }
    public function render()
    {     
        return view('livewire.order-livewire');
    }
}
