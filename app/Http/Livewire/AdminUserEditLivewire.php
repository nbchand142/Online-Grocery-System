<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class AdminUserEditLivewire extends Component
{

    public $user_id;
    function mount($user_id){
        $this->user_id = $user_id;
        $user = User::find($this->user_id);
        $this->name = $user->name;

    }
    function save(){
        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->save();
        return redirect(route('admin.users'));
    }

    public function render()
    {
        return view('livewire.admin-user-edit-livewire');
    }
}
