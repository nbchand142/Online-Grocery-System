<?php

namespace App\Http\Livewire;
use App\Models\Order;
use App\Models\User;

use Livewire\Component;

class OrderLivewire extends Component
{
    public $order_id;
    function cancel($order_id){

            $this->order_id = $order_id;
         }
    public function render()
    {     $user_id = User::where('user_id',auth()->user()->id)();
        return view('livewire.order-livewire',['user_id'=>$user_id]);
    }
}
