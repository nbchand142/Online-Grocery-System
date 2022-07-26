<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderBillLivewire extends Component
{
    public $order_id;
    public function mount($order_id){
        $this->order_id = $order_id;
    }
    public function render()
    {
        $order = Order::where('user_id',auth()->user()->id)->where('id',$this->order_id)->first();
        return view('livewire.order-bill-livewire',['order'=>$order])->layout('layouts.guest');
    }
}
