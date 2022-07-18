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
<<<<<<< HEAD
    {
        
=======
    {     
>>>>>>> de1ecf87e6f7acf7268617c48a7f9fa153ac91ea
        return view('livewire.order-livewire');
    }
}
