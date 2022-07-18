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
<<<<<<< HEAD
    {
        $all_order = order::all();
        return view('livewire.admin-order-livewire');
=======
    {       $all_order = Order::all();
        return view('livewire.admin-order-livewire',['all_order'=>$all_order]);
>>>>>>> de1ecf87e6f7acf7268617c48a7f9fa153ac91ea
    }
}
