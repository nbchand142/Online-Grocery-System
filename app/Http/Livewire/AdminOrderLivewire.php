<?php

namespace App\Http\Livewire;
use App\Models\Order;
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
    {       $all_order = Order::all();
        return view('livewire.admin-order-livewire',['all_order'=>$all_order]);
    }
}
