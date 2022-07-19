<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;

class CategoriesLivewire extends Component
{ 
    public $category_id;
     function mount($category_id)
     {
          $this->category_id = $category_id;
    }

    public function render()
    {
        $all_categories = category::all();
        return view('livewire.categories-livewire',['all_categories'=>$all_categories]);
    }
}
