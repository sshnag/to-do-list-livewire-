<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public $user;
    public function mount($id){
        $this->user=User::find($id);
    }
    public function render()
    {
        return view('livewire.users.user-detail');
    }
}
