<?php

namespace App\Http\Livewire;

use App\Models\LineItem;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class DashboardLivewire extends Component
{
    public function render()
    {
        $sales_today = LineItem::whereDate('created_at',date('Y-m-d'))->get();
        $each_product_id=[];
        foreach($sales_today as $today){
            $each_product_id[$today->product_id] = isset($each_product_id[$today->product_id]) ? $each_product_id[$today->product_id]+1 : 1;
        }
        $products = Product::whereIn('id',array_keys($each_product_id))->get();
        $total_sales = Order::selectRaw('SUM(total) as all_total')->whereDate('created_at',date('Y-m-d'))->first();
        
        
        return view('livewire.dashboard-livewire',['products'=>$products, 'quantity'=>$each_product_id,'order_total'=>$total_sales,]);
    }
}
