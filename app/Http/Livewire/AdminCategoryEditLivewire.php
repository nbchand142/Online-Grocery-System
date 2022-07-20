<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;

class AdminCategoryEditLivewire extends Component
{  public $category_id, $name;
        function mount($category_id){
             $this->category_id = $category_id;
             $category = Category::find($this->category_id);
            $this->name = $category->name;
    }

    function save(){
        $category = Category::find($this->category_id);
        $category->name =$this->name;
        $category->save();

        return redirect(route('admin.categories'));

    }

    public function render()
    {$all_categories = Category::all();
        return view('livewire.categories-livewire',['all_categories'=>$all_categories]);
    }
}
