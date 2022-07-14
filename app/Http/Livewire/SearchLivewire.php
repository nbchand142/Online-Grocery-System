<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchLivewire extends Component
{
    public $keyword;
    function mount($keyword){
        $this->keyword = $keyword;
    }
    
    public function render()
    {
        return view('livewire.search-livewire');
    }
}
