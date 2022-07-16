<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminUserEditLivewire extends Component
{

    public $user_id;
    function mount($user_id){
        $this->user_id = $user_id;
    }
    function save(){}

    public function render()
    {
        return view('livewire.admin-user-edit-livewire');
    }
}
