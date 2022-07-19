<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Livewire\Component;

class AdminCategoryAddLivewire extends Component
{
    public $name;
    public function save(){
        $category = new Category();
        $category->name = $this->name;
        $category->save();
        return redirect(route('admin.categories'));
    }
    public function render()
    {
        return view('livewire.admin-category-add-livewire');
    }
}
