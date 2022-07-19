<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class AdminOrderEditLivewire extends Component
{

    public $order_id;

    function mount ($order_id){
        $this->order = $order_id;
        $order = order::find($this->order_id);
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
        $order = order::find($this->order_id);
        $order->subtotal = $this->subtotal;
        $order->delivery_charge = $this->delivery_charge;
        $order->tax = $this->tax;
        $order->discount = $this->discount;
        $order->total = $this->total;
        $order->status = $this->status;
        $order->order_note = $this->order_note;
        $order->financial_status = $this->financial_status;

        $order->active = 1;
        $order->save();

        return redirect(route('admin.order'));
    }

    public function render(){
        return view('livewire.admin-order-edit-livewire');
    }
}
