<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminUserLivewire extends Component
{
    public $id;
    function suspend($id)
    {
        $this->id = $id;
    }
function unsuspend($id){
    $this->id = $id;

}



    public function render()
    {
        return view('livewire.admin-user-livewire');
    }
}
