<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class SearchLivewire extends Component
{
    public $keyword;
    function mount(){
        $this->keyword = Request::get('q');
    }

    public function render()
    {
        $products = Product::where('name','like','%'.$this->keyword.'%')
                            ->orWhere('description','like','%'.$this->keyword.'%')
                            ->get();
        return view('livewire.search-livewire',['products'=>$products])->layout('layouts.storefront');
    }
}
