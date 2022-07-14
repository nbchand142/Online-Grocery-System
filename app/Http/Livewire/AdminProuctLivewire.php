<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminProuctLivewire extends Component
{
    public $id;
    function activate($id){
        $this->id = $id;
    }

        function deactivate($id){
            $this->id = $id;
        }


    public function render()
    {
        return view('livewire.admin-prouct-livewire');
    }
}
