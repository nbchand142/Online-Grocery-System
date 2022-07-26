<?php

namespace App\Http\Livewire;

use App\Models\LineItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;

class CartLivewire extends Component
{
    public $cart;

    public $delivery_address, $order_note;

    function mount(){
        $this->cart = Cookie::get('cart');
        if($this->cart) $this->cart = json_decode($this->cart,true);
        else $this->cart=[];
    }
    public function confirmOrder(){
        if(!auth()->user()){
            return redirect(route('login'));
        }
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $subtotal = 0;
        $order->subtotal = $subtotal;
        $order->delivery_charge = 0;
        $order->tax = 0;
        $order->discount = 0;
        $order->total = $order->subtotal + $order->tax + $order->delivery_charge - $order->discount;
        $order->status = "confirmed";
        $order->financial_status = "unpaid";
        $order->order_note = $this->order_note;
        $order->delivery_address = $this->delivery_address;
        $order->save();

        $products = Product::whereIn('id',$this->cart)->get();
        foreach($products as $product){
            $line = new LineItem();
            $line->product_id = $product->id;
            $line->order_id = $order->id;
            $line->quantity = 1;
            $line->price_per_item = $product->price;
            $line->total = $line->price_per_item * $line->quantity;
            $subtotal = $subtotal + $line->total;
            $line->save();

            $product->stock = $product->stock-$line->quantity;
            $product->save();
        }

        $order->subtotal = $subtotal;
        $order->total = $order->subtotal + $order->tax + $order->delivery_charge - $order->discount;
        $order->save();

        return redirect(route('my-orders'));
    }
    public function removeFromCart($id){
        $this->cart = array_diff($this->cart,[$id]);
        Cookie::queue("cart",json_encode($this->cart),36000);
    }
    public function render(){
        $products = Product::whereIn('id',$this->cart)->get();
        return view('livewire.cart-livewire',['products'=>$products])->layout('layouts.storefront');
    }
}
