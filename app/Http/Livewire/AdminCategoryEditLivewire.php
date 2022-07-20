<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;

class AdminCategoryEditLivewire extends Component
{  public $product_id, $name;
        function mount($product_id){
             $this->product_id = $product_id;
             $category = Category::find($this->category_id);
            $this->name = $category->name;
    }

    function save(){
        $category = Category::find($this->category_id);
        $this->name = $category->name;
        $category->save();

        return redirect(route('admin.categories'));

    }

    public function render()
    {
        
        return view('livewire.admin-category-edit-livewire');
    }
}
