<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;

class AdminCategoriesLivewire extends Component
{
    public function render()
    { $all_categories = Category::all();
        return view('livewire.admin-categories-livewire',['all_categories'=>$all_categories]);
    }
}
