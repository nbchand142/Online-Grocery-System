<?php

namespace App\Http\Livewire;
use App\Models\Order;
use App\Models\User;

use Livewire\Component;

class AdminOrderEditLivewire extends Component
{

    public $order_id,$user_id, $subtotal, $delivery_charge, $tax, $discount, $total, $status,
     $order_note, $financial_status;

    function mount ($order_id){
        $this->order = $order_id;
        $order = Order::find($this->order_id);
        $this->user_id = $order->user_id;
        $this->subtotal = $order->subtotal;
        $this->delivery_charge = $order->delivery_charge;
        $this->tax = $order->tax;
        $this->discount = $order->discount;
        $this->total = $order->total;
        $this->status = $order->status;
        $this->order_note = $order->order_note;
        $this->financial_status = $order->financial_status;

    }

    function save(){
        $order = Order::find($this->order_id);
        $this->user_id = $order->user_id;
        $order->subtotal = $this->subtotal;
        $order->delivery_charge = $this->delivery_charge;
        $order->tax = $this->tax;
        $order->discount = $this->discount;
        $order->total = $this->total;
        $order->status = $this->status;
        $order->order_note = $this->order_note;
        $order->financial_status = $this->financial_status;
        $order->save();

        return redirect(route('admin.order'));
    }

    public function render(){
        $user = User::all();
        return view('livewire.admin-order-edit-livewire',['user'=>$user]);
    }
}
